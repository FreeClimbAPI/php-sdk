<?php

/**
 * TranscribeUtteranceTest
 *
 * PHP version 7.4
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
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace FreeClimb\Api\Test\Model;

use PHPUnit\Framework\TestCase;

/**
 * TranscribeUtteranceTest Class Doc Comment
 *
 * @category    Class
 * @description The &#x60;TranscribeUtterance&#x60; command transcribes the caller’s voice and returns transcription of the audio and optionally returns the recording of the audio transcribed.  &#x60;TranscribeUtterance&#x60; is blocking and is a terminal command. As such, the actionUrl property is required, and control of the Call picks up using the &#x60;PerCL&#x60; returned in response of the &#x60;actionUrl&#x60;. Recording and Transcription information is returned in the actionUrl request. If the reason this command ended was due to the call hanging up, any PerCL returned will not execute.
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
#[\AllowDynamicProperties]
class TranscribeUtteranceTest extends TestCase
{
    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
        $this->TranscribeUtterance = new \FreeClimb\Api\Model\TranscribeUtterance();
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }


    public function testPropertyActionUrl()
    {

        $this->TranscribeUtterance->setActionUrl('TS');
        $this->assertEquals('TS', $this->TranscribeUtterance->getActionUrl());
        $this->assertIsString($this->TranscribeUtterance->getActionUrl());
    }

    public function testPropertyPlayBeep()
    {
        $this->TranscribeUtterance->setplayBeep(false);
        $this->assertFalse($this->TranscribeUtterance->getplayBeep());
        $this->assertIsBool($this->TranscribeUtterance->getplayBeep());
    }

    public function testPropertyRecord()
    {
        $this->TranscribeUtterance->setrecord(new \stdClass());
        $this->assertInstanceOf(\stdClass::class, $this->TranscribeUtterance->getrecord());
    }

    public function testPropertyPrivacyForLogging()
    {
        $this->TranscribeUtterance->setprivacyForLogging(false);
        $this->assertFalse($this->TranscribeUtterance->getprivacyForLogging());
        $this->assertIsBool($this->TranscribeUtterance->getprivacyForLogging());
    }

    public function testPropertyPrivacyForRecording()
    {
        $this->TranscribeUtterance->setprivacyForRecording(false);
        $this->assertFalse($this->TranscribeUtterance->getprivacyForRecording());
        $this->assertIsBool($this->TranscribeUtterance->getprivacyForRecording());
    }

    public function testPropertyPrompts()
    {
        $this->TranscribeUtterance->setprompts([]);
        $this->assertEquals([], $this->TranscribeUtterance->getprompts());
        $this->assertIsArray($this->TranscribeUtterance->getprompts());
    }
}
