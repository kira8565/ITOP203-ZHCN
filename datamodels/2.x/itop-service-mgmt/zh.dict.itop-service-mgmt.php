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
 * @author      lz@ijz.me 
 * @copyright   Copyright (C) 2010-2012 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

// Dictionnay conventions
// Class:<class_name>
// Class:<class_name>+
// Class:<class_name>/Attribute:<attribute_code>
// Class:<class_name>/Attribute:<attribute_code>+
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>+
// Class:<class_name>/Stimulus:<stimulus_code>
// Class:<class_name>/Stimulus:<stimulus_code>+


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
'Menu:ServiceManagement' => '服务管理',
'Menu:ServiceManagement+' => '服务管理概览',
'Menu:Service:Overview' => '概览',
'Menu:Service:Overview+' => '',
'UI-ServiceManagementMenu-ContractsBySrvLevel' => '按服务层级划分合同',
'UI-ServiceManagementMenu-ContractsByStatus' => '按状态划分合同',
'UI-ServiceManagementMenu-ContractsEndingIn30Days' => '合同30天内终止',

'Menu:ServiceType' => '服务类型',
'Menu:ServiceType+' => '服务类型',
'Menu:ProviderContract' => '供应商合同',
'Menu:ProviderContract+' => '供应商合同',
'Menu:CustomerContract' => '客户合同',
'Menu:CustomerContract+' => '客户合同',
'Menu:ServiceSubcategory' => '服务子类',
'Menu:ServiceSubcategory+' => '服务子类',
'Menu:Service' => '服务',
'Menu:Service+' => '服务',
'Menu:ServiceElement' => '服务单元',
'Menu:ServiceElement+' => '服务单元',
'Menu:SLA' => 'SLAs',
'Menu:SLA+' => '服务级别协议',
'Menu:SLT' => 'SLTs',
'Menu:SLT+' => '服务级别目标',
'Menu:DeliveryModel' => '交付模式',
'Menu:DeliveryModel+' => '交付模式',
'Menu:ServiceFamily' => '服务族',
'Menu:ServiceFamily+' => '服务族',
'Menu:Procedure' => '程序分类',
'Menu:Procedure+' => '所有程序分类',

));

//
// Class: Organization
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Organization/Attribute:deliverymodel_id' => '交付模式',
	'Class:Organization/Attribute:deliverymodel_id+' => '',
	'Class:Organization/Attribute:deliverymodel_name' => '交付模式名称',

));


//
// Class: ContractType
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:ContractType' => '合同类型',
	'Class:ContractType+' => '',
));

//
// Class: Contract
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Contract' => '合同',
	'Class:Contract+' => '',
	'Class:Contract/Attribute:name' => '名称',
	'Class:Contract/Attribute:name+' => '',
	'Class:Contract/Attribute:org_id' => '客户',
	'Class:Contract/Attribute:org_id+' => '',
	'Class:Contract/Attribute:organization_name' => '客户名',
	'Class:Contract/Attribute:organization_name+' => '常用名',
	'Class:Contract/Attribute:contacts_list' => '合同',
	'Class:Contract/Attribute:contacts_list+' => '此客户合同的所有合同',
	'Class:Contract/Attribute:documents_list' => '文档',
	'Class:Contract/Attribute:documents_list+' => '此客户合同的所有文档',
	'Class:Contract/Attribute:description' => '描述',
	'Class:Contract/Attribute:description+' => '',
	'Class:Contract/Attribute:start_date' => '启始日期',
	'Class:Contract/Attribute:start_date+' => '',
	'Class:Contract/Attribute:end_date' => '截止日期',
	'Class:Contract/Attribute:end_date+' => '',
	'Class:Contract/Attribute:cost' => '费用',
	'Class:Contract/Attribute:cost+' => '',
	'Class:Contract/Attribute:cost_currency' => '费用货币',
	'Class:Contract/Attribute:cost_currency+' => '',
	'Class:Contract/Attribute:cost_currency/Value:dollars' => '美元',
	'Class:Contract/Attribute:cost_currency/Value:dollars+' => '',
	'Class:Contract/Attribute:cost_currency/Value:euros' => '欧元',
	'Class:Contract/Attribute:cost_currency/Value:euros+' => '',
	'Class:Contract/Attribute:contracttype_id' => '合同类型',
	'Class:Contract/Attribute:contracttype_id+' => '',
	'Class:Contract/Attribute:contracttype_name' => '合同类型名称',
	'Class:Contract/Attribute:contracttype_name+' => '',
	'Class:Contract/Attribute:billing_frequency' => '付款周期',
	'Class:Contract/Attribute:billing_frequency+' => '',
	'Class:Contract/Attribute:cost_unit' => 'Cost unit',
	'Class:Contract/Attribute:cost_unit+' => '',
	'Class:Contract/Attribute:provider_id' => '供应商',
	'Class:Contract/Attribute:provider_id+' => '',
	'Class:Contract/Attribute:provider_name' => '供应商名',
	'Class:Contract/Attribute:provider_name+' => '通用名称',
	'Class:Contract/Attribute:status' => '状态',
	'Class:Contract/Attribute:status+' => '',
	'Class:Contract/Attribute:status/Value:implementation' => '启用',
	'Class:Contract/Attribute:status/Value:implementation+' => '启用',
	'Class:Contract/Attribute:status/Value:obsolete' => '废弃',
	'Class:Contract/Attribute:status/Value:obsolete+' => '废弃',
	'Class:Contract/Attribute:status/Value:production' => '在线',
	'Class:Contract/Attribute:status/Value:production+' => '在线',
	'Class:Contract/Attribute:finalclass' => '类型',
	'Class:Contract/Attribute:finalclass+' => '',
));

