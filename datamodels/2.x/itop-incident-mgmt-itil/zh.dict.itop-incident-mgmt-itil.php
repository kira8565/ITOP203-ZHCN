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
	'Menu:IncidentManagement' => '事件管理',
	'Menu:IncidentManagement+' => '事件管理',
	'Menu:Incident:Overview' => '概述',
	'Menu:Incident:Overview+' => '概述',
	'Menu:NewIncident' => '新事件',
	'Menu:NewIncident+' => '创建新事件工单',
	'Menu:SearchIncidents' => '搜索事件',
	'Menu:SearchIncidents+' => '搜索时间工单',
	'Menu:Incident:Shortcuts' => '快捷方式',
	'Menu:Incident:Shortcuts+' => '',
	'Menu:Incident:MyIncidents' => '指派给我的事件',
	'Menu:Incident:MyIncidents+' => '指派给我的事件',
	'Menu:Incident:EscalatedIncidents' => '升级事件',
	'Menu:Incident:EscalatedIncidents+' => '升级事件',
	'Menu:Incident:OpenIncidents' => '所有打开的事件',
	'Menu:Incident:OpenIncidents+' => '所有打开的事件',
	'Menu:Incident:UnassignedIncidents' => '尚未指派的事件',
	'Menu:Incident:UnassignedIncidents+' => '尚未指派的事件',
	'Menu:Incident:HelpdeskIncidents' => '指派到二线的事件到',
	'Menu:Incident:HelpdeskIncidents+' => '指派二线的事件到',
	'UI-IncidentManagementOverview-IncidentByPriority-last-14-days' => '最近14天每个优先级的事件',
	'UI-IncidentManagementOverview-Last-14-days' => '最近14天事件的数量',
	'UI-IncidentManagementOverview-OpenIncidentByStatus' => '状态为打开的事件',
	'UI-IncidentManagementOverview-OpenIncidentByAgent' => '通过处理人打开的事件',
	'UI-IncidentManagementOverview-OpenIncidentByCustomer' => '通过客户打开的事件',
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
// Class: Incident
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:Incident' => '事件',
	'Class:Incident+' => '',
	'Class:Incident/Attribute:status' => '状态',
	'Class:Incident/Attribute:status+' => '',
	'Class:Incident/Attribute:status/Value:new' => '新建',
	'Class:Incident/Attribute:status/Value:new+' => '',
	'Class:Incident/Attribute:status/Value:escalated_tto' => '升级接单时限',
	'Class:Incident/Attribute:status/Value:escalated_tto+' => '',
	'Class:Incident/Attribute:status/Value:assigned' => '指派',
	'Class:Incident/Attribute:status/Value:assigned+' => '',
	'Class:Incident/Attribute:status/Value:escalated_ttr' => '升级完成时限',
	'Class:Incident/Attribute:status/Value:escalated_ttr+' => '',
	'Class:Incident/Attribute:status/Value:waiting_for_approval' => '等待批准',
	'Class:Incident/Attribute:status/Value:waiting_for_approval+' => '',
	'Class:Incident/Attribute:status/Value:pending' => '暂挂',
	'Class:Incident/Attribute:status/Value:pending+' => '',
	'Class:Incident/Attribute:status/Value:resolved' => '已解决',
	'Class:Incident/Attribute:status/Value:resolved+' => '',
	'Class:Incident/Attribute:status/Value:closed' => '关闭',
	'Class:Incident/Attribute:status/Value:closed+' => '',
	'Class:Incident/Attribute:impact' => '影响度',
	'Class:Incident/Attribute:impact+' => '',
	'Class:Incident/Attribute:impact/Value:1' => '部门',
	'Class:Incident/Attribute:impact/Value:1+' => '',
	'Class:Incident/Attribute:impact/Value:2' => '服务',
	'Class:Incident/Attribute:impact/Value:2+' => '',
	'Class:Incident/Attribute:impact/Value:3' => '个人',
	'Class:Incident/Attribute:impact/Value:3+' => '',
	'Class:Incident/Attribute:priority' => '优先级',
	'Class:Incident/Attribute:priority+' => '',
	'Class:Incident/Attribute:priority/Value:1' => '紧急',
	'Class:Incident/Attribute:priority/Value:1+' => '紧急',
	'Class:Incident/Attribute:priority/Value:2' => '高',
	'Class:Incident/Attribute:priority/Value:2+' => '高',
	'Class:Incident/Attribute:priority/Value:3' => '中',
	'Class:Incident/Attribute:priority/Value:3+' => '中',
	'Class:Incident/Attribute:priority/Value:4' => '低',
	'Class:Incident/Attribute:priority/Value:4+' => '低',
	'Class:Incident/Attribute:urgency' => '紧急度',
	'Class:Incident/Attribute:urgency+' => '',
	'Class:Incident/Attribute:urgency/Value:1' => '紧急',
	'Class:Incident/Attribute:urgency/Value:1+' => '紧急',
	'Class:Incident/Attribute:urgency/Value:2' => '高',
	'Class:Incident/Attribute:urgency/Value:2+' => '高',
	'Class:Incident/Attribute:urgency/Value:3' => '中',
	'Class:Incident/Attribute:urgency/Value:3+' => '中',
	'Class:Incident/Attribute:urgency/Value:4' => '低',
	'Class:Incident/Attribute:urgency/Value:4+' => '低',
	'Class:Incident/Attribute:origin' => '接单途径',
	'Class:Incident/Attribute:origin+' => '',
	'Class:Incident/Attribute:origin/Value:mail' => '邮件',
	'Class:Incident/Attribute:origin/Value:mail+' => '邮件',
	'Class:Incident/Attribute:origin/Value:monitoring' => '监控',
	'Class:Incident/Attribute:origin/Value:monitoring+' => '监控',
	'Class:Incident/Attribute:origin/Value:phone' => '电话',
	'Class:Incident/Attribute:origin/Value:phone+' => '电话',
	'Class:Incident/Attribute:origin/Value:portal' => '网站',
	'Class:Incident/Attribute:origin/Value:portal+' => '网站',
	'Class:Incident/Attribute:service_id' => '服务目录',
	'Class:Incident/Attribute:service_id+' => '',
	'Class:Incident/Attribute:service_name' => '服务名称',
	'Class:Incident/Attribute:service_name+' => '',
	'Class:Incident/Attribute:servicesubcategory_id' => '服务子目录',
	'Class:Incident/Attribute:servicesubcategory_id+' => '',
	'Class:Incident/Attribute:servicesubcategory_name' => '服务子目录名称',
	'Class:Incident/Attribute:servicesubcategory_name+' => '',
	'Class:Incident/Attribute:escalation_flag' => '热门标识',
	'Class:Incident/Attribute:escalation_flag+' => '',
	'Class:Incident/Attribute:escalation_flag/Value:no' => '不',
	'Class:Incident/Attribute:escalation_flag/Value:no+' => '不',
	'Class:Incident/Attribute:escalation_flag/Value:yes' => '是',
	'Class:Incident/Attribute:escalation_flag/Value:yes+' => '是',
	'Class:Incident/Attribute:escalation_reason' => '热门原因',
	'Class:Incident/Attribute:escalation_reason+' => '',
	'Class:Incident/Attribute:assignment_date' => '指派日期',
	'Class:Incident/Attribute:assignment_date+' => '',
	'Class:Incident/Attribute:resolution_date' => '解决日期',
	'Class:Incident/Attribute:resolution_date+' => '',
	'Class:Incident/Attribute:last_pending_date' => '最近待定日期',
	'Class:Incident/Attribute:last_pending_date+' => '',
	'Class:Incident/Attribute:cumulatedpending' => '累计待定',
	'Class:Incident/Attribute:cumulatedpending+' => '',
	'Class:Incident/Attribute:tto' => '接单时限',
	'Class:Incident/Attribute:tto+' => '',
	'Class:Incident/Attribute:ttr' => '完成时限',
	'Class:Incident/Attribute:ttr+' => '',
	'Class:Incident/Attribute:tto_escalation_deadline' => '接单最后时限',
	'Class:Incident/Attribute:tto_escalation_deadline+' => '',
	'Class:Incident/Attribute:sla_tto_passed' => '接单时限已过',
	'Class:Incident/Attribute:sla_tto_passed+' => '',
	'Class:Incident/Attribute:sla_tto_over' => '超过接单时限',
	'Class:Incident/Attribute:sla_tto_over+' => '',
	'Class:Incident/Attribute:ttr_escalation_deadline' => '剩余完成时限',
	'Class:Incident/Attribute:ttr_escalation_deadline+' => '',
	'Class:Incident/Attribute:sla_ttr_passed' => '完成时限已过',
	'Class:Incident/Attribute:sla_ttr_passed+' => '',
	'Class:Incident/Attribute:sla_ttr_over' => '完成时限结束',
	'Class:Incident/Attribute:sla_ttr_over+' => '',
	'Class:Incident/Attribute:time_spent' => '延期解决',
	'Class:Incident/Attribute:time_spent+' => '',
	'Class:Incident/Attribute:resolution_code' => '解决编码',
	'Class:Incident/Attribute:resolution_code+' => '',
	'Class:Incident/Attribute:resolution_code/Value:assistance' => '援助',
	'Class:Incident/Attribute:resolution_code/Value:assistance+' => '援助',
	'Class:Incident/Attribute:resolution_code/Value:bug fixed' => '修复BUG',
	'Class:Incident/Attribute:resolution_code/Value:bug fixed+' => '修复BUG',
	'Class:Incident/Attribute:resolution_code/Value:hardware repair' => '硬件维修',
	'Class:Incident/Attribute:resolution_code/Value:hardware repair+' => '硬件维修',
	'Class:Incident/Attribute:resolution_code/Value:other' => '其他',
	'Class:Incident/Attribute:resolution_code/Value:other+' => '其他',
	'Class:Incident/Attribute:resolution_code/Value:software patch' => '软件补丁',
	'Class:Incident/Attribute:resolution_code/Value:software patch+' => '软件补丁',
	'Class:Incident/Attribute:resolution_code/Value:system update' => '系统更新',
	'Class:Incident/Attribute:resolution_code/Value:system update+' => '系统更新',
	'Class:Incident/Attribute:resolution_code/Value:training' => '培训',
	'Class:Incident/Attribute:resolution_code/Value:training+' => '培训',
	'Class:Incident/Attribute:solution' => '解决方案',
	'Class:Incident/Attribute:solution+' => '',
	'Class:Incident/Attribute:pending_reason' => '暂挂原因',
	'Class:Incident/Attribute:pending_reason+' => '',
	'Class:Incident/Attribute:parent_incident_id' => '父级事件',
	'Class:Incident/Attribute:parent_incident_id+' => '',
	'Class:Incident/Attribute:parent_incident_ref' => '父级事件',
	'Class:Incident/Attribute:parent_incident_ref+' => '',
	'Class:Incident/Attribute:parent_change_id' => '父级变更',
	'Class:Incident/Attribute:parent_change_id+' => '',
	'Class:Incident/Attribute:parent_change_ref' => '父级变更',
	'Class:Incident/Attribute:parent_change_ref+' => '',
	'Class:Incident/Attribute:child_incidents_list' => '衍生事件',
	'Class:Incident/Attribute:child_incidents_list+' => '与此事件相关的衍生事件',
	'Class:Incident/Attribute:public_log' => '公共日志',
	'Class:Incident/Attribute:public_log+' => '',
	'Class:Incident/Attribute:user_satisfaction' => '用户满意度',
	'Class:Incident/Attribute:user_satisfaction+' => '',
	'Class:Incident/Attribute:user_satisfaction/Value:1' => '非常满意',
	'Class:Incident/Attribute:user_satisfaction/Value:1+' => '非常满意',
	'Class:Incident/Attribute:user_satisfaction/Value:2' => '满意',
	'Class:Incident/Attribute:user_satisfaction/Value:2+' => '满意',
	'Class:Incident/Attribute:user_satisfaction/Value:3' => '不满意',
	'Class:Incident/Attribute:user_satisfaction/Value:3+' => '不满意',
	'Class:Incident/Attribute:user_satisfaction/Value:4' => '非常不满意',
	'Class:Incident/Attribute:user_satisfaction/Value:4+' => '非常不满意',
	'Class:Incident/Attribute:user_comment' => '备注',
	'Class:Incident/Attribute:user_comment+' => '',
	'Class:Incident/Attribute:parent_incident_id_friendlyname' => 'parent_incident_id_friendlyname',
	'Class:Incident/Attribute:parent_incident_id_friendlyname+' => '',
	'Class:Incident/Stimulus:ev_assign' => '指派',
	'Class:Incident/Stimulus:ev_assign+' => '',
	'Class:Incident/Stimulus:ev_reassign' => '重新指派',
	'Class:Incident/Stimulus:ev_reassign+' => '',
	'Class:Incident/Stimulus:ev_pending' => '暂挂',
	'Class:Incident/Stimulus:ev_pending+' => '',
	'Class:Incident/Stimulus:ev_timeout' => '超时',
	'Class:Incident/Stimulus:ev_timeout+' => '',
	'Class:Incident/Stimulus:ev_autoresolve' => '自动解决',
	'Class:Incident/Stimulus:ev_autoresolve+' => '',
	'Class:Incident/Stimulus:ev_autoclose' => '自动关闭',
	'Class:Incident/Stimulus:ev_autoclose+' => '',
	'Class:Incident/Stimulus:ev_resolve' => '标记为解决',
	'Class:Incident/Stimulus:ev_resolve+' => '',
	'Class:Incident/Stimulus:ev_close' => '关闭这个请求',
	'Class:Incident/Stimulus:ev_close+' => '',
	'Class:Incident/Stimulus:ev_reopen' => '重新打开',
	'Class:Incident/Stimulus:ev_reopen+' => '',
	'Class:Incident/Error:CannotAssignParentIncidentIdToSelf' => '父级事件不能分配给事件本身',
));


?>
