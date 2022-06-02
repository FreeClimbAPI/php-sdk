<?php
/**
 * QueueResultTest
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
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace FreeClimb\Api\Test\Model;

use FreeClimb\Api\Model\QueueResult;
use PHPUnit\Framework\TestCase;

/**
 * QueueResultTest Class Doc Comment
 *
 * @category    Class
 * @description QueueResult
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class QueueResultTest extends TestCase
{
    protected $QueueResult;

    /**
     * Test "QueueResult"
     */
    public function setUp() : void
    {
        $this->QueueResult = new QueueResult();
    }
    /**
     * Test attribute "uri"
     */
    public function testPropertyUri()
    {
        $this->QueueResult->setUri('TEST_STRING');
        $this->assertStringContainsString($this->QueueResult->getUri(), 'TEST_STRING');
        $this->assertIsString($this->QueueResult->getUri());
        

    }
    /**
     * Test attribute "date_created"
     */
    public function testPropertyDateCreated()
    {
        $this->QueueResult->setDateCreated('TEST_STRING');
        $this->assertStringContainsString($this->QueueResult->getDateCreated(), 'TEST_STRING');
        $this->assertIsString($this->QueueResult->getDateCreated());
        

    }
    /**
     * Test attribute "date_updated"
     */
    public function testPropertyDateUpdated()
    {
        $this->QueueResult->setDateUpdated('TEST_STRING');
        $this->assertStringContainsString($this->QueueResult->getDateUpdated(), 'TEST_STRING');
        $this->assertIsString($this->QueueResult->getDateUpdated());
        

    }
    /**
     * Test attribute "revision"
     */
    public function testPropertyRevision()
    {
        $this->QueueResult->setRevision(12345);
        $this->assertEquals($this->QueueResult->getRevision(), 12345);
        $this->assertIsInt($this->QueueResult->getRevision());
    }
    /**
     * Test attribute "account_id"
     */
    public function testPropertyAccountId()
    {
        $this->QueueResult->setAccountId('TEST_STRING');
        $this->assertStringContainsString($this->QueueResult->getAccountId(), 'TEST_STRING');
        $this->assertIsString($this->QueueResult->getAccountId());
        

    }
    /**
     * Test attribute "queue_id"
     */
    public function testPropertyQueueId()
    {
        $this->QueueResult->setQueueId('TEST_STRING');
        $this->assertStringContainsString($this->QueueResult->getQueueId(), 'TEST_STRING');
        $this->assertIsString($this->QueueResult->getQueueId());
        

    }
    /**
     * Test attribute "alias"
     */
    public function testPropertyAlias()
    {
        $this->QueueResult->setAlias('TEST_STRING');
        $this->assertStringContainsString($this->QueueResult->getAlias(), 'TEST_STRING');
        $this->assertIsString($this->QueueResult->getAlias());
        

    }
    /**
     * Test attribute "max_size"
     */
    public function testPropertyMaxSize()
    {
        $this->QueueResult->setMaxSize(12345);
        $this->assertEquals($this->QueueResult->getMaxSize(), 12345);
        $this->assertIsInt($this->QueueResult->getMaxSize());
    }
    /**
     * Test attribute "current_size"
     */
    public function testPropertyCurrentSize()
    {
        $this->QueueResult->setCurrentSize('TEST_STRING');
        $this->assertStringContainsString($this->QueueResult->getCurrentSize(), 'TEST_STRING');
        $this->assertIsString($this->QueueResult->getCurrentSize());
        

    }
    /**
     * Test attribute "average_wait_time"
     */
    public function testPropertyAverageWaitTime()
    {
        $this->QueueResult->setAverageWaitTime('TEST_STRING');
        $this->assertStringContainsString($this->QueueResult->getAverageWaitTime(), 'TEST_STRING');
        $this->assertIsString($this->QueueResult->getAverageWaitTime());
        

    }
    /**
     * Test attribute "subresource_uris"
     */
    public function testPropertySubresourceUris()
    {
        $this->QueueResult->setSubresourceUris(new \stdClass);
        $this->assertIsObject($this->QueueResult->getSubresourceUris());
    }
}
