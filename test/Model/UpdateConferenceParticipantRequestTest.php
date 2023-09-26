<?php

/**
 * UpdateConferenceParticipantRequestTest
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

use FreeClimb\Api\Model\UpdateConferenceParticipantRequest;
use PHPUnit\Framework\TestCase;

/**
 * UpdateConferenceParticipantRequestTest Class Doc Comment
 *
 * @category    Class
 * @description UpdateConferenceParticipantRequest
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class UpdateConferenceParticipantRequestTest extends TestCase
{
    protected $UpdateConferenceParticipantRequest;

    /**
     * Test "UpdateConferenceParticipantRequest"
     */
    public function setUp() : void
    {
        $this->UpdateConferenceParticipantRequest = new UpdateConferenceParticipantRequest();
    }
    /**
     * Test attribute "talk"
     */
    public function testPropertyTalk()
    {
        $this->UpdateConferenceParticipantRequest->setTalk(true);
        $this->assertTrue($this->UpdateConferenceParticipantRequest->getTalk());
        $this->assertIsBool($this->UpdateConferenceParticipantRequest->getTalk());
    }
    /**
     * Test attribute "listen"
     */
    public function testPropertyListen()
    {
        $this->UpdateConferenceParticipantRequest->setListen(true);
        $this->assertTrue($this->UpdateConferenceParticipantRequest->getListen());
        $this->assertIsBool($this->UpdateConferenceParticipantRequest->getListen());
    }

    /**
* Test attribute toStringTest
*/
public function toStringTest() {
    $test1 = new UpdateConferenceParticipantRequest();    
      $test1->setTalk(true);
      $test1->setListen(true);

    $toString1 = $test1->__toString();
    assert(is_string($toString1));
}

/**
 * Test attribute toHeaderValue
 */
public function toHeaderValueTest()
{
    $test1 = new UpdateConferenceParticipantRequest();
      $test1->setTalk(true);
      $test1->setListen(true);

    $toHeaderValue1 = $test1->toHeaderValue();
    assert(is_string($toHeaderValue1));
}


}
