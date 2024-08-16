<?php

/**
 * PaginationModelTest
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

use FreeClimb\Api\Model\PaginationModel;
use PHPUnit\Framework\TestCase;

/**
 * PaginationModelTest Class Doc Comment
 *
 * @category    Class
 * @description PaginationModel
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class PaginationModelTest extends TestCase
{
    protected $PaginationModel;

    /**
     * Test "PaginationModel"
     */
    public function setUp() : void
    {
        $this->PaginationModel = new PaginationModel();
    }
    /**
     * Test attribute "total"
     */
    public function testPropertyTotal()
    {
        
        
        $this->PaginationModel->setTotal(1);
        $this->assertEquals(1, $this->PaginationModel->getTotal());
        $this->assertIsNumeric($this->PaginationModel->getTotal());
        
    }
    /**
     * Test attribute "start"
     */
    public function testPropertyStart()
    {
        
        
        $this->PaginationModel->setStart(1);
        $this->assertEquals(1, $this->PaginationModel->getStart());
        $this->assertIsNumeric($this->PaginationModel->getStart());
        
    }
    /**
     * Test attribute "end"
     */
    public function testPropertyEnd()
    {
        
        
        $this->PaginationModel->setEnd(1);
        $this->assertEquals(1, $this->PaginationModel->getEnd());
        $this->assertIsNumeric($this->PaginationModel->getEnd());
        
    }
    /**
     * Test attribute "page"
     */
    public function testPropertyPage()
    {
        
        
        $this->PaginationModel->setPage(1);
        $this->assertEquals(1, $this->PaginationModel->getPage());
        $this->assertIsNumeric($this->PaginationModel->getPage());
        
    }
    /**
     * Test attribute "num_pages"
     */
    public function testPropertyNumPages()
    {
        
        
        $this->PaginationModel->setNumPages(1);
        $this->assertEquals(1, $this->PaginationModel->getNumPages());
        $this->assertIsNumeric($this->PaginationModel->getNumPages());
        
    }
    /**
     * Test attribute "page_size"
     */
    public function testPropertyPageSize()
    {
        
        
        $this->PaginationModel->setPageSize(1);
        $this->assertEquals(1, $this->PaginationModel->getPageSize());
        $this->assertIsNumeric($this->PaginationModel->getPageSize());
        
    }
    /**
     * Test attribute "next_page_uri"
     */
    public function testPropertyNextPageUri()
    {
        $this->PaginationModel->setNextPageUri('TS');
        $this->assertEquals('TS', $this->PaginationModel->getNextPageUri());
        $this->assertIsString($this->PaginationModel->getNextPageUri());
    }

    /**
* Test method toStringTest
*/
public function toStringTest() {
    $test1 = new PaginationModel();    
    $test1->setTotal(1);
    $test1->setStart(1);
    $test1->setEnd(1);
    $test1->setPage(1);
    $test1->setNumPages(1);
    $test1->setPageSize(1);
    $test1->setNextPageUri("TS");

    $toString1 = $test1->__toString();
    assert(is_string($toString1));
}

/**
 * Test method toHeaderValue
 */
public function toHeaderValueTest()
{
    $test1 = new PaginationModel();
    $test1->setTotal(1);
    $test1->setStart(1);
    $test1->setEnd(1);
    $test1->setPage(1);
    $test1->setNumPages(1);
    $test1->setPageSize(1);
    $test1->setNextPageUri("TS");

    $toHeaderValue1 = $test1->toHeaderValue();
    assert(is_string($toHeaderValue1));
}


}
