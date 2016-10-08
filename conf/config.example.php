<?php
/**
 * Created by irworks on 08.10.16.
 * © Copyright irworks, 2016
 * All rights reserved. Do not destribute.
 */

/**
 * Module: Shows an example config for the JodelAPI in PHP.
 * File: PodelAPI/config.example.php
 * Depends: [NONE]
 */

define('AUTH_TOKEN', '');
define('BASE_URL', 'https://api.go-tellm.com/api');
define('BASE_URL_V2', BASE_URL . '/v2');
define('BASE_URL_V3', BASE_URL . '/v3');

define('API_VERSION', 0.2);
/* the app version we are faking */
define('APP_VERSION', '3.28');
/* the device we are faking */
define('CLIENT_TYPE', 'ios');
define('USER_AGENT', 'Jodel/' . APP_VERSION . ' (iPhone; iOS 10.0.2; Scale/2.00)');
?>