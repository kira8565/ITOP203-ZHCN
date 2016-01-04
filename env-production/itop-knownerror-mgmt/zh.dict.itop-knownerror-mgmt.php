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

//
// Class: KnownError
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:KnownError' => '已知错误',
	'Class:KnownError+' => '一个已知问题的错误文档',
	'Class:KnownError/Attribute:name' => '名称',
	'Class:KnownError/Attribute:name+' => '',
	'Class:KnownError/Attribute:org_id' => '客户',
	'Class:KnownError/Attribute:org_id+' => '',
	'Class:KnownError/Attribute:cust_name' => '客户名称',
	'Class:KnownError/Attribute:cust_name+' => '',
	'Class:KnownError/Attribute:problem_id' => '相关问题',
	'Class:KnownError/Attribute:problem_id+' => '',
	'Class:KnownError/Attribute:problem_ref' => '相关问题',
	'Class:KnownError/Attribute:problem_ref+' => '',
	'Class:KnownError/Attribute:symptom' => '现象',
	'Class:KnownError/Attribute:symptom+' => '',
	'Class:KnownError/Attribute:root_cause' => '根源',
	'Class:KnownError/Attribute:root_cause+' => '',
	'Class:KnownError/Attribute:workaround' => '工作区',
	'Class:KnownError/Attribute:workaround+' => '',
	'Class:KnownError/Attribute:solution' => '方案',
	'Class:KnownError/Attribute:solution+' => '',
	'Class:KnownError/Attribute:error_code' => '错误编码',
	'Class:KnownError/Attribute:error_code+' => '',
	'Class:KnownError/Attribute:domain' => '类别',
	'Class:KnownError/Attribute:domain+' => '',
	'Class:KnownError/Attribute:domain/Value:Application' => '应用',
	'Class:KnownError/Attribute:domain/Value:Application+' => '应用',
	'Class:KnownError/Attribute:domain/Value:Desktop' => '桌面类',
	'Class:KnownError/Attribute:domain/Value:Desktop+' => '桌面类',
	'Class:KnownError/Attribute:domain/Value:Network' => '网络类',
	'Class:KnownError/Attribute:domain/Value:Network+' => '网络类',
	'Class:KnownError/Attribute:domain/Value:Server' => '服务器类',
	'Class:KnownError/Attribute:domain/Value:Server+' => '服务器类',
	'Class:KnownError/Attribute:vendor' => '供应商',
	'Class:KnownError/Attribute:vendor+' => '',
	'Class:KnownError/Attribute:model' => '型号',
	'Class:KnownError/Attribute:model+' => '',
	'Class:KnownError/Attribute:version' => '版本',
	'Class:KnownError/Attribute:version+' => '',
	'Class:KnownError/Attribute:ci_list' => '配置项',
	'Class:KnownError/Attribute:ci_list+' => '与这个已知错误相关的所有配置项',
	'Class:KnownError/Attribute:document_list' => '文档',
	'Class:KnownError/Attribute:document_list+' => '链接到这个已知错误的所有文档',
));

//
// Class: lnkErrorToFunctionalCI
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkErrorToFunctionalCI' => 'Link 错误 / 功能配置项',
	'Class:lnkErrorToFunctionalCI+' => 'Infra 与一个已知错误相关',
	'Class:lnkErrorToFunctionalCI/Attribute:functionalci_id' => '配置项',
	'Class:lnkErrorToFunctionalCI/Attribute:functionalci_id+' => '',
	'Class:lnkErrorToFunctionalCI/Attribute:functionalci_name' => '配置项名称',
	'Class:lnkErrorToFunctionalCI/Attribute:functionalci_name+' => '',
	'Class:lnkErrorToFunctionalCI/Attribute:error_id' => '错误',
	'Class:lnkErrorToFunctionalCI/Attribute:error_id+' => '',
	'Class:lnkErrorToFunctionalCI/Attribute:error_name' => '错误名称',
	'Class:lnkErrorToFunctionalCI/Attribute:error_name+' => '',
	'Class:lnkErrorToFunctionalCI/Attribute:reason' => '原因',
	'Class:lnkErrorToFunctionalCI/Attribute:reason+' => '',
));

//
// Class: lnkDocumentToError
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:lnkDocumentToError' => 'Link 文档 / 错误',
	'Class:lnkDocumentToError+' => '一个文档与一个已知错误间的链接',
	'Class:lnkDocumentToError/Attribute:document_id' => '文档',
	'Class:lnkDocumentToError/Attribute:document_id+' => '',
	'Class:lnkDocumentToError/Attribute:document_name' => '文档名称',
	'Class:lnkDocumentToError/Attribute:document_name+' => '',
	'Class:lnkDocumentToError/Attribute:error_id' => '错误',
	'Class:lnkDocumentToError/Attribute:error_id+' => '',
	'Class:lnkDocumentToError/Attribute:error_name' => '错误名称',
	'Class:lnkDocumentToError/Attribute:error_name+' => '',
	'Class:lnkDocumentToError/Attribute:link_type' => '连接_类型',
	'Class:lnkDocumentToError/Attribute:link_type+' => '',
));

//
// Class: FAQ
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:FAQ' => 'FAQ',
	'Class:FAQ+' => '频繁涉及的问题',
	'Class:FAQ/Attribute:title' => '标题',
	'Class:FAQ/Attribute:title+' => '',
	'Class:FAQ/Attribute:summary' => '概要',
	'Class:FAQ/Attribute:summary+' => '',
	'Class:FAQ/Attribute:description' => '描述',
	'Class:FAQ/Attribute:description+' => '',
	'Class:FAQ/Attribute:category_id' => '类型',
	'Class:FAQ/Attribute:category_id+' => '',
	'Class:FAQ/Attribute:category_name' => '类型名称',
	'Class:FAQ/Attribute:category_name+' => '',
	'Class:FAQ/Attribute:error_code' => '错误编码',
	'Class:FAQ/Attribute:error_code+' => '',
	'Class:FAQ/Attribute:key_words' => '关键字',
	'Class:FAQ/Attribute:key_words+' => '',
));

//
// Class: FAQCategory
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:FAQCategory' => 'FAQ 类型',
	'Class:FAQCategory+' => 'FAQ 类型',
	'Class:FAQCategory/Attribute:name' => '名称',
	'Class:FAQCategory/Attribute:name+' => '',
	'Class:FAQCategory/Attribute:faq_list' => 'FAQ',
	'Class:FAQCategory/Attribute:faq_list+' => '与这个类型相关的经常被问到的问题',
));
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Menu:NewError' => '新的已知错误',
	'Menu:NewError+' => '创建新的已知错误',
	'Menu:SearchError' => '搜索已知错误',
	'Menu:SearchError+' => '搜索已知错误',
        'Menu:Problem:KnownErrors' => '所有已知错误',
        'Menu:Problem:KnownErrors+' => '所有已知错误',
	'Menu:FAQCategory' => 'FAQ 类别',
	'Menu:FAQCategory+' => '所有FAQ类别',
	'Menu:FAQ' => 'FAQ',
	'Menu:FAQ+' => '所有FAQ',

));
?>
