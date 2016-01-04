<?php

/**
 *
 * Configuration file, generated by the iTop configuration wizard
 *
 * The file is used in MetaModel::LoadConfig() which does all the necessary initialization job
 *
 */

$MySettings = array(

	// access_message: Message displayed to the users when there is any access restriction
	//	default: 'iTop is temporarily frozen, please wait... (the admin team)'
	'access_message' => 'iTop is temporarily frozen, please wait... (the admin team)',

	// access_mode: Combination of flags (ACCESS_USER_WRITE | ACCESS_ADMIN_WRITE, or ACCESS_FULL)
	//	default: 3
	'access_mode' => 3,

	'allowed_login_types' => 'form|basic|external',

	// apc_cache.enabled: If set, the APC cache is allowed (the PHP extension must also be active)
	//	default: true
	'apc_cache.enabled' => true,

	// apc_cache.query_ttl: Time to live set in APC for the prepared queries (seconds - 0 means no timeout)
	//	default: 3600
	'apc_cache.query_ttl' => 3600,

	// app_root_url: Root URL used for navigating within the application, or from an email to the application (you can put $SERVER_NAME$ as a placeholder for the server's name)
	//	default: ''
	'app_root_url' => 'http://itop203.oschina.mopaas.com/',

	// buttons_position: Position of the forms buttons: bottom | top | both
	//	default: 'both'
	'buttons_position' => 'both',

	// cas_include_path: The path where to find the phpCAS library
	//	default: '/usr/share/php'
	'cas_include_path' => '/usr/share/php',

	// cron_max_execution_time: Duration (seconds) of the page cron.php, must be shorter than php setting max_execution_time and shorter than the web server response timeout
	//	default: 600
	'cron_max_execution_time' => 600,

	// csv_file_default_charset: Character set used by default for downloading and uploading data as a CSV file. Warning: it is case sensitive (uppercase is preferable).
	//	default: 'ISO-8859-1'
	'csv_file_default_charset' => 'UTF-8',

	'csv_import_charsets' => array (
	),

	// csv_import_history_display: Display the history tab in the import wizard
	//	default: false
	'csv_import_history_display' => false,

	'db_character_set' => 'utf8',

	'db_collation' => 'utf8_unicode_ci',

	'db_host' => '10.4.26.93',

	'db_name' => 'dfa83953c1f704242ad7ba89bd79752d4',

	'db_pwd' => 'pHufYPWrz6HDd',

	'db_subname' => 'yst_',

	'db_user' => 'u8rGn8Mhcg9LZ',


	// deadline_format: The format used for displaying "deadline" attributes: any string with the following placeholders: $date$, $difference$
	//	default: '$difference$'
	'deadline_format' => '$difference$',

	'default_language' => 'ZH CN',

	// email_asynchronous: If set, the emails are sent off line, which requires cron.php to be activated. Exception: some features like the email test utility will force the serialized mode
	//	default: false
	'email_asynchronous' => false,

	// email_transport: Mean to send emails: PHPMail (uses the function mail()) or SMTP (implements the client protocole)
	//	default: 'PHPMail'
	'email_transport' => 'PHPMail',

	// email_validation_pattern: Regular expression to validate/detect the format of an eMail address
	//	default: '[a-zA-Z0-9._&\'-]+@[a-zA-Z0-9.-]+\\.[a-zA-Z0-9-]{2,}'
	'email_validation_pattern' => '[a-zA-Z0-9._&\'-]+@[a-zA-Z0-9.-]+\\.[a-zA-Z0-9-]{2,}',

	'encryption_key' => '@iT0pEncr1pti0n!',

	'fast_reload_interval' => '60',

	// link_set_attribute_qualifier: Link set from string: attribute qualifier (encloses both the attcode and the value)
	//	default: '\''
	'link_set_attribute_qualifier' => '\'',

	// link_set_attribute_separator: Link set from string: attribute separator
	//	default: ';'
	'link_set_attribute_separator' => ';',

	// link_set_item_separator: Link set from string: line separator
	//	default: '|'
	'link_set_item_separator' => '|',

	// link_set_value_separator: Link set from string: value separator (between the attcode and the value itself
	//	default: ':'
	'link_set_value_separator' => ':',

	'log_global' => true,

	'log_issue' => true,

	'log_notification' => true,

	'log_web_service' => true,

	'max_display_limit' => '15',

	// max_linkset_output: Maximum number of items shown when getting a list of related items in an email, using the form $this->some_list$. 0 means no limit.
	//	default: 100
	'max_linkset_output' => 100,

	'min_display_limit' => '10',

	// online_help: Hyperlink to the online-help web page
	//	default: 'http://www.combodo.com/itop-help'
	'online_help' => 'http://ijz.me',

	// php_path: Path to the php executable in CLI mode
	//	default: 'php'
	'php_path' => 'php',

	// portal_tickets: CSV list of classes supported in the portal
	//	default: 'UserRequest'
	'portal_tickets' => 'UserRequest',

	'secure_connection_required' => false,

	// session_name: The name of the cookie used to store the PHP session id
	//	default: 'iTop'
	'session_name' => 'iTop',

	// shortcut_actions: Actions that are available as direct buttons next to the "Actions" menu
	//	default: 'UI:Menu:Modify,UI:Menu:New'
	'shortcut_actions' => 'UI:Menu:Modify,UI:Menu:New',

	// source_dir: Source directory for the datamodel files. (which gets compiled to env-production).
	//	default: ''
	'source_dir' => 'datamodels/2.x/',

	'standard_reload_interval' => '300',

	// synchro_trace: Synchronization details: none, display, save (includes 'display')
	//	default: 'none'
	'synchro_trace' => 'none',

	// timezone: Timezone (reference: http://php.net/manual/en/timezones.php). If empty, it will be left unchanged and MUST be explicitely configured in PHP
	//	default: 'Europe/Paris'
	'timezone' => 'Asia/Shanghai',

	// tracking_level_linked_set_default: Default tracking level if not explicitely set at the attribute level, for AttributeLinkedSet (defaults to NONE in case of a fresh install, LIST otherwise - this to preserve backward compatibility while upgrading from a version older than 2.0.3 - see TRAC #936)
	//	default: 1
	'tracking_level_linked_set_default' => 0,

	// url_validation_pattern: Regular expression to validate/detect the format of an URL (URL attributes and Wiki formatting for Text attributes)
	//	default: '(https?|ftp)\\://([a-zA-Z0-9+!*(),;?&=\\$_.-]+(\\:[a-zA-Z0-9+!*(),;?&=\\$_.-]+)?@)?([a-zA-Z0-9-.]{3,})(\\:[0-9]{2,5})?(/([a-zA-Z0-9%+\\$_-]\\.?)+)*/?(\\?[a-zA-Z+&\\$_.-][a-zA-Z0-9;:[\\]@&%=+/\\$_.-]*)?(#[a-zA-Z_.-][a-zA-Z0-9+\\$_.-]*)?'
	'url_validation_pattern' => '(https?|ftp)\\://([a-zA-Z0-9+!*(),;?&=\\$_.-]+(\\:[a-zA-Z0-9+!*(),;?&=\\$_.-]+)?@)?([a-zA-Z0-9-.]{3,})(\\:[0-9]{2,5})?(/([a-zA-Z0-9%+\\$_-]\\.?)+)*/?(\\?[a-zA-Z+&\\$_.-][a-zA-Z0-9;:[\\]@&%=+/\\$_.-]*)?(#[a-zA-Z_.-][a-zA-Z0-9+\\$_.-]*)?',
);

