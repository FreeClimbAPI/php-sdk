<?php

/**
 * QueueResultAllOfTest
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

use FreeClimb\Api\Model\QueueResultAllOf;
use PHPUnit\Framework\TestCase;

/**
 * QueueResultAllOfTest Class Doc Comment
 *
 * @category    Class
 * @description QueueResultAllOf
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class QueueResultAllOfTest extends TestCase
{
    protected $QueueResultAllOf;

    /**
     * Test "QueueResultAllOf"
     */
    public function setUp() : void
    {
        $this->QueueResultAllOf = new QueueResultAllOf();
    }
    /**
     * Test attribute "account_id"
     */
    public function testPropertyAccountId()
    {
        $this->QueueResultAllOf->setAccountId('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->QueueResultAllOf->getAccountId());
        $this->assertIsString($this->QueueResultAllOf->getAccountId());
        

    }
    /**
     * Test attribute "queue_id"
     */
    public function testPropertyQueueId()
    {
        $this->QueueResultAllOf->setQueueId('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->QueueResultAllOf->getQueueId());
        $this->assertIsString($this->QueueResultAllOf->getQueueId());
        

    }
    /**
     * Test attribute "alias"
     */
    public function testPropertyAlias()
    {
        $this->QueueResultAllOf->setAlias('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->QueueResultAllOf->getAlias());
        $this->assertIsString($this->QueueResultAllOf->getAlias());
        

    }
    /**
     * Test attribute "max_size"
     */
    public function testPropertyMaxSize()
    {
        $this->QueueResultAllOf->setMaxSize(12345);
        $this->assertEquals(12345, $this->QueueResultAllOf->getMaxSize());
        $this->assertIsInt($this->QueueResultAllOf->getMaxSize());
    }
    /**
     * Test attribute "current_size"
     */
    public function testPropertyCurrentSize()
    {
        $this->QueueResultAllOf->setCurrentSize(12345);
        $this->assertEquals(12345, $this->QueueResultAllOf->getCurrentSize());
        $this->assertIsInt($this->QueueResultAllOf->getCurrentSize());
    }
    /**
     * Test attribute "average_queue_removal_time"
     */
    public function testPropertyAverageQueueRemovalTime()
    {
        $this->QueueResultAllOf->setAverageQueueRemovalTime(12345);
        $this->assertEquals(12345, $this->QueueResultAllOf->getAverageQueueRemovalTime());
        $this->assertIsInt($this->QueueResultAllOf->getAverageQueueRemovalTime());
    }
    /**
     * Test attribute "subresource_uris"
     */
    public function testPropertySubresourceUris()
    {
        $this->QueueResultAllOf->setSubresourceUris(new \stdClass);
        $this->assertInstanceOf(\stdClass::class, $this->QueueResultAllOf->getSubresourceUris());
    }

    /**
* Test attribute "QueueResult_allOf"
*/
public function toStringTypeTest() {
    $test1 = new QueueResultAllOf();    
      $test1->setAccountId("TS");
      $test1->setQueueId("TS");
      $test1->setAlias("TS");
      $test1->setMaxSize(1);
      $test1->setCurrentSize(1);
      $test1->setAverageQueueRemovalTime(1);
      $testObject = new stdClass(); 
      $test1->setSubresourceUris($testObject);

    $toString1 = $test1->__toString();
    assert(is_string($toString1));
}

/**
 * Test attribute "QueueResult_allOf"
 */
public function toHeaderValueTest()
{
    $test1 = new QueueResultAllOf();
      $test1->setAccountId("TS");
      $test1->setQueueId("TS");
      $test1->setAlias("TS");
      $test1->setMaxSize(1);
      $test1->setCurrentSize(1);
      $test1->setAverageQueueRemovalTime(1);
      $testObject = new stdClass();
      $test1->setSubresourceUris($testObject);

    $toHeaderValue1 = $test1->toHeaderValue();
    assert(is_string($toHeaderValue1));
}


}
