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
 * NOTE: This class is auto-generated by OpenAPI Generator (https://openapi-generator.tech).
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
        $this->assertEquals(12345, $this->SMSTenDLCBrandsListResult->getTotal());
        $this->assertIsInt($this->SMSTenDLCBrandsListResult->getTotal());
    }
    /**
     * Test attribute "start"
     */
    public function testPropertyStart()
    {
        $this->SMSTenDLCBrandsListResult->setStart(12345);
        $this->assertEquals(12345, $this->SMSTenDLCBrandsListResult->getStart());
        $this->assertIsInt($this->SMSTenDLCBrandsListResult->getStart());
    }
    /**
     * Test attribute "end"
     */
    public function testPropertyEnd()
    {
        $this->SMSTenDLCBrandsListResult->setEnd(12345);
        $this->assertEquals(12345, $this->SMSTenDLCBrandsListResult->getEnd());
        $this->assertIsInt($this->SMSTenDLCBrandsListResult->getEnd());
    }
    /**
     * Test attribute "page"
     */
    public function testPropertyPage()
    {
        $this->SMSTenDLCBrandsListResult->setPage(12345);
        $this->assertEquals(12345, $this->SMSTenDLCBrandsListResult->getPage());
        $this->assertIsInt($this->SMSTenDLCBrandsListResult->getPage());
    }
    /**
     * Test attribute "num_pages"
     */
    public function testPropertyNumPages()
    {
        $this->SMSTenDLCBrandsListResult->setNumPages(12345);
        $this->assertEquals(12345, $this->SMSTenDLCBrandsListResult->getNumPages());
        $this->assertIsInt($this->SMSTenDLCBrandsListResult->getNumPages());
    }
    /**
     * Test attribute "page_size"
     */
    public function testPropertyPageSize()
    {
        $this->SMSTenDLCBrandsListResult->setPageSize(12345);
        $this->assertEquals(12345, $this->SMSTenDLCBrandsListResult->getPageSize());
        $this->assertIsInt($this->SMSTenDLCBrandsListResult->getPageSize());
    }
    /**
     * Test attribute "next_page_uri"
     */
    public function testPropertyNextPageUri()
    {
        $this->SMSTenDLCBrandsListResult->setNextPageUri('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->SMSTenDLCBrandsListResult->getNextPageUri());
        $this->assertIsString($this->SMSTenDLCBrandsListResult->getNextPageUri());
        

    }
    /**
     * Test attribute "brands"
     */
    public function testPropertyBrands()
    {
        $this->SMSTenDLCBrandsListResult->setBrands([]);
        $this->assertEquals([], $this->SMSTenDLCBrandsListResult->getBrands());
        $this->assertIsArray($this->SMSTenDLCBrandsListResult->getBrands());
    }

    /**
* Test method toStringTest
*/
public function toStringTest() {
    $test1 = new SMSTenDLCBrandsListResult();    
      $test1->setTotal(1);
      $test1->setStart(1);
      $test1->setEnd(1);
      $test1->setPage(1);
      $test1->setNumPages(1);
      $test1->setPageSize(1);
      $test1->setNextPageUri("TS");
      $testList = [];
      $test1->setBrands($testList);

    $toString1 = $test1->__toString();
    assert(is_string($toString1));
}

/**
 * Test method toHeaderValue
 */
public function toHeaderValueTest()
{
    $test1 = new SMSTenDLCBrandsListResult();
      $test1->setTotal(1);
      $test1->setStart(1);
      $test1->setEnd(1);
      $test1->setPage(1);
      $test1->setNumPages(1);
      $test1->setPageSize(1);
      $test1->setNextPageUri("TS");
      $testList = [];
      $test1->setBrands($testList);

    $toHeaderValue1 = $test1->toHeaderValue();
    assert(is_string($toHeaderValue1));
}


}
