<?php

/**
 * RemoveFromQueueNotificationWebhookTest
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
 * RemoveFromQueueNotificationWebhookTest Class Doc Comment
 *
 * @category    Class
 * @description A call has been removed from a queue and the Enqueue command’s actionUrl is being invoked. A PerCL response is expected except if reason is hangup.
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
#[\AllowDynamicProperties]
class RemoveFromQueueNotificationWebhookTest extends TestCase
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
        $this->RemoveFromQueueNotificationWebhook = new \FreeClimb\Api\Model\RemoveFromQueueNotificationWebhook();
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

        $this->RemoveFromQueueNotificationWebhook->setRequestType('TS');
        $this->assertEquals('TS', $this->RemoveFromQueueNotificationWebhook->getRequestType());
        $this->assertIsString($this->RemoveFromQueueNotificationWebhook->getRequestType());
    }

    public function testPropertyAccountId()
    {

        $this->RemoveFromQueueNotificationWebhook->setAccountId('TS');
        $this->assertEquals('TS', $this->RemoveFromQueueNotificationWebhook->getAccountId());
        $this->assertIsString($this->RemoveFromQueueNotificationWebhook->getAccountId());
    }

    public function testPropertyCallId()
    {

        $this->RemoveFromQueueNotificationWebhook->setCallId('TS');
        $this->assertEquals('TS', $this->RemoveFromQueueNotificationWebhook->getCallId());
        $this->assertIsString($this->RemoveFromQueueNotificationWebhook->getCallId());
    }

    public function testPropertyFrom()
    {

        $this->RemoveFromQueueNotificationWebhook->setFrom('TS');
        $this->assertEquals('TS', $this->RemoveFromQueueNotificationWebhook->getFrom());
        $this->assertIsString($this->RemoveFromQueueNotificationWebhook->getFrom());
    }

    public function testPropertyTo()
    {

        $this->RemoveFromQueueNotificationWebhook->setTo('TS');
        $this->assertEquals('TS', $this->RemoveFromQueueNotificationWebhook->getTo());
        $this->assertIsString($this->RemoveFromQueueNotificationWebhook->getTo());
    }

    public function testPropertyCallStatus()
    {
        $this->RemoveFromQueueNotificationWebhook->setcallStatus(\FreeClimb\Api\Model\CallStatus::QUEUED);
        $this->assertEquals(\FreeClimb\Api\Model\CallStatus::QUEUED, $this->RemoveFromQueueNotificationWebhook->getcallStatus());
        $this->RemoveFromQueueNotificationWebhook->setcallStatus(\FreeClimb\Api\Model\CallStatus::RINGING);
        $this->assertEquals(\FreeClimb\Api\Model\CallStatus::RINGING, $this->RemoveFromQueueNotificationWebhook->getcallStatus());
        $this->RemoveFromQueueNotificationWebhook->setcallStatus(\FreeClimb\Api\Model\CallStatus::IN_PROGRESS);
        $this->assertEquals(\FreeClimb\Api\Model\CallStatus::IN_PROGRESS, $this->RemoveFromQueueNotificationWebhook->getcallStatus());
        $this->RemoveFromQueueNotificationWebhook->setcallStatus(\FreeClimb\Api\Model\CallStatus::CANCELED);
        $this->assertEquals(\FreeClimb\Api\Model\CallStatus::CANCELED, $this->RemoveFromQueueNotificationWebhook->getcallStatus());
        $this->RemoveFromQueueNotificationWebhook->setcallStatus(\FreeClimb\Api\Model\CallStatus::COMPLETED);
        $this->assertEquals(\FreeClimb\Api\Model\CallStatus::COMPLETED, $this->RemoveFromQueueNotificationWebhook->getcallStatus());
        $this->RemoveFromQueueNotificationWebhook->setcallStatus(\FreeClimb\Api\Model\CallStatus::FAILED);
        $this->assertEquals(\FreeClimb\Api\Model\CallStatus::FAILED, $this->RemoveFromQueueNotificationWebhook->getcallStatus());
        $this->RemoveFromQueueNotificationWebhook->setcallStatus(\FreeClimb\Api\Model\CallStatus::BUSY);
        $this->assertEquals(\FreeClimb\Api\Model\CallStatus::BUSY, $this->RemoveFromQueueNotificationWebhook->getcallStatus());
        $this->RemoveFromQueueNotificationWebhook->setcallStatus(\FreeClimb\Api\Model\CallStatus::NO_ANSWER);
        $this->assertEquals(\FreeClimb\Api\Model\CallStatus::NO_ANSWER, $this->RemoveFromQueueNotificationWebhook->getcallStatus());
    }

    public function testPropertyDirection()
    {
        $this->RemoveFromQueueNotificationWebhook->setdirection(\FreeClimb\Api\Model\CallDirection::INBOUND);
        $this->assertEquals(\FreeClimb\Api\Model\CallDirection::INBOUND, $this->RemoveFromQueueNotificationWebhook->getdirection());
        $this->RemoveFromQueueNotificationWebhook->setdirection(\FreeClimb\Api\Model\CallDirection::OUTBOUND_API);
        $this->assertEquals(\FreeClimb\Api\Model\CallDirection::OUTBOUND_API, $this->RemoveFromQueueNotificationWebhook->getdirection());
        $this->RemoveFromQueueNotificationWebhook->setdirection(\FreeClimb\Api\Model\CallDirection::OUTBOUND_DIAL);
        $this->assertEquals(\FreeClimb\Api\Model\CallDirection::OUTBOUND_DIAL, $this->RemoveFromQueueNotificationWebhook->getdirection());
    }

    public function testPropertyConferenceId()
    {

        $this->RemoveFromQueueNotificationWebhook->setConferenceId('TS');
        $this->assertEquals('TS', $this->RemoveFromQueueNotificationWebhook->getConferenceId());
        $this->assertIsString($this->RemoveFromQueueNotificationWebhook->getConferenceId());
    }

    public function testPropertyQueueId()
    {

        $this->RemoveFromQueueNotificationWebhook->setQueueId('TS');
        $this->assertEquals('TS', $this->RemoveFromQueueNotificationWebhook->getQueueId());
        $this->assertIsString($this->RemoveFromQueueNotificationWebhook->getQueueId());
    }

    public function testPropertyQueueResult()
    {
        $this->RemoveFromQueueNotificationWebhook->setqueueResult(\FreeClimb\Api\Model\QueueResultStatus::QUEUE_FULL);
        $this->assertEquals(\FreeClimb\Api\Model\QueueResultStatus::QUEUE_FULL, $this->RemoveFromQueueNotificationWebhook->getqueueResult());
        $this->RemoveFromQueueNotificationWebhook->setqueueResult(\FreeClimb\Api\Model\QueueResultStatus::DEQUEUED);
        $this->assertEquals(\FreeClimb\Api\Model\QueueResultStatus::DEQUEUED, $this->RemoveFromQueueNotificationWebhook->getqueueResult());
        $this->RemoveFromQueueNotificationWebhook->setqueueResult(\FreeClimb\Api\Model\QueueResultStatus::HANGUP);
        $this->assertEquals(\FreeClimb\Api\Model\QueueResultStatus::HANGUP, $this->RemoveFromQueueNotificationWebhook->getqueueResult());
        $this->RemoveFromQueueNotificationWebhook->setqueueResult(\FreeClimb\Api\Model\QueueResultStatus::SYSTEM_ERROR);
        $this->assertEquals(\FreeClimb\Api\Model\QueueResultStatus::SYSTEM_ERROR, $this->RemoveFromQueueNotificationWebhook->getqueueResult());
    }

    public function testPropertyQueueTime()
    {


        $this->RemoveFromQueueNotificationWebhook->setqueueTime(1);
        $this->assertEquals(1, $this->RemoveFromQueueNotificationWebhook->getqueueTime());
        $this->assertIsNumeric($this->RemoveFromQueueNotificationWebhook->getqueueTime());

    }
    /**
     * Test attribute "RemoveFromQueueNotificationWebhook::deserialize"
     */
    public function testDeserializeRemoveFromQueueNotificationWebhook()
    {
        $json = "{\"requestType\":\"removeFromQueueNotification\"}";
        $this->assertInstanceOf(\FreeClimb\Api\Model\RemoveFromQueueNotificationWebhook::class, \FreeClimb\Api\Model\RemoveFromQueueNotificationWebhook::deserialize($json));
    }
}
