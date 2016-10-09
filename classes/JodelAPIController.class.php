<?php
/**
 * Created by irworks on 08.10.16.
 * © Copyright irworks, 2016
 * All rights reserved. Do not destribute.
 */

/**
 * Module: The main JodelAPI
 * File: PodelAPI/JodelAPIController.class.php
 * Depends: [NONE]
 */

namespace PodelAPI\Controller;
require_once __DIR__ . '/APIController.class.php';
require_once __DIR__ . '/requests/user/GetUserConfig.class.php';
require_once __DIR__ . '/requests/user/GetUserKarma.class.php';
require_once __DIR__ . '/requests/posts/location/GetCombo.class.php';
require_once __DIR__ . '/requests/posts/channel/GetDiscussed.class.php';

use PodelAPI\Controller\Requests\GetCombo;
use PodelAPI\Controller\Requests\GetDiscussed;
use PodelAPI\Controller\Requests\GetUserConfig;
use PodelAPI\Controller\Requests\GetUserKarma;
use PodelAPI\Models\Jodel;
use PodelAPI\Models\User;

class JodelAPIController extends APIController
{
    protected $auth_token;

    /**
     * JodelAPIController constructor.
     * Submit your auth token in order to use any request. Obtain your token from your phone by f.e. using a MITM Proxy.
     * @param string $auth_token
     */
    public function __construct($auth_token = AUTH_TOKEN) {
        $this->auth_token = $auth_token;
    }

    /**
     * Gets a user config model from the API and return it as a User object.
     * Warning, Karma is null, use getKarma() to request Karma in a User Model.
     * @return User
     */
    public function getUserConfig() : User {
        return new User($this->sendAPIRequest(new GetUserConfig(), $this->auth_token));
    }

    /**
     * Get the Karma, optional pass the already existing User object to complete it's karma field.
     * @param User|null $user
     * @return User
     */
    public function getUserKarma(User $user = null) : User {
        $output = new User();
        if($user) {
            $output = $user;
        }
        $apiUser = new User($this->sendAPIRequest(new GetUserKarma(), $this->auth_token));
        $output->setKarma($apiUser->getKarma());
        return $output;
    }

    /**
     * Receive an array of Jodels in the radius around the given location.
     * @param float $longitude
     * @param float $latitude
     * @param bool $stickies
     * @return array
     */
    public function getJodelsComboByLocation($longitude = 1.0, $latitude = 1.0, $stickies = false) : array {
        return $this->convertArrayArrayToObjectArray($this->sendAPIRequest(new GetCombo($longitude, $latitude, $stickies), $this->auth_token)['recent'], Jodel::class);
    }

    /**
     * Get the Jodels for a channel.
     * @param string $channel
     * @return array
     */
    public function getJodelsForChannel($channel = '') : array {
        return $this->convertArrayArrayToObjectArray($this->sendAPIRequest(new GetDiscussed($channel), $this->auth_token)['posts'], Jodel::class);
    }

    /**
     * Help method to create an array of objects of the given type out of an array of k=>v arrays.
     * @param array $data
     * @param $class
     * @return array
     */
    private function convertArrayArrayToObjectArray($data = array(), $class) :array {
        $output = array();
        foreach ($data as $item) {
            $output[] = new $class($item);
        }
        return $output;
    }
}