<?php

/**
 * SMSTenDLCPartnerCampaignTest
 *
 * PHP version 7.4
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
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace FreeClimb\Api\Test\Model;

use PHPUnit\Framework\TestCase;

/**
 * SMSTenDLCPartnerCampaignTest Class Doc Comment
 *
 * @category    Class
 * @description SMSTenDLCPartnerCampaign
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
#[\AllowDynamicProperties]
class SMSTenDLCPartnerCampaignTest extends TestCase
{
    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
        $this->SMSTenDLCPartnerCampaign = new \FreeClimb\Api\Model\SMSTenDLCPartnerCampaign();
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test attribute "account_id"
     */
    public function testPropertyAccountId()
    {
        $this->SMSTenDLCPartnerCampaign->setAccountId('TS');
        $this->assertEquals('TS', $this->SMSTenDLCPartnerCampaign->getAccountId());
        $this->assertIsString($this->SMSTenDLCPartnerCampaign->getAccountId());
    }
    /**
     * Test attribute "campaign_id"
     */
    public function testPropertyCampaignId()
    {
        $this->SMSTenDLCPartnerCampaign->setCampaignId('TS');
        $this->assertEquals('TS', $this->SMSTenDLCPartnerCampaign->getCampaignId());
        $this->assertIsString($this->SMSTenDLCPartnerCampaign->getCampaignId());
    }
    /**
     * Test attribute "status"
     */
    public function testPropertyStatus()
    {
        $this->SMSTenDLCPartnerCampaign->setstatus(\FreeClimb\Api\Model\SMSTenDLCPartnerCampaignStatus::ACTIVE);
        $this->assertEquals(\FreeClimb\Api\Model\SMSTenDLCPartnerCampaignStatus::ACTIVE, $this->SMSTenDLCPartnerCampaign->getstatus());
        $this->SMSTenDLCPartnerCampaign->setstatus(\FreeClimb\Api\Model\SMSTenDLCPartnerCampaignStatus::EXPIRED);
        $this->assertEquals(\FreeClimb\Api\Model\SMSTenDLCPartnerCampaignStatus::EXPIRED, $this->SMSTenDLCPartnerCampaign->getstatus());
    }
    /**
     * Test attribute "create_date"
     */
    public function testPropertyCreateDate()
    {
        $this->SMSTenDLCPartnerCampaign->setcreateDate('2023-09-21 15:30:00');
        $this->assertEquals('2023-09-21 15:30:00', $this->SMSTenDLCPartnerCampaign->getcreateDate());
    }
    /**
     * Test attribute "brand_id"
     */
    public function testPropertyBrandId()
    {
        $this->SMSTenDLCPartnerCampaign->setBrandId('TS');
        $this->assertEquals('TS', $this->SMSTenDLCPartnerCampaign->getBrandId());
        $this->assertIsString($this->SMSTenDLCPartnerCampaign->getBrandId());
    }
    /**
     * Test attribute "usecase"
     */
    public function testPropertyUsecase()
    {
        $this->SMSTenDLCPartnerCampaign->setUsecase('TS');
        $this->assertEquals('TS', $this->SMSTenDLCPartnerCampaign->getUsecase());
        $this->assertIsString($this->SMSTenDLCPartnerCampaign->getUsecase());
    }
    /**
     * Test attribute "description"
     */
    public function testPropertyDescription()
    {
        $this->SMSTenDLCPartnerCampaign->setDescription('TS');
        $this->assertEquals('TS', $this->SMSTenDLCPartnerCampaign->getDescription());
        $this->assertIsString($this->SMSTenDLCPartnerCampaign->getDescription());
    }
    /**
     * Test attribute "embedded_link"
     */
    public function testPropertyEmbeddedLink()
    {
        $this->SMSTenDLCPartnerCampaign->setembeddedLink(false);
        $this->assertFalse($this->SMSTenDLCPartnerCampaign->getembeddedLink());
        $this->assertIsBool($this->SMSTenDLCPartnerCampaign->getembeddedLink());
    }
    /**
     * Test attribute "embedded_phone"
     */
    public function testPropertyEmbeddedPhone()
    {
        $this->SMSTenDLCPartnerCampaign->setembeddedPhone(false);
        $this->assertFalse($this->SMSTenDLCPartnerCampaign->getembeddedPhone());
        $this->assertIsBool($this->SMSTenDLCPartnerCampaign->getembeddedPhone());
    }
    /**
     * Test attribute "affiliate_marketing"
     */
    public function testPropertyAffiliateMarketing()
    {
        $this->SMSTenDLCPartnerCampaign->setaffiliateMarketing(false);
        $this->assertFalse($this->SMSTenDLCPartnerCampaign->getaffiliateMarketing());
        $this->assertIsBool($this->SMSTenDLCPartnerCampaign->getaffiliateMarketing());
    }
    /**
     * Test attribute "number_pool"
     */
    public function testPropertyNumberPool()
    {
        $this->SMSTenDLCPartnerCampaign->setnumberPool(false);
        $this->assertFalse($this->SMSTenDLCPartnerCampaign->getnumberPool());
        $this->assertIsBool($this->SMSTenDLCPartnerCampaign->getnumberPool());
    }
    /**
     * Test attribute "age_gated"
     */
    public function testPropertyAgeGated()
    {
        $this->SMSTenDLCPartnerCampaign->setageGated(false);
        $this->assertFalse($this->SMSTenDLCPartnerCampaign->getageGated());
        $this->assertIsBool($this->SMSTenDLCPartnerCampaign->getageGated());
    }
    /**
     * Test attribute "direct_lending"
     */
    public function testPropertyDirectLending()
    {
        $this->SMSTenDLCPartnerCampaign->setdirectLending(false);
        $this->assertFalse($this->SMSTenDLCPartnerCampaign->getdirectLending());
        $this->assertIsBool($this->SMSTenDLCPartnerCampaign->getdirectLending());
    }
    /**
     * Test attribute "subscriber_optin"
     */
    public function testPropertySubscriberOptin()
    {
        $this->SMSTenDLCPartnerCampaign->setsubscriberOptin(false);
        $this->assertFalse($this->SMSTenDLCPartnerCampaign->getsubscriberOptin());
        $this->assertIsBool($this->SMSTenDLCPartnerCampaign->getsubscriberOptin());
    }
    /**
     * Test attribute "subscriber_optout"
     */
    public function testPropertySubscriberOptout()
    {
        $this->SMSTenDLCPartnerCampaign->setsubscriberOptout(false);
        $this->assertFalse($this->SMSTenDLCPartnerCampaign->getsubscriberOptout());
        $this->assertIsBool($this->SMSTenDLCPartnerCampaign->getsubscriberOptout());
    }
    /**
     * Test attribute "subscriber_help"
     */
    public function testPropertySubscriberHelp()
    {
        $this->SMSTenDLCPartnerCampaign->setsubscriberHelp(false);
        $this->assertFalse($this->SMSTenDLCPartnerCampaign->getsubscriberHelp());
        $this->assertIsBool($this->SMSTenDLCPartnerCampaign->getsubscriberHelp());
    }
    /**
     * Test attribute "sample1"
     */
    public function testPropertySample1()
    {
        $this->SMSTenDLCPartnerCampaign->setSample1('TS');
        $this->assertEquals('TS', $this->SMSTenDLCPartnerCampaign->getSample1());
        $this->assertIsString($this->SMSTenDLCPartnerCampaign->getSample1());
    }
    /**
     * Test attribute "sample2"
     */
    public function testPropertySample2()
    {
        $this->SMSTenDLCPartnerCampaign->setSample2('TS');
        $this->assertEquals('TS', $this->SMSTenDLCPartnerCampaign->getSample2());
        $this->assertIsString($this->SMSTenDLCPartnerCampaign->getSample2());
    }
    /**
     * Test attribute "sample3"
     */
    public function testPropertySample3()
    {
        $this->SMSTenDLCPartnerCampaign->setSample3('TS');
        $this->assertEquals('TS', $this->SMSTenDLCPartnerCampaign->getSample3());
        $this->assertIsString($this->SMSTenDLCPartnerCampaign->getSample3());
    }
    /**
     * Test attribute "sample4"
     */
    public function testPropertySample4()
    {
        $this->SMSTenDLCPartnerCampaign->setSample4('TS');
        $this->assertEquals('TS', $this->SMSTenDLCPartnerCampaign->getSample4());
        $this->assertIsString($this->SMSTenDLCPartnerCampaign->getSample4());
    }
    /**
     * Test attribute "sample5"
     */
    public function testPropertySample5()
    {
        $this->SMSTenDLCPartnerCampaign->setSample5('TS');
        $this->assertEquals('TS', $this->SMSTenDLCPartnerCampaign->getSample5());
        $this->assertIsString($this->SMSTenDLCPartnerCampaign->getSample5());
    }
    /**
     * Test attribute "message_flow"
     */
    public function testPropertyMessageFlow()
    {
        $this->SMSTenDLCPartnerCampaign->setMessageFlow('TS');
        $this->assertEquals('TS', $this->SMSTenDLCPartnerCampaign->getMessageFlow());
        $this->assertIsString($this->SMSTenDLCPartnerCampaign->getMessageFlow());
    }
    /**
     * Test attribute "help_message"
     */
    public function testPropertyHelpMessage()
    {
        $this->SMSTenDLCPartnerCampaign->setHelpMessage('TS');
        $this->assertEquals('TS', $this->SMSTenDLCPartnerCampaign->getHelpMessage());
        $this->assertIsString($this->SMSTenDLCPartnerCampaign->getHelpMessage());
    }
    /**
     * Test attribute "optin_keywords"
     */
    public function testPropertyOptinKeywords()
    {
        $this->SMSTenDLCPartnerCampaign->setOptinKeywords('TS');
        $this->assertEquals('TS', $this->SMSTenDLCPartnerCampaign->getOptinKeywords());
        $this->assertIsString($this->SMSTenDLCPartnerCampaign->getOptinKeywords());
    }
    /**
     * Test attribute "optout_keywords"
     */
    public function testPropertyOptoutKeywords()
    {
        $this->SMSTenDLCPartnerCampaign->setOptoutKeywords('TS');
        $this->assertEquals('TS', $this->SMSTenDLCPartnerCampaign->getOptoutKeywords());
        $this->assertIsString($this->SMSTenDLCPartnerCampaign->getOptoutKeywords());
    }
    /**
     * Test attribute "help_keywords"
     */
    public function testPropertyHelpKeywords()
    {
        $this->SMSTenDLCPartnerCampaign->setHelpKeywords('TS');
        $this->assertEquals('TS', $this->SMSTenDLCPartnerCampaign->getHelpKeywords());
        $this->assertIsString($this->SMSTenDLCPartnerCampaign->getHelpKeywords());
    }
    /**
     * Test attribute "optin_message"
     */
    public function testPropertyOptinMessage()
    {
        $this->SMSTenDLCPartnerCampaign->setOptinMessage('TS');
        $this->assertEquals('TS', $this->SMSTenDLCPartnerCampaign->getOptinMessage());
        $this->assertIsString($this->SMSTenDLCPartnerCampaign->getOptinMessage());
    }
    /**
     * Test attribute "optout_message"
     */
    public function testPropertyOptoutMessage()
    {
        $this->SMSTenDLCPartnerCampaign->setOptoutMessage('TS');
        $this->assertEquals('TS', $this->SMSTenDLCPartnerCampaign->getOptoutMessage());
        $this->assertIsString($this->SMSTenDLCPartnerCampaign->getOptoutMessage());
    }
    /**
     * Test attribute "brand"
     */
    public function testPropertyBrand()
    {
        $this->SMSTenDLCPartnerCampaign->setbrand(new \stdClass());
        $this->assertInstanceOf(\stdClass::class, $this->SMSTenDLCPartnerCampaign->getbrand());
    }
}
