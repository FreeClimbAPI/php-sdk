<?php

/**
 * EnqueueAllOfTest
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

use FreeClimb\Api\Model\EnqueueAllOf;
use PHPUnit\Framework\TestCase;

/**
 * EnqueueAllOfTest Class Doc Comment
 *
 * @category    Class
 * @description EnqueueAllOf
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class EnqueueAllOfTest extends TestCase
{
    protected $EnqueueAllOf;

    /**
     * Test "EnqueueAllOf"
     */
    public function setUp() : void
    {
        $this->EnqueueAllOf = new EnqueueAllOf();
    }
    /**
     * Test attribute "action_url"
     */
    public function testPropertyActionUrl()
    {
        $this->EnqueueAllOf->setActionUrl('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->EnqueueAllOf->getActionUrl());
        $this->assertIsString($this->EnqueueAllOf->getActionUrl());
        

    }
    /**
     * Test attribute "notification_url"
     */
    public function testPropertyNotificationUrl()
    {
        $this->EnqueueAllOf->setNotificationUrl('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->EnqueueAllOf->getNotificationUrl());
        $this->assertIsString($this->EnqueueAllOf->getNotificationUrl());
        

    }
    /**
     * Test attribute "queue_id"
     */
    public function testPropertyQueueId()
    {
        $this->EnqueueAllOf->setQueueId('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->EnqueueAllOf->getQueueId());
        $this->assertIsString($this->EnqueueAllOf->getQueueId());
        

    }
    /**
     * Test attribute "wait_url"
     */
    public function testPropertyWaitUrl()
    {
        $this->EnqueueAllOf->setWaitUrl('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->EnqueueAllOf->getWaitUrl());
        $this->assertIsString($this->EnqueueAllOf->getWaitUrl());
        

    }

}
