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

class ReportController extends BaseController
{
    public function __construct(ConfigurationInterface $config, array $authManagers, ?HttpCallBack $httpCallBack)
    {
        parent::__construct($config, $authManagers, $httpCallBack);
    }

    /**
     * @param string $startDate
     * @param string $endDate
     * @param string $accept
     *
     * @return mixed Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function packageReport(string $startDate, string $endDate, string $accept)
    {
        //prepare query string for API call
        $_queryBuilder = '/customer-package/export';

        //process optional query parameters
        ApiHelper::appendUrlWithQueryParameters($_queryBuilder, [
            'start_date'   => $startDate,
            'end_date'     => $endDate,
        ]);

        //validate and preprocess url
        $_queryUrl = ApiHelper::cleanUrl($this->config->getBaseUri(Server::SERVER_1) . $_queryBuilder);

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Content-Type'    => 'application/x-www-form-urlencoded',
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
    public function customerListReport(string $accept)
    {
        //prepare query string for API call
        $_queryBuilder = '/customer-list/export';

        //validate and preprocess url
        $_queryUrl = ApiHelper::cleanUrl($this->config->getBaseUri(Server::SERVER_1) . $_queryBuilder);

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Content-Type'    => 'application/x-www-form-urlencoded',
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
    public function customerRankingReport(string $accept)
    {
        //prepare query string for API call
        $_queryBuilder = '/customer-ranking/export';

        //validate and preprocess url
        $_queryUrl = ApiHelper::cleanUrl($this->config->getBaseUri(Server::SERVER_1) . $_queryBuilder);

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Content-Type'    => 'application/x-www-form-urlencoded',
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
     * @param string $startDate
     * @param string $endDate
     * @param string $accept
     *
     * @return mixed Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function invoiceReport(string $startDate, string $endDate, string $accept)
    {
        //prepare query string for API call
        $_queryBuilder = '/invoice/export';

        //process optional query parameters
        ApiHelper::appendUrlWithQueryParameters($_queryBuilder, [
            'start_date'   => $startDate,
            'end_date'     => $endDate,
        ]);

        //validate and preprocess url
        $_queryUrl = ApiHelper::cleanUrl($this->config->getBaseUri(Server::SERVER_1) . $_queryBuilder);

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Content-Type'    => 'application/x-www-form-urlencoded',
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
}
