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
require_once __DIR__ . '/../../conf/config.php';

abstract class JodelAPIRequest
{
    private $baseURL;
    private $endpoint;
    private $parameter;
    private $HTTPheader;
    private $method;

    /**
     * JodelAPIRequest constructor.
     * @param $baseURL
     * @param $endpoint
     * @param array $parameter
     * @param $method
     */
    public function __construct($baseURL, $endpoint, $parameter = array(), $method = 'POST') {
        $this->baseURL = $baseURL;
        $this->endpoint = $endpoint;
        $this->parameter = $parameter;
        $this->method = $method;

        $this->HTTPheader = array(
            'X-Timestamp: ' . date('Y-m-d\TH:i:s\Z'),
            'Accept: */*',
            'X-Api-Version: ' . API_VERSION,
            'X-Client-Type: ' . CLIENT_TYPE . '_' . APP_VERSION,
            'User-Agent: ' . USER_AGENT,
            'Content-Type: application/json'
        );

        if($method == 'GET') {
            foreach ($parameter as $key => $value) {
                $this->baseURL .= '&' . urlencode($key) . '=' . urlencode($value);
            }
            $this->parameter = array();
        }
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

    /**
     * @return string
     */
    public function getMethod(): string {
        return $this->method;
    }

}