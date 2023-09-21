<?php

/**
 * QueueListTest
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

use FreeClimb\Api\Model\QueueList;
use PHPUnit\Framework\TestCase;

/**
 * QueueListTest Class Doc Comment
 *
 * @category    Class
 * @description QueueList
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class QueueListTest extends TestCase
{
    protected $QueueList;

    /**
     * Test "QueueList"
     */
    public function setUp() : void
    {
        $this->QueueList = new QueueList();
    }
    /**
     * Test attribute "total"
     */
    public function testPropertyTotal()
    {
        $this->QueueList->setTotal(12345);
        $this->assertEquals(12345, $this->QueueList->getTotal());
        $this->assertIsInt($this->QueueList->getTotal());
    }
    /**
     * Test attribute "start"
     */
    public function testPropertyStart()
    {
        $this->QueueList->setStart(12345);
        $this->assertEquals(12345, $this->QueueList->getStart());
        $this->assertIsInt($this->QueueList->getStart());
    }
    /**
     * Test attribute "end"
     */
    public function testPropertyEnd()
    {
        $this->QueueList->setEnd(12345);
        $this->assertEquals(12345, $this->QueueList->getEnd());
        $this->assertIsInt($this->QueueList->getEnd());
    }
    /**
     * Test attribute "page"
     */
    public function testPropertyPage()
    {
        $this->QueueList->setPage(12345);
        $this->assertEquals(12345, $this->QueueList->getPage());
        $this->assertIsInt($this->QueueList->getPage());
    }
    /**
     * Test attribute "num_pages"
     */
    public function testPropertyNumPages()
    {
        $this->QueueList->setNumPages(12345);
        $this->assertEquals(12345, $this->QueueList->getNumPages());
        $this->assertIsInt($this->QueueList->getNumPages());
    }
    /**
     * Test attribute "page_size"
     */
    public function testPropertyPageSize()
    {
        $this->QueueList->setPageSize(12345);
        $this->assertEquals(12345, $this->QueueList->getPageSize());
        $this->assertIsInt($this->QueueList->getPageSize());
    }
    /**
     * Test attribute "next_page_uri"
     */
    public function testPropertyNextPageUri()
    {
        $this->QueueList->setNextPageUri('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->QueueList->getNextPageUri());
        $this->assertIsString($this->QueueList->getNextPageUri());
        

    }
    /**
     * Test attribute "queues"
     */
    public function testPropertyQueues()
    {
        $this->QueueList->setQueues([]);
        $this->assertEquals([], $this->QueueList->getQueues());
        $this->assertIsArray($this->QueueList->getQueues());
    }

}
