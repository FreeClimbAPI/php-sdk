<?php

/**
 * TFNCampaignTest
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
 * TFNCampaignTest Class Doc Comment
 *
 * @category    Class
 * @description TFNCampaign
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
#[\AllowDynamicProperties]
class TFNCampaignTest extends TestCase
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
        $this->TFNCampaign = new \FreeClimb\Api\Model\TFNCampaign();
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


    public function testPropertyAccountId()
    {

        $this->TFNCampaign->setAccountId('TS');
        $this->assertEquals('TS', $this->TFNCampaign->getAccountId());
        $this->assertIsString($this->TFNCampaign->getAccountId());
    }

    public function testPropertyCampaignId()
    {

        $this->TFNCampaign->setCampaignId('cmptfn_387ec3f6e03b340553f35f29c8f118cdf3eae08a');
        $this->assertEquals('cmptfn_387ec3f6e03b340553f35f29c8f118cdf3eae08a', $this->TFNCampaign->getCampaignId());
        $this->assertIsString($this->TFNCampaign->getCampaignId());

    }

    public function testPropertyUseCase()
    {

        $this->TFNCampaign->setUseCase('TS');
        $this->assertEquals('TS', $this->TFNCampaign->getUseCase());
        $this->assertIsString($this->TFNCampaign->getUseCase());
    }

    public function testPropertyRegistrationStatus()
    {
        $this->TFNCampaign->setregistrationStatus(\FreeClimb\Api\Model\SMSTollFreeCampaignRegistrationStatus::UNREGISTERED);
        $this->assertEquals(\FreeClimb\Api\Model\SMSTollFreeCampaignRegistrationStatus::UNREGISTERED, $this->TFNCampaign->getregistrationStatus());
        $this->TFNCampaign->setregistrationStatus(\FreeClimb\Api\Model\SMSTollFreeCampaignRegistrationStatus::INITIATED);
        $this->assertEquals(\FreeClimb\Api\Model\SMSTollFreeCampaignRegistrationStatus::INITIATED, $this->TFNCampaign->getregistrationStatus());
        $this->TFNCampaign->setregistrationStatus(\FreeClimb\Api\Model\SMSTollFreeCampaignRegistrationStatus::PENDING);
        $this->assertEquals(\FreeClimb\Api\Model\SMSTollFreeCampaignRegistrationStatus::PENDING, $this->TFNCampaign->getregistrationStatus());
        $this->TFNCampaign->setregistrationStatus(\FreeClimb\Api\Model\SMSTollFreeCampaignRegistrationStatus::DECLINED);
        $this->assertEquals(\FreeClimb\Api\Model\SMSTollFreeCampaignRegistrationStatus::DECLINED, $this->TFNCampaign->getregistrationStatus());
        $this->TFNCampaign->setregistrationStatus(\FreeClimb\Api\Model\SMSTollFreeCampaignRegistrationStatus::REGISTERED);
        $this->assertEquals(\FreeClimb\Api\Model\SMSTollFreeCampaignRegistrationStatus::REGISTERED, $this->TFNCampaign->getregistrationStatus());
    }

    public function testPropertyDateCreated()
    {

        $this->TFNCampaign->setDateCreated('TS');
        $this->assertEquals('TS', $this->TFNCampaign->getDateCreated());
        $this->assertIsString($this->TFNCampaign->getDateCreated());
    }

    public function testPropertyDateUpdated()
    {

        $this->TFNCampaign->setDateUpdated('TS');
        $this->assertEquals('TS', $this->TFNCampaign->getDateUpdated());
        $this->assertIsString($this->TFNCampaign->getDateUpdated());
    }

    public function testPropertyDateCreatedIso()
    {

        $this->TFNCampaign->setDateCreatedIso('TS');
        $this->assertEquals('TS', $this->TFNCampaign->getDateCreatedIso());
        $this->assertIsString($this->TFNCampaign->getDateCreatedIso());
    }

    public function testPropertyDateUpdatedIso()
    {

        $this->TFNCampaign->setDateUpdatedIso('TS');
        $this->assertEquals('TS', $this->TFNCampaign->getDateUpdatedIso());
        $this->assertIsString($this->TFNCampaign->getDateUpdatedIso());
    }

    public function testPropertyRevision()
    {


        $this->TFNCampaign->setrevision(1);
        $this->assertEquals(1, $this->TFNCampaign->getrevision());
        $this->assertIsNumeric($this->TFNCampaign->getrevision());

    }
}
