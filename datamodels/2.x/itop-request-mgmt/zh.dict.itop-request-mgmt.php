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
	'Menu:RequestManagement' => '请求管理',
	'Menu:RequestManagement+' => '请求管理',
	'Menu:RequestManagementProvider' => '供应商',
	'Menu:RequestManagementProvider+' => '供应商',
	'Menu:UserRequest:Provider' => '传递到供应商的打开的请求',
	'Menu:UserRequest:Provider+' => '传递到供应商的打开的请求',
	'Menu:UserRequest:Overview' => '概述',
	'Menu:UserRequest:Overview+' => '概述',
	'Menu:NewUserRequest' => '新用户请求',
	'Menu:NewUserRequest+' => '创建一个新用户请求工单',
	'Menu:SearchUserRequests' => '搜索用户请求',
	'Menu:SearchUserRequests+' => '搜索用户请求工单',
	'Menu:UserRequest:Shortcuts' => '快捷方式',
	'Menu:UserRequest:Shortcuts+' => '',
	'Menu:UserRequest:MyRequests' => '指派给我的请求',
	'Menu:UserRequest:MyRequests+' => '指派给我的请求 (我是处理人)',
	'Menu:UserRequest:MySupportRequests' => "我支持的请求",
	'Menu:UserRequest:MySupportRequests+' => "我支持的请求",
	'Menu:UserRequest:EscalatedRequests' => '热门请求',
	'Menu:UserRequest:EscalatedRequests+' => '热门请求',
	'Menu:UserRequest:OpenRequests' => '所有打开的请求',
	'Menu:UserRequest:OpenRequests+' => '所有打开的请求',
	'UI:WelcomeMenu:MyAssignedCalls' => '指派给我的请求',
	'UI-RequestManagementOverview-RequestByType-last-14-days' => '最近14天按类型汇总的请求',
	'UI-RequestManagementOverview-Last-14-days' => '最近14天请求的数量',
	'UI-RequestManagementOverview-OpenRequestByStatus' => '打开的请求按状态',
	'UI-RequestManagementOverview-OpenRequestByAgent' => '打开的请求按处理人',
	'UI-RequestManagementOverview-OpenRequestByType' => '打开的请求按类型',
	'UI-RequestManagementOverview-OpenRequestByCustomer' => '打开的请求按组织',
	'Class:UserRequest:KnownErrorList' => '已知错误',
	'Menu:UserRequest:MyWorkOrders' => '指派给我的工单',
	'Menu:UserRequest:MyWorkOrders+' => '所有指派给我的工单',
	'Class:Problem:KnownProblemList' => '已知错误',
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
// Class: UserRequest
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:UserRequest' => '用户请求',
	'Class:UserRequest+' => '',
	'Class:UserRequest/Attribute:status' => '状态',
	'Class:UserRequest/Attribute:status+' => '',
	'Class:UserRequest/Attribute:status/Value:new' => '新建',
	'Class:UserRequest/Attribute:status/Value:new+' => '',
	'Class:UserRequest/Attribute:status/Value:escalated_tto' => '升级接单时限',
	'Class:UserRequest/Attribute:status/Value:escalated_tto+' => '接单时限超时',
	'Class:UserRequest/Attribute:status/Value:assigned' => '指派',
	'Class:UserRequest/Attribute:status/Value:assigned+' => '',
	'Class:UserRequest/Attribute:status/Value:escalated_ttr' => '升级完成时限',
	'Class:UserRequest/Attribute:status/Value:escalated_ttr+' => '完成时限超时',
	'Class:UserRequest/Attribute:status/Value:waiting_for_approval' => '待批',
	'Class:UserRequest/Attribute:status/Value:waiting_for_approval+' => '',
	'Class:UserRequest/Attribute:status/Value:approved' => '批准',
	'Class:UserRequest/Attribute:status/Value:approved+' => '',
	'Class:UserRequest/Attribute:status/Value:rejected' => '拒绝',
	'Class:UserRequest/Attribute:status/Value:rejected+' => '',
	'Class:UserRequest/Attribute:status/Value:pending' => '暂挂',
	'Class:UserRequest/Attribute:status/Value:pending+' => '',
	'Class:UserRequest/Attribute:status/Value:resolved' => '解决',
	'Class:UserRequest/Attribute:status/Value:resolved+' => '',
	'Class:UserRequest/Attribute:status/Value:closed' => '关闭',
	'Class:UserRequest/Attribute:status/Value:closed+' => '',
	'Class:UserRequest/Attribute:request_type' => '请求类型',
	'Class:UserRequest/Attribute:request_type+' => '',
	'Class:UserRequest/Attribute:request_type/Value:incident' => '事件',
	'Class:UserRequest/Attribute:request_type/Value:incident+' => '事件',
	'Class:UserRequest/Attribute:request_type/Value:service_request' => '服务请求',
	'Class:UserRequest/Attribute:request_type/Value:service_request+' => '服务请求',
	'Class:UserRequest/Attribute:impact' => '影响度',
	'Class:UserRequest/Attribute:impact+' => '',
	'Class:UserRequest/Attribute:impact/Value:1' => '企业',
	'Class:UserRequest/Attribute:impact/Value:1+' => '',
	'Class:UserRequest/Attribute:impact/Value:2' => '部门',
	'Class:UserRequest/Attribute:impact/Value:2+' => '',
	'Class:UserRequest/Attribute:impact/Value:3' => '个人',
	'Class:UserRequest/Attribute:impact/Value:3+' => '',
	'Class:UserRequest/Attribute:priority' => '优先级',
	'Class:UserRequest/Attribute:priority+' => '',
	'Class:UserRequest/Attribute:priority/Value:1' => '紧急',
	'Class:UserRequest/Attribute:priority/Value:1+' => '紧急',
	'Class:UserRequest/Attribute:priority/Value:2' => '高',
	'Class:UserRequest/Attribute:priority/Value:2+' => '高',
	'Class:UserRequest/Attribute:priority/Value:3' => '中',
	'Class:UserRequest/Attribute:priority/Value:3+' => '中',
	'Class:UserRequest/Attribute:priority/Value:4' => '低',
	'Class:UserRequest/Attribute:priority/Value:4+' => '低',
	'Class:UserRequest/Attribute:urgency' => '重要度',
	'Class:UserRequest/Attribute:urgency+' => '',
	'Class:UserRequest/Attribute:urgency/Value:1' => '紧急',
	'Class:UserRequest/Attribute:urgency/Value:1+' => '紧急',
	'Class:UserRequest/Attribute:urgency/Value:2' => '高',
	'Class:UserRequest/Attribute:urgency/Value:2+' => '高',
	'Class:UserRequest/Attribute:urgency/Value:3' => '中',
	'Class:UserRequest/Attribute:urgency/Value:3+' => '中',
	'Class:UserRequest/Attribute:urgency/Value:4' => '低',
	'Class:UserRequest/Attribute:urgency/Value:4+' => '低',
	'Class:UserRequest/Attribute:origin' => '请求方式',
	'Class:UserRequest/Attribute:origin+' => '',
	'Class:UserRequest/Attribute:origin/Value:mail' => '邮件',
	'Class:UserRequest/Attribute:origin/Value:mail+' => '邮件',
	'Class:UserRequest/Attribute:origin/Value:monitoring' => '监控',
	'Class:UserRequest/Attribute:origin/Value:monitoring+' => '监控',
	'Class:UserRequest/Attribute:origin/Value:phone' => '电话',
	'Class:UserRequest/Attribute:origin/Value:phone+' => '电话',
	'Class:UserRequest/Attribute:origin/Value:portal' => '网站',
	'Class:UserRequest/Attribute:origin/Value:portal+' => '网站',
	'Class:UserRequest/Attribute:approver_id' => '核准人',
	'Class:UserRequest/Attribute:approver_id+' => '',
	'Class:UserRequest/Attribute:approver_email' => '核准人Email',
	'Class:UserRequest/Attribute:approver_email+' => '',
	'Class:UserRequest/Attribute:service_id' => '服务',
	'Class:UserRequest/Attribute:service_id+' => '',
	'Class:UserRequest/Attribute:service_name' => '服务名称',
	'Class:UserRequest/Attribute:service_name+' => '',
	'Class:UserRequest/Attribute:servicesubcategory_id' => '服务子目录',
	'Class:UserRequest/Attribute:servicesubcategory_id+' => '',
	'Class:UserRequest/Attribute:servicesubcategory_name' => '服务子目录名',
	'Class:UserRequest/Attribute:servicesubcategory_name+' => '',
	'Class:UserRequest/Attribute:escalation_flag' => '热门标识',
	'Class:UserRequest/Attribute:escalation_flag+' => '',
	'Class:UserRequest/Attribute:escalation_flag/Value:no' => '不',
	'Class:UserRequest/Attribute:escalation_flag/Value:no+' => '不',
	'Class:UserRequest/Attribute:escalation_flag/Value:yes' => '是',
	'Class:UserRequest/Attribute:escalation_flag/Value:yes+' => '是',
	'Class:UserRequest/Attribute:escalation_reason' => '热门原因',
	'Class:UserRequest/Attribute:escalation_reason+' => '',
	'Class:UserRequest/Attribute:assignment_date' => '指派日期',
	'Class:UserRequest/Attribute:assignment_date+' => '',
	'Class:UserRequest/Attribute:resolution_date' => '解决日期',
	'Class:UserRequest/Attribute:resolution_date+' => '',
	'Class:UserRequest/Attribute:last_pending_date' => '最近暂挂日期',
	'Class:UserRequest/Attribute:last_pending_date+' => '',
	'Class:UserRequest/Attribute:cumulatedpending' => '累计暂挂',
	'Class:UserRequest/Attribute:cumulatedpending+' => '',
	'Class:UserRequest/Attribute:tto' => '接单时限',
	'Class:UserRequest/Attribute:tto+' => '',
	'Class:UserRequest/Attribute:ttr' => '完成时限',
	'Class:UserRequest/Attribute:ttr+' => '',
	'Class:UserRequest/Attribute:tto_escalation_deadline' => '超出接单时限',
	'Class:UserRequest/Attribute:tto_escalation_deadline+' => '',
	'Class:UserRequest/Attribute:sla_tto_passed' => '接单时限已过',
	'Class:UserRequest/Attribute:sla_tto_passed+' => '',
	'Class:UserRequest/Attribute:sla_tto_over' => '超出接单时限',
	'Class:UserRequest/Attribute:sla_tto_over+' => '',
	'Class:UserRequest/Attribute:ttr_escalation_deadline' => '完成时限',
	'Class:UserRequest/Attribute:ttr_escalation_deadline+' => '',
	'Class:UserRequest/Attribute:sla_ttr_passed' => '完成时限已过',
	'Class:UserRequest/Attribute:sla_ttr_passed+' => '',
	'Class:UserRequest/Attribute:sla_ttr_over' => '超出完成时限',
	'Class:UserRequest/Attribute:sla_ttr_over+' => '',
	'Class:UserRequest/Attribute:time_spent' => '延期解决',
	'Class:UserRequest/Attribute:time_spent+' => '',
	'Class:UserRequest/Attribute:resolution_code' => '解决编码',
	'Class:UserRequest/Attribute:resolution_code+' => '',
	'Class:UserRequest/Attribute:resolution_code/Value:assistance' => '援助',
	'Class:UserRequest/Attribute:resolution_code/Value:assistance+' => '援助',
	'Class:UserRequest/Attribute:resolution_code/Value:bug fixed' => '修复BUG',
	'Class:UserRequest/Attribute:resolution_code/Value:bug fixed+' => '修复BUG',
	'Class:UserRequest/Attribute:resolution_code/Value:hardware repair' => '硬件维修',
	'Class:UserRequest/Attribute:resolution_code/Value:hardware repair+' => '硬件维修',
	'Class:UserRequest/Attribute:resolution_code/Value:other' => '其他',
	'Class:UserRequest/Attribute:resolution_code/Value:other+' => '其他',
	'Class:UserRequest/Attribute:resolution_code/Value:software patch' => '软件补丁',
	'Class:UserRequest/Attribute:resolution_code/Value:software patch+' => '软件补丁',
	'Class:UserRequest/Attribute:resolution_code/Value:system update' => '系统更新',
	'Class:UserRequest/Attribute:resolution_code/Value:system update+' => '系统更新',
	'Class:UserRequest/Attribute:resolution_code/Value:training' => '培训',
	'Class:UserRequest/Attribute:resolution_code/Value:training+' => '培训',
	'Class:UserRequest/Attribute:solution' => '解决方案',
	'Class:UserRequest/Attribute:solution+' => '',
	'Class:UserRequest/Attribute:pending_reason' => 'Pending reason',
	'Class:UserRequest/Attribute:pending_reason+' => '',
	'Class:UserRequest/Attribute:parent_request_id' => '父级请求',
	'Class:UserRequest/Attribute:parent_request_id+' => '',
	'Class:UserRequest/Attribute:parent_request_ref' => '基本请求',
	'Class:UserRequest/Attribute:parent_request_ref+' => '',
	'Class:UserRequest/Attribute:parent_problem_id' => '父级问题',
	'Class:UserRequest/Attribute:parent_problem_id+' => '',
	'Class:UserRequest/Attribute:parent_problem_ref' => '基本问题',
	'Class:UserRequest/Attribute:parent_problem_ref+' => '',
	'Class:UserRequest/Attribute:parent_change_id' => '父级变更',
	'Class:UserRequest/Attribute:parent_change_id+' => '',
	'Class:UserRequest/Attribute:parent_change_ref' => '基本变更',
	'Class:UserRequest/Attribute:parent_change_ref+' => '',
	'Class:UserRequest/Attribute:related_request_list' => '子请求',
	'Class:UserRequest/Attribute:related_request_list+' => '所有链接到这个父级请求的请求',
	'Class:UserRequest/Attribute:public_log' => '公共日志',
	'Class:UserRequest/Attribute:public_log+' => '',
	'Class:UserRequest/Attribute:user_satisfaction' => '用户满意度',
	'Class:UserRequest/Attribute:user_satisfaction+' => '',
	'Class:UserRequest/Attribute:user_satisfaction/Value:1' => '非常满意',
	'Class:UserRequest/Attribute:user_satisfaction/Value:1+' => '非常满意',
	'Class:UserRequest/Attribute:user_satisfaction/Value:2' => '满意',
	'Class:UserRequest/Attribute:user_satisfaction/Value:2+' => '满意',
	'Class:UserRequest/Attribute:user_satisfaction/Value:3' => '不满意',
	'Class:UserRequest/Attribute:user_satisfaction/Value:3+' => '不满意',
	'Class:UserRequest/Attribute:user_satisfaction/Value:4' => '非常不满意',
	'Class:UserRequest/Attribute:user_satisfaction/Value:4+' => '非常不满意',
	'Class:UserRequest/Attribute:user_comment' => '备注',
	'Class:UserRequest/Attribute:user_comment+' => '',
	'Class:UserRequest/Attribute:parent_request_id_friendlyname' => 'parent_request_id_friendlyname',
	'Class:UserRequest/Attribute:parent_request_id_friendlyname+' => '',
	'Class:UserRequest/Stimulus:ev_assign' => '指派',
	'Class:UserRequest/Stimulus:ev_assign+' => '',
	'Class:UserRequest/Stimulus:ev_reassign' => '重新指派',
	'Class:UserRequest/Stimulus:ev_reassign+' => '',
	'Class:UserRequest/Stimulus:ev_approve' => '批准',
	'Class:UserRequest/Stimulus:ev_approve+' => '',
	'Class:UserRequest/Stimulus:ev_reject' => '拒绝',
	'Class:UserRequest/Stimulus:ev_reject+' => '',
	'Class:UserRequest/Stimulus:ev_pending' => '暂挂',
	'Class:UserRequest/Stimulus:ev_pending+' => '',
	'Class:UserRequest/Stimulus:ev_timeout' => '超时',
	'Class:UserRequest/Stimulus:ev_timeout+' => '',
	'Class:UserRequest/Stimulus:ev_autoresolve' => '自动解决',
	'Class:UserRequest/Stimulus:ev_autoresolve+' => '',
	'Class:UserRequest/Stimulus:ev_autoclose' => '自动关闭',
	'Class:UserRequest/Stimulus:ev_autoclose+' => '',
	'Class:UserRequest/Stimulus:ev_resolve' => '标记解决',
	'Class:UserRequest/Stimulus:ev_resolve+' => '',
	'Class:UserRequest/Stimulus:ev_close' => '关闭这个请求',
	'Class:UserRequest/Stimulus:ev_close+' => '',
	'Class:UserRequest/Stimulus:ev_reopen' => '重新打开',
	'Class:UserRequest/Stimulus:ev_reopen+' => '',
	'Class:UserRequest/Stimulus:ev_wait_for_approval' => '等待审批l',
	'Class:UserRequest/Stimulus:ev_wait_for_approval+' => '',
	'Class:UserRequest/Error:CannotAssignParentRequestIdToSelf' => '不能将上级请求请求到自己',
));


Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Portal:TitleDetailsFor_Request' => '请求详情',
	'Portal:ButtonUpdate' => '更新',
	'Portal:ButtonClose' => '关闭',
	'Portal:ButtonReopen' => '重打开',
	'Portal:ShowServices' => '服务目录',
	'Portal:SelectRequestType' => '选择一个类型请求',
	'Portal:SelectServiceElementFrom_Service' => '选择一个服务内容为 %1$s',
	'Portal:ListServices' => '服务清单',
	'Portal:TitleDetailsFor_Service' => '请求详情',
	'Portal:Button:CreateRequestFromService' => '创建一个请求为这个服务',
	'Portal:ListOpenRequests' => '请求清单',
'Portal:UserRequest:MoreInfo' => '更多信息',
	'Portal:Details-Service-Element' => '服务内容',
	'Portal:NoClosedTicket' => '没有关闭请求',
	'Portal:NoService' => '',
	'Portal:ListOpenProblems' => '进行中的问题',
	'Portal:ShowProblem' => '问题',
	'Portal:ShowFaqs' => '问题FAQs',
	'Portal:NoOpenProblem' => '没有打开问题',
	'Portal:SelectLanguage' => "Change you language",
	'Portal:LanguageChangedTo_Lang' => 'Language changed to',
	'Portal:ChooseYourFavoriteLanguage' => 'Choose your favorite language',
));

?>