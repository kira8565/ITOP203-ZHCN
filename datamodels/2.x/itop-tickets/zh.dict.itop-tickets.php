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

// Dictionnay conventions
// Class:<class_name>
// Class:<class_name>+
// Class:<class_name>/Attribute:<attribute_code>
// Class:<class_name>/Attribute:<attribute_code>+
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>+
// Class:<class_name>/Stimulus:<stimulus_code>
// Class:<class_name>/Stimulus:<stimulus_code>+


//
// Class: Ticket
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Ticket' => '工单',
	'Class:Ticket+' => '',
	'Class:Ticket/Attribute:ref' => '',
	'Class:Ticket/Attribute:ref+' => '',
	'Class:Ticket/Attribute:org_id' => '组织',
	'Class:Ticket/Attribute:org_id+' => '',
	'Class:Ticket/Attribute:org_name' => '组织名称',
	'Class:Ticket/Attribute:org_name+' => '',
	'Class:Ticket/Attribute:caller_id' => '呼叫',
	'Class:Ticket/Attribute:caller_id+' => '',
	'Class:Ticket/Attribute:caller_name' => '呼叫名称',
	'Class:Ticket/Attribute:caller_name+' => '',
	'Class:Ticket/Attribute:team_id' => '团队',
	'Class:Ticket/Attribute:team_id+' => '',
	'Class:Ticket/Attribute:team_name' => '团队名称',
	'Class:Ticket/Attribute:team_name+' => '',
	'Class:Ticket/Attribute:agent_id' => '代理',
	'Class:Ticket/Attribute:agent_id+' => '',
	'Class:Ticket/Attribute:agent_name' => '代理名称',
	'Class:Ticket/Attribute:agent_name+' => '',
	'Class:Ticket/Attribute:title' => '主题',
	'Class:Ticket/Attribute:title+' => '',
	'Class:Ticket/Attribute:description' => '描述',
	'Class:Ticket/Attribute:description+' => '',
	'Class:Ticket/Attribute:start_date' => '开始日期',
	'Class:Ticket/Attribute:start_date+' => '',
	'Class:Ticket/Attribute:end_date' => '结束日期',
	'Class:Ticket/Attribute:end_date+' => '',
	'Class:Ticket/Attribute:last_update' => '最近更新',
	'Class:Ticket/Attribute:last_update+' => '最近更新',
	'Class:Ticket/Attribute:close_date' => '关闭日期',
	'Class:Ticket/Attribute:close_date+' => '',
	'Class:Ticket/Attribute:private_log' => '私有 log',
	'Class:Ticket/Attribute:private_log+' => '',
	'Class:Ticket/Attribute:contacts_list' => '联系方式',
	'Class:Ticket/Attribute:contacts_list+' => '链接到这个工单的所有联系方式',
	'Class:Ticket/Attribute:functionalcis_list' => '配置项',
	'Class:Ticket/Attribute:functionalcis_list+' => '影响这个工单的所有配置项',
	'Class:Ticket/Attribute:workorders_list' => '工作单',
	'Class:Ticket/Attribute:workorders_list+' => '这个工单的所有工作通知单',
	'Class:Ticket/Attribute:finalclass' => '类型',
	'Class:Ticket/Attribute:finalclass+' => '',
	'Class:Ticket/Attribute:attachments_list' => '附档',
	'Class:Ticket/Attribute:attachments_list+' => '这个工单的所有附档',
));




//
// Class: lnkContactToTicket
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkContactToTicket' => 'Link 联系 / 工单',
	'Class:lnkContactToTicket+' => '',
	'Class:lnkContactToTicket/Attribute:ticket_id' => '工单',
	'Class:lnkContactToTicket/Attribute:ticket_id+' => '',
	'Class:lnkContactToTicket/Attribute:ticket_ref' => '',
	'Class:lnkContactToTicket/Attribute:ticket_ref+' => '',
	'Class:lnkContactToTicket/Attribute:contact_id' => '联系',
	'Class:lnkContactToTicket/Attribute:contact_id+' => '',
	'Class:lnkContactToTicket/Attribute:contact_email' => '联系人邮件',
	'Class:lnkContactToTicket/Attribute:contact_email+' => '',
	'Class:lnkContactToTicket/Attribute:role' => '角色',
	'Class:lnkContactToTicket/Attribute:role+' => '',
));

