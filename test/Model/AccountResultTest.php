<?php

/**
 * AccountResultTest
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
 * AccountResultTest Class Doc Comment
 *
 * @category    Class
 * @description AccountResult
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
#[\AllowDynamicProperties]
class AccountResultTest extends TestCase
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
        $this->AccountResult = new \FreeClimb\Api\Model\AccountResult();
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


    public function testPropertyUri()
    {

        $this->AccountResult->setUri('TS');
        $this->assertEquals('TS', $this->AccountResult->getUri());
        $this->assertIsString($this->AccountResult->getUri());
    }

    public function testPropertyDateCreated()
    {

        $this->AccountResult->setDateCreated('TS');
        $this->assertEquals('TS', $this->AccountResult->getDateCreated());
        $this->assertIsString($this->AccountResult->getDateCreated());
    }

    public function testPropertyDateUpdated()
    {

        $this->AccountResult->setDateUpdated('TS');
        $this->assertEquals('TS', $this->AccountResult->getDateUpdated());
        $this->assertIsString($this->AccountResult->getDateUpdated());
    }

    public function testPropertyRevision()
    {


        $this->AccountResult->setrevision(1);
        $this->assertEquals(1, $this->AccountResult->getrevision());
        $this->assertIsNumeric($this->AccountResult->getrevision());

    }

    public function testPropertyAccountId()
    {

        $this->AccountResult->setAccountId('TS');
        $this->assertEquals('TS', $this->AccountResult->getAccountId());
        $this->assertIsString($this->AccountResult->getAccountId());
    }

    public function testPropertyApiKey()
    {

        $this->AccountResult->setApiKey('TS');
        $this->assertEquals('TS', $this->AccountResult->getApiKey());
        $this->assertIsString($this->AccountResult->getApiKey());
    }

    public function testPropertyAlias()
    {

        $this->AccountResult->setAlias('TS');
        $this->assertEquals('TS', $this->AccountResult->getAlias());
        $this->assertIsString($this->AccountResult->getAlias());
    }

    public function testPropertyLabel()
    {

        $this->AccountResult->setLabel('TS');
        $this->assertEquals('TS', $this->AccountResult->getLabel());
        $this->assertIsString($this->AccountResult->getLabel());
    }

    public function testPropertyType()
    {
        $this->AccountResult->settype(\FreeClimb\Api\Model\AccountType::TRIAL);
        $this->assertEquals(\FreeClimb\Api\Model\AccountType::TRIAL, $this->AccountResult->gettype());
        $this->AccountResult->settype(\FreeClimb\Api\Model\AccountType::FULL);
        $this->assertEquals(\FreeClimb\Api\Model\AccountType::FULL, $this->AccountResult->gettype());
    }

    public function testPropertyStatus()
    {
        $this->AccountResult->setstatus(\FreeClimb\Api\Model\AccountStatus::CLOSED);
        $this->assertEquals(\FreeClimb\Api\Model\AccountStatus::CLOSED, $this->AccountResult->getstatus());
        $this->AccountResult->setstatus(\FreeClimb\Api\Model\AccountStatus::SUSPENDED);
        $this->assertEquals(\FreeClimb\Api\Model\AccountStatus::SUSPENDED, $this->AccountResult->getstatus());
        $this->AccountResult->setstatus(\FreeClimb\Api\Model\AccountStatus::ACTIVE);
        $this->assertEquals(\FreeClimb\Api\Model\AccountStatus::ACTIVE, $this->AccountResult->getstatus());
    }

    public function testPropertySubresourceUris()
    {
        $this->AccountResult->setsubresourceUris(new \stdClass());
        $this->assertInstanceOf(\stdClass::class, $this->AccountResult->getsubresourceUris());
    }
}
