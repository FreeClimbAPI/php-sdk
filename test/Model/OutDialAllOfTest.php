<?php
/**
 * OutDialAllOfTest
 *
 * PHP version 7.3
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
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace FreeClimb\Api\Test\Model;

use FreeClimb\Api\Model\OutDialAllOf;
use PHPUnit\Framework\TestCase;

/**
 * OutDialAllOfTest Class Doc Comment
 *
 * @category    Class
 * @description OutDialAllOf
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class OutDialAllOfTest extends TestCase
{
    protected $OutDialAllOf;

    /**
     * Test "OutDialAllOf"
     */
    public function setUp() : void
    {
        $this->OutDialAllOf = new OutDialAllOf();
    }
    /**
     * Test attribute "action_url"
     */
    public function testPropertyActionUrl()
    {
        $this->OutDialAllOf->setActionUrl('TEST_STRING');
        $this->assertStringContainsString($this->OutDialAllOf->getActionUrl(), 'TEST_STRING');
        $this->assertIsString($this->OutDialAllOf->getActionUrl());
        

    }
    /**
     * Test attribute "call_connect_url"
     */
    public function testPropertyCallConnectUrl()
    {
        $this->OutDialAllOf->setCallConnectUrl('TEST_STRING');
        $this->assertStringContainsString($this->OutDialAllOf->getCallConnectUrl(), 'TEST_STRING');
        $this->assertIsString($this->OutDialAllOf->getCallConnectUrl());
        

    }
    /**
     * Test attribute "calling_number"
     */
    public function testPropertyCallingNumber()
    {
        $this->OutDialAllOf->setCallingNumber(12345);
        $this->assertEquals($this->OutDialAllOf->getCallingNumber(), 12345);
        $this->assertIsNumeric($this->OutDialAllOf->getCallingNumber());
    }
    /**
     * Test attribute "destination"
     */
    public function testPropertyDestination()
    {
        $this->OutDialAllOf->setDestination(12345);
        $this->assertEquals($this->OutDialAllOf->getDestination(), 12345);
        $this->assertIsNumeric($this->OutDialAllOf->getDestination());
    }
    /**
     * Test attribute "if_machine"
     */
    public function testPropertyIfMachine()
    {
        $this->OutDialAllOf->setIfMachine('TEST_STRING');
        $this->assertStringContainsString($this->OutDialAllOf->getIfMachine(), 'TEST_STRING');
        $this->assertIsString($this->OutDialAllOf->getIfMachine());
        

    }
    /**
     * Test attribute "if_machine_url"
     */
    public function testPropertyIfMachineUrl()
    {
        $this->OutDialAllOf->setIfMachineUrl('TEST_STRING');
        $this->assertStringContainsString($this->OutDialAllOf->getIfMachineUrl(), 'TEST_STRING');
        $this->assertIsString($this->OutDialAllOf->getIfMachineUrl());
        

    }
    /**
     * Test attribute "send_digits"
     */
    public function testPropertySendDigits()
    {
        $this->OutDialAllOf->setSendDigits('TEST_STRING');
        $this->assertStringContainsString($this->OutDialAllOf->getSendDigits(), 'TEST_STRING');
        $this->assertIsString($this->OutDialAllOf->getSendDigits());
        

    }
    /**
     * Test attribute "status_callback_url"
     */
    public function testPropertyStatusCallbackUrl()
    {
        $this->OutDialAllOf->setStatusCallbackUrl('TEST_STRING');
        $this->assertStringContainsString($this->OutDialAllOf->getStatusCallbackUrl(), 'TEST_STRING');
        $this->assertIsString($this->OutDialAllOf->getStatusCallbackUrl());
        

    }
    /**
     * Test attribute "timeout"
     */
    public function testPropertyTimeout()
    {
        $this->OutDialAllOf->setTimeout(12345);
        $this->assertEquals($this->OutDialAllOf->getTimeout(), 12345);
        $this->assertIsInt($this->OutDialAllOf->getTimeout());
    }
    /**
     * Test attribute "privacy_mode"
     */
    public function testPropertyPrivacyMode()
    {
        $this->OutDialAllOf->setPrivacyMode(true);
        $this->assertEquals($this->OutDialAllOf->getPrivacyMode(), true);
        $this->assertIsBool($this->OutDialAllOf->getPrivacyMode());
    }
}
