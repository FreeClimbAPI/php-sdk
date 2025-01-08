<?php

/**
 * AddToConferenceNotificationWebhookTest
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
 * AddToConferenceNotificationWebhookTest Class Doc Comment
 *
 * @category    Class
 * @description A Call has been bridged to a Conference and the AddToConference command’s notificationUrl is being invoked. This is a notification only; any PerCL returned will be ignored.
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
#[\AllowDynamicProperties]
class AddToConferenceNotificationWebhookTest extends TestCase
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
        $this->AddToConferenceNotificationWebhook = new \FreeClimb\Api\Model\AddToConferenceNotificationWebhook();
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

    /**
     * Test attribute "request_type"
     */
    public function testPropertyRequestType()
    {
        $this->AddToConferenceNotificationWebhook->setRequestType('TS');
        $this->assertEquals('TS', $this->AddToConferenceNotificationWebhook->getRequestType());
        $this->assertIsString($this->AddToConferenceNotificationWebhook->getRequestType());
    }
    /**
     * Test attribute "call_id"
     */
    public function testPropertyCallId()
    {
        $this->AddToConferenceNotificationWebhook->setCallId('TS');
        $this->assertEquals('TS', $this->AddToConferenceNotificationWebhook->getCallId());
        $this->assertIsString($this->AddToConferenceNotificationWebhook->getCallId());
    }
    /**
     * Test attribute "account_id"
     */
    public function testPropertyAccountId()
    {
        $this->AddToConferenceNotificationWebhook->setAccountId('TS');
        $this->assertEquals('TS', $this->AddToConferenceNotificationWebhook->getAccountId());
        $this->assertIsString($this->AddToConferenceNotificationWebhook->getAccountId());
    }
    /**
     * Test attribute "from"
     */
    public function testPropertyFrom()
    {
        $this->AddToConferenceNotificationWebhook->setFrom('TS');
        $this->assertEquals('TS', $this->AddToConferenceNotificationWebhook->getFrom());
        $this->assertIsString($this->AddToConferenceNotificationWebhook->getFrom());
    }
    /**
     * Test attribute "to"
     */
    public function testPropertyTo()
    {
        $this->AddToConferenceNotificationWebhook->setTo('TS');
        $this->assertEquals('TS', $this->AddToConferenceNotificationWebhook->getTo());
        $this->assertIsString($this->AddToConferenceNotificationWebhook->getTo());
    }
    /**
     * Test attribute "call_status"
     */
    public function testPropertyCallStatus()
    {
        $this->AddToConferenceNotificationWebhook->setcallStatus(\FreeClimb\Api\Model\CallStatus::QUEUED);
        $this->assertEquals(\FreeClimb\Api\Model\CallStatus::QUEUED, $this->AddToConferenceNotificationWebhook->getcallStatus());
        $this->AddToConferenceNotificationWebhook->setcallStatus(\FreeClimb\Api\Model\CallStatus::RINGING);
        $this->assertEquals(\FreeClimb\Api\Model\CallStatus::RINGING, $this->AddToConferenceNotificationWebhook->getcallStatus());
        $this->AddToConferenceNotificationWebhook->setcallStatus(\FreeClimb\Api\Model\CallStatus::IN_PROGRESS);
        $this->assertEquals(\FreeClimb\Api\Model\CallStatus::IN_PROGRESS, $this->AddToConferenceNotificationWebhook->getcallStatus());
        $this->AddToConferenceNotificationWebhook->setcallStatus(\FreeClimb\Api\Model\CallStatus::CANCELED);
        $this->assertEquals(\FreeClimb\Api\Model\CallStatus::CANCELED, $this->AddToConferenceNotificationWebhook->getcallStatus());
        $this->AddToConferenceNotificationWebhook->setcallStatus(\FreeClimb\Api\Model\CallStatus::COMPLETED);
        $this->assertEquals(\FreeClimb\Api\Model\CallStatus::COMPLETED, $this->AddToConferenceNotificationWebhook->getcallStatus());
        $this->AddToConferenceNotificationWebhook->setcallStatus(\FreeClimb\Api\Model\CallStatus::FAILED);
        $this->assertEquals(\FreeClimb\Api\Model\CallStatus::FAILED, $this->AddToConferenceNotificationWebhook->getcallStatus());
        $this->AddToConferenceNotificationWebhook->setcallStatus(\FreeClimb\Api\Model\CallStatus::BUSY);
        $this->assertEquals(\FreeClimb\Api\Model\CallStatus::BUSY, $this->AddToConferenceNotificationWebhook->getcallStatus());
        $this->AddToConferenceNotificationWebhook->setcallStatus(\FreeClimb\Api\Model\CallStatus::NO_ANSWER);
        $this->assertEquals(\FreeClimb\Api\Model\CallStatus::NO_ANSWER, $this->AddToConferenceNotificationWebhook->getcallStatus());
    }
    /**
     * Test attribute "direction"
     */
    public function testPropertyDirection()
    {
        $this->AddToConferenceNotificationWebhook->setdirection(\FreeClimb\Api\Model\CallDirection::INBOUND);
        $this->assertEquals(\FreeClimb\Api\Model\CallDirection::INBOUND, $this->AddToConferenceNotificationWebhook->getdirection());
        $this->AddToConferenceNotificationWebhook->setdirection(\FreeClimb\Api\Model\CallDirection::OUTBOUND_API);
        $this->assertEquals(\FreeClimb\Api\Model\CallDirection::OUTBOUND_API, $this->AddToConferenceNotificationWebhook->getdirection());
        $this->AddToConferenceNotificationWebhook->setdirection(\FreeClimb\Api\Model\CallDirection::OUTBOUND_DIAL);
        $this->assertEquals(\FreeClimb\Api\Model\CallDirection::OUTBOUND_DIAL, $this->AddToConferenceNotificationWebhook->getdirection());
    }
    /**
     * Test attribute "conference_id"
     */
    public function testPropertyConferenceId()
    {
        $this->AddToConferenceNotificationWebhook->setConferenceId('TS');
        $this->assertEquals('TS', $this->AddToConferenceNotificationWebhook->getConferenceId());
        $this->assertIsString($this->AddToConferenceNotificationWebhook->getConferenceId());
    }
    /**
     * Test attribute "queue_id"
     */
    public function testPropertyQueueId()
    {
        $this->AddToConferenceNotificationWebhook->setQueueId('TS');
        $this->assertEquals('TS', $this->AddToConferenceNotificationWebhook->getQueueId());
        $this->assertIsString($this->AddToConferenceNotificationWebhook->getQueueId());
    }
    /**
     * Test attribute "status"
     */
    public function testPropertyStatus()
    {
        $this->AddToConferenceNotificationWebhook->setstatus(\FreeClimb\Api\Model\ConferenceStatus::EMPTY);
        $this->assertEquals(\FreeClimb\Api\Model\ConferenceStatus::EMPTY, $this->AddToConferenceNotificationWebhook->getstatus());
        $this->AddToConferenceNotificationWebhook->setstatus(\FreeClimb\Api\Model\ConferenceStatus::POPULATED);
        $this->assertEquals(\FreeClimb\Api\Model\ConferenceStatus::POPULATED, $this->AddToConferenceNotificationWebhook->getstatus());
        $this->AddToConferenceNotificationWebhook->setstatus(\FreeClimb\Api\Model\ConferenceStatus::IN_PROGRESS);
        $this->assertEquals(\FreeClimb\Api\Model\ConferenceStatus::IN_PROGRESS, $this->AddToConferenceNotificationWebhook->getstatus());
        $this->AddToConferenceNotificationWebhook->setstatus(\FreeClimb\Api\Model\ConferenceStatus::TERMINATED);
        $this->assertEquals(\FreeClimb\Api\Model\ConferenceStatus::TERMINATED, $this->AddToConferenceNotificationWebhook->getstatus());
    }
    /**
     * Test attribute "recording_url"
     */
    public function testPropertyRecordingUrl()
    {
        $this->AddToConferenceNotificationWebhook->setRecordingUrl('TS');
        $this->assertEquals('TS', $this->AddToConferenceNotificationWebhook->getRecordingUrl());
        $this->assertIsString($this->AddToConferenceNotificationWebhook->getRecordingUrl());
    }
    /**
     * Test attribute "recording_id"
     */
    public function testPropertyRecordingId()
    {
        $this->AddToConferenceNotificationWebhook->setRecordingId('TS');
        $this->assertEquals('TS', $this->AddToConferenceNotificationWebhook->getRecordingId());
        $this->assertIsString($this->AddToConferenceNotificationWebhook->getRecordingId());
    }
    /**
     * Test attribute "recording_duration_sec"
     */
    public function testPropertyRecordingDurationSec()
    {


        $this->AddToConferenceNotificationWebhook->setrecordingDurationSec(1);
        $this->assertEquals(1, $this->AddToConferenceNotificationWebhook->getrecordingDurationSec());
        $this->assertIsNumeric($this->AddToConferenceNotificationWebhook->getrecordingDurationSec());

    }
    /**
     * Test attribute "AddToConferenceNotificationWebhook::deserialize"
     */
    public function testDeserializeAddToConferenceNotificationWebhook()
    {
        $json = "{\"requestType\":\"addToConferenceNotification\"}";
        $this->assertInstanceOf(\FreeClimb\Api\Model\AddToConferenceNotificationWebhook::class, \FreeClimb\Api\Model\AddToConferenceNotificationWebhook::deserialize($json));
    }
}