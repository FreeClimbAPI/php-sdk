<?php

/**
 * CreateConferenceWebhookTest
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
 * CreateConferenceWebhookTest Class Doc Comment
 *
 * @category    Class
 * @description A Conference has been created and its statusCallbackUrl or actionUrl is being invoked. A PerCL response is expected if the actionUrl is being invoked.
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
#[\AllowDynamicProperties]
class CreateConferenceWebhookTest extends TestCase
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
        $this->CreateConferenceWebhook = new \FreeClimb\Api\Model\CreateConferenceWebhook();
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


    public function testPropertyRequestType()
    {

        $this->CreateConferenceWebhook->setRequestType('TS');
        $this->assertEquals('TS', $this->CreateConferenceWebhook->getRequestType());
        $this->assertIsString($this->CreateConferenceWebhook->getRequestType());
    }

    public function testPropertyCallId()
    {

        $this->CreateConferenceWebhook->setCallId('TS');
        $this->assertEquals('TS', $this->CreateConferenceWebhook->getCallId());
        $this->assertIsString($this->CreateConferenceWebhook->getCallId());
    }

    public function testPropertyAccountId()
    {

        $this->CreateConferenceWebhook->setAccountId('TS');
        $this->assertEquals('TS', $this->CreateConferenceWebhook->getAccountId());
        $this->assertIsString($this->CreateConferenceWebhook->getAccountId());
    }

    public function testPropertyFrom()
    {

        $this->CreateConferenceWebhook->setFrom('TS');
        $this->assertEquals('TS', $this->CreateConferenceWebhook->getFrom());
        $this->assertIsString($this->CreateConferenceWebhook->getFrom());
    }

    public function testPropertyTo()
    {

        $this->CreateConferenceWebhook->setTo('TS');
        $this->assertEquals('TS', $this->CreateConferenceWebhook->getTo());
        $this->assertIsString($this->CreateConferenceWebhook->getTo());
    }

    public function testPropertyCallStatus()
    {
        $this->CreateConferenceWebhook->setcallStatus(\FreeClimb\Api\Model\CallStatus::QUEUED);
        $this->assertEquals(\FreeClimb\Api\Model\CallStatus::QUEUED, $this->CreateConferenceWebhook->getcallStatus());
        $this->CreateConferenceWebhook->setcallStatus(\FreeClimb\Api\Model\CallStatus::RINGING);
        $this->assertEquals(\FreeClimb\Api\Model\CallStatus::RINGING, $this->CreateConferenceWebhook->getcallStatus());
        $this->CreateConferenceWebhook->setcallStatus(\FreeClimb\Api\Model\CallStatus::IN_PROGRESS);
        $this->assertEquals(\FreeClimb\Api\Model\CallStatus::IN_PROGRESS, $this->CreateConferenceWebhook->getcallStatus());
        $this->CreateConferenceWebhook->setcallStatus(\FreeClimb\Api\Model\CallStatus::CANCELED);
        $this->assertEquals(\FreeClimb\Api\Model\CallStatus::CANCELED, $this->CreateConferenceWebhook->getcallStatus());
        $this->CreateConferenceWebhook->setcallStatus(\FreeClimb\Api\Model\CallStatus::COMPLETED);
        $this->assertEquals(\FreeClimb\Api\Model\CallStatus::COMPLETED, $this->CreateConferenceWebhook->getcallStatus());
        $this->CreateConferenceWebhook->setcallStatus(\FreeClimb\Api\Model\CallStatus::FAILED);
        $this->assertEquals(\FreeClimb\Api\Model\CallStatus::FAILED, $this->CreateConferenceWebhook->getcallStatus());
        $this->CreateConferenceWebhook->setcallStatus(\FreeClimb\Api\Model\CallStatus::BUSY);
        $this->assertEquals(\FreeClimb\Api\Model\CallStatus::BUSY, $this->CreateConferenceWebhook->getcallStatus());
        $this->CreateConferenceWebhook->setcallStatus(\FreeClimb\Api\Model\CallStatus::NO_ANSWER);
        $this->assertEquals(\FreeClimb\Api\Model\CallStatus::NO_ANSWER, $this->CreateConferenceWebhook->getcallStatus());
    }

    public function testPropertyDirection()
    {
        $this->CreateConferenceWebhook->setdirection(\FreeClimb\Api\Model\CallDirection::INBOUND);
        $this->assertEquals(\FreeClimb\Api\Model\CallDirection::INBOUND, $this->CreateConferenceWebhook->getdirection());
        $this->CreateConferenceWebhook->setdirection(\FreeClimb\Api\Model\CallDirection::OUTBOUND_API);
        $this->assertEquals(\FreeClimb\Api\Model\CallDirection::OUTBOUND_API, $this->CreateConferenceWebhook->getdirection());
        $this->CreateConferenceWebhook->setdirection(\FreeClimb\Api\Model\CallDirection::OUTBOUND_DIAL);
        $this->assertEquals(\FreeClimb\Api\Model\CallDirection::OUTBOUND_DIAL, $this->CreateConferenceWebhook->getdirection());
    }

    public function testPropertyConferenceId()
    {

        $this->CreateConferenceWebhook->setConferenceId('TS');
        $this->assertEquals('TS', $this->CreateConferenceWebhook->getConferenceId());
        $this->assertIsString($this->CreateConferenceWebhook->getConferenceId());
    }

    public function testPropertyQueueId()
    {

        $this->CreateConferenceWebhook->setQueueId('TS');
        $this->assertEquals('TS', $this->CreateConferenceWebhook->getQueueId());
        $this->assertIsString($this->CreateConferenceWebhook->getQueueId());
    }

    public function testPropertyStatus()
    {
        $this->CreateConferenceWebhook->setstatus(\FreeClimb\Api\Model\ConferenceStatus::EMPTY);
        $this->assertEquals(\FreeClimb\Api\Model\ConferenceStatus::EMPTY, $this->CreateConferenceWebhook->getstatus());
        $this->CreateConferenceWebhook->setstatus(\FreeClimb\Api\Model\ConferenceStatus::POPULATED);
        $this->assertEquals(\FreeClimb\Api\Model\ConferenceStatus::POPULATED, $this->CreateConferenceWebhook->getstatus());
        $this->CreateConferenceWebhook->setstatus(\FreeClimb\Api\Model\ConferenceStatus::IN_PROGRESS);
        $this->assertEquals(\FreeClimb\Api\Model\ConferenceStatus::IN_PROGRESS, $this->CreateConferenceWebhook->getstatus());
        $this->CreateConferenceWebhook->setstatus(\FreeClimb\Api\Model\ConferenceStatus::TERMINATED);
        $this->assertEquals(\FreeClimb\Api\Model\ConferenceStatus::TERMINATED, $this->CreateConferenceWebhook->getstatus());
    }

    public function testPropertyRecordingUrl()
    {

        $this->CreateConferenceWebhook->setRecordingUrl('TS');
        $this->assertEquals('TS', $this->CreateConferenceWebhook->getRecordingUrl());
        $this->assertIsString($this->CreateConferenceWebhook->getRecordingUrl());
    }

    public function testPropertyRecordingId()
    {

        $this->CreateConferenceWebhook->setRecordingId('TS');
        $this->assertEquals('TS', $this->CreateConferenceWebhook->getRecordingId());
        $this->assertIsString($this->CreateConferenceWebhook->getRecordingId());
    }

    public function testPropertyRecordingDurationSec()
    {


        $this->CreateConferenceWebhook->setrecordingDurationSec(1);
        $this->assertEquals(1, $this->CreateConferenceWebhook->getrecordingDurationSec());
        $this->assertIsNumeric($this->CreateConferenceWebhook->getrecordingDurationSec());

    }
    /**
     * Test attribute "CreateConferenceWebhook::deserialize"
     */
    public function testDeserializeCreateConferenceWebhook()
    {
        $json = "{\"requestType\":\"createConference\"}";
        $this->assertInstanceOf(\FreeClimb\Api\Model\CreateConferenceWebhook::class, \FreeClimb\Api\Model\CreateConferenceWebhook::deserialize($json));
    }
}
