<?php
/*
 * ProvisioningAPILib
 *
 * This file was automatically generated by APIMATIC BETA v2.0 on 01/06/2015
 */

class CDRsController {

    /* private fields for configuration */

    /**
     * The username to use with basic authentication 
     * @var string
     */
    private $basicAuthUserName;

    /**
     * The password to use with basic authentication 
     * @var string
     */
    private $basicAuthPassword;

    /**
     * Constructor with authentication and configuration parameters
     */
    function __construct($basicAuthUserName, $basicAuthPassword)
    {
        $this->basicAuthUserName = $basicAuthUserName;
        $this->basicAuthPassword = $basicAuthPassword;
    }

    /**
     * The listExistingFile method allows you to list all the files that are available for download. You should use that method to get the name of the file before you can use the downloadFile method which requires the file name as an input parameter.
     * @return mixed response from the API call*/
    public function listExistingFiles () 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/services/rest/cdrs/cdrsfile';

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'User-Agent' => 'APIMATIC 2.0',
            'Accept' => 'application/json'
        );

        //prepare API request
        $request = Unirest::get($queryUrl, $headers, NULL, Configuration::$BasicAuthUserName, Configuration::$BasicAuthPassword);

        //and invoke the API call request to fetch the response
        $response = $request->getResponse();

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code);
        }

        return $response->body;
    }
        
    /**
     * Downloads the requested cdrs archive file with the given name using Mtom.
     * @param   string $fileName    Required parameter: The name of the file to download.
     * @return mixed response from the API call*/
    public function getDownloadFile (
                $fileName) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/services/rest/cdrs/cdrsfile/{fileName}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array (
            'fileName' => $fileName,
            ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'User-Agent' => 'APIMATIC 2.0',
            'Accept' => 'application/json'
        );

        //prepare API request
        $request = Unirest::get($queryUrl, $headers, NULL, Configuration::$BasicAuthUserName, Configuration::$BasicAuthPassword);

        //and invoke the API call request to fetch the response
        $response = $request->getResponse();

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code);
        }

        return $response->body;
    }
        
    /**
     * Sends a request to generate a report with all the cdrs for the given month and year. Note that it is only possible to request the generation of a report for a month set in the past.
     * @param   string $month    Required parameter: The desired month for the report generation.
     * @param   string $year    Required parameter: The desired year for the report generation.
     * @return mixed response from the API call*/
    public function createRequestFileCreation (
                $month,
                $year) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/services/rest/cdrs/cdrsfile/request/{year}/{month}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array (
            'month' => $month,
            'year' => $year,
            ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'User-Agent' => 'APIMATIC 2.0',
            'Accept' => 'application/json'
        );

        //prepare API request
        $request = Unirest::post($queryUrl, $headers, NULL, Configuration::$BasicAuthUserName, Configuration::$BasicAuthPassword);

        //and invoke the API call request to fetch the response
        $response = $request->getResponse();

        //Error handling using HTTP status codes
        if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code);
        }

        return $response->body;
    }
        
}