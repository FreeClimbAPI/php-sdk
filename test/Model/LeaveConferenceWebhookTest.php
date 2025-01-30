<?php

/**
 * LeaveConferenceWebhookTest
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
 * LeaveConferenceWebhookTest Class Doc Comment
 *
 * @category    Class
 * @description A Call has been unbridged from a Conference and its leaveConferenceUrl is being invoked. A PerCL response is expected — unless the URL is invoked due to the participant hanging up.
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
#[\AllowDynamicProperties]
class LeaveConferenceWebhookTest extends TestCase
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
        $this->LeaveConferenceWebhook = new \FreeClimb\Api\Model\LeaveConferenceWebhook();
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

        $this->LeaveConferenceWebhook->setRequestType('TS');
        $this->assertEquals('TS', $this->LeaveConferenceWebhook->getRequestType());
        $this->assertIsString($this->LeaveConferenceWebhook->getRequestType());
    }
    /**
     * Test attribute "call_id"
     */
    public function testPropertyCallId()
    {

        $this->LeaveConferenceWebhook->setCallId('TS');
        $this->assertEquals('TS', $this->LeaveConferenceWebhook->getCallId());
        $this->assertIsString($this->LeaveConferenceWebhook->getCallId());
    }
    /**
     * Test attribute "account_id"
     */
    public function testPropertyAccountId()
    {

        $this->LeaveConferenceWebhook->setAccountId('TS');
        $this->assertEquals('TS', $this->LeaveConferenceWebhook->getAccountId());
        $this->assertIsString($this->LeaveConferenceWebhook->getAccountId());
    }
    /**
     * Test attribute "from"
     */
    public function testPropertyFrom()
    {

        $this->LeaveConferenceWebhook->setFrom('TS');
        $this->assertEquals('TS', $this->LeaveConferenceWebhook->getFrom());
        $this->assertIsString($this->LeaveConferenceWebhook->getFrom());
    }
    /**
     * Test attribute "to"
     */
    public function testPropertyTo()
    {

        $this->LeaveConferenceWebhook->setTo('TS');
        $this->assertEquals('TS', $this->LeaveConferenceWebhook->getTo());
        $this->assertIsString($this->LeaveConferenceWebhook->getTo());
    }
    /**
     * Test attribute "call_status"
     */
    public function testPropertyCallStatus()
    {
        $this->LeaveConferenceWebhook->setcallStatus(\FreeClimb\Api\Model\CallStatus::QUEUED);
        $this->assertEquals(\FreeClimb\Api\Model\CallStatus::QUEUED, $this->LeaveConferenceWebhook->getcallStatus());
        $this->LeaveConferenceWebhook->setcallStatus(\FreeClimb\Api\Model\CallStatus::RINGING);
        $this->assertEquals(\FreeClimb\Api\Model\CallStatus::RINGING, $this->LeaveConferenceWebhook->getcallStatus());
        $this->LeaveConferenceWebhook->setcallStatus(\FreeClimb\Api\Model\CallStatus::IN_PROGRESS);
        $this->assertEquals(\FreeClimb\Api\Model\CallStatus::IN_PROGRESS, $this->LeaveConferenceWebhook->getcallStatus());
        $this->LeaveConferenceWebhook->setcallStatus(\FreeClimb\Api\Model\CallStatus::CANCELED);
        $this->assertEquals(\FreeClimb\Api\Model\CallStatus::CANCELED, $this->LeaveConferenceWebhook->getcallStatus());
        $this->LeaveConferenceWebhook->setcallStatus(\FreeClimb\Api\Model\CallStatus::COMPLETED);
        $this->assertEquals(\FreeClimb\Api\Model\CallStatus::COMPLETED, $this->LeaveConferenceWebhook->getcallStatus());
        $this->LeaveConferenceWebhook->setcallStatus(\FreeClimb\Api\Model\CallStatus::FAILED);
        $this->assertEquals(\FreeClimb\Api\Model\CallStatus::FAILED, $this->LeaveConferenceWebhook->getcallStatus());
        $this->LeaveConferenceWebhook->setcallStatus(\FreeClimb\Api\Model\CallStatus::BUSY);
        $this->assertEquals(\FreeClimb\Api\Model\CallStatus::BUSY, $this->LeaveConferenceWebhook->getcallStatus());
        $this->LeaveConferenceWebhook->setcallStatus(\FreeClimb\Api\Model\CallStatus::NO_ANSWER);
        $this->assertEquals(\FreeClimb\Api\Model\CallStatus::NO_ANSWER, $this->LeaveConferenceWebhook->getcallStatus());
    }
    /**
     * Test attribute "direction"
     */
    public function testPropertyDirection()
    {
        $this->LeaveConferenceWebhook->setdirection(\FreeClimb\Api\Model\CallDirection::INBOUND);
        $this->assertEquals(\FreeClimb\Api\Model\CallDirection::INBOUND, $this->LeaveConferenceWebhook->getdirection());
        $this->LeaveConferenceWebhook->setdirection(\FreeClimb\Api\Model\CallDirection::OUTBOUND_API);
        $this->assertEquals(\FreeClimb\Api\Model\CallDirection::OUTBOUND_API, $this->LeaveConferenceWebhook->getdirection());
        $this->LeaveConferenceWebhook->setdirection(\FreeClimb\Api\Model\CallDirection::OUTBOUND_DIAL);
        $this->assertEquals(\FreeClimb\Api\Model\CallDirection::OUTBOUND_DIAL, $this->LeaveConferenceWebhook->getdirection());
    }
    /**
     * Test attribute "conference_id"
     */
    public function testPropertyConferenceId()
    {

        $this->LeaveConferenceWebhook->setConferenceId('TS');
        $this->assertEquals('TS', $this->LeaveConferenceWebhook->getConferenceId());
        $this->assertIsString($this->LeaveConferenceWebhook->getConferenceId());
    }
    /**
     * Test attribute "queue_id"
     */
    public function testPropertyQueueId()
    {

        $this->LeaveConferenceWebhook->setQueueId('TS');
        $this->assertEquals('TS', $this->LeaveConferenceWebhook->getQueueId());
        $this->assertIsString($this->LeaveConferenceWebhook->getQueueId());
    }
    /**
     * Test attribute "LeaveConferenceWebhook::deserialize"
     */
    public function testDeserializeLeaveConferenceWebhook()
    {
        $json = "{\"requestType\":\"leaveConference\"}";
        $this->assertInstanceOf(\FreeClimb\Api\Model\LeaveConferenceWebhook::class, \FreeClimb\Api\Model\LeaveConferenceWebhook::deserialize($json));
    }
}
