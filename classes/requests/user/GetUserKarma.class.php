<?php
/**
 * Created by irworks on 09.10.16.
 * © Copyright irworks, 2016
 * All rights reserved. Do not destribute.
 */

/**
 * Module: Gets the user Karma.
 * File: PodelAPI/GetUserKarma.class.php
 * Depends: JodelAPIRequest.class.php
 */

namespace PodelAPI\Controller\Requests;
require_once __DIR__ . '/../JodelAPIRequest.class.php';
require_once __DIR__ . '/../../../models/User.object.php';

class GetUserKarma extends JodelAPIRequest
{
    /**
     * GetUserKarma constructor.
     * Gets the karma from the old v2 API.
     */
    public function __construct() {
        parent::__construct(BASE_URL_V2, '/users/karma', array(), 'GET');
    }
}