//
// Class: lnkFunctionalCIToTicket
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkFunctionalCIToTicket' => 'Link 功能项 / 工单',
	'Class:lnkFunctionalCIToTicket+' => '',
	'Class:lnkFunctionalCIToTicket/Attribute:ticket_id' => '工单',
	'Class:lnkFunctionalCIToTicket/Attribute:ticket_id+' => '',
	'Class:lnkFunctionalCIToTicket/Attribute:ticket_ref' => '',
	'Class:lnkFunctionalCIToTicket/Attribute:ticket_ref+' => '',
	'Class:lnkFunctionalCIToTicket/Attribute:functionalci_id' => '配置项',
	'Class:lnkFunctionalCIToTicket/Attribute:functionalci_id+' => '',
	'Class:lnkFunctionalCIToTicket/Attribute:functionalci_name' => '配置项名称',
	'Class:lnkFunctionalCIToTicket/Attribute:functionalci_name+' => '',
	'Class:lnkFunctionalCIToTicket/Attribute:impact' => '影响',
	'Class:lnkFunctionalCIToTicket/Attribute:impact+' => '',
));


//
// Class: WorkOrder
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:WorkOrder' => '工作单',
	'Class:WorkOrder+' => '',
	'Class:WorkOrder/Attribute:name' => '名称',
	'Class:WorkOrder/Attribute:name+' => '',
	'Class:WorkOrder/Attribute:status' => '状态',
	'Class:WorkOrder/Attribute:status+' => '',
	'Class:WorkOrder/Attribute:status/Value:open' => '打开',
	'Class:WorkOrder/Attribute:status/Value:open+' => '',
	'Class:WorkOrder/Attribute:status/Value:closed' => '关闭',
	'Class:WorkOrder/Attribute:status/Value:closed+' => '',
	'Class:WorkOrder/Attribute:description' => '描述',
	'Class:WorkOrder/Attribute:description+' => '',
	'Class:WorkOrder/Attribute:ticket_id' => '源工单',
	'Class:WorkOrder/Attribute:ticket_id+' => '',
	'Class:WorkOrder/Attribute:ticket_ref' => '工单',
	'Class:WorkOrder/Attribute:ticket_ref+' => '',
	'Class:WorkOrder/Attribute:team_id' => '团队',
	'Class:WorkOrder/Attribute:team_id+' => '',
	'Class:WorkOrder/Attribute:team_name' => '团队名称',
	'Class:WorkOrder/Attribute:team_name+' => '',
	'Class:WorkOrder/Attribute:agent_id' => '代理',
	'Class:WorkOrder/Attribute:agent_id+' => '',
	'Class:WorkOrder/Attribute:agent_email' => '代理邮件',
	'Class:WorkOrder/Attribute:agent_email+' => '',
	'Class:WorkOrder/Attribute:start_date' => '开始日期',
	'Class:WorkOrder/Attribute:start_date+' => '',
	'Class:WorkOrder/Attribute:end_date' => '结束日期',
	'Class:WorkOrder/Attribute:end_date+' => '',
	'Class:WorkOrder/Attribute:log' => '日志',
	'Class:WorkOrder/Attribute:log+' => '',
	'Class:WorkOrder/Stimulus:ev_close' => '关闭',
	'Class:WorkOrder/Stimulus:ev_close+' => '',
));


// Fieldset translation
Dict::Add('ZH CN', 'Chinese', '简体中文', array(

	'Ticket:baseinfo' => '基本信息',
	'Ticket:date' => '日期信息',
	'Ticket:contact' => '联系人信息',
	'Ticket:moreinfo' => '详细信息',
	'Ticket:relation' => '关联信息',
	'Ticket:log' => '通信',
	'Ticket:Type' => '影响紧急度',
	'Ticket:support' => '支持',
	'Ticket:resolution' => '决议信息',
	'Ticket:SLA' => 'SLA 报告',
	'WorkOrder:Details' => '详细信息',
	'WorkOrder:Moreinfo' => '更多信息',
	

));






?>
