<?php

/**
 * BuyIncomingNumberRequestTest
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

use FreeClimb\Api\Model\BuyIncomingNumberRequest;
use PHPUnit\Framework\TestCase;

/**
 * BuyIncomingNumberRequestTest Class Doc Comment
 *
 * @category    Class
 * @description BuyIncomingNumberRequest
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class BuyIncomingNumberRequestTest extends TestCase
{
    protected $BuyIncomingNumberRequest;

    /**
     * Test "BuyIncomingNumberRequest"
     */
    public function setUp() : void
    {
        $this->BuyIncomingNumberRequest = new BuyIncomingNumberRequest();
    }
    /**
     * Test attribute "phone_number"
     */
    public function testPropertyPhoneNumber()
    {
        $this->BuyIncomingNumberRequest->setPhoneNumber('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->BuyIncomingNumberRequest->getPhoneNumber());
        $this->assertIsString($this->BuyIncomingNumberRequest->getPhoneNumber());
        

    }
    /**
     * Test attribute "alias"
     */
    public function testPropertyAlias()
    {
        $this->BuyIncomingNumberRequest->setAlias('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->BuyIncomingNumberRequest->getAlias());
        $this->assertIsString($this->BuyIncomingNumberRequest->getAlias());
        

    }
    /**
     * Test attribute "application_id"
     */
    public function testPropertyApplicationId()
    {
        $this->BuyIncomingNumberRequest->setApplicationId('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->BuyIncomingNumberRequest->getApplicationId());
        $this->assertIsString($this->BuyIncomingNumberRequest->getApplicationId());
        

    }

    /**
* Test attribute toStringTest
*/
public function toStringTest() {
    $test1 = new BuyIncomingNumberRequest();    
      $test1->setPhoneNumber("TS");
      $test1->setAlias("TS");
      $test1->setApplicationId("TS");

    $toString1 = $test1->__toString();
    assert(is_string($toString1));
}

/**
 * Test attribute toHeaderValue
 */
public function toHeaderValueTest()
{
    $test1 = new BuyIncomingNumberRequest();
      $test1->setPhoneNumber("TS");
      $test1->setAlias("TS");
      $test1->setApplicationId("TS");

    $toHeaderValue1 = $test1->toHeaderValue();
    assert(is_string($toHeaderValue1));
}


}