//
// Class: ProviderContract
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:ProviderContract' => '供应商合同',
	'Class:ProviderContract+' => '',
	'Class:ProviderContract/Attribute:functionalcis_list' => '配置项',
	'Class:ProviderContract/Attribute:functionalcis_list+' => '此供应商合同包含的配置项列表',
	'Class:ProviderContract/Attribute:sla' => '服务级别协议',
	'Class:ProviderContract/Attribute:sla+' => '服务级别协议',
	'Class:ProviderContract/Attribute:coverage' => '服务小时数',
	'Class:ProviderContract/Attribute:coverage+' => '',
	'Class:ProviderContract/Attribute:contracttype_id' => '合同类型',
	'Class:ProviderContract/Attribute:contracttype_id+' => '',
	'Class:ProviderContract/Attribute:contracttype_name' => '合同类型名',
	'Class:ProviderContract/Attribute:contracttype_name+' => '',
));

//
// Class: CustomerContract
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:CustomerContract' => '客户合同',
	'Class:CustomerContract+' => '',
	'Class:CustomerContract/Attribute:services_list' => 'Services',
	'Class:CustomerContract/Attribute:services_list+' => 'All the services purchased for this contract',
));



//
// Class: lnkContactToContract
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkContactToContract' => '链接联系人 / 合同',
	'Class:lnkContactToContract+' => '',
	'Class:lnkContactToContract/Attribute:contract_id' => '合同',
	'Class:lnkContactToContract/Attribute:contract_id+' => '',
	'Class:lnkContactToContract/Attribute:contract_name' => '合同名',
	'Class:lnkContactToContract/Attribute:contract_name+' => '',
	'Class:lnkContactToContract/Attribute:contact_id' => '联系人',
	'Class:lnkContactToContract/Attribute:contact_id+' => '',
	'Class:lnkContactToContract/Attribute:contact_name' => '联系人姓名',
	'Class:lnkContactToContract/Attribute:contact_name+' => '',
));

//
// Class: lnkContractToDocument
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkContractToDocument' => '链接合同 / 文档',
	'Class:lnkContractToDocument+' => '',
	'Class:lnkContractToDocument/Attribute:contract_id' => '合同',
	'Class:lnkContractToDocument/Attribute:contract_id+' => '',
	'Class:lnkContractToDocument/Attribute:contract_name' => '合同名',
	'Class:lnkContractToDocument/Attribute:contract_name+' => '',
	'Class:lnkContractToDocument/Attribute:document_id' => '文档',
	'Class:lnkContractToDocument/Attribute:document_id+' => '',
	'Class:lnkContractToDocument/Attribute:document_name' => '文档名',
	'Class:lnkContractToDocument/Attribute:document_name+' => '',
));

