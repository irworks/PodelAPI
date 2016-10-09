<?php
/**
 * Created by irworks on 09.10.16.
 * © Copyright irworks, 2016
 * All rights reserved. Do not destribute.
 */

/**
 * Module: Gets the Discussed Channel Jodels
 * File: PodelAPI/GetDiscussed.class.php
 * Depends: [NONE]
 */

namespace PodelAPI\Controller\Requests;
require_once __DIR__ . '/../../JodelAPIRequest.class.php';
require_once __DIR__ . '/../../../../models/Jodel.object.php';

class GetDiscussed extends JodelAPIRequest
{
    public function __construct($channel = '') {
        parent::__construct(BASE_URL_V3, '/posts/channel/discussed', array('channel' => $channel), 'GET');
    }
}