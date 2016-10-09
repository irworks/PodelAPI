<?php
/**
 * Created by irworks on 08.10.16.
 * © Copyright irworks, 2016
 * All rights reserved. Do not destribute.
 */

/**
 * Module: Test cases.
 * File: PodelAPI/JodelAPIControllerTest.php
 * Depends: [NONE]
 */

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../classes/JodelAPIController.class.php';

class JodelAPIControllerTest extends PHPUnit_Framework_TestCase
{
    /** @var  \PodelAPI\Controller\JodelAPIController $jodelAPIController */
    protected $jodelAPIController;

    protected function setUp() {
        parent::setUp();
        $this->jodelAPIController = new \PodelAPI\Controller\JodelAPIController(AUTH_TOKEN);
    }

    public function testGetJodelsComboByLocation() {
        $jodels = $this->jodelAPIController->getJodelsComboByLocation('7.249665114077564', '51.44943728721945');
        $this->assertNotNull($jodels, 'Jodels from API are null.');
    }

    public function testgetUserKarma() {
        $karmaUser = $this->jodelAPIController->getUserKarma();
        $this->assertNotNull($karmaUser, 'Karma user is null!');
        $this->assertGreaterThan(2, $karmaUser->getKarma(), 'The karma is lower than 2.');
    }
}
