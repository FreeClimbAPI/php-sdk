<?php

/**
 * LogListTest
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
 * LogListTest Class Doc Comment
 *
 * @category    Class
 * @description LogList
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
#[\AllowDynamicProperties]
class LogListTest extends TestCase
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
        $this->LogList = new \FreeClimb\Api\Model\LogList();
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


        $this->LogList->settotal(1);
        $this->assertEquals(1, $this->LogList->gettotal());
        $this->assertIsNumeric($this->LogList->gettotal());

    }
    /**
     * Test attribute "start"
     */
    public function testPropertyStart()
    {


        $this->LogList->setstart(1);
        $this->assertEquals(1, $this->LogList->getstart());
        $this->assertIsNumeric($this->LogList->getstart());

    }
    /**
     * Test attribute "end"
     */
    public function testPropertyEnd()
    {


        $this->LogList->setend(1);
        $this->assertEquals(1, $this->LogList->getend());
        $this->assertIsNumeric($this->LogList->getend());

    }
    /**
     * Test attribute "page"
     */
    public function testPropertyPage()
    {


        $this->LogList->setpage(1);
        $this->assertEquals(1, $this->LogList->getpage());
        $this->assertIsNumeric($this->LogList->getpage());

    }
    /**
     * Test attribute "num_pages"
     */
    public function testPropertyNumPages()
    {


        $this->LogList->setnumPages(1);
        $this->assertEquals(1, $this->LogList->getnumPages());
        $this->assertIsNumeric($this->LogList->getnumPages());

    }
    /**
     * Test attribute "page_size"
     */
    public function testPropertyPageSize()
    {


        $this->LogList->setpageSize(1);
        $this->assertEquals(1, $this->LogList->getpageSize());
        $this->assertIsNumeric($this->LogList->getpageSize());

    }
    /**
     * Test attribute "next_page_uri"
     */
    public function testPropertyNextPageUri()
    {

        $this->LogList->setNextPageUri('TS');
        $this->assertEquals('TS', $this->LogList->getNextPageUri());
        $this->assertIsString($this->LogList->getNextPageUri());
    }
    /**
     * Test attribute "logs"
     */
    public function testPropertyLogs()
    {
        $this->LogList->setlogs([]);
        $this->assertEquals([], $this->LogList->getlogs());
        $this->assertIsArray($this->LogList->getlogs());
    }
}
