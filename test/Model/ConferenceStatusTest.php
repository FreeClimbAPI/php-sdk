<?php

/**
 * ConferenceStatusTest
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

use FreeClimb\Api\Model\ConferenceStatus;
use PHPUnit\Framework\TestCase;

/**
 * ConferenceStatusTest Class Doc Comment
 *
 * @category    Class
 * @description The status of the Conference. One of: creating, empty, populated, inProgress, or terminated.
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class ConferenceStatusTest extends TestCase
{
    protected $ConferenceStatus;

    /**
     * Test "ConferenceStatus"
     */
    public function setUp() : void
    {
        $this->ConferenceStatus = new ConferenceStatus();
    }

public function test_EMPTY_should_deserialize_to_string() {
    $test = ConferenceStatus::EMPTY;
    $this->assertEquals($test, 'empty');
}


public function test_POPULATED_should_deserialize_to_string() {
    $test = ConferenceStatus::POPULATED;
    $this->assertEquals($test, 'populated');
}


public function test_IN_PROGRESS_should_deserialize_to_string() {
    $test = ConferenceStatus::IN_PROGRESS;
    $this->assertEquals($test, 'inProgress');
}


public function test_TERMINATED_should_deserialize_to_string() {
    $test = ConferenceStatus::TERMINATED;
    $this->assertEquals($test, 'terminated');
}


}
