<?php
# vim: syntax=php tabstop=4 softtabstop=0 noexpandtab laststatus=1 ruler

/**
 * html/includes/messages_en.php
 *
 * English messages for UNetLab.
 *
 * LICENSE:
 *
 * This file is part of UNetLab (Unified Networking Lab).
 *
 * UNetLab is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * UNetLab is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with UNetLab. If not, see <http://www.gnu.org/licenses/>.
 *
 * @author Andrea Dainese <andrea.dainese@gmail.com>
 * @copyright 2014-2015 Andrea Dainese
 * @license http://www.gnu.org/licenses/gpl.html
 * @link http://www.unetlab.com/
 * @version 20150527
 */

/***************************************************************************
 * Return Codes (0-127)
 ***************************************************************************/
$messages[1] = '必须从CLI终端执行 (1).';
$messages[2] = '必须使用root账号登陆 (2).';
$messages[3] = '丢失参数 -a(3).';
$messages[4] = '丢失参数 -T (4).';
$messages[5] = '参数 -T 无效 (5).';
$messages[6] = '没有找到文件(6).';
$messages[7] = '不是有效的Lab文件 (7).';
$messages[8] = '参数 -D 无效 (8).';
$messages[9] = '参数 -a 无效 (9).';
$messages[10] = '线缆不存在 (10).';
$messages[11] = '线缆创建失败 (11).';
$messages[12] = '设备启动失败 (12).';
$messages[13] = '无法删除设备文件 (13).';
$messages[14] = '不能创建用户名 (14).';

/***************************************************************************
 * Classes
 ***************************************************************************/
// __interfc.php (10000-19999)
$messages[10000] = '无法创建接口，无效参数 (10000).';
$messages[10001] = '无法创建接口，接口类型无效 (10001).';
$messages[10002] = '接口名称无效，已忽略 (10002).';
$messages[10003] = '属性被忽略，接口ID无效(10003).';
$messages[10004] = '属性被忽略, 不需要 remote_id/remote_if (10004).';
$messages[10005] = '属性被忽略, 不需要线缆ID(10005).';
$messages[10006] = '属性被忽略, invalid interface_remote_id (10006).';
$messages[10007] = '属性被忽略, invalid interface_remote_id (10007).';
$messages[10008] = '接口没有被修改(10008).';

// __lab.php (20000-29999)
$messages[20000] = '新建Lab, 文件没有找到 (20000).';
$messages[20001] = '不能加载Lab, 文件名无效 (20001).';
$messages[20002] = '不能加载Lab, 文件夹无效 (20002).';
$messages[20003] = '不能加载Lab, XML文件无效 (20003).';
$messages[20004] = '不能加载Lab, Lab名称属性无效 (20004).';
$messages[20005] = '不能加载Lab, Lab名称属性无效 (20005).';
$messages[20006] = '属性被忽略, Lab描述无效 (20006).';
$messages[20007] = '属性被忽略, Lab作者信息无效 (20007).';
$messages[20008] = '属性被忽略, Lab版本信息无效 (20008).';
$messages[20009] = '线缆被忽略, 线缆无效 (20009).';
$messages[20010] = '设备被忽略, 无效设备 (20010).';
$messages[20011] = 'Lab_id属性不存在, 已生成新Lab_id (20011).';
$messages[20012] = 'Lab_id属性无效, 已生成新Lab_id (20012).';
$messages[20013] = '设备插槽被忽略, 无效插槽 (20013).';
$messages[20014] = '设备接口被忽略, 以太模块无效 (20014).';
$messages[20015] = '设备接口被忽略, 串口模块无效 (20015).';
$messages[20016] = '接口被忽略, 无效的接口类型 (20016).';
$messages[20017] = '不能添加新图片 (20017).';
$messages[20018] = '没有找到当前Lab的拓扑图片文件 (20018).';
$messages[20019] = '当前Lab不能编辑拓扑图片文件 (20019).';
$messages[20020] = '拓扑图片文件被忽略, 无效的图片类型 (20020).';
$messages[20021] = '不能为Lab添加线缆 (20021).';
$messages[20022] = '不能为Lab添加设备 (20022).';
$messages[20023] = '在当前Lab中没有找到线缆 (20023).';
$messages[20024] = '在当前Lab中没有找到设备 (20024).';
$messages[20025] = '在当前Lab中不能编辑线缆 (20025).';
$messages[20026] = '在当前Lab中不能编辑设备 (20026).';
$messages[20027] = '文件不能写入到磁盘 (20027).';
$messages[20028] = '不能删除原有Lab文件 (20028).';
$messages[20029] = '不能移动虚拟内存(swap)中的Lab文件 (20029).';
$messages[20030] = 'Lab没有被修改 (20030).';
$messages[20031] = 'Lab已保存 (20031).';
$messages[20032] = '设备不能连接，无效的设备ID(20032).';
$messages[20033] = '设备不能连接，无效的线缆ID (20033).';
$messages[20034] = '不能连接设备 (20034).';
$messages[20035] = '不能断开设备连接 (20035).';
$messages[20036] = '在当前Lab中不能保存启动配置文件 (20036).';
$messages[20037] = '配置文件无效，不能加载 (20037).';

