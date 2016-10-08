<?php
/**
 * Created by irworks on 08.10.16.
 * © Copyright irworks, 2016
 * All rights reserved. Do not destribute.
 */

/**
 * Module: [INSERT]
 * File: PodelAPI/JodelAPIController.class.php
 * Depends: [NONE]
 */

namespace PodelAPI\Controller;
require_once __DIR__ . '/APIController.class.php';
require_once __DIR__ . '/requests/user/GetUserConfig.class.php';

use PodelAPI\Controller\Requests\GetUserConfig;
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
}