/**
 *
 * Modules specific settings
 *
 */
$MyModuleSettings = array(
	'itop-attachments' => array (
		'allowed_classes' => array (
		  0 => 'Ticket',
		),
		'position' => 'relations',
	),
);

/**
 *
 * Data model modules to be loaded. Names are specified as relative paths
 *
 */
$MyModules = array(
	'application' => array (
		'application/transaction.class.inc.php',
		'application/menunode.class.inc.php',
		'application/user.preferences.class.inc.php',
		'application/user.dashboard.class.inc.php',
		'application/audit.rule.class.inc.php',
		'application/query.class.inc.php',
		'core/event.class.inc.php',
		'core/action.class.inc.php',
		'core/trigger.class.inc.php',
		'synchro/synchrodatasource.class.inc.php',
		'core/backgroundtask.class.inc.php',
	),
	'business' => array (
		'env-production/authent-external/model.authent-external.php',
		'env-production/authent-local/model.authent-local.php',
		'env-production/itop-attachments/model.itop-attachments.php',
		'env-production/itop-attachments/main.attachments.php',
		'env-production/itop-bridge-virtualization-storage/model.itop-bridge-virtualization-storage.php',
		'env-production/itop-config-mgmt/model.itop-config-mgmt.php',
		'env-production/itop-config-mgmt/main.itop-config-mgmt.php',
		'env-production/itop-datacenter-mgmt/model.itop-datacenter-mgmt.php',
		'env-production/itop-endusers-devices/model.itop-endusers-devices.php',
		'env-production/itop-profiles-itil/model.itop-profiles-itil.php',
		'env-production/itop-sla-computation/main.itop-sla-computation.php',
		'env-production/itop-storage-mgmt/model.itop-storage-mgmt.php',
		'env-production/itop-tickets/model.itop-tickets.php',
		'env-production/itop-tickets/main.itop-tickets.php',
		'env-production/itop-virtualization-mgmt/model.itop-virtualization-mgmt.php',
		'env-production/itop-welcome-itil/main.itop-welcome-itil.php',
		'env-production/itop-welcome-itil/model.itop-welcome-itil.php',
		'env-production/itop-change-mgmt-itil/model.itop-change-mgmt-itil.php',
		'env-production/itop-incident-mgmt-itil/model.itop-incident-mgmt-itil.php',
		'env-production/itop-knownerror-mgmt/model.itop-knownerror-mgmt.php',
		'env-production/itop-problem-mgmt/model.itop-problem-mgmt.php',
		'env-production/itop-request-mgmt-itil/model.itop-request-mgmt-itil.php',
		'env-production/itop-request-mgmt-itil/main.itop-request-mgmt-itil.php',
		'env-production/itop-service-mgmt/model.itop-service-mgmt.php',
	),
	'webservices' => array (
		'webservices/webservices.basic.php',
	),
	'addons' => array (
		'user rights' => 'addons/userrights/userrightsprofile.class.inc.php',
	),
	'dictionaries' => array (
		//'dictionaries/de.dictionary.itop.core.php',
		//'dictionaries/de.dictionary.itop.ui.php',
		'dictionaries/dictionary.itop.core.php',
		'dictionaries/dictionary.itop.ui.php',
		//'dictionaries/es_cr.dictionary.itop.core.php',
		//'dictionaries/es_cr.dictionary.itop.ui.php',
		//'dictionaries/fr.dictionary.itop.core.php',
		//'dictionaries/fr.dictionary.itop.ui.php',
		//'dictionaries/hu.dictionary.itop.core.php',
		//'dictionaries/hu.dictionary.itop.ui.php',
		//'dictionaries/it.dictionary.itop.core.php',
		//'dictionaries/it.dictionary.itop.ui.php',
		//'dictionaries/ja.dictionary.itop.core.php',
		//'dictionaries/ja.dictionary.itop.ui.php',
		//'dictionaries/pt_br.dictionary.itop.core.php',
		//'dictionaries/pt_br.dictionary.itop.ui.php',
		//'dictionaries/ru.dictionary.itop.core.php',
		//'dictionaries/ru.dictionary.itop.ui.php',
		//'dictionaries/tr.dictionary.itop.core.php',
		//'dictionaries/tr.dictionary.itop.ui.php',
		'dictionaries/zh.dictionary.itop.core.php',
		'dictionaries/zh.dictionary.itop.ui.php',
		//'env-production/dictionaries/de-de.dict.php',
		'env-production/dictionaries/en-us.dict.php',
		//'env-production/dictionaries/es-cr.dict.php',
		//'env-production/dictionaries/fr-fr.dict.php',
		//'env-production/dictionaries/hu-hu.dict.php',
		//'env-production/dictionaries/it-it.dict.php',
		//'env-production/dictionaries/ja-jp.dict.php',
		//'env-production/dictionaries/pt-br.dict.php',
		//'env-production/dictionaries/ru-ru.dict.php',
		//'env-production/dictionaries/tr-tr.dict.php',
		'env-production/dictionaries/zh-cn.dict.php',
	),
);
?>