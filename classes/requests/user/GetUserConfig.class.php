<?php
/**
 * Created by irworks on 08.10.16.
 * © Copyright irworks, 2016
 * All rights reserved. Do not destribute.
 */

/**
 * Module: Gets the user config
 * File: PodelAPI/GetUserConfig.class.php
 * Depends: [NONE]
 */

namespace PodelAPI\Controller\Requests;
require_once __DIR__ . '../JodelAPIRequest.class.php';

class GetUserConfig extends JodelAPIRequest
{
    /**
     * GetUserConfig constructor.
     * Gets the user Model from the API.
     */
    public function __construct() {
        parent::__construct(BASE_URL_V3, '/user/config');
    }
}