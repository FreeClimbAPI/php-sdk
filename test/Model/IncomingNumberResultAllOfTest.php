<?php
/**
 * IncomingNumberResultAllOfTest
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

use FreeClimb\Api\Model\IncomingNumberResultAllOf;
use PHPUnit\Framework\TestCase;

/**
 * IncomingNumberResultAllOfTest Class Doc Comment
 *
 * @category    Class
 * @description IncomingNumberResultAllOf
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class IncomingNumberResultAllOfTest extends TestCase
{
    protected $IncomingNumberResultAllOf;

    /**
     * Test "IncomingNumberResultAllOf"
     */
    public function setUp() : void
    {
        $this->IncomingNumberResultAllOf = new IncomingNumberResultAllOf();
    }
    /**
     * Test attribute "capabilities"
     */
    public function testPropertyCapabilities()
    {
        $this->IncomingNumberResultAllOf->setCapabilities(new \stdClass);
        $this->assertIsObject($this->IncomingNumberResultAllOf->getCapabilities());
    }
    /**
     * Test attribute "phone_number_id"
     */
    public function testPropertyPhoneNumberId()
    {
        $this->IncomingNumberResultAllOf->setPhoneNumberId('TEST_STRING');
        $this->assertStringContainsString($this->IncomingNumberResultAllOf->getPhoneNumberId(), 'TEST_STRING');
        $this->assertIsString($this->IncomingNumberResultAllOf->getPhoneNumberId());
        

    }
    /**
     * Test attribute "account_id"
     */
    public function testPropertyAccountId()
    {
        $this->IncomingNumberResultAllOf->setAccountId('TEST_STRING');
        $this->assertStringContainsString($this->IncomingNumberResultAllOf->getAccountId(), 'TEST_STRING');
        $this->assertIsString($this->IncomingNumberResultAllOf->getAccountId());
        

    }
    /**
     * Test attribute "application_id"
     */
    public function testPropertyApplicationId()
    {
        $this->IncomingNumberResultAllOf->setApplicationId('TEST_STRING');
        $this->assertStringContainsString($this->IncomingNumberResultAllOf->getApplicationId(), 'TEST_STRING');
        $this->assertIsString($this->IncomingNumberResultAllOf->getApplicationId());
        

    }
    /**
     * Test attribute "phone_number"
     */
    public function testPropertyPhoneNumber()
    {
        $this->IncomingNumberResultAllOf->setPhoneNumber('TEST_STRING');
        $this->assertStringContainsString($this->IncomingNumberResultAllOf->getPhoneNumber(), 'TEST_STRING');
        $this->assertIsString($this->IncomingNumberResultAllOf->getPhoneNumber());
        

    }
    /**
     * Test attribute "alias"
     */
    public function testPropertyAlias()
    {
        $this->IncomingNumberResultAllOf->setAlias('TEST_STRING');
        $this->assertStringContainsString($this->IncomingNumberResultAllOf->getAlias(), 'TEST_STRING');
        $this->assertIsString($this->IncomingNumberResultAllOf->getAlias());
        

    }
    /**
     * Test attribute "region"
     */
    public function testPropertyRegion()
    {
        $this->IncomingNumberResultAllOf->setRegion('TEST_STRING');
        $this->assertStringContainsString($this->IncomingNumberResultAllOf->getRegion(), 'TEST_STRING');
        $this->assertIsString($this->IncomingNumberResultAllOf->getRegion());
        

    }
    /**
     * Test attribute "country"
     */
    public function testPropertyCountry()
    {
        $this->IncomingNumberResultAllOf->setCountry('TEST_STRING');
        $this->assertStringContainsString($this->IncomingNumberResultAllOf->getCountry(), 'TEST_STRING');
        $this->assertIsString($this->IncomingNumberResultAllOf->getCountry());
        

    }
    /**
     * Test attribute "voice_enabled"
     */
    public function testPropertyVoiceEnabled()
    {
        $this->IncomingNumberResultAllOf->setVoiceEnabled(true);
        $this->assertEquals($this->IncomingNumberResultAllOf->getVoiceEnabled(), true);
        $this->assertIsBool($this->IncomingNumberResultAllOf->getVoiceEnabled());
    }
    /**
     * Test attribute "sms_enabled"
     */
    public function testPropertySmsEnabled()
    {
        $this->IncomingNumberResultAllOf->setSmsEnabled(true);
        $this->assertEquals($this->IncomingNumberResultAllOf->getSmsEnabled(), true);
        $this->assertIsBool($this->IncomingNumberResultAllOf->getSmsEnabled());
    }
}
