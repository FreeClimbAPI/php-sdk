<?php

/**
 * CapabilitiesTest
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

use FreeClimb\Api\Model\Capabilities;
use PHPUnit\Framework\TestCase;

/**
 * CapabilitiesTest Class Doc Comment
 *
 * @category    Class
 * @description Details for which features this number may be used.
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class CapabilitiesTest extends TestCase
{
    protected $Capabilities;

    /**
     * Test "Capabilities"
     */
    public function setUp() : void
    {
        $this->Capabilities = new Capabilities();
    }
    /**
     * Test attribute "voice"
     */
    public function testPropertyVoice()
    {
        $this->Capabilities->setVoice(true);
        $this->assertTrue($this->Capabilities->getVoice());
        $this->assertIsBool($this->Capabilities->getVoice());
    }
    /**
     * Test attribute "sms"
     */
    public function testPropertySms()
    {
        $this->Capabilities->setSms(true);
        $this->assertTrue($this->Capabilities->getSms());
        $this->assertIsBool($this->Capabilities->getSms());
    }
    /**
     * Test attribute "toll_free"
     */
    public function testPropertyTollFree()
    {
        $this->Capabilities->setTollFree(true);
        $this->assertTrue($this->Capabilities->getTollFree());
        $this->assertIsBool($this->Capabilities->getTollFree());
    }
    /**
     * Test attribute "ten_dlc"
     */
    public function testPropertyTenDlc()
    {
        $this->Capabilities->setTenDlc(true);
        $this->assertTrue($this->Capabilities->getTenDlc());
        $this->assertIsBool($this->Capabilities->getTenDlc());
    }
    /**
     * Test attribute "short_code"
     */
    public function testPropertyShortCode()
    {
        $this->Capabilities->setShortCode(true);
        $this->assertTrue($this->Capabilities->getShortCode());
        $this->assertIsBool($this->Capabilities->getShortCode());
    }

    /**
* Test method toStringTest
*/
public function toStringTest() {
    $test1 = new Capabilities();    
      $test1->setVoice(true);
      $test1->setSms(true);
      $test1->setTollFree(true);
      $test1->setTenDlc(true);
      $test1->setShortCode(true);

    $toString1 = $test1->__toString();
    assert(is_string($toString1));
}

/**
 * Test method toHeaderValue
 */
public function toHeaderValueTest()
{
    $test1 = new Capabilities();
      $test1->setVoice(true);
      $test1->setSms(true);
      $test1->setTollFree(true);
      $test1->setTenDlc(true);
      $test1->setShortCode(true);

    $toHeaderValue1 = $test1->toHeaderValue();
    assert(is_string($toHeaderValue1));
}


}
