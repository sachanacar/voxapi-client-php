<?php
/*
 * ProvisioningAPILib
 *
 * This file was automatically generated by APIMATIC BETA v2.0 on 01/06/2015
 */

class InventoryController {

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
     * listCapacityGroup is a method that allows you to get the list of your capacity groups.
     * @param   string $pageNumber    Required parameter: The page number, starting at 0.
     * @param   string $pageSize    Required parameter: The page size (max number of entities that are displayed in the response).
     * @param   string|null $capacityGroupId    Optional parameter: The identifier of the capacity group to search for.
     * @param   string|null $description    Optional parameter: The description of the capacity group.
     * @param   string|null $e164    Optional parameter: The e164 bound to the capacity group.
     * @return mixed response from the API call*/
    public function listCapacityGroup (
                $pageNumber,
                $pageSize,
                $capacityGroupId = NULL,
                $description = NULL,
                $e164 = NULL) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/services/rest/configuration/capacitygroup';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($queryBuilder, array (
            'pageNumber' => $pageNumber,
            'pageSize' => $pageSize,
            'capacityGroupId' => $capacityGroupId,
            'description' => $description,
            'e164' => $e164,
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
     * The listCountry operation allows you to search for countries available in the Voxbone coverage.
     * @param   string $pageNumber    Required parameter: The page number, starting at 0.
     * @param   string $pageSize    Required parameter: The page size (max number of entities that are displayed in the response).
     * @param   string|null $countryCodeA3    Optional parameter: The three letter identifier of the country.
     * @return mixed response from the API call*/
    public function listCountry (
                $pageNumber,
                $pageSize,
                $countryCodeA3 = NULL) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/services/rest/inventory/country';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($queryBuilder, array (
            'pageNumber' => $pageNumber,
            'pageSize' => $pageSize,
            'countryCodeA3' => $countryCodeA3,
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
     * listCreditPackage is a method related to Voxbone’s inventory. This method is used to retrieve the list of packages that are available for prepaid credits top-ups (e.g. $100 Prepaid Credits package which shows a value multiplied by 100: “Price100=10000”).
     * @return mixed response from the API call*/
    public function listCreditPackage () 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/services/rest/inventory/creditpackage';

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
     * listDid is a method related to your own inventory. This method allows you to search for DIDs within your own inventory. This method can be useful to get the current configuration of one or multiple DIDs.
     * @param   string $pageSize    Required parameter: The page size (max number of entities that are displayed in the response).
     * @param   string $pageNumber    Required parameter: The page number, starting at 0.
     * @param   string|null $webRtcEnabled    Optional parameter: A boolean flag indicating if the numbers are WebRTC flagged.
     * @param   string|null $smsOutbound    Optional parameter: A boolean flag indicating if the numbers are SMS Outbound flagged.
     * @param   string|null $deliveryId    Optional parameter: The identifier of the pop the numbers are mapped to.
     * @param   string|null $portingReference    Optional parameter: The reference for the numbers' porting request.
     * @param   string|null $orderReference    Optional parameter: The reference for the numbers' order.
     * @param   string|null $countryCodeA3    Optional parameter: The three letter identifier of the country the numbers are part of.
     * @param   string|null $serviceType    Optional parameter: The service type of the numbers.
     * @param   string|null $smsLinkGroupId    Optional parameter: The identifier of the sms link group the numbers are mapped to.
     * @param   string|null $faxUriId    Optional parameter: The identifier of the fax uri the numbers are mapped to.
     * @param   string|null $voiceUriId    Optional parameter: The identifier of the voice uri the numbers are mapped to.
     * @param   string|null $regulationAddressId    Optional parameter: The identifier of the address the numbers are linked to.
     * @param   string|null $e164Pattern    Optional parameter: The E164, or part of it. The system will attempt to find any number which E164 contains this string of numbers.
     * @param   string|null $didGroupIds    Optional parameter: A list of identifiers for the didGroup the numbers are part of.
     * @param   string|null $needAddressLink    Optional parameter: A boolean flag indicating if the numbers need to be linked to an address for regulation purposes.
     * @param   string|null $didIds    Optional parameter: A list of number identifiers.
     * @return mixed response from the API call*/
    public function listDid (
                $pageSize,
                $pageNumber,
                $webRtcEnabled = NULL,
                $smsOutbound = NULL,
                $deliveryId = NULL,
                $portingReference = NULL,
                $orderReference = NULL,
                $countryCodeA3 = NULL,
                $serviceType = NULL,
                $smsLinkGroupId = NULL,
                $faxUriId = NULL,
                $voiceUriId = NULL,
                $regulationAddressId = NULL,
                $e164Pattern = NULL,
                $didGroupIds = NULL,
                $needAddressLink = NULL,
                $didIds = NULL) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/services/rest/inventory/did';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($queryBuilder, array (
            'pageSize' => $pageSize,
            'pageNumber' => $pageNumber,
            'webRtcEnabled' => $webRtcEnabled,
            'smsOutbound' => $smsOutbound,
            'deliveryId' => $deliveryId,
            'portingReference' => $portingReference,
            'orderReference' => $orderReference,
            'countryCodeA3' => $countryCodeA3,
            'serviceType' => $serviceType,
            'smsLinkGroupId' => $smsLinkGroupId,
            'faxUriId' => $faxUriId,
            'voiceUriId' => $voiceUriId,
            'regulationAddressId' => $regulationAddressId,
            'e164Pattern' => $e164Pattern,
            'didGroupIds' => $didGroupIds,
            'needAddressLink' => $needAddressLink,
            'didIds' => $didIds,
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
     * listDidGroup is a method related to Voxbone’s inventory. It allows you to retrieve the list of DID groups. A DID group can be defined as the smallest set of DIDs which is usually DIDs that share the same city or area code attributes. It is a method which is useful to get pricing info on a DID and to get didGroupIds which is a required parameter when placing a DID order.
     * @param   string $countryCodeA3    Required parameter: The three letter identifier for the didGroup's country.
     * @param   string $pageNumber    Required parameter: The page number, starting at 0.
     * @param   string $pageSize    Required parameter: The page size (max number of entities that are displayed in the response).
     * @param   string|null $didGroupIds    Optional parameter: The list of didGroup identifier.
     * @param   string|null $stateId    Optional parameter: The numerical identifier for the didGroup's state. Please see the listState operation to retrieve a validstate identifier.
     * @param   string|null $cityNamePattern    Optional parameter: The name of the didGroup's city. Note that the system will execute a partial match on the city name.
     * @param   string|null $rateCenter    Optional parameter: The name of the didGroup's ratecenter. Note that the system will execute a partial match on the ratecenter name.
     * @param   string|null $areaCode    Optional parameter: The didGroup's area code.
     * @param   string|null $didType    Optional parameter: The didGroup's did type.
     * @param   string|null $showEmpty    Optional parameter: Set to true if you want to show the didGroups with no stock currently available.
     * @param   string|null $featureIds    Optional parameter: The list of desired feature. This list should contain the identifier of any desired feature for the didGroup.Please refer to the listFeature operation to retrieve valid feature identifiers.
     * @return mixed response from the API call*/
    public function listDidGroup (
                $countryCodeA3,
                $pageNumber,
                $pageSize,
                $didGroupIds = NULL,
                $stateId = NULL,
                $cityNamePattern = NULL,
                $rateCenter = NULL,
                $areaCode = NULL,
                $didType = NULL,
                $showEmpty = NULL,
                $featureIds = NULL) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/services/rest/inventory/didgroup';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($queryBuilder, array (
            'countryCodeA3' => $countryCodeA3,
            'pageNumber' => $pageNumber,
            'pageSize' => $pageSize,
            'didGroupIds' => $didGroupIds,
            'stateId' => $stateId,
            'cityNamePattern' => $cityNamePattern,
            'rateCenter' => $rateCenter,
            'areaCode' => $areaCode,
            'didType' => $didType,
            'showEmpty' => $showEmpty,
            'featureIds' => $featureIds,
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
     * listFeature is a method related to Voxbone’s inventory. It allows you to retrieve the list of features (featureID, name and description) that DIDs can have such as VoxFAX or VoxSMS.
     * @return mixed response from the API call*/
    public function listFeature () 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/services/rest/inventory/feature';

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
     * listTrunk is a method related to your own inventory. This method allows you to get the list of the trunks that are available in your account.
     * @return mixed response from the API call*/
    public function listTrunk () 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/services/rest/inventory/trunk';

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
     * The listZone operation allows you to display all the zones currently configured in your account.
     * @return mixed response from the API call*/
    public function listZone () 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/services/rest/inventory/zone';

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
     * The listCountry operation allows you to search for countries available in the Voxbone coverage.
     * @param   string $countryCodeA3    Required parameter: The three letter identifier of the country.
     * @return mixed response from the API call*/
    public function listACountry (
                $countryCodeA3) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/services/rest/inventory/country/{countryCodeA3}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array (
            'countryCodeA3' => $countryCodeA3,
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
     * listRestriction is a method related to Voxbone’s inventory. It allows you to get the list of restrictions per country in a text format.
     * @param   string $countryCodeA3    Required parameter: The three letter identifier of the country.
     * @return mixed response from the API call*/
    public function listRestriction (
                $countryCodeA3) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/services/rest/inventory/country/{countryCodeA3}/restriction';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array (
            'countryCodeA3' => $countryCodeA3,
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
     * listState is a method related to Voxbone’s inventory. It allows you to get the list of states for a country that has states such as USA and CAN.
     * @param   string $countryCodeA3    Required parameter: The three letter identifier of the country.
     * @return mixed response from the API call*/
    public function listState (
                $countryCodeA3) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/services/rest/inventory/country/{countryCodeA3}/state';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array (
            'countryCodeA3' => $countryCodeA3,
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
        
}