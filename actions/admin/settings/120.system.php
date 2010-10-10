<?php

/**
 * This file is part of the Froxlor project.
 * Copyright (c) 2003-2009 the SysCP Team (see authors).
 * Copyright (c) 2010 the Froxlor Team (see authors).
 *
 * For the full copyright and license information, please view the COPYING
 * file that was distributed with this source code. You can also view the
 * COPYING file online at http://files.froxlor.org/misc/COPYING.txt
 *
 * @copyright  (c) the authors
 * @author     Florian Lippert <flo@syscp.org> (2003-2009)
 * @author     Froxlor team <team@froxlor.org> (2010-)
 * @license    GPLv2 http://files.froxlor.org/misc/COPYING.txt
 * @package    Settings
 * @version    $Id$
 */

return array(
	'groups' => array(
		'system' => array(
			'title' => $lng['admin']['systemsettings'],
			'fields' => array(
				'system_documentroot_prefix' => array(
					'label' => $lng['serversettings']['documentroot_prefix'],
					'settinggroup' => 'system',
					'varname' => 'documentroot_prefix',
					'type' => 'string',
					'default' => '/var/customers/webs/',
					'plausibility_check_method' => 'checkPathConflicts',
					'save_method' => 'storeSettingField',
					),
				'system_ipaddress' => array(
					'label' => $lng['serversettings']['ipaddress'],
					'settinggroup' => 'system',
					'varname' => 'ipaddress',
					'type' => 'option',
					'option_mode' => 'one',
					'option_options_method' => 'getIpAddresses',
					'default' => '',
					'save_method' => 'storeSettingIpAddress',
					),
				'system_defaultip' => array(
					'label' => $lng['serversettings']['defaultip'],
					'settinggroup' => 'system',
					'varname' => 'defaultip',
					'type' => 'option',
					'option_mode' => 'one',
					'option_options_method' => 'getIpPortCombinations',
					'default' => '',
					'save_method' => 'storeSettingDefaultIp',
					),
				'system_hostname' => array(
					'label' => $lng['serversettings']['hostname'],
					'settinggroup' => 'system',
					'varname' => 'hostname',
					'type' => 'string',
					'default' => '',
					'save_method' => 'storeSettingHostname',
					),
				'system_froxlordirectlyviahostname' => array(
					'label' => $lng['serversettings']['froxlordirectlyviahostname'],
					'settinggroup' => 'system',
					'varname' => 'froxlordirectlyviahostname',
					'type' => 'bool',
					'default' => false,
					'save_method' => 'storeSettingField',
					),
				'system_stdsubdomain' => array(
					'label' => $lng['serversettings']['stdsubdomainhost'],
					'settinggroup' => 'system',
					'varname' => 'stdsubdomain',
					'type' => 'string',
					'default' => '',
					'save_method' => 'storeSettingHostname',
					),
				'system_mysql_access_host' => array(
					'label' => $lng['serversettings']['mysql_access_host'],
					'settinggroup' => 'system',
					'varname' => 'mysql_access_host',
					'type' => 'string',
					'default' => '127.0.0.1,localhost',
					'plausibility_check_method' => 'checkMysqlAccessHost',
					'save_method' => 'storeSettingMysqlAccessHost',
					),
				'system_realtime_port' => array(
					'label' => $lng['serversettings']['system_realtime_port'],
					'settinggroup' => 'system',
					'varname' => 'realtime_port',
					'type' => (function_exists('socket_create') ? 'int' : 'hidden'),
					'int_max' => 65535,
					'default' => 0,
					'save_method' => 'storeSettingField',
					),
				'system_index_file_extension' => array(
					'label' => $lng['serversettings']['index_file_extension'],
					'settinggroup' => 'system',
					'varname' => 'index_file_extension',
					'type' => 'string',
					'string_regexp' => '/^[a-zA-Z0-9]{1,6}$/',
					'default' => 'html',
					'save_method' => 'storeSettingField',
					),
				'system_store_index_file_subs' => array(
					'label' => $lng['serversettings']['system_store_index_file_subs'],
					'settinggroup' => 'system',
					'varname' => 'store_index_file_subs',
					'type' => 'bool',
					'default' => true,
					'save_method' => 'storeSettingField',
					),
				'system_debug_cron' => array(
					'label' => $lng['serversettings']['cron']['debug'],
					'settinggroup' => 'system',
					'varname' => 'debug_cron',
					'type' => 'bool',
					'default' => false,
					'save_method' => 'storeSettingField',
					),					
				),
			),
		),
	);

?>