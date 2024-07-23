<?php

/**
 * TranscribeUtteranceAllOfTest
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

use FreeClimb\Api\Model\TranscribeUtteranceAllOf;
use PHPUnit\Framework\TestCase;

/**
 * TranscribeUtteranceAllOfTest Class Doc Comment
 *
 * @category    Class
 * @description The &#x60;TranscribeUtterance&#x60; command transcribes the caller’s voice and returns transcription of the audio and optionally returns the recording of the audio transcribed.  &#x60;TranscribeUtterance&#x60; is blocking and is a terminal command. As such, the actionUrl property is required, and control of the Call picks up using the &#x60;PerCL&#x60; returned in response of the &#x60;actionUrl&#x60;. Recording and Transcription information is returned in the actionUrl request. If the reason this command ended was due to the call hanging up, any PerCL returned will not execute.
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class TranscribeUtteranceAllOfTest extends TestCase
{
    protected $TranscribeUtteranceAllOf;

    /**
     * Test "TranscribeUtteranceAllOf"
     */
    public function setUp() : void
    {
        $this->TranscribeUtteranceAllOf = new TranscribeUtteranceAllOf();
    }
    /**
     * Test attribute "action_url"
     */
    public function testPropertyActionUrl()
    {
        $this->TranscribeUtteranceAllOf->setActionUrl('TS');
        $this->assertEquals('TS', $this->TranscribeUtteranceAllOf->getActionUrl());
        $this->assertIsString($this->TranscribeUtteranceAllOf->getActionUrl());
    }
    /**
     * Test attribute "play_beep"
     */
    public function testPropertyPlayBeep()
    {
        $this->TranscribeUtteranceAllOf->setPlayBeep(false);
        $this->assertFalse($this->TranscribeUtteranceAllOf->getPlayBeep());
        $this->assertIsBool($this->TranscribeUtteranceAllOf->getPlayBeep());
    }
    /**
     * Test attribute "record"
     */
    public function testPropertyRecord()
    {
        $this->TranscribeUtteranceAllOf->setRecord(new \stdClass);
        $this->assertInstanceOf(\stdClass::class, $this->TranscribeUtteranceAllOf->getRecord());
    }
    /**
     * Test attribute "privacy_for_logging"
     */
    public function testPropertyPrivacyForLogging()
    {
        $this->TranscribeUtteranceAllOf->setPrivacyForLogging(false);
        $this->assertFalse($this->TranscribeUtteranceAllOf->getPrivacyForLogging());
        $this->assertIsBool($this->TranscribeUtteranceAllOf->getPrivacyForLogging());
    }
    /**
     * Test attribute "privacy_for_recording"
     */
    public function testPropertyPrivacyForRecording()
    {
        $this->TranscribeUtteranceAllOf->setPrivacyForRecording(false);
        $this->assertFalse($this->TranscribeUtteranceAllOf->getPrivacyForRecording());
        $this->assertIsBool($this->TranscribeUtteranceAllOf->getPrivacyForRecording());
    }
    /**
     * Test attribute "prompts"
     */
    public function testPropertyPrompts()
    {
        $this->TranscribeUtteranceAllOf->setPrompts([]);
        $this->assertEquals([], $this->TranscribeUtteranceAllOf->getPrompts());
        $this->assertIsArray($this->TranscribeUtteranceAllOf->getPrompts());
    }

    /**
* Test method toStringTest
*/
public function toStringTest() {
    $test1 = new TranscribeUtteranceAllOf();    
    $test1->setActionUrl("TS");
    $test1->setPlayBeep(true);
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
    $test1 = new TranscribeUtteranceAllOf();
    $test1->setActionUrl("TS");
    $test1->setPlayBeep(true);
    $test1->setPrivacyForLogging(true);
    $test1->setPrivacyForRecording(true);
    $testArray = ["ElementOne", "ElementTwo", "ElementThree"];
    $test1->setPrompts($testArray);

    $toHeaderValue1 = $test1->toHeaderValue();
    assert(is_string($toHeaderValue1));
}


}
