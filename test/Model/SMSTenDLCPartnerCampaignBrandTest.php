<?php

/**
 * SMSTenDLCPartnerCampaignBrandTest
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

use FreeClimb\Api\Model\SMSTenDLCPartnerCampaignBrand;
use PHPUnit\Framework\TestCase;

/**
 * SMSTenDLCPartnerCampaignBrandTest Class Doc Comment
 *
 * @category    Class
 * @description SMSTenDLCPartnerCampaignBrand
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class SMSTenDLCPartnerCampaignBrandTest extends TestCase
{
    protected $SMSTenDLCPartnerCampaignBrand;

    /**
     * Test "SMSTenDLCPartnerCampaignBrand"
     */
    public function setUp() : void
    {
        $this->SMSTenDLCPartnerCampaignBrand = new SMSTenDLCPartnerCampaignBrand();
    }
    /**
     * Test attribute "account_id"
     */
    public function testPropertyAccountId()
    {
        $this->SMSTenDLCPartnerCampaignBrand->setAccountId('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->SMSTenDLCPartnerCampaignBrand->getAccountId());
        $this->assertIsString($this->SMSTenDLCPartnerCampaignBrand->getAccountId());
        

    }
    /**
     * Test attribute "brand_id"
     */
    public function testPropertyBrandId()
    {
        $this->SMSTenDLCPartnerCampaignBrand->setBrandId('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->SMSTenDLCPartnerCampaignBrand->getBrandId());
        $this->assertIsString($this->SMSTenDLCPartnerCampaignBrand->getBrandId());
        

    }
    /**
     * Test attribute "first_name"
     */
    public function testPropertyFirstName()
    {
        $this->SMSTenDLCPartnerCampaignBrand->setFirstName('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->SMSTenDLCPartnerCampaignBrand->getFirstName());
        $this->assertIsString($this->SMSTenDLCPartnerCampaignBrand->getFirstName());
        

    }
    /**
     * Test attribute "last_name"
     */
    public function testPropertyLastName()
    {
        $this->SMSTenDLCPartnerCampaignBrand->setLastName('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->SMSTenDLCPartnerCampaignBrand->getLastName());
        $this->assertIsString($this->SMSTenDLCPartnerCampaignBrand->getLastName());
        

    }
    /**
     * Test attribute "display_name"
     */
    public function testPropertyDisplayName()
    {
        $this->SMSTenDLCPartnerCampaignBrand->setDisplayName('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->SMSTenDLCPartnerCampaignBrand->getDisplayName());
        $this->assertIsString($this->SMSTenDLCPartnerCampaignBrand->getDisplayName());
        

    }
    /**
     * Test attribute "company_name"
     */
    public function testPropertyCompanyName()
    {
        $this->SMSTenDLCPartnerCampaignBrand->setCompanyName('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->SMSTenDLCPartnerCampaignBrand->getCompanyName());
        $this->assertIsString($this->SMSTenDLCPartnerCampaignBrand->getCompanyName());
        

    }
    /**
     * Test attribute "phone"
     */
    public function testPropertyPhone()
    {
        $this->SMSTenDLCPartnerCampaignBrand->setPhone('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->SMSTenDLCPartnerCampaignBrand->getPhone());
        $this->assertIsString($this->SMSTenDLCPartnerCampaignBrand->getPhone());
        

    }
    /**
     * Test attribute "email"
     */
    public function testPropertyEmail()
    {
        $this->SMSTenDLCPartnerCampaignBrand->setEmail('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->SMSTenDLCPartnerCampaignBrand->getEmail());
        $this->assertIsString($this->SMSTenDLCPartnerCampaignBrand->getEmail());
        

    }
    /**
     * Test attribute "website"
     */
    public function testPropertyWebsite()
    {
        $this->SMSTenDLCPartnerCampaignBrand->setWebsite('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->SMSTenDLCPartnerCampaignBrand->getWebsite());
        $this->assertIsString($this->SMSTenDLCPartnerCampaignBrand->getWebsite());
        

    }
    /**
     * Test attribute "optional_attributes"
     */
    public function testPropertyOptionalAttributes()
    {
        $this->SMSTenDLCPartnerCampaignBrand->setOptionalAttributes(new \stdClass);
        $this->assertInstanceOf(\stdClass::class, $this->SMSTenDLCPartnerCampaignBrand->getOptionalAttributes());
    }
    /**
     * Test attribute "evp_vetting_score"
     */
    public function testPropertyEvpVettingScore()
    {
        $this->SMSTenDLCPartnerCampaignBrand->setEvpVettingScore(12345);
        $this->assertEquals(12345, $this->SMSTenDLCPartnerCampaignBrand->getEvpVettingScore());
        $this->assertIsInt($this->SMSTenDLCPartnerCampaignBrand->getEvpVettingScore());
    }

}
