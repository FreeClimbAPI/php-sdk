<?php

/**
 * PaginationModelTest
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
 * PaginationModelTest Class Doc Comment
 *
 * @category    Class
 * @description PaginationModel
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
#[\AllowDynamicProperties]
class PaginationModelTest extends TestCase
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
        $this->PaginationModel = new \FreeClimb\Api\Model\PaginationModel();
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


    public function testPropertyTotal()
    {


        $this->PaginationModel->settotal(1);
        $this->assertEquals(1, $this->PaginationModel->gettotal());
        $this->assertIsNumeric($this->PaginationModel->gettotal());

    }

    public function testPropertyStart()
    {


        $this->PaginationModel->setstart(1);
        $this->assertEquals(1, $this->PaginationModel->getstart());
        $this->assertIsNumeric($this->PaginationModel->getstart());

    }

    public function testPropertyEnd()
    {


        $this->PaginationModel->setend(1);
        $this->assertEquals(1, $this->PaginationModel->getend());
        $this->assertIsNumeric($this->PaginationModel->getend());

    }

    public function testPropertyPage()
    {


        $this->PaginationModel->setpage(1);
        $this->assertEquals(1, $this->PaginationModel->getpage());
        $this->assertIsNumeric($this->PaginationModel->getpage());

    }

    public function testPropertyNumPages()
    {


        $this->PaginationModel->setnumPages(1);
        $this->assertEquals(1, $this->PaginationModel->getnumPages());
        $this->assertIsNumeric($this->PaginationModel->getnumPages());

    }

    public function testPropertyPageSize()
    {


        $this->PaginationModel->setpageSize(1);
        $this->assertEquals(1, $this->PaginationModel->getpageSize());
        $this->assertIsNumeric($this->PaginationModel->getpageSize());

    }

    public function testPropertyNextPageUri()
    {

        $this->PaginationModel->setNextPageUri('TS');
        $this->assertEquals('TS', $this->PaginationModel->getNextPageUri());
        $this->assertIsString($this->PaginationModel->getNextPageUri());
    }
}
