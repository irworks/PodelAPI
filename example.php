<?php
/**
 * Created by irworks on 08.10.16.
 * © Copyright irworks, 2016
 * All rights reserved. Do not destribute.
 */

/**
 * Module: [INSERT]
 * File: PodelAPI/example.php
 * Depends: [NONE]
 */

require_once __DIR__ . '/conf/config.php';
require_once __DIR__ . '/classes/JodelAPIController.class.php';

$controller = new \PodelAPI\Controller\JodelAPIController(AUTH_TOKEN);

/* Get all jodels at given coords. */
var_dump($controller->getJodelsComboByLocation('8.449665114077564', '50.14943728721945'));

?>