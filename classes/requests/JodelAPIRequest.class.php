<?php
/**
 * Created by irworks on 08.10.16.
 * © Copyright irworks, 2016
 * All rights reserved. Do not destribute.
 */

/**
 * Module: Sets all fields for the JodelAPI
 * File: PodelAPI/JodelAPIRequest.class.php
 * Depends: [NONE]
 */

namespace PodelAPI\Controller\Requests;
require_once __DIR__ . '../../conf/config.php';

abstract class JodelAPIRequest
{
    private $baseURL;
    private $endpoint;
    private $parameter;
    private $HTTPheader;

    /**
     * JodelAPIRequest constructor.
     * @param $baseURL
     * @param $endpoint
     * @param $parameter
     */
    public function __construct($baseURL, $endpoint, $parameter = array()) {
        $this->baseURL = $baseURL;
        $this->endpoint = $endpoint;
        $this->parameter = $parameter;
    }

    /**
     * @return mixed
     */
    public function getBaseURL() {
        return $this->baseURL;
    }

    /**
     * @return mixed
     */
    public function getEndpoint() {
        return $this->endpoint;
    }

    /**
     * @return array
     */
    public function getParameter(): array {
        return $this->parameter;
    }

    /**
     * @return mixed
     */
    public function getHTTPheader() {
        return $this->HTTPheader;
    }

}