// __network.php (30000-39999)
$messages[30000] = '不能添加线缆, 存在无效参数 (30000).';
$messages[30001] = '不能添加线缆, 线缆类型无效 (30001).';
$messages[30002] = '属性被忽略, 线缆名称无效 (30002).';
$messages[30003] = '属性被忽略, invalid network_left (30003).';
$messages[30004] = '属性被忽略, invalid network_top (30004).';
$messages[30005] = '属性被忽略, 线缆类型无效 (30005).';
$messages[30006] = '线缆已被修改 (30006).';
$messages[30007] = '属性被忽略, 线缆数量无效 (30007).';
$messages[30008] = '不能编辑线缆, 线缆数量无效 (30008).';

// __node.php (40000-49999)
$messages[40000] = '不能添加设备, 存在无效参数 (40000).';
$messages[40001] = '不能添加设备, 设备类型无效 (40001).';
$messages[40002] = '不能添加设备, 设备模板文件无效 (40002).';
$messages[40003] = '属性被忽略, 设备配置无效 (40003).';
$messages[40004] = '属性被忽略, 延时启动参数无效 (40004).';
$messages[40005] = '属性被忽略, 设备图标无效 (40005).';
$messages[40006] = '属性被忽略, 设备IOS文件无效 (40006).';
$messages[40007] = '属性被忽略, invalid node_left (40007).';
$messages[40008] = '属性被忽略, 设备名称无效 (40008).';
$messages[40009] = '属性被忽略, 设备运存(RAM)无效 (40009).';
$messages[40010] = '属性被忽略, invalid node_top (40010).';
$messages[40011] = '属性被忽略, 设备nvram无效 (40011).';
$messages[40012] = '属性被忽略, 设备以太模块无效 (40012).';
$messages[40013] = '属性被忽略, 设备串口模块无效 (40013).';
$messages[40014] = '属性被忽略, 设备IDLE值无效 (40014).';
$messages[40015] = '属性被忽略, 设备CPU值无效 (40015).';
$messages[40016] = '设备没有被修改 (40016).';
$messages[40017] = '不能连接接口, 接口ID无效 (40017).';
$messages[40018] = '不能连接接口, 接口ID不存在 (40018).';
$messages[40019] = '不能添加接口, 设备类型无效 (40019).';
$messages[40020] = '不能添加以太接口 (40020).';
$messages[40021] = '不能添加接口, 设备模板文件无效(40021).';
$messages[40022] = '不能添加串口(40022).';
$messages[40023] = '不能在非Dynamips设备上面配置插槽 (40023).';
$messages[40024] = '不能配置插槽, 插槽类型无效 (40024).';
$messages[40025] = '无效的IOS设备文件 (40025).';
$messages[40026] = '属性被忽略, 设备UUID参数无效 (40026).';
$messages[40027] = '属性被忽略, 设备console参数无效 (40027).';

// __picture.php (50000-59999)
$messages[50000] = '不能添加拓扑图片文件, 无效参数 (50000).';
$messages[50002] = '不能添加拓扑图片文件, 图片数据无效 (50002).';
$messages[50003] = '属性被忽略, 图片名称无效 (50003).';
$messages[50004] = '不能添加拓扑图片文件, 图片类型无效 (50004).';
$messages[50005] = '属性被忽略, 图片路径无效 (50005).';
$messages[50006] = '拓扑图片文件没有被上传 (50006).';

/***************************************************************************
 * Functions and others
 ***************************************************************************/
