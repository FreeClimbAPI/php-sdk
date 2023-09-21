<?php

/**
 * TerminateConferenceTest
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

use FreeClimb\Api\Model\TerminateConference;
use PHPUnit\Framework\TestCase;

/**
 * TerminateConferenceTest Class Doc Comment
 *
 * @category    Class
 * @description The &#x60;TerminateConference&#x60; command terminates an existing Conference. Any active participants are hung up on by FreeClimb. If this is not the desired behavior, use the &#x60;RemoveFromConference&#x60; command to unbridge Calls that should not be hung up. Note: The Call requesting TerminateConference must be on the same Conference for this command to execute.
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class TerminateConferenceTest extends TestCase
{
    protected $TerminateConference;

    /**
     * Test "TerminateConference"
     */
    public function setUp() : void
    {
        $this->TerminateConference = new TerminateConference();
    }
    /**
     * Test attribute "conference_id"
     */
    public function testPropertyConferenceId()
    {
        $this->TerminateConference->setConferenceId('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->TerminateConference->getConferenceId());
        $this->assertIsString($this->TerminateConference->getConferenceId());
        

    }

}
