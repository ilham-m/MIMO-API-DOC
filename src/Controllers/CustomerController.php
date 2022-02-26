<?php

declare(strict_types=1);

/*
 * TESTAREAAPISERVICELib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace TESTAREAAPISERVICELib\Controllers;

use TESTAREAAPISERVICELib\Exceptions\ApiException;
use TESTAREAAPISERVICELib\ApiHelper;
use TESTAREAAPISERVICELib\ConfigurationInterface;
use TESTAREAAPISERVICELib\Http\HttpRequest;
use TESTAREAAPISERVICELib\Http\HttpResponse;
use TESTAREAAPISERVICELib\Http\HttpMethod;
use TESTAREAAPISERVICELib\Http\HttpContext;
use TESTAREAAPISERVICELib\Http\HttpCallBack;
use TESTAREAAPISERVICELib\Server;
use Unirest\Request;

class CustomerController extends BaseController
{
    public function __construct(ConfigurationInterface $config, array $authManagers, ?HttpCallBack $httpCallBack)
    {
        parent::__construct($config, $authManagers, $httpCallBack);
    }

    /**
     * @param string $token
     * @param string $accept
     *
     * @return mixed Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function customerIndexPackage(string $token, string $accept)
    {
        //prepare query string for API call
        $_queryBuilder = '/customer-package/customer';

        //validate and preprocess url
        $_queryUrl = ApiHelper::cleanUrl($this->config->getBaseUri(Server::SERVER_1) . $_queryBuilder);

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Content-Type'    => 'multipart/form-data',
            'token'           => $token,
            'Accept'          => $accept
        ];

        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = Request::get($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders());
        } catch (\Unirest\Exception $ex) {
            throw new ApiException($ex->getMessage(), $_httpRequest);
        }


        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return $response->body;
    }

    /**
     * @param string $accept
     *
     * @return mixed Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function detailPackageCustomer(string $accept)
    {
        //prepare query string for API call
        $_queryBuilder = '/customer-package/customer/detail/MIMO-000001';

        //validate and preprocess url
        $_queryUrl = ApiHelper::cleanUrl($this->config->getBaseUri(Server::SERVER_1) . $_queryBuilder);

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Content-Type'    => 'multipart/form-data',
            'Accept'          => $accept
        ];

        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = Request::get($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders());
        } catch (\Unirest\Exception $ex) {
            throw new ApiException($ex->getMessage(), $_httpRequest);
        }


        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return $response->body;
    }

    /**
     * @param string $accept
     * @param string $shippingAddress
     * @param string $description
     * @param string $invoice
     * @param string $packageList
     *
     * @return mixed Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function storePackage(
        string $accept,
        string $shippingAddress,
        string $description,
        string $invoice,
        string $packageList
    ) {
        //prepare query string for API call
        $_queryBuilder = '/customer-package';

        //validate and preprocess url
        $_queryUrl = ApiHelper::cleanUrl($this->config->getBaseUri(Server::SERVER_1) . $_queryBuilder);

        //prepare headers
        $_headers = [
            'user-agent'     => self::$userAgent,
            'Accept'           => $accept
        ];

        //prepare parameters
        $_parameters = [
            'shipping_address' => $shippingAddress,
            'description'      => $description,
            'invoice'          => $invoice,
            'package_list'     => $packageList
        ];

        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl, $_parameters);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = Request::post(
                $_httpRequest->getQueryUrl(),
                $_httpRequest->getHeaders(),
                Request\Body::Form($_parameters)
            );
        } catch (\Unirest\Exception $ex) {
            throw new ApiException($ex->getMessage(), $_httpRequest);
        }


        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return $response->body;
    }

    /**
     * @param string $token
     * @param string $accept
     * @param int $packageId
     * @param string $trackingNumber
     *
     * @return mixed Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function addTrackingNumberResiNumber(string $token, string $accept, int $packageId, string $trackingNumber)
    {
        //prepare query string for API call
        $_queryBuilder = '/customer-package/tracking-number';

        //validate and preprocess url
        $_queryUrl = ApiHelper::cleanUrl($this->config->getBaseUri(Server::SERVER_1) . $_queryBuilder);

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'token'           => $token,
            'Accept'          => $accept
        ];

        //prepare parameters
        $_parameters = [
            'package_id'      => $packageId,
            'tracking_number' => $trackingNumber
        ];

        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl, $_parameters);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = Request::post(
                $_httpRequest->getQueryUrl(),
                $_httpRequest->getHeaders(),
                Request\Body::Form($_parameters)
            );
        } catch (\Unirest\Exception $ex) {
            throw new ApiException($ex->getMessage(), $_httpRequest);
        }


        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return $response->body;
    }

    /**
     * @param string $xHttpMethodOverride
     * @param string $accept
     * @param string $shippingAddress
     * @param string $description
     * @param string $invoice
     * @param string $packageList
     *
     * @return mixed Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updatePackage(
        string $xHttpMethodOverride,
        string $accept,
        string $shippingAddress,
        string $description,
        string $invoice,
        string $packageList
    ) {
        //prepare query string for API call
        $_queryBuilder = '/detail-package/4';

        //validate and preprocess url
        $_queryUrl = ApiHelper::cleanUrl($this->config->getBaseUri(Server::SERVER_1) . $_queryBuilder);

        //prepare headers
        $_headers = [
            'user-agent'           => self::$userAgent,
            'x-http-method-override' => $xHttpMethodOverride,
            'Accept'                 => $accept
        ];

        //prepare parameters
        $_parameters = [
            'shipping_address'       => $shippingAddress,
            'description'            => $description,
            'invoice'                => $invoice,
            'package_list'           => $packageList
        ];

        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl, $_parameters);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = Request::post(
                $_httpRequest->getQueryUrl(),
                $_httpRequest->getHeaders(),
                Request\Body::Form($_parameters)
            );
        } catch (\Unirest\Exception $ex) {
            throw new ApiException($ex->getMessage(), $_httpRequest);
        }


        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpRequest);
        return $response->body;
    }
}
