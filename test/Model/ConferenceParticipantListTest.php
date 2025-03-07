<?php

/**
 * ConferenceParticipantListTest
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
 * ConferenceParticipantListTest Class Doc Comment
 *
 * @category    Class
 * @description ConferenceParticipantList
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
#[\AllowDynamicProperties]
class ConferenceParticipantListTest extends TestCase
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
        $this->ConferenceParticipantList = new \FreeClimb\Api\Model\ConferenceParticipantList();
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


    public function testPropertyTotal()
    {


        $this->ConferenceParticipantList->settotal(1);
        $this->assertEquals(1, $this->ConferenceParticipantList->gettotal());
        $this->assertIsNumeric($this->ConferenceParticipantList->gettotal());

    }

    public function testPropertyStart()
    {


        $this->ConferenceParticipantList->setstart(1);
        $this->assertEquals(1, $this->ConferenceParticipantList->getstart());
        $this->assertIsNumeric($this->ConferenceParticipantList->getstart());

    }

    public function testPropertyEnd()
    {


        $this->ConferenceParticipantList->setend(1);
        $this->assertEquals(1, $this->ConferenceParticipantList->getend());
        $this->assertIsNumeric($this->ConferenceParticipantList->getend());

    }

    public function testPropertyPage()
    {


        $this->ConferenceParticipantList->setpage(1);
        $this->assertEquals(1, $this->ConferenceParticipantList->getpage());
        $this->assertIsNumeric($this->ConferenceParticipantList->getpage());

    }

    public function testPropertyNumPages()
    {


        $this->ConferenceParticipantList->setnumPages(1);
        $this->assertEquals(1, $this->ConferenceParticipantList->getnumPages());
        $this->assertIsNumeric($this->ConferenceParticipantList->getnumPages());

    }

    public function testPropertyPageSize()
    {


        $this->ConferenceParticipantList->setpageSize(1);
        $this->assertEquals(1, $this->ConferenceParticipantList->getpageSize());
        $this->assertIsNumeric($this->ConferenceParticipantList->getpageSize());

    }

    public function testPropertyNextPageUri()
    {

        $this->ConferenceParticipantList->setNextPageUri('TS');
        $this->assertEquals('TS', $this->ConferenceParticipantList->getNextPageUri());
        $this->assertIsString($this->ConferenceParticipantList->getNextPageUri());
    }

    public function testPropertyParticipants()
    {
        $this->ConferenceParticipantList->setparticipants([]);
        $this->assertEquals([], $this->ConferenceParticipantList->getparticipants());
        $this->assertIsArray($this->ConferenceParticipantList->getparticipants());
    }
}
