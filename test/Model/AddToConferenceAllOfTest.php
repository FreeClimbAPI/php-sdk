<?php

/**
 * AddToConferenceAllOfTest
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

use FreeClimb\Api\Model\AddToConferenceAllOf;
use PHPUnit\Framework\TestCase;

/**
 * AddToConferenceAllOfTest Class Doc Comment
 *
 * @category    Class
 * @description AddToConferenceAllOf
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class AddToConferenceAllOfTest extends TestCase
{
    protected $AddToConferenceAllOf;

    /**
     * Test "AddToConferenceAllOf"
     */
    public function setUp() : void
    {
        $this->AddToConferenceAllOf = new AddToConferenceAllOf();
    }
    /**
     * Test attribute "allow_call_control"
     */
    public function testPropertyAllowCallControl()
    {
        $this->AddToConferenceAllOf->setAllowCallControl(false);
        $this->assertFalse($this->AddToConferenceAllOf->getAllowCallControl());
        $this->assertIsBool($this->AddToConferenceAllOf->getAllowCallControl());
    }
    /**
     * Test attribute "call_control_sequence"
     */
    public function testPropertyCallControlSequence()
    {
        $this->AddToConferenceAllOf->setCallControlSequence('TS');
        $this->assertEquals('TS', $this->AddToConferenceAllOf->getCallControlSequence());
        $this->assertIsString($this->AddToConferenceAllOf->getCallControlSequence());
    }
    /**
     * Test attribute "call_control_url"
     */
    public function testPropertyCallControlUrl()
    {
        $this->AddToConferenceAllOf->setCallControlUrl('TS');
        $this->assertEquals('TS', $this->AddToConferenceAllOf->getCallControlUrl());
        $this->assertIsString($this->AddToConferenceAllOf->getCallControlUrl());
    }
    /**
     * Test attribute "conference_id"
     */
    public function testPropertyConferenceId()
    {
        $this->AddToConferenceAllOf->setConferenceId('TS');
        $this->assertEquals('TS', $this->AddToConferenceAllOf->getConferenceId());
        $this->assertIsString($this->AddToConferenceAllOf->getConferenceId());
    }
    /**
     * Test attribute "leave_conference_url"
     */
    public function testPropertyLeaveConferenceUrl()
    {
        $this->AddToConferenceAllOf->setLeaveConferenceUrl('TS');
        $this->assertEquals('TS', $this->AddToConferenceAllOf->getLeaveConferenceUrl());
        $this->assertIsString($this->AddToConferenceAllOf->getLeaveConferenceUrl());
    }
    /**
     * Test attribute "listen"
     */
    public function testPropertyListen()
    {
        $this->AddToConferenceAllOf->setListen(false);
        $this->assertFalse($this->AddToConferenceAllOf->getListen());
        $this->assertIsBool($this->AddToConferenceAllOf->getListen());
    }
    /**
     * Test attribute "notification_url"
     */
    public function testPropertyNotificationUrl()
    {
        $this->AddToConferenceAllOf->setNotificationUrl('TS');
        $this->assertEquals('TS', $this->AddToConferenceAllOf->getNotificationUrl());
        $this->assertIsString($this->AddToConferenceAllOf->getNotificationUrl());
    }
    /**
     * Test attribute "start_conf_on_enter"
     */
    public function testPropertyStartConfOnEnter()
    {
        $this->AddToConferenceAllOf->setStartConfOnEnter(false);
        $this->assertFalse($this->AddToConferenceAllOf->getStartConfOnEnter());
        $this->assertIsBool($this->AddToConferenceAllOf->getStartConfOnEnter());
    }
    /**
     * Test attribute "talk"
     */
    public function testPropertyTalk()
    {
        $this->AddToConferenceAllOf->setTalk(false);
        $this->assertFalse($this->AddToConferenceAllOf->getTalk());
        $this->assertIsBool($this->AddToConferenceAllOf->getTalk());
    }
    /**
     * Test attribute "dtmf_pass_through"
     */
    public function testPropertyDtmfPassThrough()
    {
        $this->AddToConferenceAllOf->setDtmfPassThrough(false);
        $this->assertFalse($this->AddToConferenceAllOf->getDtmfPassThrough());
        $this->assertIsBool($this->AddToConferenceAllOf->getDtmfPassThrough());
    }

    /**
* Test method toStringTest
*/
public function toStringTest() {
    $test1 = new AddToConferenceAllOf();    
    $test1->setAllowCallControl(true);
    $test1->setCallControlSequence("TS");
    $test1->setCallControlUrl("TS");
    $test1->setConferenceId("TS");
    $test1->setLeaveConferenceUrl("TS");
    $test1->setListen(true);
    $test1->setNotificationUrl("TS");
    $test1->setStartConfOnEnter(true);
    $test1->setTalk(true);
    $test1->setDtmfPassThrough(true);

    $toString1 = $test1->__toString();
    assert(is_string($toString1));
}

/**
 * Test method toHeaderValue
 */
public function toHeaderValueTest()
{
    $test1 = new AddToConferenceAllOf();
    $test1->setAllowCallControl(true);
    $test1->setCallControlSequence("TS");
    $test1->setCallControlUrl("TS");
    $test1->setConferenceId("TS");
    $test1->setLeaveConferenceUrl("TS");
    $test1->setListen(true);
    $test1->setNotificationUrl("TS");
    $test1->setStartConfOnEnter(true);
    $test1->setTalk(true);
    $test1->setDtmfPassThrough(true);

    $toHeaderValue1 = $test1->toHeaderValue();
    assert(is_string($toHeaderValue1));
}


}
