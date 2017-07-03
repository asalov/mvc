<?php
	// Global vars
	define('ROOT', dirname(dirname(__FILE__)));
	define('DS', DIRECTORY_SEPARATOR);
	define('PATH', 'YOUR_PROJECT_PATH');
	define('PROJECT_NAME', 'MVC');
	define('MAIN_TITLE', 'PHP MVC');
	
	// DB connection
	define('DB_TYPE', 'YOUR_DB_TYPE');
	define('DB_HOST', 'YOUR_DB_HOST');
	define('DB_NAME', 'YOUR_DB_NAME');
	define('DB_USER', 'YOUR_DB_USERNAME');
	define('DB_PASS', 'YOUR_DB_PASSWORD');

	// Email settings
	define('EMAIL_DOMAIN', 'YOUR_EMAIL_DOMAIN');
	define('EMAIL_ADMIN', 'YOUR_ADMIN_EMAIL_ADDRESS');
	define('EMAIL_FROM', '');
	define('EMAIL_HOST', 'YOUR_EMAIL_HOST');
	define('EMAIL_USER', 'YOUR_EMAIL_USERNAME');
	define('EMAIL_PASS', 'YOUR_EMAIL_PASSWORD');
	define('EMAIL_PORT', 25);
	define('EMAIL_PROTOCOL', '');

	// Default controller settings
	define('DEFAULT_CONTROLLER', 'home');
	define('DEFAULT_METHOD', 'index');

	// Error log
	define('LOG_FILE', ROOT . '/errors.log');