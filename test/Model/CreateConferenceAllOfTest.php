<?php

/**
 * CreateConferenceAllOfTest
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

use FreeClimb\Api\Model\CreateConferenceAllOf;
use PHPUnit\Framework\TestCase;

/**
 * CreateConferenceAllOfTest Class Doc Comment
 *
 * @category    Class
 * @description CreateConferenceAllOf
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class CreateConferenceAllOfTest extends TestCase
{
    protected $CreateConferenceAllOf;

    /**
     * Test "CreateConferenceAllOf"
     */
    public function setUp() : void
    {
        $this->CreateConferenceAllOf = new CreateConferenceAllOf();
    }
    /**
     * Test attribute "action_url"
     */
    public function testPropertyActionUrl()
    {
        $this->CreateConferenceAllOf->setActionUrl('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->CreateConferenceAllOf->getActionUrl());
        $this->assertIsString($this->CreateConferenceAllOf->getActionUrl());
        

    }
    /**
     * Test attribute "alias"
     */
    public function testPropertyAlias()
    {
        $this->CreateConferenceAllOf->setAlias(true);
        $this->assertTrue($this->CreateConferenceAllOf->getAlias());
        $this->assertIsBool($this->CreateConferenceAllOf->getAlias());
    }
    /**
     * Test attribute "play_beep"
     */
    public function testPropertyPlayBeep()
    {
        $this->CreateConferenceAllOf->setPlayBeep(\FreeClimb\Api\Model\PlayBeep::ALWAYS);
        $this->assertEquals(\FreeClimb\Api\Model\PlayBeep::ALWAYS, $this->CreateConferenceAllOf->getPlayBeep());
        $this->CreateConferenceAllOf->setPlayBeep(\FreeClimb\Api\Model\PlayBeep::NEVER);
        $this->assertEquals(\FreeClimb\Api\Model\PlayBeep::NEVER, $this->CreateConferenceAllOf->getPlayBeep());
        $this->CreateConferenceAllOf->setPlayBeep(\FreeClimb\Api\Model\PlayBeep::ENTRY_ONLY);
        $this->assertEquals(\FreeClimb\Api\Model\PlayBeep::ENTRY_ONLY, $this->CreateConferenceAllOf->getPlayBeep());
        $this->CreateConferenceAllOf->setPlayBeep(\FreeClimb\Api\Model\PlayBeep::EXIT_ONLY);
        $this->assertEquals(\FreeClimb\Api\Model\PlayBeep::EXIT_ONLY, $this->CreateConferenceAllOf->getPlayBeep());
    }
    /**
     * Test attribute "record"
     */
    public function testPropertyRecord()
    {
        $this->CreateConferenceAllOf->setRecord(true);
        $this->assertTrue($this->CreateConferenceAllOf->getRecord());
        $this->assertIsBool($this->CreateConferenceAllOf->getRecord());
    }
    /**
     * Test attribute "status_callback_url"
     */
    public function testPropertyStatusCallbackUrl()
    {
        $this->CreateConferenceAllOf->setStatusCallbackUrl('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->CreateConferenceAllOf->getStatusCallbackUrl());
        $this->assertIsString($this->CreateConferenceAllOf->getStatusCallbackUrl());
        

    }
    /**
     * Test attribute "wait_url"
     */
    public function testPropertyWaitUrl()
    {
        $this->CreateConferenceAllOf->setWaitUrl('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->CreateConferenceAllOf->getWaitUrl());
        $this->assertIsString($this->CreateConferenceAllOf->getWaitUrl());
        

    }

    /**
* Test method toStringTest
*/
public function toStringTest() {
    $test1 = new CreateConferenceAllOf();    
      try {
          $uri1 = "TEST_STRING";
          $test1->setActionUrl($uri1);
      } catch (Exception $e) {
          echo $e->getMessage();
      }
      $test1->setAlias(true);
      $test1->setPlayBeep(\FreeClimb\Api\Model\PlayBeep::ALWAYS);
      $test1->setRecord(true);
      $test1->setStatusCallbackUrl("TS");
      $test1->setWaitUrl("TS");

    $toString1 = $test1->__toString();
    assert(is_string($toString1));
}

/**
 * Test method toHeaderValue
 */
public function toHeaderValueTest()
{
    $test1 = new CreateConferenceAllOf();
      try {
          $uri1 = "TEST_STRING";
          $test1->setActionUrl($uri1);
      } catch (Exception $e) {
          echo $e->getMessage();
      }
      $test1->setAlias(true);
      $test1->setPlayBeep(\FreeClimb\Api\Model\PlayBeep::ALWAYS);
      $test1->setRecord(true);
      $test1->setStatusCallbackUrl("TS");
      $test1->setWaitUrl("TS");

    $toHeaderValue1 = $test1->toHeaderValue();
    assert(is_string($toHeaderValue1));
}


}
