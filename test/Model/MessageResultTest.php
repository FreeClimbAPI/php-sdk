<?php

/**
 * MessageResultTest
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

use FreeClimb\Api\Model\MessageResult;
use PHPUnit\Framework\TestCase;

/**
 * MessageResultTest Class Doc Comment
 *
 * @category    Class
 * @description MessageResult
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class MessageResultTest extends TestCase
{
    protected $MessageResult;

    /**
     * Test "MessageResult"
     */
    public function setUp() : void
    {
        $this->MessageResult = new MessageResult();
    }
    /**
     * Test attribute "uri"
     */
    public function testPropertyUri()
    {
        $this->MessageResult->setUri('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->MessageResult->getUri());
        $this->assertIsString($this->MessageResult->getUri());
        

    }
    /**
     * Test attribute "date_created"
     */
    public function testPropertyDateCreated()
    {
        $this->MessageResult->setDateCreated('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->MessageResult->getDateCreated());
        $this->assertIsString($this->MessageResult->getDateCreated());
        

    }
    /**
     * Test attribute "date_updated"
     */
    public function testPropertyDateUpdated()
    {
        $this->MessageResult->setDateUpdated('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->MessageResult->getDateUpdated());
        $this->assertIsString($this->MessageResult->getDateUpdated());
        

    }
    /**
     * Test attribute "revision"
     */
    public function testPropertyRevision()
    {
        $this->MessageResult->setRevision(12345);
        $this->assertEquals(12345, $this->MessageResult->getRevision());
        $this->assertIsInt($this->MessageResult->getRevision());
    }
    /**
     * Test attribute "account_id"
     */
    public function testPropertyAccountId()
    {
        $this->MessageResult->setAccountId('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->MessageResult->getAccountId());
        $this->assertIsString($this->MessageResult->getAccountId());
        

    }
    /**
     * Test attribute "message_id"
     */
    public function testPropertyMessageId()
    {
        $this->MessageResult->setMessageId('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->MessageResult->getMessageId());
        $this->assertIsString($this->MessageResult->getMessageId());
        

    }
    /**
     * Test attribute "status"
     */
    public function testPropertyStatus()
    {
        $this->MessageResult->setStatus(\FreeClimb\Api\Model\MessageStatus::NEW);
        $this->assertEquals(\FreeClimb\Api\Model\MessageStatus::NEW, $this->MessageResult->getStatus());
        $this->MessageResult->setStatus(\FreeClimb\Api\Model\MessageStatus::QUEUED);
        $this->assertEquals(\FreeClimb\Api\Model\MessageStatus::QUEUED, $this->MessageResult->getStatus());
        $this->MessageResult->setStatus(\FreeClimb\Api\Model\MessageStatus::REJECTED);
        $this->assertEquals(\FreeClimb\Api\Model\MessageStatus::REJECTED, $this->MessageResult->getStatus());
        $this->MessageResult->setStatus(\FreeClimb\Api\Model\MessageStatus::SENDING);
        $this->assertEquals(\FreeClimb\Api\Model\MessageStatus::SENDING, $this->MessageResult->getStatus());
        $this->MessageResult->setStatus(\FreeClimb\Api\Model\MessageStatus::SENT);
        $this->assertEquals(\FreeClimb\Api\Model\MessageStatus::SENT, $this->MessageResult->getStatus());
        $this->MessageResult->setStatus(\FreeClimb\Api\Model\MessageStatus::FAILED);
        $this->assertEquals(\FreeClimb\Api\Model\MessageStatus::FAILED, $this->MessageResult->getStatus());
        $this->MessageResult->setStatus(\FreeClimb\Api\Model\MessageStatus::RECEIVED);
        $this->assertEquals(\FreeClimb\Api\Model\MessageStatus::RECEIVED, $this->MessageResult->getStatus());
        $this->MessageResult->setStatus(\FreeClimb\Api\Model\MessageStatus::UNDELIVERED);
        $this->assertEquals(\FreeClimb\Api\Model\MessageStatus::UNDELIVERED, $this->MessageResult->getStatus());
        $this->MessageResult->setStatus(\FreeClimb\Api\Model\MessageStatus::EXPIRED);
        $this->assertEquals(\FreeClimb\Api\Model\MessageStatus::EXPIRED, $this->MessageResult->getStatus());
        $this->MessageResult->setStatus(\FreeClimb\Api\Model\MessageStatus::DELETED);
        $this->assertEquals(\FreeClimb\Api\Model\MessageStatus::DELETED, $this->MessageResult->getStatus());
        $this->MessageResult->setStatus(\FreeClimb\Api\Model\MessageStatus::UNKNOWN);
        $this->assertEquals(\FreeClimb\Api\Model\MessageStatus::UNKNOWN, $this->MessageResult->getStatus());
    }
    /**
     * Test attribute "from"
     */
    public function testPropertyFrom()
    {
        $this->MessageResult->setFrom('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->MessageResult->getFrom());
        $this->assertIsString($this->MessageResult->getFrom());
        

    }
    /**
     * Test attribute "to"
     */
    public function testPropertyTo()
    {
        $this->MessageResult->setTo('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->MessageResult->getTo());
        $this->assertIsString($this->MessageResult->getTo());
        

    }
    /**
     * Test attribute "text"
     */
    public function testPropertyText()
    {
        $this->MessageResult->setText('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->MessageResult->getText());
        $this->assertIsString($this->MessageResult->getText());
        

    }
    /**
     * Test attribute "direction"
     */
    public function testPropertyDirection()
    {
        $this->MessageResult->setDirection('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->MessageResult->getDirection());
        $this->assertIsString($this->MessageResult->getDirection());
        

    }
    /**
     * Test attribute "notification_url"
     */
    public function testPropertyNotificationUrl()
    {
        $this->MessageResult->setNotificationUrl('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->MessageResult->getNotificationUrl());
        $this->assertIsString($this->MessageResult->getNotificationUrl());
        

    }
    /**
     * Test attribute "brand_id"
     */
    public function testPropertyBrandId()
    {
        $this->MessageResult->setBrandId('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->MessageResult->getBrandId());
        $this->assertIsString($this->MessageResult->getBrandId());
        

    }
    /**
     * Test attribute "campaign_id"
     */
    public function testPropertyCampaignId()
    {
        $this->MessageResult->setCampaignId('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->MessageResult->getCampaignId());
        $this->assertIsString($this->MessageResult->getCampaignId());
        

    }
    /**
     * Test attribute "segment_count"
     */
    public function testPropertySegmentCount()
    {
        $this->MessageResult->setSegmentCount(12345);
        $this->assertEquals(12345, $this->MessageResult->getSegmentCount());
        $this->assertIsNumeric($this->MessageResult->getSegmentCount());
    }

    /**
* Test attribute "MessageResult"
*/
public function toStringTypeTest() {
    $test1 = new MessageResult();    
      $test1->setUri("TS");
      $test1->setDateCreated("TS");
      $test1->setDateUpdated("TS");
      $test1->setRevision(1);
      $test1->setAccountId("TS");
      $test1->setMessageId("TS");
      $test1->setStatus(\FreeClimb\Api\Model\MessageStatus::NEW);
      $test1->setFrom("TS");
      $test1->setTo("TS");
      $test1->setText("TS");
      $test1->setDirection("TS");
      $test1->setNotificationUrl("TS");
      $test1->setBrandId("TS");
      $test1->setCampaignId("TS");

    $toString1 = $test1->__toString();
    assert(is_string($toString1));
}

/**
 * Test attribute "MessageResult"
 */
public function toHeaderValueTest()
{
    $test1 = new MessageResult();
      $test1->setUri("TS");
      $test1->setDateCreated("TS");
      $test1->setDateUpdated("TS");
      $test1->setRevision(1);
      $test1->setAccountId("TS");
      $test1->setMessageId("TS");
      $test1->setStatus(\FreeClimb\Api\Model\MessageStatus::NEW);
      $test1->setFrom("TS");
      $test1->setTo("TS");
      $test1->setText("TS");
      $test1->setDirection("TS");
      $test1->setNotificationUrl("TS");
      $test1->setBrandId("TS");
      $test1->setCampaignId("TS");

    $toHeaderValue1 = $test1->toHeaderValue();
    assert(is_string($toHeaderValue1));
}


}
