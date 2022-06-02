<?php
/**
 * MakeCallRequestTest
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

use FreeClimb\Api\Model\MakeCallRequest;
use PHPUnit\Framework\TestCase;

/**
 * MakeCallRequestTest Class Doc Comment
 *
 * @category    Class
 * @description MakeCallRequest
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class MakeCallRequestTest extends TestCase
{
    protected $MakeCallRequest;

    /**
     * Test "MakeCallRequest"
     */
    public function setUp() : void
    {
        $this->MakeCallRequest = new MakeCallRequest();
    }
    /**
     * Test attribute "from"
     */
    public function testPropertyFrom()
    {
        $this->MakeCallRequest->setFrom('TEST_STRING');
        $this->assertStringContainsString($this->MakeCallRequest->getFrom(), 'TEST_STRING');
        $this->assertIsString($this->MakeCallRequest->getFrom());
        

    }
    /**
     * Test attribute "to"
     */
    public function testPropertyTo()
    {
        $this->MakeCallRequest->setTo('TEST_STRING');
        $this->assertStringContainsString($this->MakeCallRequest->getTo(), 'TEST_STRING');
        $this->assertIsString($this->MakeCallRequest->getTo());
        

    }
    /**
     * Test attribute "application_id"
     */
    public function testPropertyApplicationId()
    {
        $this->MakeCallRequest->setApplicationId('TEST_STRING');
        $this->assertStringContainsString($this->MakeCallRequest->getApplicationId(), 'TEST_STRING');
        $this->assertIsString($this->MakeCallRequest->getApplicationId());
        

    }
    /**
     * Test attribute "send_digits"
     */
    public function testPropertySendDigits()
    {
        $this->MakeCallRequest->setSendDigits('TEST_STRING');
        $this->assertStringContainsString($this->MakeCallRequest->getSendDigits(), 'TEST_STRING');
        $this->assertIsString($this->MakeCallRequest->getSendDigits());
        

    }
    /**
     * Test attribute "if_machine"
     */
    public function testPropertyIfMachine()
    {
        $this->MakeCallRequest->setIfMachine('TEST_STRING');
        $this->assertStringContainsString($this->MakeCallRequest->getIfMachine(), 'TEST_STRING');
        $this->assertIsString($this->MakeCallRequest->getIfMachine());
        

    }
    /**
     * Test attribute "if_machine_url"
     */
    public function testPropertyIfMachineUrl()
    {
        $this->MakeCallRequest->setIfMachineUrl('TEST_STRING');
        $this->assertStringContainsString($this->MakeCallRequest->getIfMachineUrl(), 'TEST_STRING');
        $this->assertIsString($this->MakeCallRequest->getIfMachineUrl());
        

    }
    /**
     * Test attribute "timeout"
     */
    public function testPropertyTimeout()
    {
        $this->MakeCallRequest->setTimeout(12345);
        $this->assertEquals($this->MakeCallRequest->getTimeout(), 12345);
        $this->assertIsInt($this->MakeCallRequest->getTimeout());
    }
    /**
     * Test attribute "parent_call_id"
     */
    public function testPropertyParentCallId()
    {
        $this->MakeCallRequest->setParentCallId('TEST_STRING');
        $this->assertStringContainsString($this->MakeCallRequest->getParentCallId(), 'TEST_STRING');
        $this->assertIsString($this->MakeCallRequest->getParentCallId());
        

    }
    /**
     * Test attribute "privacy_mode"
     */
    public function testPropertyPrivacyMode()
    {
        $this->MakeCallRequest->setPrivacyMode(true);
        $this->assertEquals($this->MakeCallRequest->getPrivacyMode(), true);
        $this->assertIsBool($this->MakeCallRequest->getPrivacyMode());
    }
    /**
     * Test attribute "call_connect_url"
     */
    public function testPropertyCallConnectUrl()
    {
        $this->MakeCallRequest->setCallConnectUrl('TEST_STRING');
        $this->assertStringContainsString($this->MakeCallRequest->getCallConnectUrl(), 'TEST_STRING');
        $this->assertIsString($this->MakeCallRequest->getCallConnectUrl());
        

    }
}
