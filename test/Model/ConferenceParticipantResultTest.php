<?php

/**
 * ConferenceParticipantResultTest
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

use FreeClimb\Api\Model\ConferenceParticipantResult;
use PHPUnit\Framework\TestCase;

/**
 * ConferenceParticipantResultTest Class Doc Comment
 *
 * @category    Class
 * @description ConferenceParticipantResult
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class ConferenceParticipantResultTest extends TestCase
{
    protected $ConferenceParticipantResult;

    /**
     * Test "ConferenceParticipantResult"
     */
    public function setUp() : void
    {
        $this->ConferenceParticipantResult = new ConferenceParticipantResult();
    }
    /**
     * Test attribute "uri"
     */
    public function testPropertyUri()
    {
        $this->ConferenceParticipantResult->setUri('TS');
        $this->assertEquals('TS', $this->ConferenceParticipantResult->getUri());
        $this->assertIsString($this->ConferenceParticipantResult->getUri());
    }
    /**
     * Test attribute "date_created"
     */
    public function testPropertyDateCreated()
    {
        $this->ConferenceParticipantResult->setDateCreated('TS');
        $this->assertEquals('TS', $this->ConferenceParticipantResult->getDateCreated());
        $this->assertIsString($this->ConferenceParticipantResult->getDateCreated());
    }
    /**
     * Test attribute "date_updated"
     */
    public function testPropertyDateUpdated()
    {
        $this->ConferenceParticipantResult->setDateUpdated('TS');
        $this->assertEquals('TS', $this->ConferenceParticipantResult->getDateUpdated());
        $this->assertIsString($this->ConferenceParticipantResult->getDateUpdated());
    }
    /**
     * Test attribute "revision"
     */
    public function testPropertyRevision()
    {
        
        
        $this->ConferenceParticipantResult->setRevision(1);
        $this->assertEquals(1, $this->ConferenceParticipantResult->getRevision());
        $this->assertIsNumeric($this->ConferenceParticipantResult->getRevision());
        
    }
    /**
     * Test attribute "account_id"
     */
    public function testPropertyAccountId()
    {
        $this->ConferenceParticipantResult->setAccountId('TS');
        $this->assertEquals('TS', $this->ConferenceParticipantResult->getAccountId());
        $this->assertIsString($this->ConferenceParticipantResult->getAccountId());
    }
    /**
     * Test attribute "conference_id"
     */
    public function testPropertyConferenceId()
    {
        $this->ConferenceParticipantResult->setConferenceId('TS');
        $this->assertEquals('TS', $this->ConferenceParticipantResult->getConferenceId());
        $this->assertIsString($this->ConferenceParticipantResult->getConferenceId());
    }
    /**
     * Test attribute "call_id"
     */
    public function testPropertyCallId()
    {
        $this->ConferenceParticipantResult->setCallId('TS');
        $this->assertEquals('TS', $this->ConferenceParticipantResult->getCallId());
        $this->assertIsString($this->ConferenceParticipantResult->getCallId());
    }
    /**
     * Test attribute "talk"
     */
    public function testPropertyTalk()
    {
        $this->ConferenceParticipantResult->setTalk(false);
        $this->assertFalse($this->ConferenceParticipantResult->getTalk());
        $this->assertIsBool($this->ConferenceParticipantResult->getTalk());
    }
    /**
     * Test attribute "listen"
     */
    public function testPropertyListen()
    {
        $this->ConferenceParticipantResult->setListen(false);
        $this->assertFalse($this->ConferenceParticipantResult->getListen());
        $this->assertIsBool($this->ConferenceParticipantResult->getListen());
    }
    /**
     * Test attribute "start_conf_on_enter"
     */
    public function testPropertyStartConfOnEnter()
    {
        $this->ConferenceParticipantResult->setStartConfOnEnter(false);
        $this->assertFalse($this->ConferenceParticipantResult->getStartConfOnEnter());
        $this->assertIsBool($this->ConferenceParticipantResult->getStartConfOnEnter());
    }

    /**
* Test method toStringTest
*/
public function toStringTest() {
    $test1 = new ConferenceParticipantResult();    
    $test1->setUri("TS");
    $test1->setDateCreated("TS");
    $test1->setDateUpdated("TS");
    $test1->setRevision(1);
    $test1->setAccountId("TS");
    $test1->setConferenceId("TS");
    $test1->setCallId("TS");
    $test1->setTalk(true);
    $test1->setListen(true);
    $test1->setStartConfOnEnter(true);

    $toString1 = $test1->__toString();
    assert(is_string($toString1));
}

/**
 * Test method toHeaderValue
 */
public function toHeaderValueTest()
{
    $test1 = new ConferenceParticipantResult();
    $test1->setUri("TS");
    $test1->setDateCreated("TS");
    $test1->setDateUpdated("TS");
    $test1->setRevision(1);
    $test1->setAccountId("TS");
    $test1->setConferenceId("TS");
    $test1->setCallId("TS");
    $test1->setTalk(true);
    $test1->setListen(true);
    $test1->setStartConfOnEnter(true);

    $toHeaderValue1 = $test1->toHeaderValue();
    assert(is_string($toHeaderValue1));
}


}
