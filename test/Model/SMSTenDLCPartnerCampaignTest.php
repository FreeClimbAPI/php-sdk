<?php

/**
 * SMSTenDLCPartnerCampaignTest
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

use FreeClimb\Api\Model\SMSTenDLCPartnerCampaign;
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
class SMSTenDLCPartnerCampaignTest extends TestCase
{
    protected $SMSTenDLCPartnerCampaign;

    /**
     * Test "SMSTenDLCPartnerCampaign"
     */
    public function setUp() : void
    {
        $this->SMSTenDLCPartnerCampaign = new SMSTenDLCPartnerCampaign();
    }
    /**
     * Test attribute "account_id"
     */
    public function testPropertyAccountId()
    {
        $this->SMSTenDLCPartnerCampaign->setAccountId('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->SMSTenDLCPartnerCampaign->getAccountId());
        $this->assertIsString($this->SMSTenDLCPartnerCampaign->getAccountId());
        

    }
    /**
     * Test attribute "campaign_id"
     */
    public function testPropertyCampaignId()
    {
        $this->SMSTenDLCPartnerCampaign->setCampaignId('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->SMSTenDLCPartnerCampaign->getCampaignId());
        $this->assertIsString($this->SMSTenDLCPartnerCampaign->getCampaignId());
        

    }
    /**
     * Test attribute "status"
     */
    public function testPropertyStatus()
    {
        
        $this->SMSTenDLCPartnerCampaign->setStatus('ACTIVE');
        $this->assertEquals('ACTIVE', $this->SMSTenDLCPartnerCampaign->getStatus());
        $this->assertIsString($this->SMSTenDLCPartnerCampaign->getStatus());

    }
    /**
     * Test attribute "create_date"
     */
    public function testPropertyCreateDate()
    {
        $this->SMSTenDLCPartnerCampaign->setCreateDate('2023-09-21 15:30:00');
        $this->assertEquals('2023-09-21 15:30:00', $this->SMSTenDLCPartnerCampaign->getCreateDate());
    }
    /**
     * Test attribute "brand_id"
     */
    public function testPropertyBrandId()
    {
        $this->SMSTenDLCPartnerCampaign->setBrandId('12345');
        $this->assertEquals('12345', $this->SMSTenDLCPartnerCampaign->getBrandId());
        $this->assertIsString($this->SMSTenDLCPartnerCampaign->getBrandId());
        

    }
    /**
     * Test attribute "usecase"
     */
    public function testPropertyUsecase()
    {
        $this->SMSTenDLCPartnerCampaign->setUsecase('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->SMSTenDLCPartnerCampaign->getUsecase());
        $this->assertIsString($this->SMSTenDLCPartnerCampaign->getUsecase());
        

    }
    /**
     * Test attribute "description"
     */
    public function testPropertyDescription()
    {
        $this->SMSTenDLCPartnerCampaign->setDescription('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->SMSTenDLCPartnerCampaign->getDescription());
        $this->assertIsString($this->SMSTenDLCPartnerCampaign->getDescription());
        

    }
    /**
     * Test attribute "embedded_link"
     */
    public function testPropertyEmbeddedLink()
    {
        $this->SMSTenDLCPartnerCampaign->setEmbeddedLink(true);
        $this->assertTrue($this->SMSTenDLCPartnerCampaign->getEmbeddedLink());
        $this->assertIsBool($this->SMSTenDLCPartnerCampaign->getEmbeddedLink());
    }
    /**
     * Test attribute "embedded_phone"
     */
    public function testPropertyEmbeddedPhone()
    {
        $this->SMSTenDLCPartnerCampaign->setEmbeddedPhone(true);
        $this->assertTrue($this->SMSTenDLCPartnerCampaign->getEmbeddedPhone());
        $this->assertIsBool($this->SMSTenDLCPartnerCampaign->getEmbeddedPhone());
    }
    /**
     * Test attribute "affiliate_marketing"
     */
    public function testPropertyAffiliateMarketing()
    {
        $this->SMSTenDLCPartnerCampaign->setAffiliateMarketing(true);
        $this->assertTrue($this->SMSTenDLCPartnerCampaign->getAffiliateMarketing());
        $this->assertIsBool($this->SMSTenDLCPartnerCampaign->getAffiliateMarketing());
    }
    /**
     * Test attribute "number_pool"
     */
    public function testPropertyNumberPool()
    {
        $this->SMSTenDLCPartnerCampaign->setNumberPool(true);
        $this->assertTrue($this->SMSTenDLCPartnerCampaign->getNumberPool());
        $this->assertIsBool($this->SMSTenDLCPartnerCampaign->getNumberPool());
    }
    /**
     * Test attribute "age_gated"
     */
    public function testPropertyAgeGated()
    {
        $this->SMSTenDLCPartnerCampaign->setAgeGated(true);
        $this->assertTrue($this->SMSTenDLCPartnerCampaign->getAgeGated());
        $this->assertIsBool($this->SMSTenDLCPartnerCampaign->getAgeGated());
    }
    /**
     * Test attribute "direct_lending"
     */
    public function testPropertyDirectLending()
    {
        $this->SMSTenDLCPartnerCampaign->setDirectLending(true);
        $this->assertTrue($this->SMSTenDLCPartnerCampaign->getDirectLending());
        $this->assertIsBool($this->SMSTenDLCPartnerCampaign->getDirectLending());
    }
    /**
     * Test attribute "subscriber_optin"
     */
    public function testPropertySubscriberOptin()
    {
        $this->SMSTenDLCPartnerCampaign->setSubscriberOptin(true);
        $this->assertTrue($this->SMSTenDLCPartnerCampaign->getSubscriberOptin());
        $this->assertIsBool($this->SMSTenDLCPartnerCampaign->getSubscriberOptin());
    }
    /**
     * Test attribute "subscriber_optout"
     */
    public function testPropertySubscriberOptout()
    {
        $this->SMSTenDLCPartnerCampaign->setSubscriberOptout(true);
        $this->assertTrue($this->SMSTenDLCPartnerCampaign->getSubscriberOptout());
        $this->assertIsBool($this->SMSTenDLCPartnerCampaign->getSubscriberOptout());
    }
    /**
     * Test attribute "subscriber_help"
     */
    public function testPropertySubscriberHelp()
    {
        $this->SMSTenDLCPartnerCampaign->setSubscriberHelp(true);
        $this->assertTrue($this->SMSTenDLCPartnerCampaign->getSubscriberHelp());
        $this->assertIsBool($this->SMSTenDLCPartnerCampaign->getSubscriberHelp());
    }
    /**
     * Test attribute "sample1"
     */
    public function testPropertySample1()
    {
        $this->SMSTenDLCPartnerCampaign->setSample1('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->SMSTenDLCPartnerCampaign->getSample1());
        $this->assertIsString($this->SMSTenDLCPartnerCampaign->getSample1());
        

    }
    /**
     * Test attribute "sample2"
     */
    public function testPropertySample2()
    {
        $this->SMSTenDLCPartnerCampaign->setSample2('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->SMSTenDLCPartnerCampaign->getSample2());
        $this->assertIsString($this->SMSTenDLCPartnerCampaign->getSample2());
        

    }
    /**
     * Test attribute "sample3"
     */
    public function testPropertySample3()
    {
        $this->SMSTenDLCPartnerCampaign->setSample3('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->SMSTenDLCPartnerCampaign->getSample3());
        $this->assertIsString($this->SMSTenDLCPartnerCampaign->getSample3());
        

    }
    /**
     * Test attribute "sample4"
     */
    public function testPropertySample4()
    {
        $this->SMSTenDLCPartnerCampaign->setSample4('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->SMSTenDLCPartnerCampaign->getSample4());
        $this->assertIsString($this->SMSTenDLCPartnerCampaign->getSample4());
        

    }
    /**
     * Test attribute "sample5"
     */
    public function testPropertySample5()
    {
        $this->SMSTenDLCPartnerCampaign->setSample5('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->SMSTenDLCPartnerCampaign->getSample5());
        $this->assertIsString($this->SMSTenDLCPartnerCampaign->getSample5());
        

    }
    /**
     * Test attribute "message_flow"
     */
    public function testPropertyMessageFlow()
    {
        $this->SMSTenDLCPartnerCampaign->setMessageFlow('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->SMSTenDLCPartnerCampaign->getMessageFlow());
        $this->assertIsString($this->SMSTenDLCPartnerCampaign->getMessageFlow());
        

    }
    /**
     * Test attribute "help_message"
     */
    public function testPropertyHelpMessage()
    {
        $this->SMSTenDLCPartnerCampaign->setHelpMessage('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->SMSTenDLCPartnerCampaign->getHelpMessage());
        $this->assertIsString($this->SMSTenDLCPartnerCampaign->getHelpMessage());
        

    }
    /**
     * Test attribute "optin_keywords"
     */
    public function testPropertyOptinKeywords()
    {
        $this->SMSTenDLCPartnerCampaign->setOptinKeywords('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->SMSTenDLCPartnerCampaign->getOptinKeywords());
        $this->assertIsString($this->SMSTenDLCPartnerCampaign->getOptinKeywords());
        

    }
    /**
     * Test attribute "optout_keywords"
     */
    public function testPropertyOptoutKeywords()
    {
        $this->SMSTenDLCPartnerCampaign->setOptoutKeywords('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->SMSTenDLCPartnerCampaign->getOptoutKeywords());
        $this->assertIsString($this->SMSTenDLCPartnerCampaign->getOptoutKeywords());
        

    }
    /**
     * Test attribute "help_keywords"
     */
    public function testPropertyHelpKeywords()
    {
        $this->SMSTenDLCPartnerCampaign->setHelpKeywords('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->SMSTenDLCPartnerCampaign->getHelpKeywords());
        $this->assertIsString($this->SMSTenDLCPartnerCampaign->getHelpKeywords());
        

    }
    /**
     * Test attribute "optin_message"
     */
    public function testPropertyOptinMessage()
    {
        $this->SMSTenDLCPartnerCampaign->setOptinMessage('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->SMSTenDLCPartnerCampaign->getOptinMessage());
        $this->assertIsString($this->SMSTenDLCPartnerCampaign->getOptinMessage());
        

    }
    /**
     * Test attribute "optout_message"
     */
    public function testPropertyOptoutMessage()
    {
        $this->SMSTenDLCPartnerCampaign->setOptoutMessage('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->SMSTenDLCPartnerCampaign->getOptoutMessage());
        $this->assertIsString($this->SMSTenDLCPartnerCampaign->getOptoutMessage());
        

    }
    /**
     * Test attribute "brand"
     */
    public function testPropertyBrand()
    {
        $this->SMSTenDLCPartnerCampaign->setBrand(new \stdClass);
        $this->assertInstanceOf(\stdClass::class, $this->SMSTenDLCPartnerCampaign->getBrand());
    }

    /**
* Test attribute "SMSTenDLCPartnerCampaign"
*/
public function toStringTypeTest() {
    $test1 = new SMSTenDLCPartnerCampaign();    
      $test1->setAccountId("TS");
      $test1->setCampaignId("TS");
      $test1->setStatus(SMSTenDLCPartnerCampaign::ACTIVE);
      $test1->setCreateDate(new DateTime("2022-07-05T15:17:05Z"));
      $test1->setBrandId("TS");
      $test1->setUsecase("TS");
      $test1->setDescription("TS");
      $test1->setEmbeddedLink(true);
      $test1->setEmbeddedPhone(true);
      $test1->setAffiliateMarketing(true);
      $test1->setNumberPool(true);
      $test1->setAgeGated(true);
      $test1->setDirectLending(true);
      $test1->setSubscriberOptin(true);
      $test1->setSubscriberOptout(true);
      $test1->setSubscriberHelp(true);
      $test1->setSample1("TS");
      $test1->setSample2("TS");
      $test1->setSample3("TS");
      $test1->setSample4("TS");
      $test1->setSample5("TS");
      $test1->setMessageFlow("TS");
      $test1->setHelpMessage("TS");
      $test1->setOptinKeywords("TS");
      $test1->setOptoutKeywords("TS");
      $test1->setHelpKeywords("TS");
      $test1->setOptinMessage("TS");
      $test1->setOptoutMessage("TS");
      $object = new \FreeClimb\Api\Model\SMSTenDLCPartnerCampaignBrand();
      $test1->setBrand($object);

    $toString1 = $test1->__toString();
    assert(is_string($toString1));
}

/**
 * Test attribute "SMSTenDLCPartnerCampaign"
 */
public function toHeaderValueTest()
{
    $test1 = new SMSTenDLCPartnerCampaign();
      $test1->setAccountId("TS");
      $test1->setCampaignId("TS");
      $test1->setStatus(SMSTenDLCPartnerCampaign::ACTIVE);
      $test1->setCreateDate(new DateTime("2022-07-05T15:17:05Z"));
      $test1->setBrandId("TS");
      $test1->setUsecase("TS");
      $test1->setDescription("TS");
      $test1->setEmbeddedLink(true);
      $test1->setEmbeddedPhone(true);
      $test1->setAffiliateMarketing(true);
      $test1->setNumberPool(true);
      $test1->setAgeGated(true);
      $test1->setDirectLending(true);
      $test1->setSubscriberOptin(true);
      $test1->setSubscriberOptout(true);
      $test1->setSubscriberHelp(true);
      $test1->setSample1("TS");
      $test1->setSample2("TS");
      $test1->setSample3("TS");
      $test1->setSample4("TS");
      $test1->setSample5("TS");
      $test1->setMessageFlow("TS");
      $test1->setHelpMessage("TS");
      $test1->setOptinKeywords("TS");
      $test1->setOptoutKeywords("TS");
      $test1->setHelpKeywords("TS");
      $test1->setOptinMessage("TS");
      $test1->setOptoutMessage("TS");
      $object = new \FreeClimb\Api\Model\SMSTenDLCPartnerCampaignBrand();
      $test1->setBrand($object);

    $toHeaderValue1 = $test1->toHeaderValue();
    assert(is_string($toHeaderValue1));
}


}
