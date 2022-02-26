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

class ServiceManagementController extends BaseController
{
    public function __construct(ConfigurationInterface $config, array $authManagers, ?HttpCallBack $httpCallBack)
    {
        parent::__construct($config, $authManagers, $httpCallBack);
    }

    /**
     * @param string $accept
     *
     * @return mixed Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function indexService(string $accept)
    {
        //prepare query string for API call
        $_queryBuilder = '/service';

        //validate and preprocess url
        $_queryUrl = ApiHelper::cleanUrl($this->config->getBaseUri(Server::SERVER_2) . $_queryBuilder);

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
     *
     * @return mixed Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function showService(string $accept)
    {
        //prepare query string for API call
        $_queryBuilder = '/service/1';

        //validate and preprocess url
        $_queryUrl = ApiHelper::cleanUrl($this->config->getBaseUri(Server::SERVER_2) . $_queryBuilder);

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Content-Type'    => 'multipart/form-data',
            'accept'          => $accept
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
    public function serviceWithDetail(string $accept)
    {
        //prepare query string for API call
        $_queryBuilder = '/service/detail';

        //validate and preprocess url
        $_queryUrl = ApiHelper::cleanUrl($this->config->getBaseUri(Server::SERVER_2) . $_queryBuilder);

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
     * @param string $title
     * @param string $subtitle
     * @param string $file
     * @param string $description
     *
     * @return mixed Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function service(string $accept, string $title, string $subtitle, string $file, string $description)
    {
        //prepare query string for API call
        $_queryBuilder = '/service';

        //validate and preprocess url
        $_queryUrl = ApiHelper::cleanUrl($this->config->getBaseUri(Server::SERVER_2) . $_queryBuilder);

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Accept'          => $accept
        ];

        //prepare parameters
        $_parameters = [
            'title'        => $title,
            'subtitle'     => $subtitle,
            'file'         => $file,
            'description'  => $description
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
     * @param string $title
     * @param string $subtitle
     * @param string $file
     * @param string $action
     * @param string $description
     *
     * @return mixed Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function editService(
        string $xHttpMethodOverride,
        string $accept,
        string $title,
        string $subtitle,
        string $file,
        string $action,
        string $description
    ) {
        //prepare query string for API call
        $_queryBuilder = '/service/1';

        //validate and preprocess url
        $_queryUrl = ApiHelper::cleanUrl($this->config->getBaseUri(Server::SERVER_2) . $_queryBuilder);

        //prepare headers
        $_headers = [
            'user-agent'           => self::$userAgent,
            'x-http-method-override' => $xHttpMethodOverride,
            'Accept'                 => $accept
        ];

        //prepare parameters
        $_parameters = [
            'title'                  => $title,
            'subtitle'               => $subtitle,
            'file'                   => $file,
            'action'                 => $action,
            'description'            => $description
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
     * @param string $accept
     *
     * @return mixed Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function deleteService(string $accept)
    {
        //prepare query string for API call
        $_queryBuilder = '/service/2';

        //validate and preprocess url
        $_queryUrl = ApiHelper::cleanUrl($this->config->getBaseUri(Server::SERVER_2) . $_queryBuilder);

        //prepare headers
        $_headers = [
            'user-agent'    => self::$userAgent,
            'Content-Type'    => 'multipart/form-data',
            'accept'          => $accept
        ];

        $_httpRequest = new HttpRequest(HttpMethod::DELETE, $_headers, $_queryUrl);

        // Apply authorization to request
        $this->getAuthManager('global')->apply($_httpRequest);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        // and invoke the API call request to fetch the response
        try {
            $response = Request::delete($_httpRequest->getQueryUrl(), $_httpRequest->getHeaders());
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
     * @param string $slug
     * @param string $accept
     *
     * @return mixed Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getImageService(string $slug, string $accept)
    {
        //prepare query string for API call
        $_queryBuilder = '/service/image/{slug}';

        //process optional query parameters
        $_queryBuilder = ApiHelper::appendUrlWithTemplateParameters($_queryBuilder, [
            'slug'         => $slug,
        ]);

        //validate and preprocess url
        $_queryUrl = ApiHelper::cleanUrl($this->config->getBaseUri(Server::SERVER_2) . $_queryBuilder);

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
}
