<?php

/**
 * QueueMemberListTest
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

use FreeClimb\Api\Model\QueueMemberList;
use PHPUnit\Framework\TestCase;

/**
 * QueueMemberListTest Class Doc Comment
 *
 * @category    Class
 * @description QueueMemberList
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class QueueMemberListTest extends TestCase
{
    protected $QueueMemberList;

    /**
     * Test "QueueMemberList"
     */
    public function setUp() : void
    {
        $this->QueueMemberList = new QueueMemberList();
    }
    /**
     * Test attribute "total"
     */
    public function testPropertyTotal()
    {
        $this->QueueMemberList->setTotal(12345);
        $this->assertEquals(12345, $this->QueueMemberList->getTotal());
        $this->assertIsInt($this->QueueMemberList->getTotal());
    }
    /**
     * Test attribute "start"
     */
    public function testPropertyStart()
    {
        $this->QueueMemberList->setStart(12345);
        $this->assertEquals(12345, $this->QueueMemberList->getStart());
        $this->assertIsInt($this->QueueMemberList->getStart());
    }
    /**
     * Test attribute "end"
     */
    public function testPropertyEnd()
    {
        $this->QueueMemberList->setEnd(12345);
        $this->assertEquals(12345, $this->QueueMemberList->getEnd());
        $this->assertIsInt($this->QueueMemberList->getEnd());
    }
    /**
     * Test attribute "page"
     */
    public function testPropertyPage()
    {
        $this->QueueMemberList->setPage(12345);
        $this->assertEquals(12345, $this->QueueMemberList->getPage());
        $this->assertIsInt($this->QueueMemberList->getPage());
    }
    /**
     * Test attribute "num_pages"
     */
    public function testPropertyNumPages()
    {
        $this->QueueMemberList->setNumPages(12345);
        $this->assertEquals(12345, $this->QueueMemberList->getNumPages());
        $this->assertIsInt($this->QueueMemberList->getNumPages());
    }
    /**
     * Test attribute "page_size"
     */
    public function testPropertyPageSize()
    {
        $this->QueueMemberList->setPageSize(12345);
        $this->assertEquals(12345, $this->QueueMemberList->getPageSize());
        $this->assertIsInt($this->QueueMemberList->getPageSize());
    }
    /**
     * Test attribute "next_page_uri"
     */
    public function testPropertyNextPageUri()
    {
        $this->QueueMemberList->setNextPageUri('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->QueueMemberList->getNextPageUri());
        $this->assertIsString($this->QueueMemberList->getNextPageUri());
        

    }
    /**
     * Test attribute "queue_members"
     */
    public function testPropertyQueueMembers()
    {
        $this->QueueMemberList->setQueueMembers([]);
        $this->assertEquals([], $this->QueueMemberList->getQueueMembers());
        $this->assertIsArray($this->QueueMemberList->getQueueMembers());
    }

    /**
* Test attribute "QueueMemberList"
*/
public function toStringTypeTest() {
    $test1 = new QueueMemberList();    
      $test1->setTotal(1);
      $test1->setStart(1);
      $test1->setEnd(1);
      $test1->setPage(1);
      $test1->setNumPages(1);
      $test1->setPageSize(1);
      $test1->setNextPageUri("TS");
      $testList = [];
      $test1->setQueueMembers($testList);

    $toString1 = $test1->__toString();
    assert(is_string($toString1));
}

/**
 * Test attribute "QueueMemberList"
 */
public function toHeaderValueTest()
{
    $test1 = new QueueMemberList();
      $test1->setTotal(1);
      $test1->setStart(1);
      $test1->setEnd(1);
      $test1->setPage(1);
      $test1->setNumPages(1);
      $test1->setPageSize(1);
      $test1->setNextPageUri("TS");
      $testList = [];
      $test1->setQueueMembers($testList);

    $toHeaderValue1 = $test1->toHeaderValue();
    assert(is_string($toHeaderValue1));
}


}