//
// Class: lnkFunctionalCIToProviderContract
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkFunctionalCIToProviderContract' => '链接功能配置项 / 供应商合同',
	'Class:lnkFunctionalCIToProviderContract+' => '',
	'Class:lnkFunctionalCIToProviderContract/Attribute:providercontract_id' => '供应商合同',
	'Class:lnkFunctionalCIToProviderContract/Attribute:providercontract_id+' => '',
	'Class:lnkFunctionalCIToProviderContract/Attribute:providercontract_name' => '供应商合同名',
	'Class:lnkFunctionalCIToProviderContract/Attribute:providercontract_name+' => '',
	'Class:lnkFunctionalCIToProviderContract/Attribute:functionalci_id' => '配置项',
	'Class:lnkFunctionalCIToProviderContract/Attribute:functionalci_id+' => '',
	'Class:lnkFunctionalCIToProviderContract/Attribute:functionalci_name' => '配置项名称',
	'Class:lnkFunctionalCIToProviderContract/Attribute:functionalci_name+' => '',
));


//
// Class: ServiceFamily
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:ServiceFamily' => '服务族',
	'Class:ServiceFamily+' => '',
	'Class:ServiceFamily/Attribute:name' => '名称',
	'Class:ServiceFamily/Attribute:name+' => '',
	'Class:ServiceFamily/Attribute:services_list' => '服务',
	'Class:ServiceFamily/Attribute:services_list+' => '本分类下所有服务',
));

//


//
// Class: Service
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Service' => '服务',
	'Class:Service+' => '',
	'Class:Service/Attribute:name' => '名称',
	'Class:Service/Attribute:name+' => '',
	'Class:Service/Attribute:org_id' => '供应商',
	'Class:Service/Attribute:org_id+' => '',
	'Class:Service/Attribute:provider_name' => '供应商',
	'Class:Service/Attribute:provider_name+' => '',
	'Class:Service/Attribute:name' => '名称',
	'Class:Service/Attribute:name+' => '',
	'Class:Service/Attribute:description' => '描述',
	'Class:Service/Attribute:description+' => '',
	'Class:Service/Attribute:type' => '类型',
	'Class:Service/Attribute:type+' => '',
	'Class:Service/Attribute:type/Value:IncidentManagement' => '事件管理',
	'Class:Service/Attribute:type/Value:IncidentManagement+' => '事件管理',
	'Class:Service/Attribute:type/Value:RequestManagement' => '请求管理',
	'Class:Service/Attribute:type/Value:RequestManagement+' => '请求管理',
	'Class:Service/Attribute:status' => '状态',
	'Class:Service/Attribute:status+' => '',
	'Class:Service/Attribute:status/Value:design' => '设计',
	'Class:Service/Attribute:status/Value:design+' => '',
	'Class:Service/Attribute:status/Value:obsolete' => '废弃',
	'Class:Service/Attribute:status/Value:obsolete+' => '',
	'Class:Service/Attribute:status/Value:production' => '生产',
	'Class:Service/Attribute:status/Value:production+' => '',
	'Class:Service/Attribute:customercontracts_list' => '客户合同',
	'Class:Service/Attribute:customercontracts_list+' => '所有购买此服务的客户合同',
	'Class:Service/Attribute:providercontracts_list' => '供应商合同',
	'Class:Service/Attribute:providercontracts_list+' => '所有支持此服务的供应商合同',
	'Class:Service/Attribute:functionalcis_list' => '依赖配置项',
	'Class:Service/Attribute:functionalcis_list+' => '所有用处此服务的配置项列表',
	'Class:Service/Attribute:servicesubcategories_list' => '子服务',
	'Class:Service/Attribute:servicesubcategories_list+' => '此服务的所有子服务',
));



//
// Class: lnkDocumentToService
//


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkDocumentToService' => '链接文档 / 服务',
	'Class:lnkDocumentToService+' => '',
	'Class:lnkDocumentToService/Attribute:service_id' => '服务',
	'Class:lnkDocumentToService/Attribute:service_id+' => '',
	'Class:lnkDocumentToService/Attribute:service_name' => '服务名',
	'Class:lnkDocumentToService/Attribute:service_name+' => '',
	'Class:lnkDocumentToService/Attribute:document_id' => '文档',
	'Class:lnkDocumentToService/Attribute:document_id+' => '',
	'Class:lnkDocumentToService/Attribute:document_name' => '文档名',
	'Class:lnkDocumentToService/Attribute:document_name+' => '',
));

