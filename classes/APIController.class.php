<?php
/**
 * Created by irworks on 08.10.16.
 * © Copyright irworks, 2016
 * All rights reserved. Do not destribute.
 */

/**
 * Module: The basic API Controller.
 * File: PodelAPI/APIController.class.php
 * Depends: [NONE]
 */

namespace PodelAPI\Controller;
require_once __DIR__ . '/CURL.class.php';
require_once __DIR__ . '/JodelAPIRequest.class.php';

abstract class APIController
{
    protected function sendAPIRequest(JodelAPIRequest $request) {
        $curl = new CURL($request->getBaseURL() . $request->getEndpoint() . '?access_token=' . $request->getAuthToken(), $request->getParameter(), $request->getHTTPheader());
        $curl->performRequest(true);
    }
}