<?php

/**
 * AvailableNumberListTest
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
 * AvailableNumberListTest Class Doc Comment
 *
 * @category    Class
 * @description AvailableNumberList
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
#[\AllowDynamicProperties]
class AvailableNumberListTest extends TestCase
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
        $this->AvailableNumberList = new \FreeClimb\Api\Model\AvailableNumberList();
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
     * Test attribute "total"
     */
    public function testPropertyTotal()
    {


        $this->AvailableNumberList->settotal(1);
        $this->assertEquals(1, $this->AvailableNumberList->gettotal());
        $this->assertIsNumeric($this->AvailableNumberList->gettotal());

    }
    /**
     * Test attribute "start"
     */
    public function testPropertyStart()
    {


        $this->AvailableNumberList->setstart(1);
        $this->assertEquals(1, $this->AvailableNumberList->getstart());
        $this->assertIsNumeric($this->AvailableNumberList->getstart());

    }
    /**
     * Test attribute "end"
     */
    public function testPropertyEnd()
    {


        $this->AvailableNumberList->setend(1);
        $this->assertEquals(1, $this->AvailableNumberList->getend());
        $this->assertIsNumeric($this->AvailableNumberList->getend());

    }
    /**
     * Test attribute "page"
     */
    public function testPropertyPage()
    {


        $this->AvailableNumberList->setpage(1);
        $this->assertEquals(1, $this->AvailableNumberList->getpage());
        $this->assertIsNumeric($this->AvailableNumberList->getpage());

    }
    /**
     * Test attribute "num_pages"
     */
    public function testPropertyNumPages()
    {


        $this->AvailableNumberList->setnumPages(1);
        $this->assertEquals(1, $this->AvailableNumberList->getnumPages());
        $this->assertIsNumeric($this->AvailableNumberList->getnumPages());

    }
    /**
     * Test attribute "page_size"
     */
    public function testPropertyPageSize()
    {


        $this->AvailableNumberList->setpageSize(1);
        $this->assertEquals(1, $this->AvailableNumberList->getpageSize());
        $this->assertIsNumeric($this->AvailableNumberList->getpageSize());

    }
    /**
     * Test attribute "next_page_uri"
     */
    public function testPropertyNextPageUri()
    {

        $this->AvailableNumberList->setNextPageUri('TS');
        $this->assertEquals('TS', $this->AvailableNumberList->getNextPageUri());
        $this->assertIsString($this->AvailableNumberList->getNextPageUri());
    }
    /**
     * Test attribute "available_phone_numbers"
     */
    public function testPropertyAvailablePhoneNumbers()
    {
        $this->AvailableNumberList->setavailablePhoneNumbers([]);
        $this->assertEquals([], $this->AvailableNumberList->getavailablePhoneNumbers());
        $this->assertIsArray($this->AvailableNumberList->getavailablePhoneNumbers());
    }
}
