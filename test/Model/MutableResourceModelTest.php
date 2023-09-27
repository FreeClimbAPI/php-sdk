<?php

/**
 * MutableResourceModelTest
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

use FreeClimb\Api\Model\MutableResourceModel;
use PHPUnit\Framework\TestCase;

/**
 * MutableResourceModelTest Class Doc Comment
 *
 * @category    Class
 * @description MutableResourceModel
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class MutableResourceModelTest extends TestCase
{
    protected $MutableResourceModel;

    /**
     * Test "MutableResourceModel"
     */
    public function setUp() : void
    {
        $this->MutableResourceModel = new MutableResourceModel();
    }
    /**
     * Test attribute "uri"
     */
    public function testPropertyUri()
    {
        $this->MutableResourceModel->setUri('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->MutableResourceModel->getUri());
        $this->assertIsString($this->MutableResourceModel->getUri());
        

    }
    /**
     * Test attribute "date_created"
     */
    public function testPropertyDateCreated()
    {
        $this->MutableResourceModel->setDateCreated('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->MutableResourceModel->getDateCreated());
        $this->assertIsString($this->MutableResourceModel->getDateCreated());
        

    }
    /**
     * Test attribute "date_updated"
     */
    public function testPropertyDateUpdated()
    {
        $this->MutableResourceModel->setDateUpdated('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->MutableResourceModel->getDateUpdated());
        $this->assertIsString($this->MutableResourceModel->getDateUpdated());
        

    }
    /**
     * Test attribute "revision"
     */
    public function testPropertyRevision()
    {
        $this->MutableResourceModel->setRevision(12345);
        $this->assertEquals(12345, $this->MutableResourceModel->getRevision());
        $this->assertIsInt($this->MutableResourceModel->getRevision());
    }

    /**
* Test method toStringTest
*/
public function toStringTest() {
    $test1 = new MutableResourceModel();    
      $test1->setUri("TS");
      $test1->setDateCreated("TS");
      $test1->setDateUpdated("TS");
      $test1->setRevision(1);

    $toString1 = $test1->__toString();
    assert(is_string($toString1));
}

/**
 * Test method toHeaderValue
 */
public function toHeaderValueTest()
{
    $test1 = new MutableResourceModel();
      $test1->setUri("TS");
      $test1->setDateCreated("TS");
      $test1->setDateUpdated("TS");
      $test1->setRevision(1);

    $toHeaderValue1 = $test1->toHeaderValue();
    assert(is_string($toHeaderValue1));
}


}
