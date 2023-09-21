<?php

/**
 * ConferenceListTest
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

use FreeClimb\Api\Model\ConferenceList;
use PHPUnit\Framework\TestCase;

/**
 * ConferenceListTest Class Doc Comment
 *
 * @category    Class
 * @description ConferenceList
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class ConferenceListTest extends TestCase
{
    protected $ConferenceList;

    /**
     * Test "ConferenceList"
     */
    public function setUp() : void
    {
        $this->ConferenceList = new ConferenceList();
    }
    /**
     * Test attribute "total"
     */
    public function testPropertyTotal()
    {
        $this->ConferenceList->setTotal(12345);
        $this->assertEquals(12345, $this->ConferenceList->getTotal());
        $this->assertIsInt($this->ConferenceList->getTotal());
    }
    /**
     * Test attribute "start"
     */
    public function testPropertyStart()
    {
        $this->ConferenceList->setStart(12345);
        $this->assertEquals(12345, $this->ConferenceList->getStart());
        $this->assertIsInt($this->ConferenceList->getStart());
    }
    /**
     * Test attribute "end"
     */
    public function testPropertyEnd()
    {
        $this->ConferenceList->setEnd(12345);
        $this->assertEquals(12345, $this->ConferenceList->getEnd());
        $this->assertIsInt($this->ConferenceList->getEnd());
    }
    /**
     * Test attribute "page"
     */
    public function testPropertyPage()
    {
        $this->ConferenceList->setPage(12345);
        $this->assertEquals(12345, $this->ConferenceList->getPage());
        $this->assertIsInt($this->ConferenceList->getPage());
    }
    /**
     * Test attribute "num_pages"
     */
    public function testPropertyNumPages()
    {
        $this->ConferenceList->setNumPages(12345);
        $this->assertEquals(12345, $this->ConferenceList->getNumPages());
        $this->assertIsInt($this->ConferenceList->getNumPages());
    }
    /**
     * Test attribute "page_size"
     */
    public function testPropertyPageSize()
    {
        $this->ConferenceList->setPageSize(12345);
        $this->assertEquals(12345, $this->ConferenceList->getPageSize());
        $this->assertIsInt($this->ConferenceList->getPageSize());
    }
    /**
     * Test attribute "next_page_uri"
     */
    public function testPropertyNextPageUri()
    {
        $this->ConferenceList->setNextPageUri('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->ConferenceList->getNextPageUri());
        $this->assertIsString($this->ConferenceList->getNextPageUri());
        

    }
    /**
     * Test attribute "conferences"
     */
    public function testPropertyConferences()
    {
        $this->ConferenceList->setConferences([]);
        $this->assertEquals([], $this->ConferenceList->getConferences());
        $this->assertIsArray($this->ConferenceList->getConferences());
    }

}
