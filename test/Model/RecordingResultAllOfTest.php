<?php

/**
 * RecordingResultAllOfTest
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

use FreeClimb\Api\Model\RecordingResultAllOf;
use PHPUnit\Framework\TestCase;

/**
 * RecordingResultAllOfTest Class Doc Comment
 *
 * @category    Class
 * @description RecordingResultAllOf
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class RecordingResultAllOfTest extends TestCase
{
    protected $RecordingResultAllOf;

    /**
     * Test "RecordingResultAllOf"
     */
    public function setUp() : void
    {
        $this->RecordingResultAllOf = new RecordingResultAllOf();
    }
    /**
     * Test attribute "recording_id"
     */
    public function testPropertyRecordingId()
    {
        $this->RecordingResultAllOf->setRecordingId('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->RecordingResultAllOf->getRecordingId());
        $this->assertIsString($this->RecordingResultAllOf->getRecordingId());
        

    }
    /**
     * Test attribute "account_id"
     */
    public function testPropertyAccountId()
    {
        $this->RecordingResultAllOf->setAccountId('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->RecordingResultAllOf->getAccountId());
        $this->assertIsString($this->RecordingResultAllOf->getAccountId());
        

    }
    /**
     * Test attribute "call_id"
     */
    public function testPropertyCallId()
    {
        $this->RecordingResultAllOf->setCallId('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->RecordingResultAllOf->getCallId());
        $this->assertIsString($this->RecordingResultAllOf->getCallId());
        

    }
    /**
     * Test attribute "duration_sec"
     */
    public function testPropertyDurationSec()
    {
        $this->RecordingResultAllOf->setDurationSec(12345);
        $this->assertEquals(12345, $this->RecordingResultAllOf->getDurationSec());
        $this->assertIsInt($this->RecordingResultAllOf->getDurationSec());
    }
    /**
     * Test attribute "conference_id"
     */
    public function testPropertyConferenceId()
    {
        $this->RecordingResultAllOf->setConferenceId('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->RecordingResultAllOf->getConferenceId());
        $this->assertIsString($this->RecordingResultAllOf->getConferenceId());
        

    }

    /**
* Test method toStringTest
*/
public function toStringTest() {
    $test1 = new RecordingResultAllOf();    
      $test1->setRecordingId("TS");
      $test1->setAccountId("TS");
      $test1->setCallId("TS");
      $test1->setDurationSec(1);
      $test1->setConferenceId("TS");

    $toString1 = $test1->__toString();
    assert(is_string($toString1));
}

/**
 * Test method toHeaderValue
 */
public function toHeaderValueTest()
{
    $test1 = new RecordingResultAllOf();
      $test1->setRecordingId("TS");
      $test1->setAccountId("TS");
      $test1->setCallId("TS");
      $test1->setDurationSec(1);
      $test1->setConferenceId("TS");

    $toHeaderValue1 = $test1->toHeaderValue();
    assert(is_string($toHeaderValue1));
}


}
