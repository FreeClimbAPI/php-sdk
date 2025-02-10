<?php

/**
 * OutDialTest
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
 * OutDialTest Class Doc Comment
 *
 * @category    Class
 * @description The OutDial command is used to call a phone number
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
#[\AllowDynamicProperties]
class OutDialTest extends TestCase
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
        $this->OutDial = new \FreeClimb\Api\Model\OutDial();
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


    public function testPropertyActionUrl()
    {

        $this->OutDial->setActionUrl('TS');
        $this->assertEquals('TS', $this->OutDial->getActionUrl());
        $this->assertIsString($this->OutDial->getActionUrl());
    }

    public function testPropertyCallConnectUrl()
    {

        $this->OutDial->setCallConnectUrl('TS');
        $this->assertEquals('TS', $this->OutDial->getCallConnectUrl());
        $this->assertIsString($this->OutDial->getCallConnectUrl());
    }

    public function testPropertyCallingNumber()
    {

        $this->OutDial->setCallingNumber('TS');
        $this->assertEquals('TS', $this->OutDial->getCallingNumber());
        $this->assertIsString($this->OutDial->getCallingNumber());
    }

    public function testPropertyDestination()
    {

        $this->OutDial->setDestination('TS');
        $this->assertEquals('TS', $this->OutDial->getDestination());
        $this->assertIsString($this->OutDial->getDestination());
    }

    public function testPropertyIfMachine()
    {
        $this->OutDial->setifMachine(\FreeClimb\Api\Model\IfMachine::REDIRECT);
        $this->assertEquals(\FreeClimb\Api\Model\IfMachine::REDIRECT, $this->OutDial->getifMachine());
        $this->OutDial->setifMachine(\FreeClimb\Api\Model\IfMachine::HANGUP);
        $this->assertEquals(\FreeClimb\Api\Model\IfMachine::HANGUP, $this->OutDial->getifMachine());
    }

    public function testPropertyIfMachineUrl()
    {

        $this->OutDial->setIfMachineUrl('TS');
        $this->assertEquals('TS', $this->OutDial->getIfMachineUrl());
        $this->assertIsString($this->OutDial->getIfMachineUrl());
    }

    public function testPropertySendDigits()
    {

        $this->OutDial->setSendDigits('TS');
        $this->assertEquals('TS', $this->OutDial->getSendDigits());
        $this->assertIsString($this->OutDial->getSendDigits());
    }

    public function testPropertyStatusCallbackUrl()
    {

        $this->OutDial->setStatusCallbackUrl('TS');
        $this->assertEquals('TS', $this->OutDial->getStatusCallbackUrl());
        $this->assertIsString($this->OutDial->getStatusCallbackUrl());
    }

    public function testPropertyTimeout()
    {


        $this->OutDial->settimeout(1);
        $this->assertEquals(1, $this->OutDial->gettimeout());
        $this->assertIsNumeric($this->OutDial->gettimeout());

    }

    public function testPropertyPrivacyMode()
    {
        $this->OutDial->setprivacyMode(false);
        $this->assertFalse($this->OutDial->getprivacyMode());
        $this->assertIsBool($this->OutDial->getprivacyMode());
    }
}
