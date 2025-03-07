<?php

/**
 * OutDialApiConnectWebhookTest
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
 * OutDialApiConnectWebhookTest Class Doc Comment
 *
 * @category    Class
 * @description An outbound call initiated by the REST API has connected and the callConnectUrl specified in the API request is being invoked. A PerCL response is expected if the call was successfully connected (with status of inProgress).
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
#[\AllowDynamicProperties]
class OutDialApiConnectWebhookTest extends TestCase
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
        $this->OutDialApiConnectWebhook = new \FreeClimb\Api\Model\OutDialApiConnectWebhook();
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

        $this->OutDialApiConnectWebhook->setRequestType('TS');
        $this->assertEquals('TS', $this->OutDialApiConnectWebhook->getRequestType());
        $this->assertIsString($this->OutDialApiConnectWebhook->getRequestType());
    }

    public function testPropertyAccountId()
    {

        $this->OutDialApiConnectWebhook->setAccountId('TS');
        $this->assertEquals('TS', $this->OutDialApiConnectWebhook->getAccountId());
        $this->assertIsString($this->OutDialApiConnectWebhook->getAccountId());
    }

    public function testPropertyCallId()
    {

        $this->OutDialApiConnectWebhook->setCallId('TS');
        $this->assertEquals('TS', $this->OutDialApiConnectWebhook->getCallId());
        $this->assertIsString($this->OutDialApiConnectWebhook->getCallId());
    }

    public function testPropertyFrom()
    {

        $this->OutDialApiConnectWebhook->setFrom('TS');
        $this->assertEquals('TS', $this->OutDialApiConnectWebhook->getFrom());
        $this->assertIsString($this->OutDialApiConnectWebhook->getFrom());
    }

    public function testPropertyTo()
    {

        $this->OutDialApiConnectWebhook->setTo('TS');
        $this->assertEquals('TS', $this->OutDialApiConnectWebhook->getTo());
        $this->assertIsString($this->OutDialApiConnectWebhook->getTo());
    }

    public function testPropertyCallStatus()
    {
        $this->OutDialApiConnectWebhook->setcallStatus(\FreeClimb\Api\Model\CallStatus::QUEUED);
        $this->assertEquals(\FreeClimb\Api\Model\CallStatus::QUEUED, $this->OutDialApiConnectWebhook->getcallStatus());
        $this->OutDialApiConnectWebhook->setcallStatus(\FreeClimb\Api\Model\CallStatus::RINGING);
        $this->assertEquals(\FreeClimb\Api\Model\CallStatus::RINGING, $this->OutDialApiConnectWebhook->getcallStatus());
        $this->OutDialApiConnectWebhook->setcallStatus(\FreeClimb\Api\Model\CallStatus::IN_PROGRESS);
        $this->assertEquals(\FreeClimb\Api\Model\CallStatus::IN_PROGRESS, $this->OutDialApiConnectWebhook->getcallStatus());
        $this->OutDialApiConnectWebhook->setcallStatus(\FreeClimb\Api\Model\CallStatus::CANCELED);
        $this->assertEquals(\FreeClimb\Api\Model\CallStatus::CANCELED, $this->OutDialApiConnectWebhook->getcallStatus());
        $this->OutDialApiConnectWebhook->setcallStatus(\FreeClimb\Api\Model\CallStatus::COMPLETED);
        $this->assertEquals(\FreeClimb\Api\Model\CallStatus::COMPLETED, $this->OutDialApiConnectWebhook->getcallStatus());
        $this->OutDialApiConnectWebhook->setcallStatus(\FreeClimb\Api\Model\CallStatus::FAILED);
        $this->assertEquals(\FreeClimb\Api\Model\CallStatus::FAILED, $this->OutDialApiConnectWebhook->getcallStatus());
        $this->OutDialApiConnectWebhook->setcallStatus(\FreeClimb\Api\Model\CallStatus::BUSY);
        $this->assertEquals(\FreeClimb\Api\Model\CallStatus::BUSY, $this->OutDialApiConnectWebhook->getcallStatus());
        $this->OutDialApiConnectWebhook->setcallStatus(\FreeClimb\Api\Model\CallStatus::NO_ANSWER);
        $this->assertEquals(\FreeClimb\Api\Model\CallStatus::NO_ANSWER, $this->OutDialApiConnectWebhook->getcallStatus());
    }

    public function testPropertyDirection()
    {
        $this->OutDialApiConnectWebhook->setdirection(\FreeClimb\Api\Model\CallDirection::INBOUND);
        $this->assertEquals(\FreeClimb\Api\Model\CallDirection::INBOUND, $this->OutDialApiConnectWebhook->getdirection());
        $this->OutDialApiConnectWebhook->setdirection(\FreeClimb\Api\Model\CallDirection::OUTBOUND_API);
        $this->assertEquals(\FreeClimb\Api\Model\CallDirection::OUTBOUND_API, $this->OutDialApiConnectWebhook->getdirection());
        $this->OutDialApiConnectWebhook->setdirection(\FreeClimb\Api\Model\CallDirection::OUTBOUND_DIAL);
        $this->assertEquals(\FreeClimb\Api\Model\CallDirection::OUTBOUND_DIAL, $this->OutDialApiConnectWebhook->getdirection());
    }

    public function testPropertyConferenceId()
    {

        $this->OutDialApiConnectWebhook->setConferenceId('TS');
        $this->assertEquals('TS', $this->OutDialApiConnectWebhook->getConferenceId());
        $this->assertIsString($this->OutDialApiConnectWebhook->getConferenceId());
    }

    public function testPropertyQueueId()
    {

        $this->OutDialApiConnectWebhook->setQueueId('TS');
        $this->assertEquals('TS', $this->OutDialApiConnectWebhook->getQueueId());
        $this->assertIsString($this->OutDialApiConnectWebhook->getQueueId());
    }

    public function testPropertyParentCallId()
    {

        $this->OutDialApiConnectWebhook->setParentCallId('TS');
        $this->assertEquals('TS', $this->OutDialApiConnectWebhook->getParentCallId());
        $this->assertIsString($this->OutDialApiConnectWebhook->getParentCallId());
    }
    /**
     * Test attribute "OutDialApiConnectWebhook::deserialize"
     */
    public function testDeserializeOutDialApiConnectWebhook()
    {
        $json = "{\"requestType\":\"outDialApiConnect\"}";
        $this->assertInstanceOf(\FreeClimb\Api\Model\OutDialApiConnectWebhook::class, \FreeClimb\Api\Model\OutDialApiConnectWebhook::deserialize($json));
    }
}
