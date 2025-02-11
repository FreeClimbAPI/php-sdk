<?php

/**
 * MessageRequestTest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  FreeClimb\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * FreeClimb API
 *
 * FreeClimb is a cloud-based application programming interface (API) that puts the power of the Vail platform in your hands. FreeClimb simplifies the process of creating applications that can use a full range of telephony features without requiring specialized or on-site telephony equipment. Using the FreeClimb REST API to write applications is easy! You have the option to use the language of your choice or hit the API directly. Your application can execute a command by issuing a RESTful request to the FreeClimb API. The base URL to send HTTP requests to the FreeClimb REST API is: /apiserver. FreeClimb authenticates and processes your request.
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: support@freeclimb.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace FreeClimb\Api\Test\Model;

use PHPUnit\Framework\TestCase;

/**
 * MessageRequestTest Class Doc Comment
 *
 * @category    Class
 * @description MessageRequest
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
#[\AllowDynamicProperties]
class MessageRequestTest extends TestCase
{
    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
        $this->MessageRequest = new \FreeClimb\Api\Model\MessageRequest();
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }


    public function testPropertyUri()
    {

        $this->MessageRequest->setUri('TS');
        $this->assertEquals('TS', $this->MessageRequest->getUri());
        $this->assertIsString($this->MessageRequest->getUri());
    }

    public function testPropertyDateCreated()
    {

        $this->MessageRequest->setDateCreated('TS');
        $this->assertEquals('TS', $this->MessageRequest->getDateCreated());
        $this->assertIsString($this->MessageRequest->getDateCreated());
    }

    public function testPropertyDateUpdated()
    {

        $this->MessageRequest->setDateUpdated('TS');
        $this->assertEquals('TS', $this->MessageRequest->getDateUpdated());
        $this->assertIsString($this->MessageRequest->getDateUpdated());
    }

    public function testPropertyRevision()
    {


        $this->MessageRequest->setrevision(1);
        $this->assertEquals(1, $this->MessageRequest->getrevision());
        $this->assertIsNumeric($this->MessageRequest->getrevision());

    }

    public function testPropertyFrom()
    {

        $this->MessageRequest->setFrom('TS');
        $this->assertEquals('TS', $this->MessageRequest->getFrom());
        $this->assertIsString($this->MessageRequest->getFrom());
    }

    public function testPropertyTo()
    {

        $this->MessageRequest->setTo('TS');
        $this->assertEquals('TS', $this->MessageRequest->getTo());
        $this->assertIsString($this->MessageRequest->getTo());
    }

    public function testPropertyText()
    {

        $this->MessageRequest->setText('TS');
        $this->assertEquals('TS', $this->MessageRequest->getText());
        $this->assertIsString($this->MessageRequest->getText());
    }

    public function testPropertyNotificationUrl()
    {

        $this->MessageRequest->setNotificationUrl('TS');
        $this->assertEquals('TS', $this->MessageRequest->getNotificationUrl());
        $this->assertIsString($this->MessageRequest->getNotificationUrl());
    }

    public function testPropertyMediaUrls()
    {
        $this->MessageRequest->setmediaUrls([]);
        $this->assertEquals([], $this->MessageRequest->getmediaUrls());
        $this->assertIsArray($this->MessageRequest->getmediaUrls());
    }
}
