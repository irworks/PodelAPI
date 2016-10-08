<?php
/**
 * Created by irworks on 08.10.16.
 * © Copyright irworks, 2016
 * All rights reserved. Do not destribute.
 */

/**
 * Module: Get the combo posts by location.
 * File: PodelAPI/GetCombo.class.php
 * Depends: [NONE]
 */

namespace PodelAPI\Controller\Requests;
require_once __DIR__ . '/../../JodelAPIRequest.class.php';
require_once __DIR__ . '/../../../../models/Jodel.object.php';

class GetCombo extends JodelAPIRequest
{
    /**
     * GetUserConfig constructor.
     * Gets the an array of post models from the API.
     * @param float $longitude
     * @param float $latitude
     * @param bool $stickies
     */
    public function __construct($longitude = 1.0, $latitude = 1.0, $stickies = false) {
        parent::__construct(BASE_URL_V3, '/posts/location/combo', array(
            'lng'       => $longitude,
            'lat'       => $latitude,
            'stickies'  => $stickies
        ));
    }
}