//
// Class: lnkContactToService
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkContactToService' => '链接联系人/ 服务',
	'Class:lnkContactToService+' => '',
	'Class:lnkContactToService/Attribute:service_id' => '服务',
	'Class:lnkContactToService/Attribute:service_id+' => '',
	'Class:lnkContactToService/Attribute:service_name' => '服务名',
	'Class:lnkContactToService/Attribute:service_name+' => '',
	'Class:lnkContactToService/Attribute:contact_id' => '联系人',
	'Class:lnkContactToService/Attribute:contact_id+' => '',
	'Class:lnkContactToService/Attribute:contact_name' => '联系人姓名',
	'Class:lnkContactToService/Attribute:contact_name+' => '',
));

//
// Class: ServiceSubcategory
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:ServiceSubcategory' => '服务子类',
	'Class:ServiceSubcategory+' => '',
	'Class:ServiceSubcategory/Attribute:name' => '名称',
	'Class:ServiceSubcategory/Attribute:name+' => '',
	'Class:ServiceSubcategory/Attribute:description' => '描述',
	'Class:ServiceSubcategory/Attribute:description+' => '',
	'Class:ServiceSubcategory/Attribute:service_id' => '服务',
	'Class:ServiceSubcategory/Attribute:service_id+' => '',
	'Class:ServiceSubcategory/Attribute:service_name' => '服务',
	'Class:ServiceSubcategory/Attribute:service_name+' => '',
	'Class:ServiceSubcategory/Attribute:request_type' => '请求类型',
	'Class:ServiceSubcategory/Attribute:request_type+' => '',
	'Class:ServiceSubcategory/Attribute:request_type/Value:incident' => '事件',
	'Class:ServiceSubcategory/Attribute:request_type/Value:incident+' => '事件',
	'Class:ServiceSubcategory/Attribute:request_type/Value:service_request' => '服务请求',
	'Class:ServiceSubcategory/Attribute:request_type/Value:service_request+' => '服务请求',
	'Class:ServiceSubcategory/Attribute:status' => '状态',
	'Class:ServiceSubcategory/Attribute:status+' => '',
	'Class:ServiceSubcategory/Attribute:status/Value:implementation' => '启用',
	'Class:ServiceSubcategory/Attribute:status/Value:implementation+' => '启用',
	'Class:ServiceSubcategory/Attribute:status/Value:obsolete' => '废弃',
	'Class:ServiceSubcategory/Attribute:status/Value:obsolete+' => '废弃',
	'Class:ServiceSubcategory/Attribute:status/Value:production' => '在线',
	'Class:ServiceSubcategory/Attribute:status/Value:production+' => '在线',
));

//
// Class: SLA
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:SLA' => 'SLA',
	'Class:SLA+' => '',
	'Class:SLA/Attribute:name' => '名称',
	'Class:SLA/Attribute:name+' => '',
	'Class:SLA/Attribute:description' => '描述',
	'Class:SLA/Attribute:description+' => '',
	'Class:SLA/Attribute:org_id' => '供应商',
	'Class:SLA/Attribute:org_id+' => '',
	'Class:SLA/Attribute:organization_name' => '供应商名称',
	'Class:SLA/Attribute:organization_name+' => '常用名',
	'Class:SLA/Attribute:slt_list' => '服务级别目标',
	'Class:SLA/Attribute:slt_list+' => '关于这个服务级别协议的所有服务级别目标',
	'Class:SLA/Attribute:customercontracts_list' => '客户合同',
	'Class:SLA/Attribute:customercontracts_list+' => '该SLA使用的所有客户合同',
));

