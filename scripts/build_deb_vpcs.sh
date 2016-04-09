#!/bin/bash
set -xv
CONTROL="/usr/src/unetlab/debian/vpcs_control.template"
SRC_DIR="/usr/src/unetlab"
PATCH_DIR="/usr/src/unetlab/patch"
ARCH=$(cat ${CONTROL} | grep Architecture | cut -d: -f2 | sed 's/ //')
BUILD_DIR="/build"
CONTROL_DIR="$(mktemp -dt)"
COMP_DIR="$(mktemp -dt)"
DATA_DIR="$(mktemp -dt)"
VERSION="$(cat ${SRC_DIR}/VERSION | cut -d- -f1)"
RELEASE="$(cat ${SRC_DIR}/VERSION | cut -d- -f2)"

cat ${CONTROL} | sed "s/%VERSION%/${VERSION}/" | sed "s/%RELEASE%/${RELEASE}/" > ${CONTROL_DIR}/control

# vpcs

cd ${COMP_DIR}
wget "https://sourceforge.net/code-snapshots/svn/v/vp/vpcs/code/vpcs-code-126-trunk.zip"
unzip vpcs-code-126-trunk.zip
cd vpcs-code-126-trunk
patch -p 0 < ${PATCH_DIR}/vpcs-trunk-126.patch
cd src
make -f Makefile.linux

mkdir -p  ${DATA_DIR}/opt/vpcsu/bin
cp -a vpcs ${DATA_DIR}/opt/vpcsu/bin/
chown -R root:unl ${DATA_DIR}/opt/vpcsu
chmod 777 ${DATA_DIR}/opt/vpcsu/bin/vpcs

# Building the package
cd ${DATA_DIR}
tar czf data.tar.gz *
find -type f -exec md5sum {} \; >> ${CONTROL_DIR}/md5sums
echo 2.0 > ${CONTROL_DIR}/debian-binary
cd ${CONTROL_DIR}
tar czf control.tar.gz md5sums control 
#cd ${SRC_DIR}
mkdir -p ${BUILD_DIR}/apt/pool/trusty/u/unetlab-vpcs
ar -cr ${BUILD_DIR}/apt/pool/trusty/u/unetlab-vpcs/unetlab-vpcs_${VERSION}-${RELEASE}_${ARCH}.deb ${CONTROL_DIR}/debian-binary ${CONTROL_DIR}/control.tar.gz ${DATA_DIR}/data.tar.gz
rm -rf ${CONTROL_DIR} ${DATA_DIR}