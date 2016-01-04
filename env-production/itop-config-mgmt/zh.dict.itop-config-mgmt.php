<?php
// Copyright (C) 2010-2012 Combodo SARL
//
//   This file is part of iTop.
//
//   iTop is free software; you can redistribute it and/or modify	
//   it under the terms of the GNU Affero General Public License as published by
//   the Free Software Foundation, either version 3 of the License, or
//   (at your option) any later version.
//
//   iTop is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU Affero General Public License for more details.
//
//   You should have received a copy of the GNU Affero General Public License
//   along with iTop. If not, see <http://www.gnu.org/licenses/>


/**
 * Localized data
 *
 * @copyright   Copyright (C) 2010-2012 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

//////////////////////////////////////////////////////////////////////
// Relations
//////////////////////////////////////////////////////////////////////
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Relation:impacts/Description' => '影响元素',
	'Relation:impacts/VerbUp' => '影响...',
	'Relation:impacts/VerbDown' => '影响元素...',
	'Relation:depends on/Description' => '影响元素依赖于',
	'Relation:depends on/VerbUp' => '依赖于...',
	'Relation:depends on/VerbDown' => '影响...',
));


// Dictionnay conventions
// Class:<class_name>
// Class:<class_name>+
// Class:<class_name>/Attribute:<attribute_code>
// Class:<class_name>/Attribute:<attribute_code>+
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>+
// Class:<class_name>/Stimulus:<stimulus_code>
// Class:<class_name>/Stimulus:<stimulus_code>+

//////////////////////////////////////////////////////////////////////
// Classes in 'bizmodel'
//////////////////////////////////////////////////////////////////////
//

// Dictionnay conventions
// Class:<class_name>
// Class:<class_name>+
// Class:<class_name>/Attribute:<attribute_code>
// Class:<class_name>/Attribute:<attribute_code>+
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>+
// Class:<class_name>/Stimulus:<stimulus_code>
// Class:<class_name>/Stimulus:<stimulus_code>+

//////////////////////////////////////////////////////////////////////
// Note: The classes have been grouped by categories: bizmodel
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
// Classes in 'bizmodel'
//////////////////////////////////////////////////////////////////////
//


//
// Class: Organization
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Organization' => '组织',
	'Class:Organization+' => '',
	'Class:Organization/Attribute:name' => '名称',
	'Class:Organization/Attribute:name+' => '普通名称',
	'Class:Organization/Attribute:code' => '编码',
	'Class:Organization/Attribute:code+' => '组织编码 (Siret, DUNS,...)',
	'Class:Organization/Attribute:status' => '状态',
	'Class:Organization/Attribute:status+' => '',
	'Class:Organization/Attribute:status/Value:active' => '激活',
	'Class:Organization/Attribute:status/Value:active+' => '激活',
	'Class:Organization/Attribute:status/Value:inactive' => '非激活',
	'Class:Organization/Attribute:status/Value:inactive+' => '非激活',
	'Class:Organization/Attribute:parent_id' => '上层',
	'Class:Organization/Attribute:parent_id+' => '上层组织',
	'Class:Organization/Attribute:parent_name' => '上层名称',
	'Class:Organization/Attribute:parent_name+' => '上层组织名称',
	'Class:Organization/Attribute:deliverymodel_id' => '交付模式',
	'Class:Organization/Attribute:deliverymodel_id+' => '',
	'Class:Organization/Attribute:deliverymodel_name' => '交付模式名称',
	'Class:Organization/Attribute:deliverymodel_name+' => '',
	'Class:Organization/Attribute:parent_id_friendlyname' => '上层',
	'Class:Organization/Attribute:parent_id_friendlyname+' => '上层组织',
));

//
// Class: Location
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Location' => '位置',
	'Class:Location+' => '任何类型的位置: 地域, 国家, 城市, 地点, 建筑, 楼层, 房间, 机架,...',
	'Class:Location/Attribute:name' => '名称',
	'Class:Location/Attribute:name+' => '',
	'Class:Location/Attribute:status' => '状态',
	'Class:Location/Attribute:status+' => '',
	'Class:Location/Attribute:status/Value:active' => '激活',
	'Class:Location/Attribute:status/Value:active+' => '激活',
	'Class:Location/Attribute:status/Value:inactive' => '非激活',
	'Class:Location/Attribute:status/Value:inactive+' => '非激活',
	'Class:Location/Attribute:org_id' => '拥有人组织',
	'Class:Location/Attribute:org_id+' => '',
	'Class:Location/Attribute:org_name' => '拥有人组织名称',
	'Class:Location/Attribute:org_name+' => '',
	'Class:Location/Attribute:address' => '地址',
	'Class:Location/Attribute:address+' => '邮政地址',
	'Class:Location/Attribute:postal_code' => '邮政编码',
	'Class:Location/Attribute:postal_code+' => 'ZIP/邮政编码',
	'Class:Location/Attribute:city' => '城市',
	'Class:Location/Attribute:city+' => '',
	'Class:Location/Attribute:country' => '国家',
	'Class:Location/Attribute:country+' => '',
	'Class:Location/Attribute:physicaldevice_list' => '设备',
	'Class:Location/Attribute:physicaldevice_list+' => '该位置的所有设备',
	'Class:Location/Attribute:person_list' => '联系人',
	'Class:Location/Attribute:person_list+' => '这个位置的所有联系人',
));

//
// Class: Contact
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Contact' => '联系',
	'Class:Contact+' => '',
	'Class:Contact/Attribute:name' => '名称',
	'Class:Contact/Attribute:name+' => '',
	'Class:Contact/Attribute:status' => '状态',
	'Class:Contact/Attribute:status+' => '',
	'Class:Contact/Attribute:status/Value:active' => '激活',
	'Class:Contact/Attribute:status/Value:active+' => '激活',
	'Class:Contact/Attribute:status/Value:inactive' => '非激活',
	'Class:Contact/Attribute:status/Value:inactive+' => '非激活',
	'Class:Contact/Attribute:org_id' => '组织',
	'Class:Contact/Attribute:org_id+' => '',
	'Class:Contact/Attribute:org_name' => '组织名称',
	'Class:Contact/Attribute:org_name+' => '',
	'Class:Contact/Attribute:email' => '邮件',
	'Class:Contact/Attribute:email+' => '',
	'Class:Contact/Attribute:phone' => '电话',
	'Class:Contact/Attribute:phone+' => '',
	'Class:Contact/Attribute:notify' => '通知',
	'Class:Contact/Attribute:notify+' => '',
	'Class:Contact/Attribute:notify/Value:no' => '不',
	'Class:Contact/Attribute:notify/Value:no+' => '不',
	'Class:Contact/Attribute:notify/Value:yes' => '是',
	'Class:Contact/Attribute:notify/Value:yes+' => '是',
	'Class:Contact/Attribute:function' => '职位',
	'Class:Contact/Attribute:function+' => '',
	'Class:Contact/Attribute:cis_list' => '配置项',
	'Class:Contact/Attribute:cis_list+' => '链接到这个联系人的所有配置项',
	'Class:Contact/Attribute:finalclass' => '联系类型',
	'Class:Contact/Attribute:finalclass+' => '',
));

//
// Class: Person
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Person' => '人员',
	'Class:Person+' => '',
	'Class:Person/Attribute:name' => '名',
	'Class:Person/Attribute:name+' => '',
	'Class:Person/Attribute:first_name' => '姓',
	'Class:Person/Attribute:first_name+' => '',
	'Class:Person/Attribute:employee_number' => '员工编号',
	'Class:Person/Attribute:employee_number+' => '',
	'Class:Person/Attribute:mobile_phone' => '移动电话',
	'Class:Person/Attribute:mobile_phone+' => '',
	'Class:Person/Attribute:location_id' => '位置',
	'Class:Person/Attribute:location_id+' => '',
	'Class:Person/Attribute:location_name' => '位置名称',
	'Class:Person/Attribute:location_name+' => '',
	'Class:Person/Attribute:manager_id' => '经理',
	'Class:Person/Attribute:manager_id+' => '',
	'Class:Person/Attribute:manager_name' => '经理姓名',
	'Class:Person/Attribute:manager_name+' => '',
	'Class:Person/Attribute:team_list' => '团队',
	'Class:Person/Attribute:team_list+' => '这个人隶属的所有团队',
	'Class:Person/Attribute:tickets_list' => '任务单',
	'Class:Person/Attribute:tickets_list+' => '来自这个人的所有任务单',
	'Class:Person/Attribute:manager_id_friendlyname' => '经理友好名称',
	'Class:Person/Attribute:manager_id_friendlyname+' => '',
));

//
// Class: Team
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Team' => '团队',
	'Class:Team+' => '',
	'Class:Team/Attribute:persons_list' => '成员',
	'Class:Team/Attribute:persons_list+' => '属于这个团队的所有人',
	'Class:Team/Attribute:tickets_list' => '任务单',
	'Class:Team/Attribute:tickets_list+' => '分配给这个团队的所有任务单',
));

//
// Class: Document
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Document' => '文档',
	'Class:Document+' => '',
	'Class:Document/Attribute:name' => '名称',
	'Class:Document/Attribute:name+' => '',
	'Class:Document/Attribute:org_id' => '组织',
	'Class:Document/Attribute:org_id+' => '',
	'Class:Document/Attribute:org_name' => '组织名称',
	'Class:Document/Attribute:org_name+' => '',
	'Class:Document/Attribute:documenttype_id' => '文档类型',
	'Class:Document/Attribute:documenttype_id+' => '',
	'Class:Document/Attribute:documenttype_name' => '文档类型名称',
	'Class:Document/Attribute:documenttype_name+' => '',
	'Class:Document/Attribute:description' => '描述',
	'Class:Document/Attribute:description+' => '',
	'Class:Document/Attribute:status' => '状态',
	'Class:Document/Attribute:status+' => '',
	'Class:Document/Attribute:status/Value:draft' => '草稿',
	'Class:Document/Attribute:status/Value:draft+' => '',
	'Class:Document/Attribute:status/Value:obsolete' => '废弃的',
	'Class:Document/Attribute:status/Value:obsolete+' => '',
	'Class:Document/Attribute:status/Value:published' => '发布的',
	'Class:Document/Attribute:status/Value:published+' => '',
	'Class:Document/Attribute:cis_list' => '配置项',
	'Class:Document/Attribute:cis_list+' => '链接到这个文档的所有配置项',
	'Class:Document/Attribute:contracts_list' => '合同',
	'Class:Document/Attribute:contracts_list+' => '链接到这个文档的所有合同',
	'Class:Document/Attribute:services_list' => '服务',
	'Class:Document/Attribute:services_list+' => '链接到这个文档的所有服务',
	'Class:Document/Attribute:finalclass' => '文档类型',
	'Class:Document/Attribute:finalclass+' => '',
));

//
// Class: DocumentFile
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:DocumentFile' => '文档文件',
	'Class:DocumentFile+' => '',
	'Class:DocumentFile/Attribute:file' => '文件',
	'Class:DocumentFile/Attribute:file+' => '',
));

//
// Class: DocumentNote
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:DocumentNote' => '文档注释',
	'Class:DocumentNote+' => '',
	'Class:DocumentNote/Attribute:text' => '文本',
	'Class:DocumentNote/Attribute:text+' => '',
));

//
// Class: DocumentWeb
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:DocumentWeb' => '文档页面',
	'Class:DocumentWeb+' => '',
	'Class:DocumentWeb/Attribute:url' => 'URL',
	'Class:DocumentWeb/Attribute:url+' => '',
));

//
// Class: FunctionalCI
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:FunctionalCI' => '功能配置项',
	'Class:FunctionalCI+' => '',
	'Class:FunctionalCI/Attribute:name' => '名称',
	'Class:FunctionalCI/Attribute:name+' => '',
	'Class:FunctionalCI/Attribute:description' => '描述',
	'Class:FunctionalCI/Attribute:description+' => '',
	'Class:FunctionalCI/Attribute:org_id' => '组织',
	'Class:FunctionalCI/Attribute:org_id+' => '',
	'Class:FunctionalCI/Attribute:organization_name' => '组织名称',
	'Class:FunctionalCI/Attribute:organization_name+' => '普通名称',
	'Class:FunctionalCI/Attribute:business_criticity' => '业务级别',
	'Class:FunctionalCI/Attribute:business_criticity+' => '',
	'Class:FunctionalCI/Attribute:business_criticity/Value:high' => '高',
	'Class:FunctionalCI/Attribute:business_criticity/Value:high+' => '高',
	'Class:FunctionalCI/Attribute:business_criticity/Value:low' => '低',
	'Class:FunctionalCI/Attribute:business_criticity/Value:low+' => '低',
	'Class:FunctionalCI/Attribute:business_criticity/Value:medium' => '中',
	'Class:FunctionalCI/Attribute:business_criticity/Value:medium+' => '中',
	'Class:FunctionalCI/Attribute:move2production' => '应用于生产环境的日期',
	'Class:FunctionalCI/Attribute:move2production+' => '',
	'Class:FunctionalCI/Attribute:contacts_list' => '联系人',
	'Class:FunctionalCI/Attribute:contacts_list+' => '于此配置项相关的所有联系人',
	'Class:FunctionalCI/Attribute:documents_list' => '文档',
	'Class:FunctionalCI/Attribute:documents_list+' => '链接到此配置项的所有文档',
	'Class:FunctionalCI/Attribute:applicationsolution_list' => '应用方案',
	'Class:FunctionalCI/Attribute:applicationsolution_list+' => '依赖于此配置项的所有应用方案',
	'Class:FunctionalCI/Attribute:providercontracts_list' => '供应商联系人',
	'Class:FunctionalCI/Attribute:providercontracts_list+' => '与此配置项相关的所有供应商联系人',
	'Class:FunctionalCI/Attribute:services_list' => '服务',
	'Class:FunctionalCI/Attribute:services_list+' => '受此配置项影响的所有服务',
	'Class:FunctionalCI/Attribute:softwares_list' => '软件',
	'Class:FunctionalCI/Attribute:softwares_list+' => '被安装到这个配置项的所有软件',
	'Class:FunctionalCI/Attribute:tickets_list' => '任务单',
	'Class:FunctionalCI/Attribute:tickets_list+' => '与该配置项相关的所有任务单',
	'Class:FunctionalCI/Attribute:finalclass' => '配置项类型',
	'Class:FunctionalCI/Attribute:finalclass+' => '',
));

//
// Class: PhysicalDevice
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:PhysicalDevice' => '物理设备',
	'Class:PhysicalDevice+' => '',
	'Class:PhysicalDevice/Attribute:serialnumber' => '序列号',
	'Class:PhysicalDevice/Attribute:serialnumber+' => '',
	'Class:PhysicalDevice/Attribute:location_id' => '位置',
	'Class:PhysicalDevice/Attribute:location_id+' => '',
	'Class:PhysicalDevice/Attribute:location_name' => '位置名称',
	'Class:PhysicalDevice/Attribute:location_name+' => '',
	'Class:PhysicalDevice/Attribute:status' => '状态',
	'Class:PhysicalDevice/Attribute:status+' => '',
	'Class:PhysicalDevice/Attribute:status/Value:implementation' => '安装使用',
	'Class:PhysicalDevice/Attribute:status/Value:implementation+' => '安装使用',
	'Class:PhysicalDevice/Attribute:status/Value:obsolete' => '废弃',
	'Class:PhysicalDevice/Attribute:status/Value:obsolete+' => '废弃',
	'Class:PhysicalDevice/Attribute:status/Value:production' => '生产',
	'Class:PhysicalDevice/Attribute:status/Value:production+' => '生产',
	'Class:PhysicalDevice/Attribute:status/Value:stock' => '库存',
	'Class:PhysicalDevice/Attribute:status/Value:stock+' => '库存',
	'Class:PhysicalDevice/Attribute:brand_id' => '品牌',
	'Class:PhysicalDevice/Attribute:brand_id+' => '',
	'Class:PhysicalDevice/Attribute:brand_name' => '品牌名称',
	'Class:PhysicalDevice/Attribute:brand_name+' => '',
	'Class:PhysicalDevice/Attribute:model_id' => '模块',
	'Class:PhysicalDevice/Attribute:model_id+' => '',
	'Class:PhysicalDevice/Attribute:model_name' => '模块名称',
	'Class:PhysicalDevice/Attribute:model_name+' => '',
	'Class:PhysicalDevice/Attribute:asset_number' => '资产编号',
	'Class:PhysicalDevice/Attribute:asset_number+' => '',
	'Class:PhysicalDevice/Attribute:purchase_date' => '购买日期',
	'Class:PhysicalDevice/Attribute:purchase_date+' => '',
	'Class:PhysicalDevice/Attribute:end_of_warranty' => '维保服务结束日期',
	'Class:PhysicalDevice/Attribute:end_of_warranty+' => '',
));

//
// Class: Rack
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Rack' => '机柜',
	'Class:Rack+' => '',
	'Class:Rack/Attribute:nb_u' => 'NB_U',
	'Class:Rack/Attribute:nb_u+' => '',
	'Class:Rack/Attribute:device_list' => '设备',
	'Class:Rack/Attribute:device_list+' => '架设到这个机柜的所有设备',
	'Class:Rack/Attribute:enclosure_list' => '柜位',
	'Class:Rack/Attribute:enclosure_list+' => '这个机柜的所有柜位',
));

//
// Class: TelephonyCI
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:TelephonyCI' => '电话配置项',
	'Class:TelephonyCI+' => '',
	'Class:TelephonyCI/Attribute:phonenumber' => '电话号码',
	'Class:TelephonyCI/Attribute:phonenumber+' => '',
));

//
// Class: Phone
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Phone' => '电话',
	'Class:Phone+' => '',
));

//
// Class: MobilePhone
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:MobilePhone' => '移动电话',
	'Class:MobilePhone+' => '',
	'Class:MobilePhone/Attribute:imei' => 'IMEI',
	'Class:MobilePhone/Attribute:imei+' => '',
	'Class:MobilePhone/Attribute:hw_pin' => '硬件 PIN',
	'Class:MobilePhone/Attribute:hw_pin+' => '',
));

//
// Class: IPPhone
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:IPPhone' => 'IP 电话',
	'Class:IPPhone+' => '',
));

//
// Class: Tablet
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Tablet' => '平板设备',
	'Class:Tablet+' => '',
));

//
// Class: ConnectableCI
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:ConnectableCI' => '连接配置项',
	'Class:ConnectableCI+' => '物理配置项',
	'Class:ConnectableCI/Attribute:networkdevice_list' => '网络设备',
	'Class:ConnectableCI/Attribute:networkdevice_list+' => '连接到这个设备的所有网络设备',
	'Class:ConnectableCI/Attribute:physicalinterface_list' => '网络接口',
	'Class:ConnectableCI/Attribute:physicalinterface_list+' => '所有物理网络接口',
));

//
// Class: DatacenterDevice
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:DatacenterDevice' => '数据中心设备',
	'Class:DatacenterDevice+' => '',
	'Class:DatacenterDevice/Attribute:rack_id' => '机柜',
	'Class:DatacenterDevice/Attribute:rack_id+' => '',
	'Class:DatacenterDevice/Attribute:rack_name' => '机柜名称',
	'Class:DatacenterDevice/Attribute:rack_name+' => '',
	'Class:DatacenterDevice/Attribute:enclosure_id' => '柜位',
	'Class:DatacenterDevice/Attribute:enclosure_id+' => '',
	'Class:DatacenterDevice/Attribute:enclosure_name' => '柜位名称',
	'Class:DatacenterDevice/Attribute:enclosure_name+' => '',
	'Class:DatacenterDevice/Attribute:nb_u' => 'NB_U',
	'Class:DatacenterDevice/Attribute:nb_u+' => '',
	'Class:DatacenterDevice/Attribute:managementip' => '管理IP',
	'Class:DatacenterDevice/Attribute:managementip+' => '',
	'Class:DatacenterDevice/Attribute:powerA_id' => 'A路电源',
	'Class:DatacenterDevice/Attribute:powerA_id+' => '',
	'Class:DatacenterDevice/Attribute:powerA_name' => 'A路电源名称',
	'Class:DatacenterDevice/Attribute:powerA_name+' => '',
	'Class:DatacenterDevice/Attribute:powerB_id' => 'B路电源',
	'Class:DatacenterDevice/Attribute:powerB_id+' => '',
	'Class:DatacenterDevice/Attribute:powerB_name' => 'B路电源名称',
	'Class:DatacenterDevice/Attribute:powerB_name+' => '',
	'Class:DatacenterDevice/Attribute:fiberinterfacelist_list' => 'FC 端口',
	'Class:DatacenterDevice/Attribute:fiberinterfacelist_list+' => '该设备的所有光纤通道接口',
	'Class:DatacenterDevice/Attribute:san_list' => 'SANs',
	'Class:DatacenterDevice/Attribute:san_list+' => '连接到该设备的所有SAN交换机',
));

//
// Class: NetworkDevice
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:NetworkDevice' => '网络设备',
	'Class:NetworkDevice+' => '',
	'Class:NetworkDevice/Attribute:networkdevicetype_id' => '网络类型',
	'Class:NetworkDevice/Attribute:networkdevicetype_id+' => '',
	'Class:NetworkDevice/Attribute:networkdevicetype_name' => '网络类型名称',
	'Class:NetworkDevice/Attribute:networkdevicetype_name+' => '',
	'Class:NetworkDevice/Attribute:connectablecis_list' => '设备',
	'Class:NetworkDevice/Attribute:connectablecis_list+' => '连接到这个网络设备的所有设备',
	'Class:NetworkDevice/Attribute:iosversion_id' => 'IOS 版本',
	'Class:NetworkDevice/Attribute:iosversion_id+' => '',
	'Class:NetworkDevice/Attribute:iosversion_name' => 'IOS 版本名称',
	'Class:NetworkDevice/Attribute:iosversion_name+' => '',
	'Class:NetworkDevice/Attribute:ram' => 'RAM',
	'Class:NetworkDevice/Attribute:ram+' => '',
));

//
// Class: Server
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Server' => '服务器',
	'Class:Server+' => '',
	'Class:Server/Attribute:osfamily_id' => 'OS 家族',
	'Class:Server/Attribute:osfamily_id+' => '',
	'Class:Server/Attribute:osfamily_name' => 'OS 家族名称',
	'Class:Server/Attribute:osfamily_name+' => '',
	'Class:Server/Attribute:osversion_id' => 'OS 版本',
	'Class:Server/Attribute:osversion_id+' => '',
	'Class:Server/Attribute:osversion_name' => 'OS 版本名称',
	'Class:Server/Attribute:osversion_name+' => '',
	'Class:Server/Attribute:oslicence_id' => 'OS licence',
	'Class:Server/Attribute:oslicence_id+' => '',
	'Class:Server/Attribute:oslicence_name' => 'OS licence 名称',
	'Class:Server/Attribute:oslicence_name+' => '',
	'Class:Server/Attribute:cpu' => 'CPU',
	'Class:Server/Attribute:cpu+' => '',
	'Class:Server/Attribute:ram' => 'RAM',
	'Class:Server/Attribute:ram+' => '',
	'Class:Server/Attribute:logicalvolumes_list' => '逻辑卷',
	'Class:Server/Attribute:logicalvolumes_list+' => '连接到该服务器的所有逻辑卷',
));

//
// Class: StorageSystem
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:StorageSystem' => '存储系统',
	'Class:StorageSystem+' => '',
	'Class:StorageSystem/Attribute:logicalvolume_list' => '逻辑卷',
	'Class:StorageSystem/Attribute:logicalvolume_list+' => '这个存储系统的所有逻辑卷',
));

//
// Class: SANSwitch
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:SANSwitch' => 'SAN交换机',
	'Class:SANSwitch+' => '',
	'Class:SANSwitch/Attribute:datacenterdevice_list' => '设备',
	'Class:SANSwitch/Attribute:datacenterdevice_list+' => '连接到该SAN交换机的所有设备',
));

//
// Class: TapeLibrary
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:TapeLibrary' => '磁带库',
	'Class:TapeLibrary+' => '',
	'Class:TapeLibrary/Attribute:tapes_list' => '磁带',
	'Class:TapeLibrary/Attribute:tapes_list+' => '这个磁带库的所有磁带',
));

//
// Class: NAS
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:NAS' => 'NAS',
	'Class:NAS+' => '',
	'Class:NAS/Attribute:nasfilesystem_list' => '文件系统',
	'Class:NAS/Attribute:nasfilesystem_list+' => '这个NAS的所有文件系统',
));

//
// Class: PC
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:PC' => 'PC',
	'Class:PC+' => '',
	'Class:PC/Attribute:osfamily_id' => 'OS 家族',
	'Class:PC/Attribute:osfamily_id+' => '',
	'Class:PC/Attribute:osfamily_name' => 'OS 家族名称',
	'Class:PC/Attribute:osfamily_name+' => '',
	'Class:PC/Attribute:osversion_id' => 'OS 版本',
	'Class:PC/Attribute:osversion_id+' => '',
	'Class:PC/Attribute:osversion_name' => 'OS 版本名称',
	'Class:PC/Attribute:osversion_name+' => '',
	'Class:PC/Attribute:cpu' => 'CPU',
	'Class:PC/Attribute:cpu+' => '',
	'Class:PC/Attribute:ram' => 'RAM',
	'Class:PC/Attribute:ram+' => '',
	'Class:PC/Attribute:type' => '类型',
	'Class:PC/Attribute:type+' => '',
	'Class:PC/Attribute:type/Value:desktop' => '桌面',
	'Class:PC/Attribute:type/Value:desktop+' => '桌面',
	'Class:PC/Attribute:type/Value:laptop' => '笔记本',
	'Class:PC/Attribute:type/Value:laptop+' => '笔记本',
));

//
// Class: Printer
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Printer' => '打印机',
	'Class:Printer+' => '',
));

//
// Class: PowerConnection
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:PowerConnection' => '电力系统',
	'Class:PowerConnection+' => '',
));

//
// Class: PowerSource
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:PowerSource' => '电源路数',
	'Class:PowerSource+' => '',
	'Class:PowerSource/Attribute:pdus_list' => 'PDUs',
	'Class:PowerSource/Attribute:pdus_list+' => '使用这路电源的所有PDU',
));

//
// Class: PDU
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:PDU' => 'PDU',
	'Class:PDU+' => '',
	'Class:PDU/Attribute:rack_id' => '机柜',
	'Class:PDU/Attribute:rack_id+' => '',
	'Class:PDU/Attribute:rack_name' => '机柜名称',
	'Class:PDU/Attribute:rack_name+' => '',
	'Class:PDU/Attribute:powerstart_id' => '电源起始',
	'Class:PDU/Attribute:powerstart_id+' => '',
	'Class:PDU/Attribute:powerstart_name' => '电源起始名称',
	'Class:PDU/Attribute:powerstart_name+' => '',
));

//
// Class: Peripheral
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Peripheral' => '外部设备',
	'Class:Peripheral+' => '',
));

//
// Class: Enclosure
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Enclosure' => '柜位',
	'Class:Enclosure+' => '',
	'Class:Enclosure/Attribute:rack_id' => '机柜',
	'Class:Enclosure/Attribute:rack_id+' => '',
	'Class:Enclosure/Attribute:rack_name' => '机柜名称',
	'Class:Enclosure/Attribute:rack_name+' => '',
	'Class:Enclosure/Attribute:nb_u' => 'NB_U',
	'Class:Enclosure/Attribute:nb_u+' => '',
	'Class:Enclosure/Attribute:device_list' => '设备',
	'Class:Enclosure/Attribute:device_list+' => '在该柜位内的所有设备',
));

//
// Class: ApplicationSolution
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:ApplicationSolution' => '应用方案',
	'Class:ApplicationSolution+' => '',
	'Class:ApplicationSolution/Attribute:functionalcis_list' => '配置项',
	'Class:ApplicationSolution/Attribute:functionalcis_list+' => '构成这个应用方案的所有配置项',
	'Class:ApplicationSolution/Attribute:businessprocess_list' => '业务流程',
	'Class:ApplicationSolution/Attribute:businessprocess_list+' => '依赖于这个应用方案的所有业务流程',
	'Class:ApplicationSolution/Attribute:status' => '状态',
	'Class:ApplicationSolution/Attribute:status+' => '',
	'Class:ApplicationSolution/Attribute:status/Value:active' => '激活',
	'Class:ApplicationSolution/Attribute:status/Value:active+' => '激活',
	'Class:ApplicationSolution/Attribute:status/Value:inactive' => '非激活',
	'Class:ApplicationSolution/Attribute:status/Value:inactive+' => '非激活',
));

//
// Class: BusinessProcess
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:BusinessProcess' => '业务流程',
	'Class:BusinessProcess+' => '',
	'Class:BusinessProcess/Attribute:applicationsolutions_list' => '应用方案',
	'Class:BusinessProcess/Attribute:applicationsolutions_list+' => '影响该业务流程的所有应用方案',
	'Class:BusinessProcess/Attribute:status' => '状态',
	'Class:BusinessProcess/Attribute:status+' => '',
	'Class:BusinessProcess/Attribute:status/Value:active' => '激活',
	'Class:BusinessProcess/Attribute:status/Value:active+' => '激活',
	'Class:BusinessProcess/Attribute:status/Value:inactive' => '非激活',
	'Class:BusinessProcess/Attribute:status/Value:inactive+' => '非激活',
));

//
// Class: SoftwareInstance
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:SoftwareInstance' => '软件实例',
	'Class:SoftwareInstance+' => '',
	'Class:SoftwareInstance/Attribute:system_id' => '系统',
	'Class:SoftwareInstance/Attribute:system_id+' => '',
	'Class:SoftwareInstance/Attribute:system_name' => '系统名称',
	'Class:SoftwareInstance/Attribute:system_name+' => '',
	'Class:SoftwareInstance/Attribute:software_id' => '软件',
	'Class:SoftwareInstance/Attribute:software_id+' => '',
	'Class:SoftwareInstance/Attribute:software_name' => '软件名称',
	'Class:SoftwareInstance/Attribute:software_name+' => '',
	'Class:SoftwareInstance/Attribute:softwarelicence_id' => '软件 licence',
	'Class:SoftwareInstance/Attribute:softwarelicence_id+' => '',
	'Class:SoftwareInstance/Attribute:softwarelicence_name' => '软件 licence 名称',
	'Class:SoftwareInstance/Attribute:softwarelicence_name+' => '',
	'Class:SoftwareInstance/Attribute:path' => '路径',
	'Class:SoftwareInstance/Attribute:path+' => '',
	'Class:SoftwareInstance/Attribute:status' => '状态',
	'Class:SoftwareInstance/Attribute:status+' => '',
	'Class:SoftwareInstance/Attribute:status/Value:active' => '激活',
	'Class:SoftwareInstance/Attribute:status/Value:active+' => '激活',
	'Class:SoftwareInstance/Attribute:status/Value:inactive' => '非激活',
	'Class:SoftwareInstance/Attribute:status/Value:inactive+' => '非激活',
));

//
// Class: Middleware
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Middleware' => '中间件',
	'Class:Middleware+' => '',
	'Class:Middleware/Attribute:middlewareinstance_list' => '中间件实例',
	'Class:Middleware/Attribute:middlewareinstance_list+' => '这个中间件提供的所有中间件实例',
));

//
// Class: DBServer
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:DBServer' => '数据库服务器',
	'Class:DBServer+' => '',
	'Class:DBServer/Attribute:dbschema_list' => '数据库模型',
	'Class:DBServer/Attribute:dbschema_list+' => '这个数据库服务器的所有数据库模型',
));

//
// Class: WebServer
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:WebServer' => 'Web服务器',
	'Class:WebServer+' => '',
	'Class:WebServer/Attribute:webapp_list' => 'Web应用',
	'Class:WebServer/Attribute:webapp_list+' => '这台Web服务器上的所有可用的Web应用',
));

//
// Class: PCSoftware
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:PCSoftware' => 'PC软件',
	'Class:PCSoftware+' => '',
));

//
// Class: OtherSoftware
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:OtherSoftware' => '其它软件',
	'Class:OtherSoftware+' => '',
));

//
// Class: MiddlewareInstance
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:MiddlewareInstance' => '中间件实例',
	'Class:MiddlewareInstance+' => '',
	'Class:MiddlewareInstance/Attribute:middleware_id' => '中间件',
	'Class:MiddlewareInstance/Attribute:middleware_id+' => '',
	'Class:MiddlewareInstance/Attribute:middleware_name' => '中间件名称',
	'Class:MiddlewareInstance/Attribute:middleware_name+' => '',
));

//
// Class: DatabaseSchema
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:DatabaseSchema' => '数据库模型',
	'Class:DatabaseSchema+' => '',
	'Class:DatabaseSchema/Attribute:dbserver_id' => '数据库服务器',
	'Class:DatabaseSchema/Attribute:dbserver_id+' => '',
	'Class:DatabaseSchema/Attribute:dbserver_name' => '数据库服务器名称',
	'Class:DatabaseSchema/Attribute:dbserver_name+' => '',
));

//
// Class: WebApplication
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:WebApplication' => 'Web应用',
	'Class:WebApplication+' => '',
	'Class:WebApplication/Attribute:webserver_id' => 'Web服务器',
	'Class:WebApplication/Attribute:webserver_id+' => '',
	'Class:WebApplication/Attribute:webserver_name' => 'Web服务器名称',
	'Class:WebApplication/Attribute:webserver_name+' => '',
	'Class:WebApplication/Attribute:url' => 'URL',
	'Class:WebApplication/Attribute:url+' => '',
));

//
// Class: VirtualDevice
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:VirtualDevice' => '虚拟设备',
	'Class:VirtualDevice+' => '',
	'Class:VirtualDevice/Attribute:status' => '状态',
	'Class:VirtualDevice/Attribute:status+' => '',
	'Class:VirtualDevice/Attribute:status/Value:implementation' => '实施',
	'Class:VirtualDevice/Attribute:status/Value:implementation+' => '实施',
	'Class:VirtualDevice/Attribute:status/Value:obsolete' => '废弃',
	'Class:VirtualDevice/Attribute:status/Value:obsolete+' => '废弃',
	'Class:VirtualDevice/Attribute:status/Value:production' => '生产',
	'Class:VirtualDevice/Attribute:status/Value:production+' => '生产',
	'Class:VirtualDevice/Attribute:status/Value:stock' => '库存',
	'Class:VirtualDevice/Attribute:status/Value:stock+' => '库存',
	'Class:VirtualDevice/Attribute:logicalvolumes_list' => '逻辑卷',
	'Class:VirtualDevice/Attribute:logicalvolumes_list+' => '使用这台设备的所有逻辑卷',
));

//
// Class: VirtualHost
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:VirtualHost' => '虚拟主机',
	'Class:VirtualHost+' => '',
	'Class:VirtualHost/Attribute:virtualmachine_list' => '虚拟机',
	'Class:VirtualHost/Attribute:virtualmachine_list+' => '这台主机上的所有虚拟机',
));

//
// Class: Hypervisor
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Hypervisor' => '虚拟系统',
	'Class:Hypervisor+' => '',
	'Class:Hypervisor/Attribute:farm_id' => '虚拟池',
	'Class:Hypervisor/Attribute:farm_id+' => '',
	'Class:Hypervisor/Attribute:farm_name' => '虚拟池名称',
	'Class:Hypervisor/Attribute:farm_name+' => '',
	'Class:Hypervisor/Attribute:server_id' => '服务器',
	'Class:Hypervisor/Attribute:server_id+' => '',
	'Class:Hypervisor/Attribute:server_name' => '服务器名称',
	'Class:Hypervisor/Attribute:server_name+' => '',
));

//
// Class: Farm
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Farm' => '虚拟池',
	'Class:Farm+' => '',
	'Class:Farm/Attribute:虚拟系统_list' => '虚拟系统s',
	'Class:Farm/Attribute:虚拟系统_list+' => '组成这个虚拟池的所有虚拟系统s',
));

//
// Class: VirtualMachine
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:VirtualMachine' => '虚拟机',
	'Class:VirtualMachine+' => '',
	'Class:VirtualMachine/Attribute:virtualhost_id' => '虚拟主机',
	'Class:VirtualMachine/Attribute:virtualhost_id+' => '',
	'Class:VirtualMachine/Attribute:virtualhost_name' => '虚拟主机名称',
	'Class:VirtualMachine/Attribute:virtualhost_name+' => '',
	'Class:VirtualMachine/Attribute:osfamily_id' => 'OS 家族',
	'Class:VirtualMachine/Attribute:osfamily_id+' => '',
	'Class:VirtualMachine/Attribute:osfamily_name' => 'OS 家族名称',
	'Class:VirtualMachine/Attribute:osfamily_name+' => '',
	'Class:VirtualMachine/Attribute:osversion_id' => 'OS 版本',
	'Class:VirtualMachine/Attribute:osversion_id+' => '',
	'Class:VirtualMachine/Attribute:osversion_name' => 'OS 版本名称',
	'Class:VirtualMachine/Attribute:osversion_name+' => '',
	'Class:VirtualMachine/Attribute:oslicence_id' => 'OS licence',
	'Class:VirtualMachine/Attribute:oslicence_id+' => '',
	'Class:VirtualMachine/Attribute:oslicence_name' => 'OS licence 名称',
	'Class:VirtualMachine/Attribute:oslicence_name+' => '',
	'Class:VirtualMachine/Attribute:cpu' => 'CPU',
	'Class:VirtualMachine/Attribute:cpu+' => '',
	'Class:VirtualMachine/Attribute:ram' => 'RAM',
	'Class:VirtualMachine/Attribute:ram+' => '',
	'Class:VirtualMachine/Attribute:logicalinterface_list' => '网络接口',
	'Class:VirtualMachine/Attribute:logicalinterface_list+' => '所有逻辑网络接口',
));

//
// Class: LogicalVolume
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:LogicalVolume' => '逻辑卷',
	'Class:LogicalVolume+' => '',
	'Class:LogicalVolume/Attribute:name' => '名称',
	'Class:LogicalVolume/Attribute:name+' => '',
	'Class:LogicalVolume/Attribute:lun_id' => 'LUN ID',
	'Class:LogicalVolume/Attribute:lun_id+' => '',
	'Class:LogicalVolume/Attribute:description' => '描述',
	'Class:LogicalVolume/Attribute:description+' => '',
	'Class:LogicalVolume/Attribute:raid_level' => 'Raid level',
	'Class:LogicalVolume/Attribute:raid_level+' => '',
	'Class:LogicalVolume/Attribute:size' => '尺寸',
	'Class:LogicalVolume/Attribute:size+' => '',
	'Class:LogicalVolume/Attribute:storagesystem_id' => 'Storage 系统',
	'Class:LogicalVolume/Attribute:storagesystem_id+' => '',
	'Class:LogicalVolume/Attribute:storagesystem_name' => 'Storage 系统名称',
	'Class:LogicalVolume/Attribute:storagesystem_name+' => '',
	'Class:LogicalVolume/Attribute:servers_list' => '服务器',
	'Class:LogicalVolume/Attribute:servers_list+' => '使用这个卷的所有服务器',
	'Class:LogicalVolume/Attribute:virtualdevices_list' => '虚拟设备',
	'Class:LogicalVolume/Attribute:virtualdevices_list+' => '使用这个卷的所有虚拟设备',
));

//
// Class: lnkServerToVolume
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkServerToVolume' => 'Link 服务器 / 卷',
	'Class:lnkServerToVolume+' => '',
	'Class:lnkServerToVolume/Attribute:volume_id' => '卷',
	'Class:lnkServerToVolume/Attribute:volume_id+' => '',
	'Class:lnkServerToVolume/Attribute:volume_name' => '卷名',
	'Class:lnkServerToVolume/Attribute:volume_name+' => '',
	'Class:lnkServerToVolume/Attribute:server_id' => '服务器',
	'Class:lnkServerToVolume/Attribute:server_id+' => '',
	'Class:lnkServerToVolume/Attribute:server_name' => '服务器名称',
	'Class:lnkServerToVolume/Attribute:server_name+' => '',
	'Class:lnkServerToVolume/Attribute:size_used' => '使用尺寸',
	'Class:lnkServerToVolume/Attribute:size_used+' => '',
));

//
// Class: lnkVirtualDeviceToVolume
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkVirtualDeviceToVolume' => 'Link 虚拟设备 / 卷',
	'Class:lnkVirtualDeviceToVolume+' => '',
	'Class:lnkVirtualDeviceToVolume/Attribute:volume_id' => '卷',
	'Class:lnkVirtualDeviceToVolume/Attribute:volume_id+' => '',
	'Class:lnkVirtualDeviceToVolume/Attribute:volume_name' => '卷名',
	'Class:lnkVirtualDeviceToVolume/Attribute:volume_name+' => '',
	'Class:lnkVirtualDeviceToVolume/Attribute:virtualdevice_id' => '虚拟设备',
	'Class:lnkVirtualDeviceToVolume/Attribute:virtualdevice_id+' => '',
	'Class:lnkVirtualDeviceToVolume/Attribute:virtualdevice_name' => '虚拟设备名称',
	'Class:lnkVirtualDeviceToVolume/Attribute:virtualdevice_name+' => '',
	'Class:lnkVirtualDeviceToVolume/Attribute:size_used' => '使用尺寸',
	'Class:lnkVirtualDeviceToVolume/Attribute:size_used+' => '',
));

//
// Class: lnkSanToDatacenterDevice
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkSanToDatacenterDevice' => 'Link SAN / 数据中心设备',
	'Class:lnkSanToDatacenterDevice+' => '',
	'Class:lnkSanToDatacenterDevice/Attribute:san_id' => 'SAN 交换机',
	'Class:lnkSanToDatacenterDevice/Attribute:san_id+' => '',
	'Class:lnkSanToDatacenterDevice/Attribute:san_name' => 'SAN 交换机名称',
	'Class:lnkSanToDatacenterDevice/Attribute:san_name+' => '',
	'Class:lnkSanToDatacenterDevice/Attribute:datacenterdevice_id' => '设备',
	'Class:lnkSanToDatacenterDevice/Attribute:datacenterdevice_id+' => '',
	'Class:lnkSanToDatacenterDevice/Attribute:datacenterdevice_name' => '设备名称',
	'Class:lnkSanToDatacenterDevice/Attribute:datacenterdevice_name+' => '',
	'Class:lnkSanToDatacenterDevice/Attribute:san_port' => 'SAN fc',
	'Class:lnkSanToDatacenterDevice/Attribute:san_port+' => '',
	'Class:lnkSanToDatacenterDevice/Attribute:datacenterdevice_port' => '设备 fc',
	'Class:lnkSanToDatacenterDevice/Attribute:datacenterdevice_port+' => '',
));

//
// Class: Tape
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Tape' => '磁带',
	'Class:Tape+' => '',
	'Class:Tape/Attribute:name' => '名称',
	'Class:Tape/Attribute:name+' => '',
	'Class:Tape/Attribute:description' => '描述',
	'Class:Tape/Attribute:description+' => '',
	'Class:Tape/Attribute:size' => '尺寸',
	'Class:Tape/Attribute:size+' => '',
	'Class:Tape/Attribute:tapelibrary_id' => '磁带库',
	'Class:Tape/Attribute:tapelibrary_id+' => '',
	'Class:Tape/Attribute:tapelibrary_name' => '磁带库名称',
	'Class:Tape/Attribute:tapelibrary_name+' => '',
));

//
// Class: NASFileSystem
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:NASFileSystem' => 'NAS 文件系统',
	'Class:NASFileSystem+' => '',
	'Class:NASFileSystem/Attribute:name' => '名称',
	'Class:NASFileSystem/Attribute:name+' => '',
	'Class:NASFileSystem/Attribute:description' => '描述',
	'Class:NASFileSystem/Attribute:description+' => '',
	'Class:NASFileSystem/Attribute:raid_level' => 'Raid level',
	'Class:NASFileSystem/Attribute:raid_level+' => '',
	'Class:NASFileSystem/Attribute:size' => '尺寸',
	'Class:NASFileSystem/Attribute:size+' => '',
	'Class:NASFileSystem/Attribute:nas_id' => 'NAS',
	'Class:NASFileSystem/Attribute:nas_id+' => '',
	'Class:NASFileSystem/Attribute:nas_name' => 'NAS 名称',
	'Class:NASFileSystem/Attribute:nas_name+' => '',
));

//
// Class: Software
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Software' => '软件',
	'Class:Software+' => '',
	'Class:Software/Attribute:name' => '名称',
	'Class:Software/Attribute:name+' => '',
	'Class:Software/Attribute:vendor' => '供应商',
	'Class:Software/Attribute:vendor+' => '',
	'Class:Software/Attribute:version' => '版本',
	'Class:Software/Attribute:version+' => '',
	'Class:Software/Attribute:documents_list' => '文档',
	'Class:Software/Attribute:documents_list+' => '关联到这个软件的所有文档',
	'Class:Software/Attribute:type' => '类型',
	'Class:Software/Attribute:type+' => '',
	'Class:Software/Attribute:type/Value:DBServer' => 'DB 服务器',
	'Class:Software/Attribute:type/Value:DBServer+' => 'DB 服务器',
	'Class:Software/Attribute:type/Value:Middleware' => '中间件',
	'Class:Software/Attribute:type/Value:Middleware+' => '中间件',
	'Class:Software/Attribute:type/Value:OtherSoftware' => '其它软件',
	'Class:Software/Attribute:type/Value:OtherSoftware+' => '其它软件',
	'Class:Software/Attribute:type/Value:PCSoftware' => 'PC 软件',
	'Class:Software/Attribute:type/Value:PCSoftware+' => 'PC 软件',
	'Class:Software/Attribute:type/Value:WebServer' => 'Web服务器',
	'Class:Software/Attribute:type/Value:WebServer+' => 'Web服务器',
	'Class:Software/Attribute:softwareinstance_list' => '软件实例',
	'Class:Software/Attribute:softwareinstance_list+' => '这个软件的所有软件实例',
	'Class:Software/Attribute:softwarepatch_list' => '软件补丁',
	'Class:Software/Attribute:softwarepatch_list+' => '这个软件的所有补丁',
	'Class:Software/Attribute:softwarelicence_list' => '软件Licences',
	'Class:Software/Attribute:softwarelicence_list+' => '这个软件的所有licences',
));

//
// Class: Patch
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Patch' => '补丁',
	'Class:Patch+' => '',
	'Class:Patch/Attribute:name' => '名称',
	'Class:Patch/Attribute:name+' => '',
	'Class:Patch/Attribute:documents_list' => '文档',
	'Class:Patch/Attribute:documents_list+' => '与这个补丁相关的所有文档',
	'Class:Patch/Attribute:description' => '描述',
	'Class:Patch/Attribute:description+' => '',
	'Class:Patch/Attribute:finalclass' => '类型',
	'Class:Patch/Attribute:finalclass+' => '',
));

//
// Class: OSPatch
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:OSPatch' => 'OS 补丁',
	'Class:OSPatch+' => '',
	'Class:OSPatch/Attribute:functionalcis_list' => '设备',
	'Class:OSPatch/Attribute:functionalcis_list+' => '这个补丁被安装的所有系统',
	'Class:OSPatch/Attribute:osversion_id' => 'OS 版本',
	'Class:OSPatch/Attribute:osversion_id+' => '',
	'Class:OSPatch/Attribute:osversion_name' => 'OS 版本名称',
	'Class:OSPatch/Attribute:osversion_name+' => '',
));

//
// Class: SoftwarePatch
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:SoftwarePatch' => '软件补丁',
	'Class:SoftwarePatch+' => '',
	'Class:SoftwarePatch/Attribute:software_id' => '软件',
	'Class:SoftwarePatch/Attribute:software_id+' => '',
	'Class:SoftwarePatch/Attribute:software_name' => '软件名称',
	'Class:SoftwarePatch/Attribute:software_name+' => '',
	'Class:SoftwarePatch/Attribute:softwareinstances_list' => '软件实例',
	'Class:SoftwarePatch/Attribute:softwareinstances_list+' => '这个软件补丁被安装的所有系统',
));

//
// Class: Licence
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Licence' => 'License',
	'Class:Licence+' => '',
	'Class:Licence/Attribute:name' => '名称',
	'Class:Licence/Attribute:name+' => '',
	'Class:Licence/Attribute:documents_list' => '文档',
	'Class:Licence/Attribute:documents_list+' => '与这个licence相关的所有文档',
	'Class:Licence/Attribute:org_id' => '组织',
	'Class:Licence/Attribute:org_id+' => '',
	'Class:Licence/Attribute:organization_name' => '组织名称',
	'Class:Licence/Attribute:organization_name+' => '普通名称',
	'Class:Licence/Attribute:usage_limit' => '使用限制',
	'Class:Licence/Attribute:usage_limit+' => '',
	'Class:Licence/Attribute:description' => '描述',
	'Class:Licence/Attribute:description+' => '',
	'Class:Licence/Attribute:start_date' => '起始日期',
	'Class:Licence/Attribute:start_date+' => '',
	'Class:Licence/Attribute:end_date' => '结束日期',
	'Class:Licence/Attribute:end_date+' => '',
	'Class:Licence/Attribute:licence_key' => '关键字',
	'Class:Licence/Attribute:licence_key+' => '',
	'Class:Licence/Attribute:perpetual' => '无限制',
	'Class:Licence/Attribute:perpetual+' => '',
	'Class:Licence/Attribute:perpetual/Value:no' => '不',
	'Class:Licence/Attribute:perpetual/Value:no+' => '不',
	'Class:Licence/Attribute:perpetual/Value:yes' => '是',
	'Class:Licence/Attribute:perpetual/Value:yes+' => '是',
	'Class:Licence/Attribute:finalclass' => '类型',
	'Class:Licence/Attribute:finalclass+' => '',
));

//
// Class: OSLicence
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:OSLicence' => 'OS Licence',
	'Class:OSLicence+' => '',
	'Class:OSLicence/Attribute:osversion_id' => 'OS 版本',
	'Class:OSLicence/Attribute:osversion_id+' => '',
	'Class:OSLicence/Attribute:osversion_name' => 'OS 版本名称',
	'Class:OSLicence/Attribute:osversion_name+' => '',
	'Class:OSLicence/Attribute:virtualmachines_list' => '虚拟机',
	'Class:OSLicence/Attribute:virtualmachines_list+' => '这个licence被使用的所有虚拟机',
	'Class:OSLicence/Attribute:servers_list' => '服务器',
	'Class:OSLicence/Attribute:servers_list+' => '这个licence被使用的所有服务器',
));

//
// Class: SoftwareLicence
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:SoftwareLicence' => '软件 Licence',
	'Class:SoftwareLicence+' => '',
	'Class:SoftwareLicence/Attribute:software_id' => '软件',
	'Class:SoftwareLicence/Attribute:software_id+' => '',
	'Class:SoftwareLicence/Attribute:software_name' => '软件名称',
	'Class:SoftwareLicence/Attribute:software_name+' => '',
	'Class:SoftwareLicence/Attribute:softwareinstance_list' => '软件实例',
	'Class:SoftwareLicence/Attribute:softwareinstance_list+' => '这个licence被使用的所有系统',
));

//
// Class: lnkDocumentToLicence
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkDocumentToLicence' => 'Link 文档 / Licence',
	'Class:lnkDocumentToLicence+' => '',
	'Class:lnkDocumentToLicence/Attribute:licence_id' => 'Licence',
	'Class:lnkDocumentToLicence/Attribute:licence_id+' => '',
	'Class:lnkDocumentToLicence/Attribute:licence_name' => 'Licence 名称',
	'Class:lnkDocumentToLicence/Attribute:licence_name+' => '',
	'Class:lnkDocumentToLicence/Attribute:document_id' => '文档',
	'Class:lnkDocumentToLicence/Attribute:document_id+' => '',
	'Class:lnkDocumentToLicence/Attribute:document_name' => '文档名称',
	'Class:lnkDocumentToLicence/Attribute:document_name+' => '',
));

//
// Class: Typology
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Typology' => 'Typology',
	'Class:Typology+' => '',
	'Class:Typology/Attribute:name' => '名称',
	'Class:Typology/Attribute:name+' => '',
	'Class:Typology/Attribute:finalclass' => '类型',
	'Class:Typology/Attribute:finalclass+' => '',
));

//
// Class: OSVersion
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:OSVersion' => 'OS 版本',
	'Class:OSVersion+' => '',
	'Class:OSVersion/Attribute:osfamily_id' => 'OS 家族',
	'Class:OSVersion/Attribute:osfamily_id+' => '',
	'Class:OSVersion/Attribute:osfamily_name' => 'OS 家族名称',
	'Class:OSVersion/Attribute:osfamily_name+' => '',
));

//
// Class: OSFamily
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:OSFamily' => 'OS 家族',
	'Class:OSFamily+' => '',
));

//
// Class: DocumentType
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:DocumentType' => '文档类型',
	'Class:DocumentType+' => '',
));

//
// Class: ContactType
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:ContactType' => '联系类型',
	'Class:ContactType+' => '',
));

//
// Class: Brand
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Brand' => '品牌',
	'Class:Brand+' => '',
	'Class:Brand/Attribute:physicaldevices_list' => '物理设备',
	'Class:Brand/Attribute:physicaldevices_list+' => '与这个品牌相符的所有物理设备',
));

//
// Class: Model
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Model' => '模型',
	'Class:Model+' => '',
	'Class:Model/Attribute:brand_id' => '品牌',
	'Class:Model/Attribute:brand_id+' => '',
	'Class:Model/Attribute:brand_name' => '品牌名称',
	'Class:Model/Attribute:brand_name+' => '',
	'Class:Model/Attribute:type' => '设备类型',
	'Class:Model/Attribute:type+' => '',
	'Class:Model/Attribute:type/Value:PowerSource' => '电源来源',
	'Class:Model/Attribute:type/Value:PowerSource+' => '电源来源',
	'Class:Model/Attribute:type/Value:DiskArray' => '磁盘阵列',
	'Class:Model/Attribute:type/Value:DiskArray+' => '磁盘阵列',
	'Class:Model/Attribute:type/Value:Enclosure' => '柜位',
	'Class:Model/Attribute:type/Value:Enclosure+' => '柜位',
	'Class:Model/Attribute:type/Value:IPPhone' => 'IP 电话',
	'Class:Model/Attribute:type/Value:IPPhone+' => 'IP 电话',
	'Class:Model/Attribute:type/Value:MobilePhone' => '移动电话',
	'Class:Model/Attribute:type/Value:MobilePhone+' => '移动电话',
	'Class:Model/Attribute:type/Value:NAS' => 'NAS',
	'Class:Model/Attribute:type/Value:NAS+' => 'NAS',
	'Class:Model/Attribute:type/Value:NetworkDevice' => '网络设备',
	'Class:Model/Attribute:type/Value:NetworkDevice+' => '网络设备',
	'Class:Model/Attribute:type/Value:PC' => 'PC',
	'Class:Model/Attribute:type/Value:PC+' => 'PC',
	'Class:Model/Attribute:type/Value:PDU' => 'PDU',
	'Class:Model/Attribute:type/Value:PDU+' => 'PDU',
	'Class:Model/Attribute:type/Value:Peripheral' => '外围设备',
	'Class:Model/Attribute:type/Value:Peripheral+' => '外围设备',
	'Class:Model/Attribute:type/Value:Printer' => '打印机',
	'Class:Model/Attribute:type/Value:Printer+' => '打印机',
	'Class:Model/Attribute:type/Value:Rack' => '机柜',
	'Class:Model/Attribute:type/Value:Rack+' => '机柜',
	'Class:Model/Attribute:type/Value:SANSwitch' => 'SAN 交换机',
	'Class:Model/Attribute:type/Value:SANSwitch+' => 'SAN 交换机',
	'Class:Model/Attribute:type/Value:Server' => '服务器',
	'Class:Model/Attribute:type/Value:Server+' => '服务器',
	'Class:Model/Attribute:type/Value:StorageSystem' => '存储系统',
	'Class:Model/Attribute:type/Value:StorageSystem+' => '存储系统',
	'Class:Model/Attribute:type/Value:Tablet' => '标牌',
	'Class:Model/Attribute:type/Value:Tablet+' => '标牌',
	'Class:Model/Attribute:type/Value:TapeLibrary' => '磁带库',
	'Class:Model/Attribute:type/Value:TapeLibrary+' => '磁带库',
	'Class:Model/Attribute:type/Value:Telephone' => '电话',
	'Class:Model/Attribute:type/Value:Telephone+' => '电话',
	'Class:Model/Attribute:physicaldevices_list' => '物理设备',
	'Class:Model/Attribute:physicaldevices_list+' => '与这个模型相关的所有物理设备',
));

//
// Class: NetworkDeviceType
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:NetworkDeviceType' => '网络设备类型',
	'Class:NetworkDeviceType+' => '',
	'Class:NetworkDeviceType/Attribute:networkdevicesdevices_list' => '网络设备',
	'Class:NetworkDeviceType/Attribute:networkdevicesdevices_list+' => '符合这个类型的所有物理设备',
));

//
// Class: IOSVersion
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:IOSVersion' => 'IOS 版本',
	'Class:IOSVersion+' => '',
	'Class:IOSVersion/Attribute:brand_id' => '品牌',
	'Class:IOSVersion/Attribute:brand_id+' => '',
	'Class:IOSVersion/Attribute:brand_name' => '品牌名称',
	'Class:IOSVersion/Attribute:brand_name+' => '',
));

//
// Class: lnkDocumentToPatch
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkDocumentToPatch' => 'Link 文档 / 补丁',
	'Class:lnkDocumentToPatch+' => '',
	'Class:lnkDocumentToPatch/Attribute:patch_id' => '补丁',
	'Class:lnkDocumentToPatch/Attribute:patch_id+' => '',
	'Class:lnkDocumentToPatch/Attribute:patch_name' => '补丁名称',
	'Class:lnkDocumentToPatch/Attribute:patch_name+' => '',
	'Class:lnkDocumentToPatch/Attribute:document_id' => '文档',
	'Class:lnkDocumentToPatch/Attribute:document_id+' => '',
	'Class:lnkDocumentToPatch/Attribute:document_name' => '文档名称',
	'Class:lnkDocumentToPatch/Attribute:document_name+' => '',
));

//
// Class: lnkSoftwareInstanceToSoftwarePatch
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkSoftwareInstanceToSoftwarePatch' => 'Link 软件实例 / 软件补丁',
	'Class:lnkSoftwareInstanceToSoftwarePatch+' => '',
	'Class:lnkSoftwareInstanceToSoftwarePatch/Attribute:softwarepatch_id' => '软件补丁',
	'Class:lnkSoftwareInstanceToSoftwarePatch/Attribute:softwarepatch_id+' => '',
	'Class:lnkSoftwareInstanceToSoftwarePatch/Attribute:softwarepatch_name' => '软件补丁名称',
	'Class:lnkSoftwareInstanceToSoftwarePatch/Attribute:softwarepatch_name+' => '',
	'Class:lnkSoftwareInstanceToSoftwarePatch/Attribute:softwareinstance_id' => '软件实例',
	'Class:lnkSoftwareInstanceToSoftwarePatch/Attribute:softwareinstance_id+' => '',
	'Class:lnkSoftwareInstanceToSoftwarePatch/Attribute:softwareinstance_name' => '软件实例名称',
	'Class:lnkSoftwareInstanceToSoftwarePatch/Attribute:softwareinstance_name+' => '',
));

//
// Class: lnkFunctionalCIToOSPatch
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkFunctionalCIToOSPatch' => 'Link 功能配置项 / OS 补丁',
	'Class:lnkFunctionalCIToOSPatch+' => '',
	'Class:lnkFunctionalCIToOSPatch/Attribute:ospatch_id' => 'OS 补丁',
	'Class:lnkFunctionalCIToOSPatch/Attribute:ospatch_id+' => '',
	'Class:lnkFunctionalCIToOSPatch/Attribute:ospatch_name' => 'OS 补丁名称',
	'Class:lnkFunctionalCIToOSPatch/Attribute:ospatch_name+' => '',
	'Class:lnkFunctionalCIToOSPatch/Attribute:functionalci_id' => '功能配置项',
	'Class:lnkFunctionalCIToOSPatch/Attribute:functionalci_id+' => '',
	'Class:lnkFunctionalCIToOSPatch/Attribute:functionalci_name' => '功能配置项名称',
	'Class:lnkFunctionalCIToOSPatch/Attribute:functionalci_name+' => '',
));

//
// Class: lnkDocumentToSoftware
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkDocumentToSoftware' => 'Link 文档 / 软件',
	'Class:lnkDocumentToSoftware+' => '',
	'Class:lnkDocumentToSoftware/Attribute:software_id' => '软件',
	'Class:lnkDocumentToSoftware/Attribute:software_id+' => '',
	'Class:lnkDocumentToSoftware/Attribute:software_name' => '软件名称',
	'Class:lnkDocumentToSoftware/Attribute:software_name+' => '',
	'Class:lnkDocumentToSoftware/Attribute:document_id' => '文档',
	'Class:lnkDocumentToSoftware/Attribute:document_id+' => '',
	'Class:lnkDocumentToSoftware/Attribute:document_name' => '文档名称',
	'Class:lnkDocumentToSoftware/Attribute:document_name+' => '',
));

//
// Class: lnkContactToFunctionalCI
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkContactToFunctionalCI' => 'Link 联系 / 功能配置项',
	'Class:lnkContactToFunctionalCI+' => '',
	'Class:lnkContactToFunctionalCI/Attribute:functionalci_id' => '功能配置项',
	'Class:lnkContactToFunctionalCI/Attribute:functionalci_id+' => '',
	'Class:lnkContactToFunctionalCI/Attribute:functionalci_name' => '功能配置项名称',
	'Class:lnkContactToFunctionalCI/Attribute:functionalci_name+' => '',
	'Class:lnkContactToFunctionalCI/Attribute:contact_id' => '联系',
	'Class:lnkContactToFunctionalCI/Attribute:contact_id+' => '',
	'Class:lnkContactToFunctionalCI/Attribute:contact_name' => '联系名称',
	'Class:lnkContactToFunctionalCI/Attribute:contact_name+' => '',
));

//
// Class: lnkDocumentToFunctionalCI
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkDocumentToFunctionalCI' => 'Link 文档 / 功能配置项',
	'Class:lnkDocumentToFunctionalCI+' => '',
	'Class:lnkDocumentToFunctionalCI/Attribute:functionalci_id' => '功能配置项',
	'Class:lnkDocumentToFunctionalCI/Attribute:functionalci_id+' => '',
	'Class:lnkDocumentToFunctionalCI/Attribute:functionalci_name' => '功能配置项名称',
	'Class:lnkDocumentToFunctionalCI/Attribute:functionalci_name+' => '',
	'Class:lnkDocumentToFunctionalCI/Attribute:document_id' => '文档',
	'Class:lnkDocumentToFunctionalCI/Attribute:document_id+' => '',
	'Class:lnkDocumentToFunctionalCI/Attribute:document_name' => '文档名称',
	'Class:lnkDocumentToFunctionalCI/Attribute:document_name+' => '',
));

//
// Class: Subnet
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Subnet' => '子网',
	'Class:Subnet+' => '',
	'Class:Subnet/Attribute:description' => '描述',
	'Class:Subnet/Attribute:description+' => '',
	'Class:Subnet/Attribute:org_id' => '拥有人组织',
	'Class:Subnet/Attribute:org_id+' => '',
	'Class:Subnet/Attribute:org_name' => '名称',
	'Class:Subnet/Attribute:org_name+' => '普通名称',
	'Class:Subnet/Attribute:ip' => 'IP',
	'Class:Subnet/Attribute:ip+' => '',
	'Class:Subnet/Attribute:ip_mask' => 'IP 掩码',
	'Class:Subnet/Attribute:ip_mask+' => '',
));

//
// Class: NetworkInterface
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:NetworkInterface' => '网络接口',
	'Class:NetworkInterface+' => '',
	'Class:NetworkInterface/Attribute:name' => '名称',
	'Class:NetworkInterface/Attribute:name+' => '',
	'Class:NetworkInterface/Attribute:finalclass' => '类型',
	'Class:NetworkInterface/Attribute:finalclass+' => '',
));

//
// Class: IPInterface
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:IPInterface' => 'IP 接口',
	'Class:IPInterface+' => '',
	'Class:IPInterface/Attribute:ipaddress' => 'IP 地址',
	'Class:IPInterface/Attribute:ipaddress+' => '',


	'Class:IPInterface/Attribute:macaddress' => 'MAC 地址',
	'Class:IPInterface/Attribute:macaddress+' => '',
	'Class:IPInterface/Attribute:comment' => '注释',
	'Class:IPInterface/Attribute:coment+' => '',
	'Class:IPInterface/Attribute:ipgateway' => 'IP 网关',
	'Class:IPInterface/Attribute:ipgateway+' => '',
	'Class:IPInterface/Attribute:ipmask' => 'IP 掩码',
	'Class:IPInterface/Attribute:ipmask+' => '',
	'Class:IPInterface/Attribute:speed' => '速率',
	'Class:IPInterface/Attribute:speed+' => '',
));

//
// Class: PhysicalInterface
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:PhysicalInterface' => '物理接口',
	'Class:PhysicalInterface+' => '',
	'Class:PhysicalInterface/Attribute:connectableci_id' => '设备',
	'Class:PhysicalInterface/Attribute:connectableci_id+' => '',
	'Class:PhysicalInterface/Attribute:connectableci_name' => '设备名称',
	'Class:PhysicalInterface/Attribute:connectableci_name+' => '',
));

//
// Class: LogicalInterface
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:LogicalInterface' => '逻辑接口',
	'Class:LogicalInterface+' => '',
	'Class:LogicalInterface/Attribute:virtualmachine_id' => '虚拟机',
	'Class:LogicalInterface/Attribute:virtualmachine_id+' => '',
	'Class:LogicalInterface/Attribute:virtualmachine_name' => '虚拟机名称',
	'Class:LogicalInterface/Attribute:virtualmachine_name+' => '',
));

//
// Class: FiberChannelInterface
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:FiberChannelInterface' => '光纤通道接口',
	'Class:FiberChannelInterface+' => '',
	'Class:FiberChannelInterface/Attribute:speed' => '速率',
	'Class:FiberChannelInterface/Attribute:speed+' => '',
	'Class:FiberChannelInterface/Attribute:topology' => '拓扑',
	'Class:FiberChannelInterface/Attribute:topology+' => '',
	'Class:FiberChannelInterface/Attribute:wwn' => 'WWN',
	'Class:FiberChannelInterface/Attribute:wwn+' => '',
	'Class:FiberChannelInterface/Attribute:datacenterdevice_id' => '设备',
	'Class:FiberChannelInterface/Attribute:datacenterdevice_id+' => '',
	'Class:FiberChannelInterface/Attribute:datacenterdevice_name' => '设备名称',
	'Class:FiberChannelInterface/Attribute:datacenterdevice_name+' => '',
));

//
// Class: lnkConnectableCIToNetworkDevice
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkConnectableCIToNetworkDevice' => 'Link 连接配置项 / 网络设备',
	'Class:lnkConnectableCIToNetworkDevice+' => '',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:networkdevice_id' => '网络设备',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:networkdevice_id+' => '',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:networkdevice_name' => '网络设备名称',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:networkdevice_name+' => '',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:connectableci_id' => '连接设备',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:connectableci_id+' => '',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:connectableci_name' => '连接设备名称',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:connectableci_name+' => '',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:network_port' => '网络端口',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:network_port+' => '',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:device_port' => '设备端口',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:device_port+' => '',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:connection_type' => '连接类型',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:connection_type+' => '',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:connection_type/Value:downlink' => 'down 链路',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:connection_type/Value:downlink+' => 'down 链路',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:connection_type/Value:uplink' => 'up 链路',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:connection_type/Value:uplink+' => 'up 链路',
));

//
// Class: lnkApplicationSolutionToFunctionalCI
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkApplicationSolutionToFunctionalCI' => 'Link 应用方案 / 功能配置项',
	'Class:lnkApplicationSolutionToFunctionalCI+' => '',
	'Class:lnkApplicationSolutionToFunctionalCI/Attribute:applicationsolution_id' => '应用方案',
	'Class:lnkApplicationSolutionToFunctionalCI/Attribute:applicationsolution_id+' => '',
	'Class:lnkApplicationSolutionToFunctionalCI/Attribute:applicationsolution_name' => '应用方案名称',
	'Class:lnkApplicationSolutionToFunctionalCI/Attribute:applicationsolution_name+' => '',
	'Class:lnkApplicationSolutionToFunctionalCI/Attribute:functionalci_id' => '功能配置项',
	'Class:lnkApplicationSolutionToFunctionalCI/Attribute:functionalci_id+' => '',
	'Class:lnkApplicationSolutionToFunctionalCI/Attribute:functionalci_name' => '功能配置项名称',
	'Class:lnkApplicationSolutionToFunctionalCI/Attribute:functionalci_name+' => '',
));

//
// Class: lnkApplicationSolutionToBusinessProcess
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkApplicationSolutionToBusinessProcess' => 'Link 应用方案 / 业务流程',
	'Class:lnkApplicationSolutionToBusinessProcess+' => '',
	'Class:lnkApplicationSolutionToBusinessProcess/Attribute:businessprocess_id' => '业务流程',
	'Class:lnkApplicationSolutionToBusinessProcess/Attribute:businessprocess_id+' => '',
	'Class:lnkApplicationSolutionToBusinessProcess/Attribute:businessprocess_name' => '业务流程名称',
	'Class:lnkApplicationSolutionToBusinessProcess/Attribute:businessprocess_name+' => '',
	'Class:lnkApplicationSolutionToBusinessProcess/Attribute:applicationsolution_id' => '应用方案',
	'Class:lnkApplicationSolutionToBusinessProcess/Attribute:applicationsolution_id+' => '',
	'Class:lnkApplicationSolutionToBusinessProcess/Attribute:applicationsolution_name' => '应用方案名称',
	'Class:lnkApplicationSolutionToBusinessProcess/Attribute:applicationsolution_name+' => '',
));

//
// Class: lnkPersonToTeam
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkPersonToTeam' => 'Link 成员 / 团队',
	'Class:lnkPersonToTeam+' => '',
	'Class:lnkPersonToTeam/Attribute:team_id' => '团队',
	'Class:lnkPersonToTeam/Attribute:team_id+' => '',
	'Class:lnkPersonToTeam/Attribute:team_name' => '团队名称',
	'Class:lnkPersonToTeam/Attribute:team_name+' => '',
	'Class:lnkPersonToTeam/Attribute:person_id' => '成员',
	'Class:lnkPersonToTeam/Attribute:person_id+' => '',
	'Class:lnkPersonToTeam/Attribute:person_name' => '成员名称',
	'Class:lnkPersonToTeam/Attribute:person_name+' => '',
	'Class:lnkPersonToTeam/Attribute:role_id' => '角色',
	'Class:lnkPersonToTeam/Attribute:role_id+' => '',
	'Class:lnkPersonToTeam/Attribute:role_name' => '角色名称',
	'Class:lnkPersonToTeam/Attribute:role_name+' => '',
));

//
// Class: Group
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Group' => '组',
	'Class:Group+' => '',
	'Class:Group/Attribute:name' => '名称',
	'Class:Group/Attribute:name+' => '',
	'Class:Group/Attribute:status' => '状态',
	'Class:Group/Attribute:status+' => '',
	'Class:Group/Attribute:status/Value:implementation' => '实施',
	'Class:Group/Attribute:status/Value:implementation+' => '实施',
	'Class:Group/Attribute:status/Value:obsolete' => '废弃',
	'Class:Group/Attribute:status/Value:obsolete+' => '废弃',
	'Class:Group/Attribute:status/Value:production' => '生产',
	'Class:Group/Attribute:status/Value:production+' => '生产',
	'Class:Group/Attribute:org_id' => '组织',
	'Class:Group/Attribute:org_id+' => '',
	'Class:Group/Attribute:owner_name' => '名称',
	'Class:Group/Attribute:owner_name+' => '普通名称',
	'Class:Group/Attribute:description' => '描述',
	'Class:Group/Attribute:description+' => '',
	'Class:Group/Attribute:type' => '类型',
	'Class:Group/Attribute:type+' => '',
	'Class:Group/Attribute:parent_id' => '父组',

	'Class:Group/Attribute:parent_id+' => '',
	'Class:Group/Attribute:parent_name' => '名称',
	'Class:Group/Attribute:parent_name+' => '',
	'Class:Group/Attribute:ci_list' => '链接配置项',
	'Class:Group/Attribute:ci_list+' => '链接到该组的所有配置项',
	'Class:Group/Attribute:parent_id_friendlyname' => '父组',
	'Class:Group/Attribute:parent_id_friendlyname+' => '',
));

//
// Class: lnkGroupToCI
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkGroupToCI' => 'Link 组 / 配置项',
	'Class:lnkGroupToCI+' => '',
	'Class:lnkGroupToCI/Attribute:group_id' => '组',
	'Class:lnkGroupToCI/Attribute:group_id+' => '',
	'Class:lnkGroupToCI/Attribute:group_name' => '名称',
	'Class:lnkGroupToCI/Attribute:group_name+' => '',
	'Class:lnkGroupToCI/Attribute:ci_id' => '配置项',
	'Class:lnkGroupToCI/Attribute:ci_id+' => '',
	'Class:lnkGroupToCI/Attribute:ci_name' => '名称',
	'Class:lnkGroupToCI/Attribute:ci_name+' => '',
	'Class:lnkGroupToCI/Attribute:reason' => '原因',
	'Class:lnkGroupToCI/Attribute:reason+' => '',
));


//
// Application Menu
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
'Menu:Catalogs' => '目录',
'Menu:Catalogs+' => '数据类型',
'Menu:Audit' => '审计',
'Menu:Audit+' => '审计',
'Menu:Organization' => '组织',
'Menu:Organization+' => '所有组织',
'Menu:Application' => '应用',
'Menu:Application+' => '所有应用',
'Menu:DBServer' => '数据库服务器',
'Menu:DBServer+' => '数据库服务器',
'Menu:Audit' => '审计',
'Menu:ConfigManagement' => '配置管理',
'Menu:ConfigManagement+' => '配置管理',
'Menu:ConfigManagementOverview' => '概览',
'Menu:ConfigManagementOverview+' => '概览',
'Menu:Contact' => '联系',
'Menu:Contact+' => '联系',
'Menu:Person' => '成员',
'Menu:Person+' => '所有成员',
'Menu:Team' => '团队',
'Menu:Team+' => '所有团队',
'Menu:Document' => '文档',
'Menu:Document+' => '所有文档',
'Menu:Location' => '位置',
'Menu:Location+' => '所有位置',
'Menu:ConfigManagementCI' => '配置项',
'Menu:ConfigManagementCI+' => '配置项',
'Menu:BusinessProcess' => '业务流程',
'Menu:BusinessProcess+' => '所有业务流程',
'Menu:ApplicationSolution' => '应用解决方案',
'Menu:ApplicationSolution+' => '所有应用解决方案',
'Menu:ConfigManagementSoftware' => '应用管理',
'Menu:Licence' => 'Licences',
'Menu:Licence+' => '所有licences',
'Menu:Patch' => '补丁',
'Menu:Patch+' => '所有补丁',
'Menu:ApplicationInstance' => '安装软件',
'Menu:ApplicationInstance+' => '应用和数据库服务器',
'Menu:ConfigManagementHardware' => '基础架构管理',
'Menu:Subnet' => '子网',
'Menu:Subnet+' => '所有子网',
'Menu:NetworkDevice' => '网络设备',
'Menu:NetworkDevice+' => '所有网络设备',
'Menu:Server' => '服务器',
'Menu:Server+' => '所有服务器',
'Menu:Printer' => '打印机',
'Menu:Printer+' => '所有打印机',
'Menu:MobilePhone' => '移动电话',
'Menu:MobilePhone+' => '所有移动电话',
'Menu:PC' => '个人计算机',
'Menu:PC+' => '所有个人计算机',
'Menu:NewContact' => '新联系人',
'Menu:NewContact+' => '新联系人',
'Menu:SearchContacts' => '搜索联系人',
'Menu:SearchContacts+' => '搜索联系人',
'Menu:NewCI' => '新配置项',
'Menu:NewCI+' => '新配置项',
'Menu:SearchCIs' => '搜索配置项',
'Menu:SearchCIs+' => '搜索配置项',
'Menu:ConfigManagement:Devices' => '设备',
'Menu:ConfigManagement:AllDevices' => '基础架构',
'Menu:ConfigManagement:virtualization' => '虚拟化',
'Menu:ConfigManagement:EndUsers' => '终端用户设备',
'Menu:ConfigManagement:SWAndApps' => '软件和应用',
'Menu:ConfigManagement:Misc' => '综合项',
'Menu:Group' => '组的配置项',
'Menu:Group+' => '组的配置项',
'Menu:ConfigManagement:Shortcuts' => '快捷方式',
'Menu:ConfigManagement:AllContacts' => '所有联系人: %1$d',
'Menu:Typology' => '类型配置',
'Menu:Typology+' => '类型配置',
'Menu:OSVersion' => 'OS 版本',
'Menu:OSVersion+' => '',
'Menu:Software' => '软件目录',
'Menu:Software+' => '软件目录',
'UI_WelcomeMenu_AllConfigItems' => '概要',
'Menu:ConfigManagement:Typology' => '类型配置',

));


// Add translation for Fieldsets

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
'Server:baseinfo' => '一般信息',
'Server:Date' => '日期',
'Server:moreinfo' => '更多信息',
'Server:otherinfo' => '其它信息',
'Person:info' => '一般信息',
'Person:notifiy' => '通知',
'Class:Subnet/Tab:IPUsage' => 'IP 用法',
'Class:Subnet/Tab:IPUsage-explain' => '接口IP范围: <em>%1$s</em> 到 <em>%2$s</em>',
'Class:Subnet/Tab:FreeIPs' => '可用 IPs',
'Class:Subnet/Tab:FreeIPs-count' => '可用 IPs: %1$s',
'Class:Subnet/Tab:FreeIPs-explain' => '这里选取了 10 个可用 IP 地址',
));
?>