// api.php (60000-69999)
$messages[60000] = 'Lab不存在 (60000).';
$messages[60001] = '获取系统状态 (60001).';
$messages[60002] = '成功获取线缆类型 (60002).';
$messages[60003] = '成功获取设备模板 (60003).';
$messages[60003] = '成功获取设备模板 (60003).';
$messages[60004] = '成功获取线缆 (60004).';
$messages[60005] = '成功获取线缆 (60005).';
$messages[60006] = '线缆已被添加到Lab中 (60006).';
$messages[60007] = '成功获取路径 (60007).';
$messages[60008] = '请求的文件夹不存在 (60008).';
$messages[60009] = '请求的文件夹无效 (60009).';
$messages[60010] = '不能删除root文件夹 (60010).';
$messages[60011] = '删除文件夹失败 (60011).';
$messages[60012] = '文件夹已被删除 (60012).';
$messages[60013] = '文件夹已经存在 (60013).';
$messages[60014] = '创建文件夹成功 (60014).';
$messages[60015] = '创建文件夹失败 (60015).';
$messages[60016] = 'Lab已经存在 (60016).';
$messages[60017] = '不能添加Lab，存在无效参数 (60017).';
$messages[60018] = '不能添加Lab，主文件夹不存在 (60018).';
$messages[60019] = '成功添加Lab (60019).';
$messages[60020] = '成功加载Lab (60020).';
$messages[60021] = '删除Lab失败 (60021).';
$messages[60022] = 'Lab删除完成 (60022).';
$messages[60023] = 'Lab已保存 (60023).';
$messages[60024] = '获取所有Lab的线缆和串口终端 (60024).';
$messages[60025] = '成功获取设备 (60025).';
$messages[60026] = '成功获取设备 (60026).';
$messages[60027] = '请求无效 (60027).';
$messages[60028] = '成功获取拓扑图片文件 (60028).';
$messages[60029] = '拓扑图片文件没有找到 (60029).';
$messages[60030] = '成功获取设备接口 (60030).';
$messages[60031] = '无效设备模板文件或文件不存在 (60031).';
$messages[60032] = '成功获取设备模板 (60032).';
$messages[60033] = '请求的模板文件无效 (60033).';

// Text (70000-79999)
$messages[70000] = '设备命名';
$messages[70001] = '设备图标';
$messages[70002] = 'IOS文件';
$messages[70003] = 'CPU';
$messages[70004] = '运存(MB)';
$messages[70005] = '以太接口';
$messages[70006] = '延时启动(s)';
$messages[70007] = 'Console类型';
$messages[70008] = 'UUID';
$messages[70009] = 'Idle值';
$messages[70010] = 'NVRAM';
$messages[70011] = '运存(MB)';
$messages[70012] = '以太接口数量';
$messages[70013] = '启动配置';
$messages[70014] = '延时启动(s)';
$messages[70015] = 'Console类型';
$messages[70016] = '插槽';
$messages[70017] = '串口模块 (4接口/1)';
$messages[70018] = '以太模块 (4接口/1)';

