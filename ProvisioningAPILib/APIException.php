<?php
/*
 * ProvisioningAPILib
 *
 * This file was automatically generated by APIMATIC BETA v2.0 on 01/06/2015
 */
class APIException extends Exception {
    //private value store
    private $responseCode;
    
    /*
     * The HTTP response code from the API request
     * @param string $reason the reason for raising an exception
     * @param int $responseCode the HTTP response code from the API request
     */
    public function __construct($reason, $responseCode)
    {
        parent::__construct($reason, $responseCode, NULL);
        $this->responseCode = $responseCode;
    }

    /*
     * The HTTP response code from the API request
     * @return int
     */
    public function getResponseCode()
    {
        return $this->responseCode;
    }

    /*
     * The reason for raising an exception
     * @return string
     */
    public function getReason()
    {
        return $this->message;
    }
}