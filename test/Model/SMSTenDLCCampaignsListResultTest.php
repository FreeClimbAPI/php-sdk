<?php

/**
 * SMSTenDLCCampaignsListResultTest
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

use FreeClimb\Api\Model\SMSTenDLCCampaignsListResult;
use PHPUnit\Framework\TestCase;

/**
 * SMSTenDLCCampaignsListResultTest Class Doc Comment
 *
 * @category    Class
 * @description SMSTenDLCCampaignsListResult
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class SMSTenDLCCampaignsListResultTest extends TestCase
{
    protected $SMSTenDLCCampaignsListResult;

    /**
     * Test "SMSTenDLCCampaignsListResult"
     */
    public function setUp() : void
    {
        $this->SMSTenDLCCampaignsListResult = new SMSTenDLCCampaignsListResult();
    }
    /**
     * Test attribute "total"
     */
    public function testPropertyTotal()
    {
        $this->SMSTenDLCCampaignsListResult->setTotal(12345);
        $this->assertEquals(12345, $this->SMSTenDLCCampaignsListResult->getTotal());
        $this->assertIsInt($this->SMSTenDLCCampaignsListResult->getTotal());
    }
    /**
     * Test attribute "start"
     */
    public function testPropertyStart()
    {
        $this->SMSTenDLCCampaignsListResult->setStart(12345);
        $this->assertEquals(12345, $this->SMSTenDLCCampaignsListResult->getStart());
        $this->assertIsInt($this->SMSTenDLCCampaignsListResult->getStart());
    }
    /**
     * Test attribute "end"
     */
    public function testPropertyEnd()
    {
        $this->SMSTenDLCCampaignsListResult->setEnd(12345);
        $this->assertEquals(12345, $this->SMSTenDLCCampaignsListResult->getEnd());
        $this->assertIsInt($this->SMSTenDLCCampaignsListResult->getEnd());
    }
    /**
     * Test attribute "page"
     */
    public function testPropertyPage()
    {
        $this->SMSTenDLCCampaignsListResult->setPage(12345);
        $this->assertEquals(12345, $this->SMSTenDLCCampaignsListResult->getPage());
        $this->assertIsInt($this->SMSTenDLCCampaignsListResult->getPage());
    }
    /**
     * Test attribute "num_pages"
     */
    public function testPropertyNumPages()
    {
        $this->SMSTenDLCCampaignsListResult->setNumPages(12345);
        $this->assertEquals(12345, $this->SMSTenDLCCampaignsListResult->getNumPages());
        $this->assertIsInt($this->SMSTenDLCCampaignsListResult->getNumPages());
    }
    /**
     * Test attribute "page_size"
     */
    public function testPropertyPageSize()
    {
        $this->SMSTenDLCCampaignsListResult->setPageSize(12345);
        $this->assertEquals(12345, $this->SMSTenDLCCampaignsListResult->getPageSize());
        $this->assertIsInt($this->SMSTenDLCCampaignsListResult->getPageSize());
    }
    /**
     * Test attribute "next_page_uri"
     */
    public function testPropertyNextPageUri()
    {
        $this->SMSTenDLCCampaignsListResult->setNextPageUri('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->SMSTenDLCCampaignsListResult->getNextPageUri());
        $this->assertIsString($this->SMSTenDLCCampaignsListResult->getNextPageUri());
        

    }
    /**
     * Test attribute "campaigns"
     */
    public function testPropertyCampaigns()
    {
        $this->SMSTenDLCCampaignsListResult->setCampaigns([]);
        $this->assertEquals([], $this->SMSTenDLCCampaignsListResult->getCampaigns());
        $this->assertIsArray($this->SMSTenDLCCampaignsListResult->getCampaigns());
    }

    /**
* Test attribute toStringTest
*/
public function toStringTest() {
    $test1 = new SMSTenDLCCampaignsListResult();    
      $test1->setTotal(1);
      $test1->setStart(1);
      $test1->setEnd(1);
      $test1->setPage(1);
      $test1->setNumPages(1);
      $test1->setPageSize(1);
      $test1->setNextPageUri("TS");
      $testList = [];
      $test1->setCampaigns($testList);

    $toString1 = $test1->__toString();
    assert(is_string($toString1));
}

/**
 * Test attribute toHeaderValue
 */
public function toHeaderValueTest()
{
    $test1 = new SMSTenDLCCampaignsListResult();
      $test1->setTotal(1);
      $test1->setStart(1);
      $test1->setEnd(1);
      $test1->setPage(1);
      $test1->setNumPages(1);
      $test1->setPageSize(1);
      $test1->setNextPageUri("TS");
      $testList = [];
      $test1->setCampaigns($testList);

    $toHeaderValue1 = $test1->toHeaderValue();
    assert(is_string($toHeaderValue1));
}


}
