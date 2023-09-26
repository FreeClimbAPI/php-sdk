<?php

/**
 * ApplicationResultAllOfTest
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
 * NOTE: This class is auto-generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace FreeClimb\Api\Test\Model;

use FreeClimb\Api\Model\ApplicationResultAllOf;
use PHPUnit\Framework\TestCase;

/**
 * ApplicationResultAllOfTest Class Doc Comment
 *
 * @category    Class
 * @description ApplicationResultAllOf
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class ApplicationResultAllOfTest extends TestCase
{
    protected $ApplicationResultAllOf;

    /**
     * Test "ApplicationResultAllOf"
     */
    public function setUp() : void
    {
        $this->ApplicationResultAllOf = new ApplicationResultAllOf();
    }
    /**
     * Test attribute "account_id"
     */
    public function testPropertyAccountId()
    {
        $this->ApplicationResultAllOf->setAccountId('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->ApplicationResultAllOf->getAccountId());
        $this->assertIsString($this->ApplicationResultAllOf->getAccountId());
        

    }
    /**
     * Test attribute "application_id"
     */
    public function testPropertyApplicationId()
    {
        $this->ApplicationResultAllOf->setApplicationId('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->ApplicationResultAllOf->getApplicationId());
        $this->assertIsString($this->ApplicationResultAllOf->getApplicationId());
        

    }
    /**
     * Test attribute "alias"
     */
    public function testPropertyAlias()
    {
        $this->ApplicationResultAllOf->setAlias('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->ApplicationResultAllOf->getAlias());
        $this->assertIsString($this->ApplicationResultAllOf->getAlias());
        

    }
    /**
     * Test attribute "voice_url"
     */
    public function testPropertyVoiceUrl()
    {
        $this->ApplicationResultAllOf->setVoiceUrl('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->ApplicationResultAllOf->getVoiceUrl());
        $this->assertIsString($this->ApplicationResultAllOf->getVoiceUrl());
        

    }
    /**
     * Test attribute "voice_fallback_url"
     */
    public function testPropertyVoiceFallbackUrl()
    {
        $this->ApplicationResultAllOf->setVoiceFallbackUrl('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->ApplicationResultAllOf->getVoiceFallbackUrl());
        $this->assertIsString($this->ApplicationResultAllOf->getVoiceFallbackUrl());
        

    }
    /**
     * Test attribute "call_connect_url"
     */
    public function testPropertyCallConnectUrl()
    {
        $this->ApplicationResultAllOf->setCallConnectUrl('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->ApplicationResultAllOf->getCallConnectUrl());
        $this->assertIsString($this->ApplicationResultAllOf->getCallConnectUrl());
        

    }
    /**
     * Test attribute "status_callback_url"
     */
    public function testPropertyStatusCallbackUrl()
    {
        $this->ApplicationResultAllOf->setStatusCallbackUrl('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->ApplicationResultAllOf->getStatusCallbackUrl());
        $this->assertIsString($this->ApplicationResultAllOf->getStatusCallbackUrl());
        

    }
    /**
     * Test attribute "sms_url"
     */
    public function testPropertySmsUrl()
    {
        $this->ApplicationResultAllOf->setSmsUrl('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->ApplicationResultAllOf->getSmsUrl());
        $this->assertIsString($this->ApplicationResultAllOf->getSmsUrl());
        

    }
    /**
     * Test attribute "sms_fallback_url"
     */
    public function testPropertySmsFallbackUrl()
    {
        $this->ApplicationResultAllOf->setSmsFallbackUrl('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->ApplicationResultAllOf->getSmsFallbackUrl());
        $this->assertIsString($this->ApplicationResultAllOf->getSmsFallbackUrl());
        

    }

    /**
* Test method toStringTest
*/
public function toStringTest() {
    $test1 = new ApplicationResultAllOf();    
      $test1->setAccountId("TS");
      $test1->setApplicationId("TS");
      $test1->setAlias("TS");
      $test1->setVoiceUrl("TS");
      $test1->setVoiceFallbackUrl("TS");
      $test1->setCallConnectUrl("TS");
      $test1->setStatusCallbackUrl("TS");
      $test1->setSmsUrl("TS");
      $test1->setSmsFallbackUrl("TS");

    $toString1 = $test1->__toString();
    assert(is_string($toString1));
}

/**
 * Test method toHeaderValue
 */
public function toHeaderValueTest()
{
    $test1 = new ApplicationResultAllOf();
      $test1->setAccountId("TS");
      $test1->setApplicationId("TS");
      $test1->setAlias("TS");
      $test1->setVoiceUrl("TS");
      $test1->setVoiceFallbackUrl("TS");
      $test1->setCallConnectUrl("TS");
      $test1->setStatusCallbackUrl("TS");
      $test1->setSmsUrl("TS");
      $test1->setSmsFallbackUrl("TS");

    $toHeaderValue1 = $test1->toHeaderValue();
    assert(is_string($toHeaderValue1));
}


}
