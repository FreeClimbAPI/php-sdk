<?php

/**
 * SMSTollFreeCampaignsListResultTest
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
 * SMSTollFreeCampaignsListResultTest Class Doc Comment
 *
 * @category    Class
 * @description SMSTollFreeCampaignsListResult
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
#[\AllowDynamicProperties]
class SMSTollFreeCampaignsListResultTest extends TestCase
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
        $this->SMSTollFreeCampaignsListResult = new \FreeClimb\Api\Model\SMSTollFreeCampaignsListResult();
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


        $this->SMSTollFreeCampaignsListResult->settotal(1);
        $this->assertEquals(1, $this->SMSTollFreeCampaignsListResult->gettotal());
        $this->assertIsNumeric($this->SMSTollFreeCampaignsListResult->gettotal());

    }
    /**
     * Test attribute "start"
     */
    public function testPropertyStart()
    {


        $this->SMSTollFreeCampaignsListResult->setstart(1);
        $this->assertEquals(1, $this->SMSTollFreeCampaignsListResult->getstart());
        $this->assertIsNumeric($this->SMSTollFreeCampaignsListResult->getstart());

    }
    /**
     * Test attribute "end"
     */
    public function testPropertyEnd()
    {


        $this->SMSTollFreeCampaignsListResult->setend(1);
        $this->assertEquals(1, $this->SMSTollFreeCampaignsListResult->getend());
        $this->assertIsNumeric($this->SMSTollFreeCampaignsListResult->getend());

    }
    /**
     * Test attribute "page"
     */
    public function testPropertyPage()
    {


        $this->SMSTollFreeCampaignsListResult->setpage(1);
        $this->assertEquals(1, $this->SMSTollFreeCampaignsListResult->getpage());
        $this->assertIsNumeric($this->SMSTollFreeCampaignsListResult->getpage());

    }
    /**
     * Test attribute "num_pages"
     */
    public function testPropertyNumPages()
    {


        $this->SMSTollFreeCampaignsListResult->setnumPages(1);
        $this->assertEquals(1, $this->SMSTollFreeCampaignsListResult->getnumPages());
        $this->assertIsNumeric($this->SMSTollFreeCampaignsListResult->getnumPages());

    }
    /**
     * Test attribute "page_size"
     */
    public function testPropertyPageSize()
    {


        $this->SMSTollFreeCampaignsListResult->setpageSize(1);
        $this->assertEquals(1, $this->SMSTollFreeCampaignsListResult->getpageSize());
        $this->assertIsNumeric($this->SMSTollFreeCampaignsListResult->getpageSize());

    }
    /**
     * Test attribute "next_page_uri"
     */
    public function testPropertyNextPageUri()
    {

        $this->SMSTollFreeCampaignsListResult->setNextPageUri('TS');
        $this->assertEquals('TS', $this->SMSTollFreeCampaignsListResult->getNextPageUri());
        $this->assertIsString($this->SMSTollFreeCampaignsListResult->getNextPageUri());
    }
    /**
     * Test attribute "brands"
     */
    public function testPropertyBrands()
    {
        $this->SMSTollFreeCampaignsListResult->setbrands([]);
        $this->assertEquals([], $this->SMSTollFreeCampaignsListResult->getbrands());
        $this->assertIsArray($this->SMSTollFreeCampaignsListResult->getbrands());
    }
}
