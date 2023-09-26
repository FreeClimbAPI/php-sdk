<?php

/**
 * UpdateConferenceRequestTest
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

use FreeClimb\Api\Model\UpdateConferenceRequest;
use PHPUnit\Framework\TestCase;

/**
 * UpdateConferenceRequestTest Class Doc Comment
 *
 * @category    Class
 * @description UpdateConferenceRequest
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class UpdateConferenceRequestTest extends TestCase
{
    protected $UpdateConferenceRequest;

    /**
     * Test "UpdateConferenceRequest"
     */
    public function setUp() : void
    {
        $this->UpdateConferenceRequest = new UpdateConferenceRequest();
    }
    /**
     * Test attribute "alias"
     */
    public function testPropertyAlias()
    {
        $this->UpdateConferenceRequest->setAlias('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->UpdateConferenceRequest->getAlias());
        $this->assertIsString($this->UpdateConferenceRequest->getAlias());
        

    }
    /**
     * Test attribute "play_beep"
     */
    public function testPropertyPlayBeep()
    {
        $this->UpdateConferenceRequest->setPlayBeep(\FreeClimb\Api\Model\PlayBeep::ALWAYS);
        $this->assertEquals(\FreeClimb\Api\Model\PlayBeep::ALWAYS, $this->UpdateConferenceRequest->getPlayBeep());
        $this->UpdateConferenceRequest->setPlayBeep(\FreeClimb\Api\Model\PlayBeep::NEVER);
        $this->assertEquals(\FreeClimb\Api\Model\PlayBeep::NEVER, $this->UpdateConferenceRequest->getPlayBeep());
        $this->UpdateConferenceRequest->setPlayBeep(\FreeClimb\Api\Model\PlayBeep::ENTRY_ONLY);
        $this->assertEquals(\FreeClimb\Api\Model\PlayBeep::ENTRY_ONLY, $this->UpdateConferenceRequest->getPlayBeep());
        $this->UpdateConferenceRequest->setPlayBeep(\FreeClimb\Api\Model\PlayBeep::EXIT_ONLY);
        $this->assertEquals(\FreeClimb\Api\Model\PlayBeep::EXIT_ONLY, $this->UpdateConferenceRequest->getPlayBeep());
    }
    /**
     * Test attribute "status"
     */
    public function testPropertyStatus()
    {
        $this->UpdateConferenceRequest->setStatus(\FreeClimb\Api\Model\UpdateConferenceRequestStatus::EMPTY);
        $this->assertEquals(\FreeClimb\Api\Model\UpdateConferenceRequestStatus::EMPTY, $this->UpdateConferenceRequest->getStatus());
        $this->UpdateConferenceRequest->setStatus(\FreeClimb\Api\Model\UpdateConferenceRequestStatus::TERMINATED);
        $this->assertEquals(\FreeClimb\Api\Model\UpdateConferenceRequestStatus::TERMINATED, $this->UpdateConferenceRequest->getStatus());
    }

    /**
* Test method toStringTest
*/
public function toStringTest() {
    $test1 = new UpdateConferenceRequest();    
      $test1->setAlias("TS");
      $test1->setPlayBeep(\FreeClimb\Api\Model\PlayBeep::ALWAYS);
      $test1->setStatus(\FreeClimb\Api\Model\UpdateConferenceRequestStatus::EMPTY);

    $toString1 = $test1->__toString();
    assert(is_string($toString1));
}

/**
 * Test method toHeaderValue
 */
public function toHeaderValueTest()
{
    $test1 = new UpdateConferenceRequest();
      $test1->setAlias("TS");
      $test1->setPlayBeep(\FreeClimb\Api\Model\PlayBeep::ALWAYS);
      $test1->setStatus(\FreeClimb\Api\Model\UpdateConferenceRequestStatus::EMPTY);

    $toHeaderValue1 = $test1->toHeaderValue();
    assert(is_string($toHeaderValue1));
}


}