//
// Class: SLT
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:SLT' => '服务级别目标',
	'Class:SLT+' => '',
	'Class:SLT/Attribute:name' => '名称',
	'Class:SLT/Attribute:name+' => '',
	'Class:SLT/Attribute:priority' => '优先级',
	'Class:SLT/Attribute:priority+' => '',
	'Class:SLT/Attribute:priority/Value:1' => '紧急',
	'Class:SLT/Attribute:priority/Value:1+' => '紧急',
	'Class:SLT/Attribute:priority/Value:2' => '高',
	'Class:SLT/Attribute:priority/Value:2+' => '高',
	'Class:SLT/Attribute:priority/Value:3' => '中',
	'Class:SLT/Attribute:priority/Value:3+' => '中',
	'Class:SLT/Attribute:priority/Value:4' => '低',
	'Class:SLT/Attribute:priority/Value:4+' => '低',	
	'Class:SLT/Attribute:request_type' => '请求类型',
	'Class:SLT/Attribute:request_type+' => '',
	'Class:SLT/Attribute:request_type/Value:incident' => '事件',
	'Class:SLT/Attribute:request_type/Value:incident+' => '事件',
	'Class:SLT/Attribute:request_type/Value:service_request' => '服务请求',
	'Class:SLT/Attribute:request_type/Value:service_request+' => '服务请求',
	'Class:SLT/Attribute:metric' => '度量',
	'Class:SLT/Attribute:metric+' => '',
	'Class:SLT/Attribute:metric/Value:tto' => 'TTO',
	'Class:SLT/Attribute:metric/Value:tto+' => 'TTO',
	'Class:SLT/Attribute:metric/Value:ttr' => 'TTR',
	'Class:SLT/Attribute:metric/Value:ttr+' => 'TTR',
	'Class:SLT/Attribute:value' => '值',
	'Class:SLT/Attribute:value+' => '',
	'Class:SLT/Attribute:value_unit' => '单位',
	'Class:SLT/Attribute:value_unit+' => '',
	'Class:SLT/Attribute:value_unit/Value:hours' => '小时',
	'Class:SLT/Attribute:value_unit/Value:hours+' => '小时',
	'Class:SLT/Attribute:value_unit/Value:minutes' => '分钟',
	'Class:SLT/Attribute:value_unit/Value:minutes+' => '分钟',
));

//
// Class: lnkSLTToSLA
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkSLTToSLA' => '目标/协议',
	'Class:lnkSLTToSLA+' => '',
	'Class:lnkSLTToSLA/Attribute:sla_id' => '服务级别协议',
	'Class:lnkSLTToSLA/Attribute:sla_id+' => '',
	'Class:lnkSLTToSLA/Attribute:sla_name' => '服务级别协议',
	'Class:lnkSLTToSLA/Attribute:sla_name+' => '',
	'Class:lnkSLTToSLA/Attribute:slt_id' => '服务级别目标',
	'Class:lnkSLTToSLA/Attribute:slt_id+' => '',
	'Class:lnkSLTToSLA/Attribute:slt_name' => '服务级别目标',
	'Class:lnkSLTToSLA/Attribute:slt_name+' => '',
	'Class:lnkSLTToSLA/Attribute:slt_metric' => '度量',
	'Class:lnkSLTToSLA/Attribute:slt_metric+' => '',
	'Class:lnkSLTToSLA/Attribute:slt_ticket_priority' => '单据优先级',
	'Class:lnkSLTToSLA/Attribute:slt_ticket_priority+' => '',
	'Class:lnkSLTToSLA/Attribute:slt_value' => '值',
	'Class:lnkSLTToSLA/Attribute:slt_value+' => '',
	'Class:lnkSLTToSLA/Attribute:slt_value_unit' => '单位',
	'Class:lnkSLTToSLA/Attribute:slt_value_unit+' => '',
));

//
// Class: lnkCustomerContractToService
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkCustomerContractToService' => '链接客户合同 / 服务',
	'Class:lnkCustomerContractToService+' => '',
	'Class:lnkCustomerContractToService/Attribute:customercontract_id' => '客户合同',
	'Class:lnkCustomerContractToService/Attribute:customercontract_id+' => '',
	'Class:lnkCustomerContractToService/Attribute:customercontract_name' => '客户合同名',
	'Class:lnkCustomerContractToService/Attribute:customercontract_name+' => '',
	'Class:lnkCustomerContractToService/Attribute:service_id' => '服务',
	'Class:lnkCustomerContractToService/Attribute:service_id+' => '',
	'Class:lnkCustomerContractToService/Attribute:service_name' => '服务名',
	'Class:lnkCustomerContractToService/Attribute:service_name+' => '',
	'Class:lnkCustomerContractToService/Attribute:sla_id' => 'SLA',
	'Class:lnkCustomerContractToService/Attribute:sla_id+' => '',
	'Class:lnkCustomerContractToService/Attribute:sla_name' => 'SLA 名',
	'Class:lnkCustomerContractToService/Attribute:sla_name+' => '',
));

