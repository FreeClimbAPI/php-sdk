<?php

/**
 * SMSTollFreeCampaignTest
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
 * SMSTollFreeCampaignTest Class Doc Comment
 *
 * @category    Class
 * @description SMSTollFreeCampaign
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
#[\AllowDynamicProperties]
class SMSTollFreeCampaignTest extends TestCase
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
        $this->SMSTollFreeCampaign = new \FreeClimb\Api\Model\SMSTollFreeCampaign();
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
        $this->SMSTollFreeCampaign->setAccountId('TS');
        $this->assertEquals('TS', $this->SMSTollFreeCampaign->getAccountId());
        $this->assertIsString($this->SMSTollFreeCampaign->getAccountId());
    }
    /**
     * Test attribute "campaign_id"
     */
    public function testPropertyCampaignId()
    {
        $this->SMSTollFreeCampaign->setCampaignId('TS');
        $this->assertEquals('TS', $this->SMSTollFreeCampaign->getCampaignId());
        $this->assertIsString($this->SMSTollFreeCampaign->getCampaignId());
    }
    /**
     * Test attribute "use_case"
     */
    public function testPropertyUseCase()
    {
        $this->SMSTollFreeCampaign->setUseCase('TS');
        $this->assertEquals('TS', $this->SMSTollFreeCampaign->getUseCase());
        $this->assertIsString($this->SMSTollFreeCampaign->getUseCase());
    }
    /**
     * Test attribute "registration_status"
     */
    public function testPropertyRegistrationStatus()
    {
        $this->SMSTollFreeCampaign->setregistrationStatus(\FreeClimb\Api\Model\SMSTollFreeCampaignRegistrationStatus::UNREGISTERED);
        $this->assertEquals(\FreeClimb\Api\Model\SMSTollFreeCampaignRegistrationStatus::UNREGISTERED, $this->SMSTollFreeCampaign->getregistrationStatus());
        $this->SMSTollFreeCampaign->setregistrationStatus(\FreeClimb\Api\Model\SMSTollFreeCampaignRegistrationStatus::INITIATED);
        $this->assertEquals(\FreeClimb\Api\Model\SMSTollFreeCampaignRegistrationStatus::INITIATED, $this->SMSTollFreeCampaign->getregistrationStatus());
        $this->SMSTollFreeCampaign->setregistrationStatus(\FreeClimb\Api\Model\SMSTollFreeCampaignRegistrationStatus::PENDING);
        $this->assertEquals(\FreeClimb\Api\Model\SMSTollFreeCampaignRegistrationStatus::PENDING, $this->SMSTollFreeCampaign->getregistrationStatus());
        $this->SMSTollFreeCampaign->setregistrationStatus(\FreeClimb\Api\Model\SMSTollFreeCampaignRegistrationStatus::DECLINED);
        $this->assertEquals(\FreeClimb\Api\Model\SMSTollFreeCampaignRegistrationStatus::DECLINED, $this->SMSTollFreeCampaign->getregistrationStatus());
        $this->SMSTollFreeCampaign->setregistrationStatus(\FreeClimb\Api\Model\SMSTollFreeCampaignRegistrationStatus::REGISTERED);
        $this->assertEquals(\FreeClimb\Api\Model\SMSTollFreeCampaignRegistrationStatus::REGISTERED, $this->SMSTollFreeCampaign->getregistrationStatus());
    }
    /**
     * Test attribute "date_created"
     */
    public function testPropertyDateCreated()
    {
        $this->SMSTollFreeCampaign->setDateCreated('TS');
        $this->assertEquals('TS', $this->SMSTollFreeCampaign->getDateCreated());
        $this->assertIsString($this->SMSTollFreeCampaign->getDateCreated());
    }
    /**
     * Test attribute "date_updated"
     */
    public function testPropertyDateUpdated()
    {
        $this->SMSTollFreeCampaign->setDateUpdated('TS');
        $this->assertEquals('TS', $this->SMSTollFreeCampaign->getDateUpdated());
        $this->assertIsString($this->SMSTollFreeCampaign->getDateUpdated());
    }
    /**
     * Test attribute "revision"
     */
    public function testPropertyRevision()
    {


        $this->SMSTollFreeCampaign->setrevision(1);
        $this->assertEquals(1, $this->SMSTollFreeCampaign->getrevision());
        $this->assertIsNumeric($this->SMSTollFreeCampaign->getrevision());

    }
}
