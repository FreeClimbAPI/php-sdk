<?php

/**
 * InboundCallWebhookTest
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
 * InboundCallWebhookTest Class Doc Comment
 *
 * @category    Class
 * @description An inbound Call to a number registered on FreeClimb will trigger a request to the voiceUrl of the application the number is assigned to. FreeClimb expects to receive PerCL in response to this request in order to process the Call. The following parameters are sent as the POST body.
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
#[\AllowDynamicProperties]
class InboundCallWebhookTest extends TestCase
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
        $this->InboundCallWebhook = new \FreeClimb\Api\Model\InboundCallWebhook();
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
        $this->InboundCallWebhook->setRequestType('TS');
        $this->assertEquals('TS', $this->InboundCallWebhook->getRequestType());
        $this->assertIsString($this->InboundCallWebhook->getRequestType());
    }
    /**
     * Test attribute "call_id"
     */
    public function testPropertyCallId()
    {
        $this->InboundCallWebhook->setCallId('TS');
        $this->assertEquals('TS', $this->InboundCallWebhook->getCallId());
        $this->assertIsString($this->InboundCallWebhook->getCallId());
    }
    /**
     * Test attribute "account_id"
     */
    public function testPropertyAccountId()
    {
        $this->InboundCallWebhook->setAccountId('TS');
        $this->assertEquals('TS', $this->InboundCallWebhook->getAccountId());
        $this->assertIsString($this->InboundCallWebhook->getAccountId());
    }
    /**
     * Test attribute "from"
     */
    public function testPropertyFrom()
    {
        $this->InboundCallWebhook->setFrom('TS');
        $this->assertEquals('TS', $this->InboundCallWebhook->getFrom());
        $this->assertIsString($this->InboundCallWebhook->getFrom());
    }
    /**
     * Test attribute "to"
     */
    public function testPropertyTo()
    {
        $this->InboundCallWebhook->setTo('TS');
        $this->assertEquals('TS', $this->InboundCallWebhook->getTo());
        $this->assertIsString($this->InboundCallWebhook->getTo());
    }
    /**
     * Test attribute "call_status"
     */
    public function testPropertyCallStatus()
    {
        $this->InboundCallWebhook->setcallStatus(\FreeClimb\Api\Model\CallStatus::QUEUED);
        $this->assertEquals(\FreeClimb\Api\Model\CallStatus::QUEUED, $this->InboundCallWebhook->getcallStatus());
        $this->InboundCallWebhook->setcallStatus(\FreeClimb\Api\Model\CallStatus::RINGING);
        $this->assertEquals(\FreeClimb\Api\Model\CallStatus::RINGING, $this->InboundCallWebhook->getcallStatus());
        $this->InboundCallWebhook->setcallStatus(\FreeClimb\Api\Model\CallStatus::IN_PROGRESS);
        $this->assertEquals(\FreeClimb\Api\Model\CallStatus::IN_PROGRESS, $this->InboundCallWebhook->getcallStatus());
        $this->InboundCallWebhook->setcallStatus(\FreeClimb\Api\Model\CallStatus::CANCELED);
        $this->assertEquals(\FreeClimb\Api\Model\CallStatus::CANCELED, $this->InboundCallWebhook->getcallStatus());
        $this->InboundCallWebhook->setcallStatus(\FreeClimb\Api\Model\CallStatus::COMPLETED);
        $this->assertEquals(\FreeClimb\Api\Model\CallStatus::COMPLETED, $this->InboundCallWebhook->getcallStatus());
        $this->InboundCallWebhook->setcallStatus(\FreeClimb\Api\Model\CallStatus::FAILED);
        $this->assertEquals(\FreeClimb\Api\Model\CallStatus::FAILED, $this->InboundCallWebhook->getcallStatus());
        $this->InboundCallWebhook->setcallStatus(\FreeClimb\Api\Model\CallStatus::BUSY);
        $this->assertEquals(\FreeClimb\Api\Model\CallStatus::BUSY, $this->InboundCallWebhook->getcallStatus());
        $this->InboundCallWebhook->setcallStatus(\FreeClimb\Api\Model\CallStatus::NO_ANSWER);
        $this->assertEquals(\FreeClimb\Api\Model\CallStatus::NO_ANSWER, $this->InboundCallWebhook->getcallStatus());
    }
    /**
     * Test attribute "direction"
     */
    public function testPropertyDirection()
    {
        $this->InboundCallWebhook->setdirection(\FreeClimb\Api\Model\CallDirection::INBOUND);
        $this->assertEquals(\FreeClimb\Api\Model\CallDirection::INBOUND, $this->InboundCallWebhook->getdirection());
        $this->InboundCallWebhook->setdirection(\FreeClimb\Api\Model\CallDirection::OUTBOUND_API);
        $this->assertEquals(\FreeClimb\Api\Model\CallDirection::OUTBOUND_API, $this->InboundCallWebhook->getdirection());
        $this->InboundCallWebhook->setdirection(\FreeClimb\Api\Model\CallDirection::OUTBOUND_DIAL);
        $this->assertEquals(\FreeClimb\Api\Model\CallDirection::OUTBOUND_DIAL, $this->InboundCallWebhook->getdirection());
    }
    /**
     * Test attribute "conference_id"
     */
    public function testPropertyConferenceId()
    {
        $this->InboundCallWebhook->setConferenceId('TS');
        $this->assertEquals('TS', $this->InboundCallWebhook->getConferenceId());
        $this->assertIsString($this->InboundCallWebhook->getConferenceId());
    }
    /**
     * Test attribute "queue_id"
     */
    public function testPropertyQueueId()
    {
        $this->InboundCallWebhook->setQueueId('TS');
        $this->assertEquals('TS', $this->InboundCallWebhook->getQueueId());
        $this->assertIsString($this->InboundCallWebhook->getQueueId());
    }
    /**
     * Test attribute "parent_call_id"
     */
    public function testPropertyParentCallId()
    {
        $this->InboundCallWebhook->setParentCallId('TS');
        $this->assertEquals('TS', $this->InboundCallWebhook->getParentCallId());
        $this->assertIsString($this->InboundCallWebhook->getParentCallId());
    }
    /**
     * Test attribute "InboundCallWebhook::deserialize"
     */
    public function testDeserializeInboundCallWebhook()
    {
        $json = "{\"requestType\":\"inboundCall\"}";
        $this->assertInstanceOf(\FreeClimb\Api\Model\InboundCallWebhook::class, \FreeClimb\Api\Model\InboundCallWebhook::deserialize($json));
    }
}
