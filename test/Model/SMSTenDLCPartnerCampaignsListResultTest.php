<?php

/**
 * SMSTenDLCPartnerCampaignsListResultTest
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

use FreeClimb\Api\Model\SMSTenDLCPartnerCampaignsListResult;
use PHPUnit\Framework\TestCase;

/**
 * SMSTenDLCPartnerCampaignsListResultTest Class Doc Comment
 *
 * @category    Class
 * @description SMSTenDLCPartnerCampaignsListResult
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class SMSTenDLCPartnerCampaignsListResultTest extends TestCase
{
    protected $SMSTenDLCPartnerCampaignsListResult;

    /**
     * Test "SMSTenDLCPartnerCampaignsListResult"
     */
    public function setUp() : void
    {
        $this->SMSTenDLCPartnerCampaignsListResult = new SMSTenDLCPartnerCampaignsListResult();
    }
    /**
     * Test attribute "total"
     */
    public function testPropertyTotal()
    {
        
        
        $this->SMSTenDLCPartnerCampaignsListResult->setTotal(1);
        $this->assertEquals(1, $this->SMSTenDLCPartnerCampaignsListResult->getTotal());
        $this->assertIsNumeric($this->SMSTenDLCPartnerCampaignsListResult->getTotal());
        
    }
    /**
     * Test attribute "start"
     */
    public function testPropertyStart()
    {
        
        
        $this->SMSTenDLCPartnerCampaignsListResult->setStart(1);
        $this->assertEquals(1, $this->SMSTenDLCPartnerCampaignsListResult->getStart());
        $this->assertIsNumeric($this->SMSTenDLCPartnerCampaignsListResult->getStart());
        
    }
    /**
     * Test attribute "end"
     */
    public function testPropertyEnd()
    {
        
        
        $this->SMSTenDLCPartnerCampaignsListResult->setEnd(1);
        $this->assertEquals(1, $this->SMSTenDLCPartnerCampaignsListResult->getEnd());
        $this->assertIsNumeric($this->SMSTenDLCPartnerCampaignsListResult->getEnd());
        
    }
    /**
     * Test attribute "page"
     */
    public function testPropertyPage()
    {
        
        
        $this->SMSTenDLCPartnerCampaignsListResult->setPage(1);
        $this->assertEquals(1, $this->SMSTenDLCPartnerCampaignsListResult->getPage());
        $this->assertIsNumeric($this->SMSTenDLCPartnerCampaignsListResult->getPage());
        
    }
    /**
     * Test attribute "num_pages"
     */
    public function testPropertyNumPages()
    {
        
        
        $this->SMSTenDLCPartnerCampaignsListResult->setNumPages(1);
        $this->assertEquals(1, $this->SMSTenDLCPartnerCampaignsListResult->getNumPages());
        $this->assertIsNumeric($this->SMSTenDLCPartnerCampaignsListResult->getNumPages());
        
    }
    /**
     * Test attribute "page_size"
     */
    public function testPropertyPageSize()
    {
        
        
        $this->SMSTenDLCPartnerCampaignsListResult->setPageSize(1);
        $this->assertEquals(1, $this->SMSTenDLCPartnerCampaignsListResult->getPageSize());
        $this->assertIsNumeric($this->SMSTenDLCPartnerCampaignsListResult->getPageSize());
        
    }
    /**
     * Test attribute "next_page_uri"
     */
    public function testPropertyNextPageUri()
    {
        $this->SMSTenDLCPartnerCampaignsListResult->setNextPageUri('TS');
        $this->assertEquals('TS', $this->SMSTenDLCPartnerCampaignsListResult->getNextPageUri());
        $this->assertIsString($this->SMSTenDLCPartnerCampaignsListResult->getNextPageUri());
    }
    /**
     * Test attribute "partner_campaigns"
     */
    public function testPropertyPartnerCampaigns()
    {
        $this->SMSTenDLCPartnerCampaignsListResult->setPartnerCampaigns([]);
        $this->assertEquals([], $this->SMSTenDLCPartnerCampaignsListResult->getPartnerCampaigns());
        $this->assertIsArray($this->SMSTenDLCPartnerCampaignsListResult->getPartnerCampaigns());
    }

    /**
* Test method toStringTest
*/
public function toStringTest() {
    $test1 = new SMSTenDLCPartnerCampaignsListResult();    
    $test1->setTotal(1);
    $test1->setStart(1);
    $test1->setEnd(1);
    $test1->setPage(1);
    $test1->setNumPages(1);
    $test1->setPageSize(1);
    $test1->setNextPageUri("TS");
    $testList = [];
    $test1->setPartnerCampaigns($testList);

    $toString1 = $test1->__toString();
    assert(is_string($toString1));
}

/**
 * Test method toHeaderValue
 */
public function toHeaderValueTest()
{
    $test1 = new SMSTenDLCPartnerCampaignsListResult();
    $test1->setTotal(1);
    $test1->setStart(1);
    $test1->setEnd(1);
    $test1->setPage(1);
    $test1->setNumPages(1);
    $test1->setPageSize(1);
    $test1->setNextPageUri("TS");
    $testList = [];
    $test1->setPartnerCampaigns($testList);

    $toHeaderValue1 = $test1->toHeaderValue();
    assert(is_string($toHeaderValue1));
}


}