// CLI (80000-89999)
$messages[80009] = '添加用户名失败 (80009).';
$messages[80010] = '创建主目录失败 (80010).';
$messages[80011] = 'SETGID设置失败 (80011).';
$messages[80012] = '设置用户/组失败(80012).';
$messages[80013] = '无法链接配置文件 (80013).';
$messages[80014] = 'IOS没有找到 (80014).';
$messages[80015] = 'QEMU Arch is not set (80015).';
$messages[80016] = 'QEMU没有找到 (80016).';
$messages[80017] = '无效的QEMU网卡驱动 (80017).';
$messages[80018] = '无效的QEMU自定义选项 (80018).';
$messages[80020] = '不能添加线缆, 线缆类型无效 (80020).';
$messages[80021] = '不能添加线缆, 存在无效参数 (80021).';
$messages[80022] = '不能添加线缆, 线缆名称已存在 (80022).';
$messages[80023] = '添加OVS线缆失败 (80023).';
$messages[80024] = '删除OVS线缆失败 (80024).';
$messages[80025] = '删除直通线失败 (80025).';
$messages[80026] = '添加直通线失败(80026).';
$messages[80027] = '直通线激活失败 (80027).';
$messages[80028] = '设置直通线的group_fwd_mask失败(80028).';
$messages[80029] = '线缆没有找到 (80029).';
$messages[80030] = '不能添加直通线接口 (80030).';
$messages[80031] = '不能添加OVS接口 (80031).';
$messages[80032] = '添加TAP接口失败 (80032).';
$messages[80033] = 'TAP接口激活失败 (80033).';
$messages[80034] = '删除TAP接口失败 (80034).';
$messages[80035] = '设备停止失败 (80035).';
$messages[80036] = '删除权限失败 (80036).';
$messages[80037] = '创建运行目录失败 (80037).';
$messages[80038] = '不支持设备类型 (80038).';
$messages[80039] = 'IOL License没有找到 (80039).';
$messages[80040] = '不能链接到IOL license (80040).';
$messages[80041] = '无法锁定运行路径 (80041).';
$messages[80042] = '无法解锁运行路径 (80042).';
$messages[80043] = '不能链接到CDROM (80043).';
$messages[80044] = '不能写入运行路径 (80044).';
$messages[80045] = '无法创建克隆链接 (80045).';
$messages[80046] = '打开CMD命令行失败 (80046).';
$messages[80047] = '修改目录失败 (80047).';
$messages[80048] = '启动所有设备 (80048).';
$messages[80049] = '启动设备 (80049).';
$messages[80050] = '停止所有设备 (80050).';
$messages[80051] = '停止设备 (80051).';
$messages[80052] = '清除所有设备 (80052).';
$messages[80053] = '清除设备 (80053).';
$messages[80054] = 'Dynamips没有找到 (80054).';
$messages[80055] = '设置直通线时间失败 (80055).';
$messages[80056] = '桥接接口不存在 (80056).';
$messages[80057] = '导出所有设备 (80057).';
$messages[80058] = '导出设备 (80058).';
$messages[80059] = '无法删除tmp文件 (80059).';
$messages[80060] = 'iou导出失败 (80060).';
$messages[80061] = '设备不支持配置导出 (80061).';
$messages[80062] = '配置文件没有找到 (80062).';
$messages[80063] = '保存启动配置文件失败 (80063).';
$messages[80064] = '不能开打tmp文件 (80064).';
$messages[80065] = '不能读取tmp文件 (80065).';
$messages[80066] = 'NVRAM文件没有找到 (80066).';
$messages[80067] = '无法转存储启动配置 (80067).';
$messages[80068] = '无法打开启动配置文件 (80068).';
$messages[80069] = '无法写入启动配置文件 (80069).';
$messages[80070] = '删除tmp文件失败 (80070).';

// Authentication (90000-99999)
$messages[90001] = '用户登录失败 (90001).';
$messages[90002] = '用户已加载 (90002).';
$messages[90003] = '数据库错误 (90003).';
$messages[90004] = '创建 "user" 表 (90004).';
$messages[90005] = '创建 "users" 表失败 (90005).';
$messages[90006] = '数据库更新失败 (90006).';
$messages[90007] = '创建 "permissions" 表 (90007).';
$messages[90008] = '创建 "permissions" 表失败 (90008).';
$messages[90009] = '创建 "pods" 表 (90009).';
$messages[90010] = '创建 "pods" 表失败 (90010).';
$messages[90011] = '没有设置用户名 (90011).';
$messages[90012] = '没有设置密码 (90012).';
$messages[90013] = '用户已登录 (90013).';
$messages[90014] = '登陆失败: 无效的用户名或密码 (90014).';
$messages[90015] = '数据库损坏 (90015).';
$messages[90016] = '无法设置数据用户的到期时间 (90016).';
$messages[90017] = '无法设置数据库用户的cookie (90017).';
$messages[90018] = '登陆失败: 用户已过期 (90018).';
$messages[90019] = '退出用户 (90019).';
$messages[90020] = '无法查询PODS的到期时间 (90020).';
$messages[90021] = '无法删除数据库中PODS的到期时间 (90021).';
$messages[90022] = '无可用的POD (90022).';
$messages[90023] = '无法给用户分配POD (90023).';
$messages[90024] = '无法检查数据库的到期时间 (90024).';
$messages[90025] = '无法列出过期的 PODS (90025).';
$messages[90026] = '当前用户无法查询 (90026).';
$messages[90027] = '当前PODS无法查询 (90027).';
$messages[90028] = '创建 "sessions" 表 (90028).';
$messages[90029] = '创建 "sessions" 表失败 (90029).';
?>
