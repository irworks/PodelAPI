<?php
/**
 * Created by irworks on 08.10.16.
 * © Copyright irworks, 2016
 * All rights reserved. Do not destribute.
 */

/**
 * Module: [INSERT]
 * File: PodelAPI/test.php
 * Depends: [NONE]
 */

require_once __DIR__ . '/conf/config.php';
require_once __DIR__ . '/classes/JodelAPIController.class.php';

$controller = new \PodelAPI\Controller\JodelAPIController(AUTH_TOKEN);

var_dump($controller->getJodelsComboByLocation('7.249665114077564', '51.44943728721945'));

?>