<?php
/**
 * SMSTenDLCBrandsListResultTest
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
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace FreeClimb\Api\Test\Model;

use FreeClimb\Api\Model\SMSTenDLCBrandsListResult;
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
class SMSTenDLCBrandsListResultTest extends TestCase
{
    protected $SMSTenDLCBrandsListResult;

    /**
     * Test "SMSTenDLCBrandsListResult"
     */
    public function setUp() : void
    {
        $this->SMSTenDLCBrandsListResult = new SMSTenDLCBrandsListResult();
    }
    /**
     * Test attribute "total"
     */
    public function testPropertyTotal()
    {
        $this->SMSTenDLCBrandsListResult->setTotal(12345);
        $this->assertEquals($this->SMSTenDLCBrandsListResult->getTotal(), 12345);
        $this->assertIsInt($this->SMSTenDLCBrandsListResult->getTotal());
    }
    /**
     * Test attribute "start"
     */
    public function testPropertyStart()
    {
        $this->SMSTenDLCBrandsListResult->setStart(12345);
        $this->assertEquals($this->SMSTenDLCBrandsListResult->getStart(), 12345);
        $this->assertIsInt($this->SMSTenDLCBrandsListResult->getStart());
    }
    /**
     * Test attribute "end"
     */
    public function testPropertyEnd()
    {
        $this->SMSTenDLCBrandsListResult->setEnd(12345);
        $this->assertEquals($this->SMSTenDLCBrandsListResult->getEnd(), 12345);
        $this->assertIsInt($this->SMSTenDLCBrandsListResult->getEnd());
    }
    /**
     * Test attribute "page"
     */
    public function testPropertyPage()
    {
        $this->SMSTenDLCBrandsListResult->setPage(12345);
        $this->assertEquals($this->SMSTenDLCBrandsListResult->getPage(), 12345);
        $this->assertIsInt($this->SMSTenDLCBrandsListResult->getPage());
    }
    /**
     * Test attribute "num_pages"
     */
    public function testPropertyNumPages()
    {
        $this->SMSTenDLCBrandsListResult->setNumPages(12345);
        $this->assertEquals($this->SMSTenDLCBrandsListResult->getNumPages(), 12345);
        $this->assertIsInt($this->SMSTenDLCBrandsListResult->getNumPages());
    }
    /**
     * Test attribute "page_size"
     */
    public function testPropertyPageSize()
    {
        $this->SMSTenDLCBrandsListResult->setPageSize(12345);
        $this->assertEquals($this->SMSTenDLCBrandsListResult->getPageSize(), 12345);
        $this->assertIsInt($this->SMSTenDLCBrandsListResult->getPageSize());
    }
    /**
     * Test attribute "next_page_uri"
     */
    public function testPropertyNextPageUri()
    {
        $this->SMSTenDLCBrandsListResult->setNextPageUri('TEST_STRING');
        $this->assertStringContainsString($this->SMSTenDLCBrandsListResult->getNextPageUri(), 'TEST_STRING');
        $this->assertIsString($this->SMSTenDLCBrandsListResult->getNextPageUri());
        

    }
    /**
     * Test attribute "queue_members"
     */
    public function testPropertyQueueMembers()
    {
        $this->SMSTenDLCBrandsListResult->setQueueMembers(array());
        $this->assertIsArray($this->SMSTenDLCBrandsListResult->getQueueMembers());
    }
}
