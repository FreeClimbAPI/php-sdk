<?php

/**
 * SmsTest
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

use FreeClimb\Api\Model\Sms;
use PHPUnit\Framework\TestCase;

/**
 * SmsTest Class Doc Comment
 *
 * @category    Class
 * @description The &#x60;Sms&#x60; command can be used to send an SMS message to a phone number during a phone call. International SMS is disabled by default.
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class SmsTest extends TestCase
{
    protected $Sms;

    /**
     * Test "Sms"
     */
    public function setUp() : void
    {
        $this->Sms = new Sms();
    }
    /**
     * Test attribute "to"
     */
    public function testPropertyTo()
    {
        $this->Sms->setTo('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->Sms->getTo());
        $this->assertIsString($this->Sms->getTo());
        

    }
    /**
     * Test attribute "from"
     */
    public function testPropertyFrom()
    {
        $this->Sms->setFrom('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->Sms->getFrom());
        $this->assertIsString($this->Sms->getFrom());
        

    }
    /**
     * Test attribute "text"
     */
    public function testPropertyText()
    {
        $this->Sms->setText('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->Sms->getText());
        $this->assertIsString($this->Sms->getText());
        

    }
    /**
     * Test attribute "notification_url"
     */
    public function testPropertyNotificationUrl()
    {
        $this->Sms->setNotificationUrl('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->Sms->getNotificationUrl());
        $this->assertIsString($this->Sms->getNotificationUrl());
        

    }

    /**
* Test attribute toStringTest
*/
public function toStringTest() {
    $test1 = new Sms();    
      $test1->setTo("TS");
      $test1->setFrom("TS");
      $test1->setText("TS");
      $test1->setNotificationUrl("TS");

    $toString1 = $test1->__toString();
    assert(is_string($toString1));
}

/**
 * Test attribute toHeaderValue
 */
public function toHeaderValueTest()
{
    $test1 = new Sms();
      $test1->setTo("TS");
      $test1->setFrom("TS");
      $test1->setText("TS");
      $test1->setNotificationUrl("TS");

    $toHeaderValue1 = $test1->toHeaderValue();
    assert(is_string($toHeaderValue1));
}


}
