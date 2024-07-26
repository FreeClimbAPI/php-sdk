<?php

/**
 * TranscribeUtteranceTest
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

use FreeClimb\Api\Model\TranscribeUtterance;
use PHPUnit\Framework\TestCase;

/**
 * TranscribeUtteranceTest Class Doc Comment
 *
 * @category    Class
 * @description TranscribeUtterance
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class TranscribeUtteranceTest extends TestCase
{
    protected $TranscribeUtterance;

    /**
     * Test "TranscribeUtterance"
     */
    public function setUp() : void
    {
        $this->TranscribeUtterance = new TranscribeUtterance();
    }
    /**
     * Test attribute "action_url"
     */
    public function testPropertyActionUrl()
    {
        $this->TranscribeUtterance->setActionUrl('TS');
        $this->assertEquals('TS', $this->TranscribeUtterance->getActionUrl());
        $this->assertIsString($this->TranscribeUtterance->getActionUrl());
    }
    /**
     * Test attribute "play_beep"
     */
    public function testPropertyPlayBeep()
    {
        $this->TranscribeUtterance->setPlayBeep(false);
        $this->assertFalse($this->TranscribeUtterance->getPlayBeep());
        $this->assertIsBool($this->TranscribeUtterance->getPlayBeep());
    }
    /**
     * Test attribute "record"
     */
    public function testPropertyRecord()
    {
        $this->TranscribeUtterance->setRecord(new \stdClass);
        $this->assertInstanceOf(\stdClass::class, $this->TranscribeUtterance->getRecord());
    }
    /**
     * Test attribute "privacy_for_logging"
     */
    public function testPropertyPrivacyForLogging()
    {
        $this->TranscribeUtterance->setPrivacyForLogging(false);
        $this->assertFalse($this->TranscribeUtterance->getPrivacyForLogging());
        $this->assertIsBool($this->TranscribeUtterance->getPrivacyForLogging());
    }
    /**
     * Test attribute "privacy_for_recording"
     */
    public function testPropertyPrivacyForRecording()
    {
        $this->TranscribeUtterance->setPrivacyForRecording(false);
        $this->assertFalse($this->TranscribeUtterance->getPrivacyForRecording());
        $this->assertIsBool($this->TranscribeUtterance->getPrivacyForRecording());
    }
    /**
     * Test attribute "prompts"
     */
    public function testPropertyPrompts()
    {
        $this->TranscribeUtterance->setPrompts([]);
        $this->assertEquals([], $this->TranscribeUtterance->getPrompts());
        $this->assertIsArray($this->TranscribeUtterance->getPrompts());
    }

    /**
* Test method toStringTest
*/
public function toStringTest() {
    $test1 = new TranscribeUtterance();    
    $test1->setActionUrl("TS");
    $test1->setPlayBeep(true);
    $object = new \FreeClimb\Api\Model\TranscribeUtteranceAllOfRecord();
    $test1->setRecord($object);
    $test1->setPrivacyForLogging(true);
    $test1->setPrivacyForRecording(true);
    $testArray = ["ElementOne", "ElementTwo", "ElementThree"];
    $test1->setPrompts($testArray);

    $toString1 = $test1->__toString();
    assert(is_string($toString1));
}

/**
 * Test method toHeaderValue
 */
public function toHeaderValueTest()
{
    $test1 = new TranscribeUtterance();
    $test1->setActionUrl("TS");
    $test1->setPlayBeep(true);
    $object = new \FreeClimb\Api\Model\TranscribeUtteranceAllOfRecord();
    $test1->setRecord($object);
    $test1->setPrivacyForLogging(true);
    $test1->setPrivacyForRecording(true);
    $testArray = ["ElementOne", "ElementTwo", "ElementThree"];
    $test1->setPrompts($testArray);

    $toHeaderValue1 = $test1->toHeaderValue();
    assert(is_string($toHeaderValue1));
}


}
