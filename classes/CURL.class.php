<?php
/**
 * Created by irworks on 08.10.16.
 * © Copyright irworks, 2016
 * All rights reserved. Do not destribute.
 */

/**
 * Module: Creates web requests.
 * File: PodelAPI/CURL.class.php
 * Depends: [NONE]
 */

namespace PodelAPI\Controller;

class CURL
{
    /** @var null|string The URL to request */
    private $url = '';
    /** @var array|null An optional array of parameters to send to the given URL */
    private $parameter = array();
    /** @var array An optional array of custom header fields. */
    private $header = array();
    /** @var string $method - HTTP Method */
    private $method = 'POST';

    /**
     * CURL constructor.
     * @param null $url
     * @param null $parameter
     * @param string $method
     * @param array $header
     */
    function __construct($url = null, $parameter = null, $method = 'POST', $header = array()) {
        $this->url          = $url;
        $this->parameter    = $parameter;
        $this->header       = $header;
        $this->method       = $method;
    }

    /**
     * Perform the previously prepared request.
     * @param bool $parameterAsJSON
     * @return mixed
     */
    public function performRequest($parameterAsJSON = false) {
        $requestString = '';

        if ($parameterAsJSON) {
            $requestString = json_encode($this->parameter);
        } else {
            foreach ($this->parameter as $key => $value) {
                $requestString .= $key . '=' . urlencode($value) . '&';
            }
            rtrim($requestString, '&');
        }
        $ch = curl_init();

        if($this->method === 'POST') {
            curl_setopt($ch, CURLOPT_POST, count($this->parameter));
            curl_setopt($ch, CURLOPT_POSTFIELDS, $requestString);
        } else if($this->method === 'GET') {
            foreach ($this->parameter as $key => $value) {
                $this->url .= '&' . urlencode($key) . '=' . urlencode($value);
            }
        }

        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->header);

        $result = curl_exec($ch);

        curl_close($ch);
        return json_decode($result, true);
    }

    /**
     * Sets the URL parameter
     * @param string $url
     */
    public function setUrl($url) {
        $this->url = $url;
    }

    /**
     * Sets the parameter array
     * @param array|null $parameter
     */
    public function setParameter($parameter) {
        $this->parameter = $parameter;
    }

    /**
     * Sets the header array
     * @param array|null $header
     */
    public function setHeader($header) {
        $this->header = $header;
    }
}