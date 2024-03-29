<?php

/**
 * RequestTypeTest
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

use FreeClimb\Api\Model\RequestType;
use PHPUnit\Framework\TestCase;

/**
 * RequestTypeTest Class Doc Comment
 *
 * @category    Class
 * @description RequestType
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class RequestTypeTest extends TestCase
{
    protected $RequestType;

    /**
     * Test "RequestType"
     */
    public function setUp() : void
    {
        $this->RequestType = new RequestType();
    }

public function test_INBOUND_CALL_should_deserialize_to_string() {
    $test = RequestType::INBOUND_CALL;
    $this->assertEquals($test, 'inboundCall');
}


public function test_RECORD_should_deserialize_to_string() {
    $test = RequestType::RECORD;
    $this->assertEquals($test, 'record');
}


public function test_GET_DIGITS_should_deserialize_to_string() {
    $test = RequestType::GET_DIGITS;
    $this->assertEquals($test, 'getDigits');
}


public function test_GET_SPEECH_should_deserialize_to_string() {
    $test = RequestType::GET_SPEECH;
    $this->assertEquals($test, 'getSpeech');
}


public function test_REDIRECT_should_deserialize_to_string() {
    $test = RequestType::REDIRECT;
    $this->assertEquals($test, 'redirect');
}


public function test_PAUSE_should_deserialize_to_string() {
    $test = RequestType::PAUSE;
    $this->assertEquals($test, 'pause');
}


public function test_OUT_DIAL_START_should_deserialize_to_string() {
    $test = RequestType::OUT_DIAL_START;
    $this->assertEquals($test, 'outDialStart');
}


public function test_OUT_DIAL_CONNECT_should_deserialize_to_string() {
    $test = RequestType::OUT_DIAL_CONNECT;
    $this->assertEquals($test, 'outDialConnect');
}


public function test_OUT_DIAL_API_CONNECT_should_deserialize_to_string() {
    $test = RequestType::OUT_DIAL_API_CONNECT;
    $this->assertEquals($test, 'outDialApiConnect');
}


public function test_MACHINE_DETECTED_should_deserialize_to_string() {
    $test = RequestType::MACHINE_DETECTED;
    $this->assertEquals($test, 'machineDetected');
}


public function test_DEQUEUE_should_deserialize_to_string() {
    $test = RequestType::DEQUEUE;
    $this->assertEquals($test, 'dequeue');
}


public function test_QUEUE_WAIT_should_deserialize_to_string() {
    $test = RequestType::QUEUE_WAIT;
    $this->assertEquals($test, 'queueWait');
}


public function test_ADD_TO_QUEUE_NOTIFICATION_should_deserialize_to_string() {
    $test = RequestType::ADD_TO_QUEUE_NOTIFICATION;
    $this->assertEquals($test, 'addToQueueNotification');
}


public function test_REMOVE_FROM_QUEUE_NOTIFICATION_should_deserialize_to_string() {
    $test = RequestType::REMOVE_FROM_QUEUE_NOTIFICATION;
    $this->assertEquals($test, 'removeFromQueueNotification');
}


public function test_CALL_STATUS_should_deserialize_to_string() {
    $test = RequestType::CALL_STATUS;
    $this->assertEquals($test, 'callStatus');
}


public function test_CREATE_CONFERENCE_should_deserialize_to_string() {
    $test = RequestType::CREATE_CONFERENCE;
    $this->assertEquals($test, 'createConference');
}


public function test_CONFERENCE_STATUS_should_deserialize_to_string() {
    $test = RequestType::CONFERENCE_STATUS;
    $this->assertEquals($test, 'conferenceStatus');
}


public function test_LEAVE_CONFERENCE_should_deserialize_to_string() {
    $test = RequestType::LEAVE_CONFERENCE;
    $this->assertEquals($test, 'leaveConference');
}


public function test_ADD_TO_CONFERENCE_NOTIFICATION_should_deserialize_to_string() {
    $test = RequestType::ADD_TO_CONFERENCE_NOTIFICATION;
    $this->assertEquals($test, 'addToConferenceNotification');
}


public function test_CONFERENCE_RECORDING_STATUS_should_deserialize_to_string() {
    $test = RequestType::CONFERENCE_RECORDING_STATUS;
    $this->assertEquals($test, 'conferenceRecordingStatus');
}


public function test_CONFERENCE_CALL_CONTROL_should_deserialize_to_string() {
    $test = RequestType::CONFERENCE_CALL_CONTROL;
    $this->assertEquals($test, 'conferenceCallControl');
}


public function test_MESSAGE_DELIVERY_should_deserialize_to_string() {
    $test = RequestType::MESSAGE_DELIVERY;
    $this->assertEquals($test, 'messageDelivery');
}


public function test_MESSAGE_STATUS_should_deserialize_to_string() {
    $test = RequestType::MESSAGE_STATUS;
    $this->assertEquals($test, 'messageStatus');
}


}
