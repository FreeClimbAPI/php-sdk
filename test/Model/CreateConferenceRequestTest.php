<?php

/**
 * CreateConferenceRequestTest
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

use FreeClimb\Api\Model\CreateConferenceRequest;
use PHPUnit\Framework\TestCase;

/**
 * CreateConferenceRequestTest Class Doc Comment
 *
 * @category    Class
 * @description CreateConferenceRequest
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class CreateConferenceRequestTest extends TestCase
{
    protected $CreateConferenceRequest;

    /**
     * Test "CreateConferenceRequest"
     */
    public function setUp() : void
    {
        $this->CreateConferenceRequest = new CreateConferenceRequest();
    }
    /**
     * Test attribute "alias"
     */
    public function testPropertyAlias()
    {
        $this->CreateConferenceRequest->setAlias('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->CreateConferenceRequest->getAlias());
        $this->assertIsString($this->CreateConferenceRequest->getAlias());
        

    }
    /**
     * Test attribute "play_beep"
     */
    public function testPropertyPlayBeep()
    {
        $this->CreateConferenceRequest->setPlayBeep(\FreeClimb\Api\Model\PlayBeep::ALWAYS);
        $this->assertEquals(\FreeClimb\Api\Model\PlayBeep::ALWAYS, $this->CreateConferenceRequest->getPlayBeep());
        $this->CreateConferenceRequest->setPlayBeep(\FreeClimb\Api\Model\PlayBeep::NEVER);
        $this->assertEquals(\FreeClimb\Api\Model\PlayBeep::NEVER, $this->CreateConferenceRequest->getPlayBeep());
        $this->CreateConferenceRequest->setPlayBeep(\FreeClimb\Api\Model\PlayBeep::ENTRY_ONLY);
        $this->assertEquals(\FreeClimb\Api\Model\PlayBeep::ENTRY_ONLY, $this->CreateConferenceRequest->getPlayBeep());
        $this->CreateConferenceRequest->setPlayBeep(\FreeClimb\Api\Model\PlayBeep::EXIT_ONLY);
        $this->assertEquals(\FreeClimb\Api\Model\PlayBeep::EXIT_ONLY, $this->CreateConferenceRequest->getPlayBeep());
    }
    /**
     * Test attribute "record"
     */
    public function testPropertyRecord()
    {
        $this->CreateConferenceRequest->setRecord(true);
        $this->assertTrue($this->CreateConferenceRequest->getRecord());
        $this->assertIsBool($this->CreateConferenceRequest->getRecord());
    }
    /**
     * Test attribute "wait_url"
     */
    public function testPropertyWaitUrl()
    {
        $this->CreateConferenceRequest->setWaitUrl('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->CreateConferenceRequest->getWaitUrl());
        $this->assertIsString($this->CreateConferenceRequest->getWaitUrl());
        

    }
    /**
     * Test attribute "status_callback_url"
     */
    public function testPropertyStatusCallbackUrl()
    {
        $this->CreateConferenceRequest->setStatusCallbackUrl('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->CreateConferenceRequest->getStatusCallbackUrl());
        $this->assertIsString($this->CreateConferenceRequest->getStatusCallbackUrl());
        

    }

    /**
* Test attribute "CreateConferenceRequest"
*/
public function toStringTypeTest() {
    $test1 = new CreateConferenceRequest();    
      $test1->setAlias("TS");
      $test1->setPlayBeep(\FreeClimb\Api\Model\PlayBeep::ALWAYS);
      $test1->setRecord(true);
      $test1->setWaitUrl("TS");
      $test1->setStatusCallbackUrl("TS");

    $toString1 = $test1->__toString();
    assert(is_string($toString1));
}

/**
 * Test attribute "CreateConferenceRequest"
 */
public function toHeaderValueTest()
{
    $test1 = new CreateConferenceRequest();
      $test1->setAlias("TS");
      $test1->setPlayBeep(\FreeClimb\Api\Model\PlayBeep::ALWAYS);
      $test1->setRecord(true);
      $test1->setWaitUrl("TS");
      $test1->setStatusCallbackUrl("TS");

    $toHeaderValue1 = $test1->toHeaderValue();
    assert(is_string($toHeaderValue1));
}


}
