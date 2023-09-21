<?php

/**
 * CallStatusTest
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

use FreeClimb\Api\Model\CallStatus;
use PHPUnit\Framework\TestCase;

/**
 * CallStatusTest Class Doc Comment
 *
 * @category    Class
 * @description * &#x60;queued&#x60; &amp;ndash; Call is ready and waiting in line before going out. * &#x60;ringing&#x60; &amp;ndash; Call is currently ringing. * &#x60;inProgress&#x60; &amp;ndash; Call was answered and is currently in progress. * &#x60;canceled&#x60; &amp;ndash; Call was hung up while it was queued or ringing. * &#x60;completed&#x60; &amp;ndash; Call was answered and has ended normally. * &#x60;busy&#x60; &amp;ndash; Caller received a busy signal. * &#x60;failed&#x60; &amp;ndash; Call could not be completed as dialed, most likely because the phone number was non-existent. * &#x60;noAnswer&#x60; &amp;ndash; Call ended without being answered.
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class CallStatusTest extends TestCase
{
    protected $CallStatus;

    /**
     * Test "CallStatus"
     */
    public function setUp() : void
    {
        $this->CallStatus = new CallStatus();
    }

public function test_QUEUED_should_deserialize_to_string() {
    $test = CallStatus::QUEUED;
    $this->assertEquals($test, 'queued');
}


public function test_RINGING_should_deserialize_to_string() {
    $test = CallStatus::RINGING;
    $this->assertEquals($test, 'ringing');
}


public function test_IN_PROGRESS_should_deserialize_to_string() {
    $test = CallStatus::IN_PROGRESS;
    $this->assertEquals($test, 'inProgress');
}


public function test_CANCELED_should_deserialize_to_string() {
    $test = CallStatus::CANCELED;
    $this->assertEquals($test, 'canceled');
}


public function test_COMPLETED_should_deserialize_to_string() {
    $test = CallStatus::COMPLETED;
    $this->assertEquals($test, 'completed');
}


public function test_FAILED_should_deserialize_to_string() {
    $test = CallStatus::FAILED;
    $this->assertEquals($test, 'failed');
}


public function test_BUSY_should_deserialize_to_string() {
    $test = CallStatus::BUSY;
    $this->assertEquals($test, 'busy');
}


public function test_NO_ANSWER_should_deserialize_to_string() {
    $test = CallStatus::NO_ANSWER;
    $this->assertEquals($test, 'noAnswer');
}


}
