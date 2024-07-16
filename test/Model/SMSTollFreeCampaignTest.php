<?php

/**
 * SMSTollFreeCampaignTest
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

use FreeClimb\Api\Model\SMSTollFreeCampaign;
use PHPUnit\Framework\TestCase;

/**
 * SMSTollFreeCampaignTest Class Doc Comment
 *
 * @category    Class
 * @description SMSTollFreeCampaign
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class SMSTollFreeCampaignTest extends TestCase
{
    protected $SMSTollFreeCampaign;

    /**
     * Test "SMSTollFreeCampaign"
     */
    public function setUp() : void
    {
        $this->SMSTollFreeCampaign = new SMSTollFreeCampaign();
    }
    /**
     * Test attribute "account_id"
     */
    public function testPropertyAccountId()
    {
        $this->SMSTollFreeCampaign->setAccountId('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->SMSTollFreeCampaign->getAccountId());
        $this->assertIsString($this->SMSTollFreeCampaign->getAccountId());
        

    }
    /**
     * Test attribute "campaign_id"
     */
    public function testPropertyCampaignId()
    {
        $this->SMSTollFreeCampaign->setCampaignId('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->SMSTollFreeCampaign->getCampaignId());
        $this->assertIsString($this->SMSTollFreeCampaign->getCampaignId());
        

    }
    /**
     * Test attribute "use_case"
     */
    public function testPropertyUseCase()
    {
        $this->SMSTollFreeCampaign->setUseCase('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->SMSTollFreeCampaign->getUseCase());
        $this->assertIsString($this->SMSTollFreeCampaign->getUseCase());
        

    }
    /**
     * Test attribute "registration_status"
     */
    public function testPropertyRegistrationStatus()
    {
        
        $this->SMSTollFreeCampaign->setRegistrationStatus('UNREGISTERED');
        $this->assertEquals('UNREGISTERED', $this->SMSTollFreeCampaign->getRegistrationStatus());
        $this->assertIsString($this->SMSTollFreeCampaign->getRegistrationStatus());

    }
    /**
     * Test attribute "date_created"
     */
    public function testPropertyDateCreated()
    {
        $this->SMSTollFreeCampaign->setDateCreated('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->SMSTollFreeCampaign->getDateCreated());
        $this->assertIsString($this->SMSTollFreeCampaign->getDateCreated());
        

    }
    /**
     * Test attribute "date_updated"
     */
    public function testPropertyDateUpdated()
    {
        $this->SMSTollFreeCampaign->setDateUpdated('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->SMSTollFreeCampaign->getDateUpdated());
        $this->assertIsString($this->SMSTollFreeCampaign->getDateUpdated());
        

    }
    /**
     * Test attribute "revision"
     */
    public function testPropertyRevision()
    {
        $this->SMSTollFreeCampaign->setRevision(12345);
        $this->assertEquals(12345, $this->SMSTollFreeCampaign->getRevision());
        $this->assertIsInt($this->SMSTollFreeCampaign->getRevision());
    }

    /**
* Test method toStringTest
*/
public function toStringTest() {
    $test1 = new SMSTollFreeCampaign();    
      $test1->setAccountId("TS");
      $test1->setCampaignId("TS");
      $test1->setUseCase("TS");
      $test1->setRegistrationStatus(SMSTollFreeCampaign::UNREGISTERED);
      $test1->setDateCreated("TS");
      $test1->setDateUpdated("TS");
      $test1->setRevision(1);

    $toString1 = $test1->__toString();
    assert(is_string($toString1));
}

/**
 * Test method toHeaderValue
 */
public function toHeaderValueTest()
{
    $test1 = new SMSTollFreeCampaign();
      $test1->setAccountId("TS");
      $test1->setCampaignId("TS");
      $test1->setUseCase("TS");
      $test1->setRegistrationStatus(SMSTollFreeCampaign::UNREGISTERED);
      $test1->setDateCreated("TS");
      $test1->setDateUpdated("TS");
      $test1->setRevision(1);

    $toHeaderValue1 = $test1->toHeaderValue();
    assert(is_string($toHeaderValue1));
}


}
