<?php

/**
 * MutableResourceModelTest
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
 * MutableResourceModelTest Class Doc Comment
 *
 * @category    Class
 * @description MutableResourceModel
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
#[\AllowDynamicProperties]
class MutableResourceModelTest extends TestCase
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
        $this->MutableResourceModel = new \FreeClimb\Api\Model\MutableResourceModel();
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

        $this->MutableResourceModel->setUri('TS');
        $this->assertEquals('TS', $this->MutableResourceModel->getUri());
        $this->assertIsString($this->MutableResourceModel->getUri());
    }

    public function testPropertyDateCreated()
    {

        $this->MutableResourceModel->setDateCreated('TS');
        $this->assertEquals('TS', $this->MutableResourceModel->getDateCreated());
        $this->assertIsString($this->MutableResourceModel->getDateCreated());
    }

    public function testPropertyDateUpdated()
    {

        $this->MutableResourceModel->setDateUpdated('TS');
        $this->assertEquals('TS', $this->MutableResourceModel->getDateUpdated());
        $this->assertIsString($this->MutableResourceModel->getDateUpdated());
    }

    public function testPropertyRevision()
    {


        $this->MutableResourceModel->setrevision(1);
        $this->assertEquals(1, $this->MutableResourceModel->getrevision());
        $this->assertIsNumeric($this->MutableResourceModel->getrevision());

    }
}
