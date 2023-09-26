<?php

/**
 * ApplicationResultTest
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

use FreeClimb\Api\Model\ApplicationResult;
use PHPUnit\Framework\TestCase;

/**
 * ApplicationResultTest Class Doc Comment
 *
 * @category    Class
 * @description ApplicationResult
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class ApplicationResultTest extends TestCase
{
    protected $ApplicationResult;

    /**
     * Test "ApplicationResult"
     */
    public function setUp() : void
    {
        $this->ApplicationResult = new ApplicationResult();
    }
    /**
     * Test attribute "uri"
     */
    public function testPropertyUri()
    {
        $this->ApplicationResult->setUri('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->ApplicationResult->getUri());
        $this->assertIsString($this->ApplicationResult->getUri());
        

    }
    /**
     * Test attribute "date_created"
     */
    public function testPropertyDateCreated()
    {
        $this->ApplicationResult->setDateCreated('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->ApplicationResult->getDateCreated());
        $this->assertIsString($this->ApplicationResult->getDateCreated());
        

    }
    /**
     * Test attribute "date_updated"
     */
    public function testPropertyDateUpdated()
    {
        $this->ApplicationResult->setDateUpdated('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->ApplicationResult->getDateUpdated());
        $this->assertIsString($this->ApplicationResult->getDateUpdated());
        

    }
    /**
     * Test attribute "revision"
     */
    public function testPropertyRevision()
    {
        $this->ApplicationResult->setRevision(12345);
        $this->assertEquals(12345, $this->ApplicationResult->getRevision());
        $this->assertIsInt($this->ApplicationResult->getRevision());
    }
    /**
     * Test attribute "account_id"
     */
    public function testPropertyAccountId()
    {
        $this->ApplicationResult->setAccountId('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->ApplicationResult->getAccountId());
        $this->assertIsString($this->ApplicationResult->getAccountId());
        

    }
    /**
     * Test attribute "application_id"
     */
    public function testPropertyApplicationId()
    {
        $this->ApplicationResult->setApplicationId('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->ApplicationResult->getApplicationId());
        $this->assertIsString($this->ApplicationResult->getApplicationId());
        

    }
    /**
     * Test attribute "alias"
     */
    public function testPropertyAlias()
    {
        $this->ApplicationResult->setAlias('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->ApplicationResult->getAlias());
        $this->assertIsString($this->ApplicationResult->getAlias());
        

    }
    /**
     * Test attribute "voice_url"
     */
    public function testPropertyVoiceUrl()
    {
        $this->ApplicationResult->setVoiceUrl('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->ApplicationResult->getVoiceUrl());
        $this->assertIsString($this->ApplicationResult->getVoiceUrl());
        

    }
    /**
     * Test attribute "voice_fallback_url"
     */
    public function testPropertyVoiceFallbackUrl()
    {
        $this->ApplicationResult->setVoiceFallbackUrl('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->ApplicationResult->getVoiceFallbackUrl());
        $this->assertIsString($this->ApplicationResult->getVoiceFallbackUrl());
        

    }
    /**
     * Test attribute "call_connect_url"
     */
    public function testPropertyCallConnectUrl()
    {
        $this->ApplicationResult->setCallConnectUrl('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->ApplicationResult->getCallConnectUrl());
        $this->assertIsString($this->ApplicationResult->getCallConnectUrl());
        

    }
    /**
     * Test attribute "status_callback_url"
     */
    public function testPropertyStatusCallbackUrl()
    {
        $this->ApplicationResult->setStatusCallbackUrl('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->ApplicationResult->getStatusCallbackUrl());
        $this->assertIsString($this->ApplicationResult->getStatusCallbackUrl());
        

    }
    /**
     * Test attribute "sms_url"
     */
    public function testPropertySmsUrl()
    {
        $this->ApplicationResult->setSmsUrl('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->ApplicationResult->getSmsUrl());
        $this->assertIsString($this->ApplicationResult->getSmsUrl());
        

    }
    /**
     * Test attribute "sms_fallback_url"
     */
    public function testPropertySmsFallbackUrl()
    {
        $this->ApplicationResult->setSmsFallbackUrl('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->ApplicationResult->getSmsFallbackUrl());
        $this->assertIsString($this->ApplicationResult->getSmsFallbackUrl());
        

    }

    /**
* Test attribute "ApplicationResult"
*/
public function toStringTypeTest() {
    $test1 = new ApplicationResult();    
      $test1->setUri("TS");
      $test1->setDateCreated("TS");
      $test1->setDateUpdated("TS");
      $test1->setRevision(1);
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
 * Test attribute "ApplicationResult"
 */
public function toHeaderValueTest()
{
    $test1 = new ApplicationResult();
      $test1->setUri("TS");
      $test1->setDateCreated("TS");
      $test1->setDateUpdated("TS");
      $test1->setRevision(1);
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
