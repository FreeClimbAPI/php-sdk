<?php

/**
 * ConferenceParticipantResultAllOfTest
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

use FreeClimb\Api\Model\ConferenceParticipantResultAllOf;
use PHPUnit\Framework\TestCase;

/**
 * ConferenceParticipantResultAllOfTest Class Doc Comment
 *
 * @category    Class
 * @description ConferenceParticipantResultAllOf
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class ConferenceParticipantResultAllOfTest extends TestCase
{
    protected $ConferenceParticipantResultAllOf;

    /**
     * Test "ConferenceParticipantResultAllOf"
     */
    public function setUp() : void
    {
        $this->ConferenceParticipantResultAllOf = new ConferenceParticipantResultAllOf();
    }
    /**
     * Test attribute "account_id"
     */
    public function testPropertyAccountId()
    {
        $this->ConferenceParticipantResultAllOf->setAccountId('TS');
        $this->assertEquals('TS', $this->ConferenceParticipantResultAllOf->getAccountId());
        $this->assertIsString($this->ConferenceParticipantResultAllOf->getAccountId());
    }
    /**
     * Test attribute "conference_id"
     */
    public function testPropertyConferenceId()
    {
        $this->ConferenceParticipantResultAllOf->setConferenceId('TS');
        $this->assertEquals('TS', $this->ConferenceParticipantResultAllOf->getConferenceId());
        $this->assertIsString($this->ConferenceParticipantResultAllOf->getConferenceId());
    }
    /**
     * Test attribute "call_id"
     */
    public function testPropertyCallId()
    {
        $this->ConferenceParticipantResultAllOf->setCallId('TS');
        $this->assertEquals('TS', $this->ConferenceParticipantResultAllOf->getCallId());
        $this->assertIsString($this->ConferenceParticipantResultAllOf->getCallId());
    }
    /**
     * Test attribute "talk"
     */
    public function testPropertyTalk()
    {
        $this->ConferenceParticipantResultAllOf->setTalk(false);
        $this->assertFalse($this->ConferenceParticipantResultAllOf->getTalk());
        $this->assertIsBool($this->ConferenceParticipantResultAllOf->getTalk());
    }
    /**
     * Test attribute "listen"
     */
    public function testPropertyListen()
    {
        $this->ConferenceParticipantResultAllOf->setListen(false);
        $this->assertFalse($this->ConferenceParticipantResultAllOf->getListen());
        $this->assertIsBool($this->ConferenceParticipantResultAllOf->getListen());
    }
    /**
     * Test attribute "dtmf_pass_through"
     */
    public function testPropertyDtmfPassThrough()
    {
        $this->ConferenceParticipantResultAllOf->setDtmfPassThrough(false);
        $this->assertFalse($this->ConferenceParticipantResultAllOf->getDtmfPassThrough());
        $this->assertIsBool($this->ConferenceParticipantResultAllOf->getDtmfPassThrough());
    }
    /**
     * Test attribute "start_conf_on_enter"
     */
    public function testPropertyStartConfOnEnter()
    {
        $this->ConferenceParticipantResultAllOf->setStartConfOnEnter(false);
        $this->assertFalse($this->ConferenceParticipantResultAllOf->getStartConfOnEnter());
        $this->assertIsBool($this->ConferenceParticipantResultAllOf->getStartConfOnEnter());
    }

    /**
* Test method toStringTest
*/
public function toStringTest() {
    $test1 = new ConferenceParticipantResultAllOf();    
    $test1->setAccountId("TS");
    $test1->setConferenceId("TS");
    $test1->setCallId("TS");
    $test1->setTalk(true);
    $test1->setListen(true);
    $test1->setDtmfPassThrough(true);
    $test1->setStartConfOnEnter(true);

    $toString1 = $test1->__toString();
    assert(is_string($toString1));
}

/**
 * Test method toHeaderValue
 */
public function toHeaderValueTest()
{
    $test1 = new ConferenceParticipantResultAllOf();
    $test1->setAccountId("TS");
    $test1->setConferenceId("TS");
    $test1->setCallId("TS");
    $test1->setTalk(true);
    $test1->setListen(true);
    $test1->setDtmfPassThrough(true);
    $test1->setStartConfOnEnter(true);

    $toHeaderValue1 = $test1->toHeaderValue();
    assert(is_string($toHeaderValue1));
}


}
