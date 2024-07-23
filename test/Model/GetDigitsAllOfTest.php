<?php

/**
 * GetDigitsAllOfTest
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

use FreeClimb\Api\Model\GetDigitsAllOf;
use PHPUnit\Framework\TestCase;

/**
 * GetDigitsAllOfTest Class Doc Comment
 *
 * @category    Class
 * @description GetDigitsAllOf
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class GetDigitsAllOfTest extends TestCase
{
    protected $GetDigitsAllOf;

    /**
     * Test "GetDigitsAllOf"
     */
    public function setUp() : void
    {
        $this->GetDigitsAllOf = new GetDigitsAllOf();
    }
    /**
     * Test attribute "action_url"
     */
    public function testPropertyActionUrl()
    {
        $this->GetDigitsAllOf->setActionUrl('TS');
        $this->assertEquals('TS', $this->GetDigitsAllOf->getActionUrl());
        $this->assertIsString($this->GetDigitsAllOf->getActionUrl());
    }
    /**
     * Test attribute "digit_timeout_ms"
     */
    public function testPropertyDigitTimeoutMs()
    {
        
        
        $this->GetDigitsAllOf->setDigitTimeoutMs(1);
        $this->assertEquals(1, $this->GetDigitsAllOf->getDigitTimeoutMs());
        $this->assertIsNumeric($this->GetDigitsAllOf->getDigitTimeoutMs());
        
    }
    /**
     * Test attribute "finish_on_key"
     */
    public function testPropertyFinishOnKey()
    {
        $this->GetDigitsAllOf->setFinishOnKey('TS');
        $this->assertEquals('TS', $this->GetDigitsAllOf->getFinishOnKey());
        $this->assertIsString($this->GetDigitsAllOf->getFinishOnKey());
    }
    /**
     * Test attribute "flush_buffer"
     */
    public function testPropertyFlushBuffer()
    {
        $this->GetDigitsAllOf->setFlushBuffer(false);
        $this->assertFalse($this->GetDigitsAllOf->getFlushBuffer());
        $this->assertIsBool($this->GetDigitsAllOf->getFlushBuffer());
    }
    /**
     * Test attribute "initial_timeout_ms"
     */
    public function testPropertyInitialTimeoutMs()
    {
        
        
        $this->GetDigitsAllOf->setInitialTimeoutMs(1);
        $this->assertEquals(1, $this->GetDigitsAllOf->getInitialTimeoutMs());
        $this->assertIsNumeric($this->GetDigitsAllOf->getInitialTimeoutMs());
        
    }
    /**
     * Test attribute "max_digits"
     */
    public function testPropertyMaxDigits()
    {
        
        
        $this->GetDigitsAllOf->setMaxDigits(1);
        $this->assertEquals(1, $this->GetDigitsAllOf->getMaxDigits());
        $this->assertIsNumeric($this->GetDigitsAllOf->getMaxDigits());
        
    }
    /**
     * Test attribute "min_digits"
     */
    public function testPropertyMinDigits()
    {
        
        
        $this->GetDigitsAllOf->setMinDigits(1);
        $this->assertEquals(1, $this->GetDigitsAllOf->getMinDigits());
        $this->assertIsNumeric($this->GetDigitsAllOf->getMinDigits());
        
    }
    /**
     * Test attribute "prompts"
     */
    public function testPropertyPrompts()
    {
        $this->GetDigitsAllOf->setPrompts([]);
        $this->assertEquals([], $this->GetDigitsAllOf->getPrompts());
        $this->assertIsArray($this->GetDigitsAllOf->getPrompts());
    }
    /**
     * Test attribute "privacy_mode"
     */
    public function testPropertyPrivacyMode()
    {
        $this->GetDigitsAllOf->setPrivacyMode(false);
        $this->assertFalse($this->GetDigitsAllOf->getPrivacyMode());
        $this->assertIsBool($this->GetDigitsAllOf->getPrivacyMode());
    }

    /**
* Test method toStringTest
*/
public function toStringTest() {
    $test1 = new GetDigitsAllOf();    
    try {
        $uri1 = "TEST_STRING";
        $test1->setActionUrl($uri1);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    $test1->setDigitTimeoutMs(1);
    $test1->setFinishOnKey("TS");
    $test1->setFlushBuffer(true);
    $test1->setInitialTimeoutMs(1);
    $test1->setMaxDigits(1);
    $test1->setMinDigits(1);
    $testList = [];
    $test1->setPrompts($testList);
    $test1->setPrivacyMode(true);

    $toString1 = $test1->__toString();
    assert(is_string($toString1));
}

/**
 * Test method toHeaderValue
 */
public function toHeaderValueTest()
{
    $test1 = new GetDigitsAllOf();
    try {
        $uri1 = "TEST_STRING";
        $test1->setActionUrl($uri1);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    $test1->setDigitTimeoutMs(1);
    $test1->setFinishOnKey("TS");
    $test1->setFlushBuffer(true);
    $test1->setInitialTimeoutMs(1);
    $test1->setMaxDigits(1);
    $test1->setMinDigits(1);
    $testList = [];
    $test1->setPrompts($testList);
    $test1->setPrivacyMode(true);

    $toHeaderValue1 = $test1->toHeaderValue();
    assert(is_string($toHeaderValue1));
}


}
