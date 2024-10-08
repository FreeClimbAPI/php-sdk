<?php

/**
 * EnqueueTest
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

use FreeClimb\Api\Model\Enqueue;
use PHPUnit\Framework\TestCase;

/**
 * EnqueueTest Class Doc Comment
 *
 * @category    Class
 * @description The &#x60;Enqueue&#x60; command adds the current Call to a call Queue. If the specified Queue does not exist, it is created and then the Call is added to it. The default maximum length of the queue is 100. This can be modified using the REST API.
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class EnqueueTest extends TestCase
{
    protected $Enqueue;

    /**
     * Test "Enqueue"
     */
    public function setUp() : void
    {
        $this->Enqueue = new Enqueue();
    }
    /**
     * Test attribute "action_url"
     */
    public function testPropertyActionUrl()
    {
        $this->Enqueue->setActionUrl('TS');
        $this->assertEquals('TS', $this->Enqueue->getActionUrl());
        $this->assertIsString($this->Enqueue->getActionUrl());
    }
    /**
     * Test attribute "notification_url"
     */
    public function testPropertyNotificationUrl()
    {
        $this->Enqueue->setNotificationUrl('TS');
        $this->assertEquals('TS', $this->Enqueue->getNotificationUrl());
        $this->assertIsString($this->Enqueue->getNotificationUrl());
    }
    /**
     * Test attribute "queue_id"
     */
    public function testPropertyQueueId()
    {
        $this->Enqueue->setQueueId('TS');
        $this->assertEquals('TS', $this->Enqueue->getQueueId());
        $this->assertIsString($this->Enqueue->getQueueId());
    }
    /**
     * Test attribute "wait_url"
     */
    public function testPropertyWaitUrl()
    {
        $this->Enqueue->setWaitUrl('TS');
        $this->assertEquals('TS', $this->Enqueue->getWaitUrl());
        $this->assertIsString($this->Enqueue->getWaitUrl());
    }

    /**
* Test method toStringTest
*/
public function toStringTest() {
    $test1 = new Enqueue();    
    try {
        $uri1 = "TEST_STRING";
        $test1->setActionUrl($uri1);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    try {
        $uri1 = "TEST_STRING";
        $test1->setNotificationUrl($uri1);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    $test1->setQueueId("TS");
    $test1->setWaitUrl("TS");

    $toString1 = $test1->__toString();
    assert(is_string($toString1));
}

/**
 * Test method toHeaderValue
 */
public function toHeaderValueTest()
{
    $test1 = new Enqueue();
    try {
        $uri1 = "TEST_STRING";
        $test1->setActionUrl($uri1);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    try {
        $uri1 = "TEST_STRING";
        $test1->setNotificationUrl($uri1);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    $test1->setQueueId("TS");
    $test1->setWaitUrl("TS");

    $toHeaderValue1 = $test1->toHeaderValue();
    assert(is_string($toHeaderValue1));
}


}
