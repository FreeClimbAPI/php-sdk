<?php

/**
 * IncomingNumberResultTest
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

use FreeClimb\Api\Model\IncomingNumberResult;
use PHPUnit\Framework\TestCase;

/**
 * IncomingNumberResultTest Class Doc Comment
 *
 * @category    Class
 * @description IncomingNumberResult
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class IncomingNumberResultTest extends TestCase
{
    protected $IncomingNumberResult;

    /**
     * Test "IncomingNumberResult"
     */
    public function setUp() : void
    {
        $this->IncomingNumberResult = new IncomingNumberResult();
    }
    /**
     * Test attribute "uri"
     */
    public function testPropertyUri()
    {
        $this->IncomingNumberResult->setUri('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->IncomingNumberResult->getUri());
        $this->assertIsString($this->IncomingNumberResult->getUri());
        

    }
    /**
     * Test attribute "date_created"
     */
    public function testPropertyDateCreated()
    {
        $this->IncomingNumberResult->setDateCreated('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->IncomingNumberResult->getDateCreated());
        $this->assertIsString($this->IncomingNumberResult->getDateCreated());
        

    }
    /**
     * Test attribute "date_updated"
     */
    public function testPropertyDateUpdated()
    {
        $this->IncomingNumberResult->setDateUpdated('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->IncomingNumberResult->getDateUpdated());
        $this->assertIsString($this->IncomingNumberResult->getDateUpdated());
        

    }
    /**
     * Test attribute "revision"
     */
    public function testPropertyRevision()
    {
        $this->IncomingNumberResult->setRevision(12345);
        $this->assertEquals(12345, $this->IncomingNumberResult->getRevision());
        $this->assertIsInt($this->IncomingNumberResult->getRevision());
    }
    /**
     * Test attribute "capabilities"
     */
    public function testPropertyCapabilities()
    {
        $this->IncomingNumberResult->setCapabilities(new \stdClass);
        $this->assertInstanceOf(\stdClass::class, $this->IncomingNumberResult->getCapabilities());
    }
    /**
     * Test attribute "campaign_id"
     */
    public function testPropertyCampaignId()
    {
        $this->IncomingNumberResult->setCampaignId('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->IncomingNumberResult->getCampaignId());
        $this->assertIsString($this->IncomingNumberResult->getCampaignId());
        

    }
    /**
     * Test attribute "phone_number_id"
     */
    public function testPropertyPhoneNumberId()
    {
        $this->IncomingNumberResult->setPhoneNumberId('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->IncomingNumberResult->getPhoneNumberId());
        $this->assertIsString($this->IncomingNumberResult->getPhoneNumberId());
        

    }
    /**
     * Test attribute "account_id"
     */
    public function testPropertyAccountId()
    {
        $this->IncomingNumberResult->setAccountId('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->IncomingNumberResult->getAccountId());
        $this->assertIsString($this->IncomingNumberResult->getAccountId());
        

    }
    /**
     * Test attribute "application_id"
     */
    public function testPropertyApplicationId()
    {
        $this->IncomingNumberResult->setApplicationId('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->IncomingNumberResult->getApplicationId());
        $this->assertIsString($this->IncomingNumberResult->getApplicationId());
        

    }
    /**
     * Test attribute "phone_number"
     */
    public function testPropertyPhoneNumber()
    {
        $this->IncomingNumberResult->setPhoneNumber('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->IncomingNumberResult->getPhoneNumber());
        $this->assertIsString($this->IncomingNumberResult->getPhoneNumber());
        

    }
    /**
     * Test attribute "alias"
     */
    public function testPropertyAlias()
    {
        $this->IncomingNumberResult->setAlias('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->IncomingNumberResult->getAlias());
        $this->assertIsString($this->IncomingNumberResult->getAlias());
        

    }
    /**
     * Test attribute "region"
     */
    public function testPropertyRegion()
    {
        $this->IncomingNumberResult->setRegion('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->IncomingNumberResult->getRegion());
        $this->assertIsString($this->IncomingNumberResult->getRegion());
        

    }
    /**
     * Test attribute "country"
     */
    public function testPropertyCountry()
    {
        $this->IncomingNumberResult->setCountry('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->IncomingNumberResult->getCountry());
        $this->assertIsString($this->IncomingNumberResult->getCountry());
        

    }
    /**
     * Test attribute "voice_enabled"
     */
    public function testPropertyVoiceEnabled()
    {
        $this->IncomingNumberResult->setVoiceEnabled(true);
        $this->assertTrue($this->IncomingNumberResult->getVoiceEnabled());
        $this->assertIsBool($this->IncomingNumberResult->getVoiceEnabled());
    }
    /**
     * Test attribute "sms_enabled"
     */
    public function testPropertySmsEnabled()
    {
        $this->IncomingNumberResult->setSmsEnabled(true);
        $this->assertTrue($this->IncomingNumberResult->getSmsEnabled());
        $this->assertIsBool($this->IncomingNumberResult->getSmsEnabled());
    }
    /**
     * Test attribute "offnet"
     */
    public function testPropertyOffnet()
    {
        $this->IncomingNumberResult->setOffnet(true);
        $this->assertTrue($this->IncomingNumberResult->getOffnet());
        $this->assertIsBool($this->IncomingNumberResult->getOffnet());
    }

    /**
* Test attribute toStringTest
*/
public function toStringTest() {
    $test1 = new IncomingNumberResult();    
      $test1->setUri("TS");
      $test1->setDateCreated("TS");
      $test1->setDateUpdated("TS");
      $test1->setRevision(1);
      $object = new \FreeClimb\Api\Model\Capabilities();
      $test1->setCapabilities($object);
      $test1->setCampaignId("TS");
      $test1->setPhoneNumberId("TS");
      $test1->setAccountId("TS");
      $test1->setApplicationId("TS");
      $test1->setPhoneNumber("TS");
      $test1->setAlias("TS");
      $test1->setRegion("TS");
      $test1->setCountry("TS");
      $test1->setVoiceEnabled(true);
      $test1->setSmsEnabled(true);
      $test1->setOffnet(true);

    $toString1 = $test1->__toString();
    assert(is_string($toString1));
}

/**
 * Test attribute toHeaderValue
 */
public function toHeaderValueTest()
{
    $test1 = new IncomingNumberResult();
      $test1->setUri("TS");
      $test1->setDateCreated("TS");
      $test1->setDateUpdated("TS");
      $test1->setRevision(1);
      $object = new \FreeClimb\Api\Model\Capabilities();
      $test1->setCapabilities($object);
      $test1->setCampaignId("TS");
      $test1->setPhoneNumberId("TS");
      $test1->setAccountId("TS");
      $test1->setApplicationId("TS");
      $test1->setPhoneNumber("TS");
      $test1->setAlias("TS");
      $test1->setRegion("TS");
      $test1->setCountry("TS");
      $test1->setVoiceEnabled(true);
      $test1->setSmsEnabled(true);
      $test1->setOffnet(true);

    $toHeaderValue1 = $test1->toHeaderValue();
    assert(is_string($toHeaderValue1));
}


}
