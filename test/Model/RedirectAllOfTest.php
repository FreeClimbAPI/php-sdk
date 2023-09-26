<?php

/**
 * RedirectAllOfTest
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

use FreeClimb\Api\Model\RedirectAllOf;
use PHPUnit\Framework\TestCase;

/**
 * RedirectAllOfTest Class Doc Comment
 *
 * @category    Class
 * @description RedirectAllOf
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class RedirectAllOfTest extends TestCase
{
    protected $RedirectAllOf;

    /**
     * Test "RedirectAllOf"
     */
    public function setUp() : void
    {
        $this->RedirectAllOf = new RedirectAllOf();
    }
    /**
     * Test attribute "action_url"
     */
    public function testPropertyActionUrl()
    {
        $this->RedirectAllOf->setActionUrl('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->RedirectAllOf->getActionUrl());
        $this->assertIsString($this->RedirectAllOf->getActionUrl());
        

    }

    /**
* Test attribute toStringTest
*/
public function toStringTest() {
    $test1 = new RedirectAllOf();    
      try {
          $uri1 = "TEST_STRING";
          $test1->setActionUrl($uri1);
      } catch (Exception $e) {
          echo $e->getMessage();
      }

    $toString1 = $test1->__toString();
    assert(is_string($toString1));
}

/**
 * Test attribute toHeaderValue
 */
public function toHeaderValueTest()
{
    $test1 = new RedirectAllOf();
      try {
          $uri1 = "TEST_STRING";
          $test1->setActionUrl($uri1);
      } catch (Exception $e) {
          echo $e->getMessage();
      }

    $toHeaderValue1 = $test1->toHeaderValue();
    assert(is_string($toHeaderValue1));
}


}