//
// Class: lnkProviderContractToService
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkProviderContractToService' => '链接供应商合同 / 服务',
	'Class:lnkProviderContractToService+' => '',
	'Class:lnkProviderContractToService/Attribute:service_id' => '服务',
	'Class:lnkProviderContractToService/Attribute:service_id+' => '',
	'Class:lnkProviderContractToService/Attribute:service_name' => '服务名',
	'Class:lnkProviderContractToService/Attribute:service_name+' => '',
	'Class:lnkProviderContractToService/Attribute:providercontract_id' => '供应商合同',
	'Class:lnkProviderContractToService/Attribute:providercontract_id+' => '',
	'Class:lnkProviderContractToService/Attribute:providercontract_name' => '供应商合同名',
	'Class:lnkProviderContractToService/Attribute:providercontract_name+' => '',
));

//
// Class: lnkFunctionalCIToService
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkFunctionalCIToService' => '链接功能配置项/ 服务',
	'Class:lnkFunctionalCIToService+' => '',
	'Class:lnkFunctionalCIToService/Attribute:service_id' => '服务',
	'Class:lnkFunctionalCIToService/Attribute:service_id+' => '',
	'Class:lnkFunctionalCIToService/Attribute:service_name' => '服务名',
	'Class:lnkFunctionalCIToService/Attribute:service_name+' => '',
	'Class:lnkFunctionalCIToService/Attribute:functionalci_id' => '配置项',
	'Class:lnkFunctionalCIToService/Attribute:functionalci_id+' => '',
	'Class:lnkFunctionalCIToService/Attribute:functionalci_name' => '配置项名称',
	'Class:lnkFunctionalCIToService/Attribute:functionalci_name+' => '',
));

//
// Class: DeliveryModel
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:DeliveryModel' => '交付模式',
	'Class:DeliveryModel+' => '',
	'Class:DeliveryModel/Attribute:name' => '名称',
	'Class:DeliveryModel/Attribute:name+' => '',
	'Class:DeliveryModel/Attribute:org_id' => '组织',
	'Class:DeliveryModel/Attribute:org_id+' => '',
	'Class:DeliveryModel/Attribute:organization_name' => '组织名',
	'Class:DeliveryModel/Attribute:organization_name+' => '通用名',
	'Class:DeliveryModel/Attribute:description' => '描述',
	'Class:DeliveryModel/Attribute:description+' => '',
	'Class:DeliveryModel/Attribute:contacts_list' => '联系人',
	'Class:DeliveryModel/Attribute:contacts_list+' => '此交付模式所有联系人(团队或者个人)',
	'Class:DeliveryModel/Attribute:customers_list' => '客户',
	'Class:DeliveryModel/Attribute:customers_list+' => '此交付模式所有的客户',
));

//
// Class: lnkDeliveryModelToContact
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkDeliveryModelToContact' => '链接交付模式 / 联系人',
	'Class:lnkDeliveryModelToContact+' => '',
	'Class:lnkDeliveryModelToContact/Attribute:deliverymodel_id' => '交付模式',
	'Class:lnkDeliveryModelToContact/Attribute:deliverymodel_id+' => '',
	'Class:lnkDeliveryModelToContact/Attribute:deliverymodel_name' => '交付模式名',
	'Class:lnkDeliveryModelToContact/Attribute:deliverymodel_name+' => '',
	'Class:lnkDeliveryModelToContact/Attribute:contact_id' => '联系人',
	'Class:lnkDeliveryModelToContact/Attribute:contact_id+' => '',
	'Class:lnkDeliveryModelToContact/Attribute:contact_name' => '联系人姓名',
	'Class:lnkDeliveryModelToContact/Attribute:contact_name+' => '',
	'Class:lnkDeliveryModelToContact/Attribute:role_id' => '角色',
	'Class:lnkDeliveryModelToContact/Attribute:role_id+' => '',
	'Class:lnkDeliveryModelToContact/Attribute:role_name' => '角色名',
	'Class:lnkDeliveryModelToContact/Attribute:role_name+' => '',
));
?>
