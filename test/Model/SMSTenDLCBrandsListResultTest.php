<?php

/**
 * SMSTenDLCBrandsListResultTest
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
 * SMSTenDLCBrandsListResultTest Class Doc Comment
 *
 * @category    Class
 * @description SMSTenDLCBrandsListResult
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
#[\AllowDynamicProperties]
class SMSTenDLCBrandsListResultTest extends TestCase
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
        $this->SMSTenDLCBrandsListResult = new \FreeClimb\Api\Model\SMSTenDLCBrandsListResult();
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


        $this->SMSTenDLCBrandsListResult->settotal(1);
        $this->assertEquals(1, $this->SMSTenDLCBrandsListResult->gettotal());
        $this->assertIsNumeric($this->SMSTenDLCBrandsListResult->gettotal());

    }
    /**
     * Test attribute "start"
     */
    public function testPropertyStart()
    {


        $this->SMSTenDLCBrandsListResult->setstart(1);
        $this->assertEquals(1, $this->SMSTenDLCBrandsListResult->getstart());
        $this->assertIsNumeric($this->SMSTenDLCBrandsListResult->getstart());

    }
    /**
     * Test attribute "end"
     */
    public function testPropertyEnd()
    {


        $this->SMSTenDLCBrandsListResult->setend(1);
        $this->assertEquals(1, $this->SMSTenDLCBrandsListResult->getend());
        $this->assertIsNumeric($this->SMSTenDLCBrandsListResult->getend());

    }
    /**
     * Test attribute "page"
     */
    public function testPropertyPage()
    {


        $this->SMSTenDLCBrandsListResult->setpage(1);
        $this->assertEquals(1, $this->SMSTenDLCBrandsListResult->getpage());
        $this->assertIsNumeric($this->SMSTenDLCBrandsListResult->getpage());

    }
    /**
     * Test attribute "num_pages"
     */
    public function testPropertyNumPages()
    {


        $this->SMSTenDLCBrandsListResult->setnumPages(1);
        $this->assertEquals(1, $this->SMSTenDLCBrandsListResult->getnumPages());
        $this->assertIsNumeric($this->SMSTenDLCBrandsListResult->getnumPages());

    }
    /**
     * Test attribute "page_size"
     */
    public function testPropertyPageSize()
    {


        $this->SMSTenDLCBrandsListResult->setpageSize(1);
        $this->assertEquals(1, $this->SMSTenDLCBrandsListResult->getpageSize());
        $this->assertIsNumeric($this->SMSTenDLCBrandsListResult->getpageSize());

    }
    /**
     * Test attribute "next_page_uri"
     */
    public function testPropertyNextPageUri()
    {
        $this->SMSTenDLCBrandsListResult->setNextPageUri('TS');
        $this->assertEquals('TS', $this->SMSTenDLCBrandsListResult->getNextPageUri());
        $this->assertIsString($this->SMSTenDLCBrandsListResult->getNextPageUri());
    }
    /**
     * Test attribute "brands"
     */
    public function testPropertyBrands()
    {
        $this->SMSTenDLCBrandsListResult->setbrands([]);
        $this->assertEquals([], $this->SMSTenDLCBrandsListResult->getbrands());
        $this->assertIsArray($this->SMSTenDLCBrandsListResult->getbrands());
    }
}
