<?php

/**
 * IncomingNumberListTest
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

use FreeClimb\Api\Model\IncomingNumberList;
use PHPUnit\Framework\TestCase;

/**
 * IncomingNumberListTest Class Doc Comment
 *
 * @category    Class
 * @description IncomingNumberList
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class IncomingNumberListTest extends TestCase
{
    protected $IncomingNumberList;

    /**
     * Test "IncomingNumberList"
     */
    public function setUp() : void
    {
        $this->IncomingNumberList = new IncomingNumberList();
    }
    /**
     * Test attribute "total"
     */
    public function testPropertyTotal()
    {
        $this->IncomingNumberList->setTotal(12345);
        $this->assertEquals(12345, $this->IncomingNumberList->getTotal());
        $this->assertIsInt($this->IncomingNumberList->getTotal());
    }
    /**
     * Test attribute "start"
     */
    public function testPropertyStart()
    {
        $this->IncomingNumberList->setStart(12345);
        $this->assertEquals(12345, $this->IncomingNumberList->getStart());
        $this->assertIsInt($this->IncomingNumberList->getStart());
    }
    /**
     * Test attribute "end"
     */
    public function testPropertyEnd()
    {
        $this->IncomingNumberList->setEnd(12345);
        $this->assertEquals(12345, $this->IncomingNumberList->getEnd());
        $this->assertIsInt($this->IncomingNumberList->getEnd());
    }
    /**
     * Test attribute "page"
     */
    public function testPropertyPage()
    {
        $this->IncomingNumberList->setPage(12345);
        $this->assertEquals(12345, $this->IncomingNumberList->getPage());
        $this->assertIsInt($this->IncomingNumberList->getPage());
    }
    /**
     * Test attribute "num_pages"
     */
    public function testPropertyNumPages()
    {
        $this->IncomingNumberList->setNumPages(12345);
        $this->assertEquals(12345, $this->IncomingNumberList->getNumPages());
        $this->assertIsInt($this->IncomingNumberList->getNumPages());
    }
    /**
     * Test attribute "page_size"
     */
    public function testPropertyPageSize()
    {
        $this->IncomingNumberList->setPageSize(12345);
        $this->assertEquals(12345, $this->IncomingNumberList->getPageSize());
        $this->assertIsInt($this->IncomingNumberList->getPageSize());
    }
    /**
     * Test attribute "next_page_uri"
     */
    public function testPropertyNextPageUri()
    {
        $this->IncomingNumberList->setNextPageUri('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->IncomingNumberList->getNextPageUri());
        $this->assertIsString($this->IncomingNumberList->getNextPageUri());
        

    }
    /**
     * Test attribute "incoming_phone_numbers"
     */
    public function testPropertyIncomingPhoneNumbers()
    {
        $this->IncomingNumberList->setIncomingPhoneNumbers([]);
        $this->assertEquals([], $this->IncomingNumberList->getIncomingPhoneNumbers());
        $this->assertIsArray($this->IncomingNumberList->getIncomingPhoneNumbers());
    }

}
