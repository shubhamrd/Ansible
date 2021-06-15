<?php
define('DB_NAME', '{{wp_db_name}}');
define('DB_USER', '{{wp_db_user}}');
define('DB_PASSWORD', '{{wp_db_password}}');
define('DB_HOST', '{{wp_db_host}}');

define('DB_CHARSET', 'utf8mb4');

define('DB_COLLATE', '');

{{wp_salt.stdout}}

$table_prefix  = 'wp_';

define('WP_DEBUG', false);

if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');
