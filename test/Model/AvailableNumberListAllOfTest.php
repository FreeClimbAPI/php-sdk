<?php

/**
 * AvailableNumberListAllOfTest
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

use FreeClimb\Api\Model\AvailableNumberListAllOf;
use PHPUnit\Framework\TestCase;

/**
 * AvailableNumberListAllOfTest Class Doc Comment
 *
 * @category    Class
 * @description AvailableNumberListAllOf
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class AvailableNumberListAllOfTest extends TestCase
{
    protected $AvailableNumberListAllOf;

    /**
     * Test "AvailableNumberListAllOf"
     */
    public function setUp() : void
    {
        $this->AvailableNumberListAllOf = new AvailableNumberListAllOf();
    }
    /**
     * Test attribute "available_phone_numbers"
     */
    public function testPropertyAvailablePhoneNumbers()
    {
        $this->AvailableNumberListAllOf->setAvailablePhoneNumbers([]);
        $this->assertEquals([], $this->AvailableNumberListAllOf->getAvailablePhoneNumbers());
        $this->assertIsArray($this->AvailableNumberListAllOf->getAvailablePhoneNumbers());
    }

    /**
* Test attribute "AvailableNumberList_allOf"
*/
public function toStringTypeTest() {
    $test1 = new AvailableNumberListAllOf();    
      $testList = [];
      $test1->setAvailablePhoneNumbers($testList);

    $toString1 = $test1->__toString();
    assert(is_string($toString1));
}

/**
 * Test attribute "AvailableNumberList_allOf"
 */
public function toHeaderValueTest()
{
    $test1 = new AvailableNumberListAllOf();
      $testList = [];
      $test1->setAvailablePhoneNumbers($testList);

    $toHeaderValue1 = $test1->toHeaderValue();
    assert(is_string($toHeaderValue1));
}


}
