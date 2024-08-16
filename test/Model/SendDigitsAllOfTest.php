<?php

/**
 * SendDigitsAllOfTest
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

use FreeClimb\Api\Model\SendDigitsAllOf;
use PHPUnit\Framework\TestCase;

/**
 * SendDigitsAllOfTest Class Doc Comment
 *
 * @category    Class
 * @description SendDigitsAllOf
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class SendDigitsAllOfTest extends TestCase
{
    protected $SendDigitsAllOf;

    /**
     * Test "SendDigitsAllOf"
     */
    public function setUp() : void
    {
        $this->SendDigitsAllOf = new SendDigitsAllOf();
    }
    /**
     * Test attribute "digits"
     */
    public function testPropertyDigits()
    {
        $this->SendDigitsAllOf->setDigits('TS');
        $this->assertEquals('TS', $this->SendDigitsAllOf->getDigits());
        $this->assertIsString($this->SendDigitsAllOf->getDigits());
    }
    /**
     * Test attribute "pause_ms"
     */
    public function testPropertyPauseMs()
    {
        
        
        $this->SendDigitsAllOf->setPauseMs(1);
        $this->assertEquals(1, $this->SendDigitsAllOf->getPauseMs());
        $this->assertIsNumeric($this->SendDigitsAllOf->getPauseMs());
        
    }
    /**
     * Test attribute "privacy_mode"
     */
    public function testPropertyPrivacyMode()
    {
        $this->SendDigitsAllOf->setPrivacyMode(false);
        $this->assertFalse($this->SendDigitsAllOf->getPrivacyMode());
        $this->assertIsBool($this->SendDigitsAllOf->getPrivacyMode());
    }

    /**
* Test method toStringTest
*/
public function toStringTest() {
    $test1 = new SendDigitsAllOf();    
    $test1->setDigits("TS");
    $test1->setPauseMs(1);
    $test1->setPrivacyMode(true);

    $toString1 = $test1->__toString();
    assert(is_string($toString1));
}

/**
 * Test method toHeaderValue
 */
public function toHeaderValueTest()
{
    $test1 = new SendDigitsAllOf();
    $test1->setDigits("TS");
    $test1->setPauseMs(1);
    $test1->setPrivacyMode(true);

    $toHeaderValue1 = $test1->toHeaderValue();
    assert(is_string($toHeaderValue1));
}


}
