<?php
/*
 * TESTAREAAPISERVICELib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace TESTAREAAPISERVICELib\Tests;

use TESTAREAAPISERVICELib\Exceptions\ApiException;
use TESTAREAAPISERVICELib\Exceptions;
use TESTAREAAPISERVICELib\ApiHelper;
use TESTAREAAPISERVICELib\Models;
use PHPUnit\Framework\TestCase;

class ServiceManagementControllerTest extends TestCase
{
    /**
     * @var \TESTAREAAPISERVICELib\Controllers\ServiceManagementController Controller instance
     */
    protected static $controller;

    /**
     * @var HttpCallBackCatcher Callback
     */
    protected static $httpResponse;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$httpResponse = new HttpCallBackCatcher();
        self::$controller = ClientFactory::create(self::$httpResponse)->getServiceManagementController();
    }


    /**
     * Todo Add description for test testIndexService
     */
    public function testIndexService()
    {
        // Parameters for the API call
        $accept = '*/*';

        // Set callback and perform API call
        $result = null;
        try {
            $result = self::$controller->indexService($accept);
        } catch (ApiException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            self::$httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );
    }

    /**
     * Todo Add description for test testShowService
     */
    public function testShowService()
    {
        // Parameters for the API call
        $accept = 'application/json';

        // Set callback and perform API call
        $result = null;
        try {
            $result = self::$controller->showService($accept);
        } catch (ApiException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            self::$httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );
    }

    /**
     * Todo Add description for test testServiceWithDetail
     */
    public function testServiceWithDetail()
    {
        // Parameters for the API call
        $accept = '*/*';

        // Set callback and perform API call
        $result = null;
        try {
            $result = self::$controller->serviceWithDetail($accept);
        } catch (ApiException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            self::$httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );
    }

    /**
     * Todo Add description for test testService
     */
    public function testService()
    {
        // Parameters for the API call
        $accept = '*/*';
        $title = 'Jelajah Indonesia';
        $subtitle = 'Jelajahi Dan Nikmati Keindahan Indonesia ';
        $file = '';
        $description = '<h3>One Day Tour</h3>
 <p>Jalan Jalan Bersama Kami Bin Ilyas Pariwisata Selama Seharian Penuh</p>
<p>&nbsp;</p>
<h3>Paket Yang Kami Sediakan</h3>
<p>Pilihan Yang Tersedia :</p>
<ul>
	<li>Bandung | 400k/orang | plus konsumsi 500k/orang</li>
	<li>Bali | 400k/orang | plus konsumsi 500k/orang</li>
	<li>Raja Ampat | 400k/orang | plus konsumsi 500k/orang</li>
	<li>Labuan Bajo | 400k/orang | plus konsumsi 500k/orang</li>
</ul>';

        // Set callback and perform API call
        $result = null;
        try {
            $result = self::$controller->service($accept, $title, $subtitle, $file, $description);
        } catch (ApiException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            self::$httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );
    }

    /**
     * Todo Add description for test testEditService
     */
    public function testEditService()
    {
        // Parameters for the API call
        $xHttpMethodOverride = 'patch';
        $accept = '*/*';
        $title = 'service 1 edit';
        $subtitle = 'pelayanan cuci';
        $file = '';
        $action = 'asd';
        $description = 'kami memberikan pelayanan cuci piring';

        // Set callback and perform API call
        $result = null;
        try {
            $result = self::$controller->editService($xHttpMethodOverride, $accept, $title, $subtitle, $file, $action, $description);
        } catch (ApiException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            self::$httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );
    }

    /**
     * Todo Add description for test testDeleteService
     */
    public function testDeleteService()
    {
        // Parameters for the API call
        $accept = 'application/json';

        // Set callback and perform API call
        $result = null;
        try {
            $result = self::$controller->deleteService($accept);
        } catch (ApiException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            self::$httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );
    }

    /**
     * Todo Add description for test testGetImageService
     */
    public function testGetImageService()
    {
        // Parameters for the API call
        $slug = 'slug10';
        $accept = '*/*';

        // Set callback and perform API call
        $result = null;
        try {
            $result = self::$controller->getImageService($slug, $accept);
        } catch (ApiException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            self::$httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );
    }
}
