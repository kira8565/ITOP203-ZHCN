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

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Menu:ChangeManagement' => '变更管理',
	'Menu:Change:Overview' => '概览',
	'Menu:Change:Overview+' => '',
	'Menu:NewChange' => '新变更',
	'Menu:NewChange+' => '建立一个新变更工单',
	'Menu:SearchChanges' => '搜索变更',
	'Menu:SearchChanges+' => '搜索变更工单',
	'Menu:Change:Shortcuts' => '快捷方式',
	'Menu:Change:Shortcuts+' => '',
	'Menu:WaitingAcceptance' => '变更等待接受',
	'Menu:WaitingAcceptance+' => '',
	'Menu:WaitingApproval' => '变更等待审批',
	'Menu:WaitingApproval+' => '',
	'Menu:Changes' => '打开的变更',
	'Menu:Changes+' => '所有打开的变更',
	'Menu:MyChanges' => '分配给我的变更',
	'Menu:MyChanges+' => '分配给我的变更 (由代理)',
	'UI-ChangeManagementOverview-ChangeByCategory-last-7-days' => '最近7天的基于类别的变更',
	'UI-ChangeManagementOverview-Last-7-days' => '最近7天的变更数目',
	'UI-ChangeManagementOverview-ChangeByDomain-last-7-days' => '最近7天基于范围的变更',
	'UI-ChangeManagementOverview-ChangeByStatus-last-7-days' => '最近7天基于状态的变更',
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


//
// Class: Change
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Change' => '变更',
	'Class:Change+' => '',
	'Class:Change/Attribute:status' => '状态',
	'Class:Change/Attribute:status+' => '',
	'Class:Change/Attribute:status/Value:new' => '新的',
	'Class:Change/Attribute:status/Value:new+' => '',
	'Class:Change/Attribute:status/Value:assigned' => '分配',
	'Class:Change/Attribute:status/Value:assigned+' => '',
	'Class:Change/Attribute:status/Value:planned' => '计划',
	'Class:Change/Attribute:status/Value:planned+' => '',
	'Class:Change/Attribute:status/Value:rejected' => '拒绝',
	'Class:Change/Attribute:status/Value:rejected+' => '',
	'Class:Change/Attribute:status/Value:approved' => '批准',
	'Class:Change/Attribute:status/Value:approved+' => '',
	'Class:Change/Attribute:status/Value:closed' => '关闭',
	'Class:Change/Attribute:status/Value:closed+' => '',
	'Class:Change/Attribute:category' => '类别',
	'Class:Change/Attribute:category+' => '',
	'Class:Change/Attribute:category/Value:application' => '应用',
	'Class:Change/Attribute:category/Value:application+' => '应用',
	'Class:Change/Attribute:category/Value:hardware' => '硬件',
	'Class:Change/Attribute:category/Value:hardware+' => '硬件',
	'Class:Change/Attribute:category/Value:network' => '网络',
	'Class:Change/Attribute:category/Value:network+' => '网络',
	'Class:Change/Attribute:category/Value:other' => '其它',
	'Class:Change/Attribute:category/Value:other+' => '其它',
	'Class:Change/Attribute:category/Value:software' => '软件',
	'Class:Change/Attribute:category/Value:software+' => '软件',
	'Class:Change/Attribute:category/Value:system' => '系统',
	'Class:Change/Attribute:category/Value:system+' => '系统',
	'Class:Change/Attribute:reject_reason' => '拒绝原因',
	'Class:Change/Attribute:reject_reason+' => '',
	'Class:Change/Attribute:changemanager_id' => '变更经理',
	'Class:Change/Attribute:changemanager_id+' => '',
	'Class:Change/Attribute:changemanager_email' => '变更经理 email',
	'Class:Change/Attribute:changemanager_email+' => '',
	'Class:Change/Attribute:parent_id' => '源变更',
	'Class:Change/Attribute:parent_id+' => '',
	'Class:Change/Attribute:parent_name' => '源变更 ref',
	'Class:Change/Attribute:parent_name+' => '',
	'Class:Change/Attribute:creation_date' => '创建日期',
	'Class:Change/Attribute:creation_date+' => '',
	'Class:Change/Attribute:approval_date' => '批准日期',
	'Class:Change/Attribute:approval_date+' => '',
	'Class:Change/Attribute:fallback_plan' => '回退计划',
	'Class:Change/Attribute:fallback_plan+' => '',
	'Class:Change/Attribute:related_request_list' => '关联请求',
	'Class:Change/Attribute:related_request_list+' => '链接到这个变更的所有用户请求',
	'Class:Change/Attribute:related_incident_list' => '关联事件',
	'Class:Change/Attribute:related_incident_list+' => '链接到这个变更的所有事件',
	'Class:Change/Attribute:related_problems_list' => '关联问题',
	'Class:Change/Attribute:related_problems_list+' => '链接到这个变更的所有问题',
	'Class:Change/Attribute:child_changes_list' => '子变更',
	'Class:Change/Attribute:child_changes_list+' => '链接到这个变更的所有子变更',
	'Class:Change/Attribute:parent_id_friendlyname' => '源变更友好名称',
	'Class:Change/Attribute:parent_id_friendlyname+' => '',
	'Class:Change/Stimulus:ev_assign' => '分配',
	'Class:Change/Stimulus:ev_assign+' => '',
	'Class:Change/Stimulus:ev_plan' => '计划',
	'Class:Change/Stimulus:ev_plan+' => '',
	'Class:Change/Stimulus:ev_reject' => '拒绝',
	'Class:Change/Stimulus:ev_reject+' => '',
	'Class:Change/Stimulus:ev_reopen' => '重新打开',
	'Class:Change/Stimulus:ev_reopen+' => '',
	'Class:Change/Stimulus:ev_approve' => '批准',
	'Class:Change/Stimulus:ev_approve+' => '',
	'Class:Change/Stimulus:ev_finish' => '关闭',
	'Class:Change/Stimulus:ev_finish+' => '',
));

?>
