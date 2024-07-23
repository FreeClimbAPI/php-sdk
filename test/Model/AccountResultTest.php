<?php

/**
 * AccountResultTest
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

use FreeClimb\Api\Model\AccountResult;
use PHPUnit\Framework\TestCase;

/**
 * AccountResultTest Class Doc Comment
 *
 * @category    Class
 * @description AccountResult
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class AccountResultTest extends TestCase
{
    protected $AccountResult;

    /**
     * Test "AccountResult"
     */
    public function setUp() : void
    {
        $this->AccountResult = new AccountResult();
    }
    /**
     * Test attribute "uri"
     */
    public function testPropertyUri()
    {
        $this->AccountResult->setUri('TS');
        $this->assertEquals('TS', $this->AccountResult->getUri());
        $this->assertIsString($this->AccountResult->getUri());
    }
    /**
     * Test attribute "date_created"
     */
    public function testPropertyDateCreated()
    {
        $this->AccountResult->setDateCreated('TS');
        $this->assertEquals('TS', $this->AccountResult->getDateCreated());
        $this->assertIsString($this->AccountResult->getDateCreated());
    }
    /**
     * Test attribute "date_updated"
     */
    public function testPropertyDateUpdated()
    {
        $this->AccountResult->setDateUpdated('TS');
        $this->assertEquals('TS', $this->AccountResult->getDateUpdated());
        $this->assertIsString($this->AccountResult->getDateUpdated());
    }
    /**
     * Test attribute "revision"
     */
    public function testPropertyRevision()
    {
        
        
        $this->AccountResult->setRevision(1);
        $this->assertEquals(1, $this->AccountResult->getRevision());
        $this->assertIsNumeric($this->AccountResult->getRevision());
        
    }
    /**
     * Test attribute "account_id"
     */
    public function testPropertyAccountId()
    {
        $this->AccountResult->setAccountId('TS');
        $this->assertEquals('TS', $this->AccountResult->getAccountId());
        $this->assertIsString($this->AccountResult->getAccountId());
    }
    /**
     * Test attribute "api_key"
     */
    public function testPropertyApiKey()
    {
        $this->AccountResult->setApiKey('TS');
        $this->assertEquals('TS', $this->AccountResult->getApiKey());
        $this->assertIsString($this->AccountResult->getApiKey());
    }
    /**
     * Test attribute "alias"
     */
    public function testPropertyAlias()
    {
        $this->AccountResult->setAlias('TS');
        $this->assertEquals('TS', $this->AccountResult->getAlias());
        $this->assertIsString($this->AccountResult->getAlias());
    }
    /**
     * Test attribute "label"
     */
    public function testPropertyLabel()
    {
        $this->AccountResult->setLabel('TS');
        $this->assertEquals('TS', $this->AccountResult->getLabel());
        $this->assertIsString($this->AccountResult->getLabel());
    }
    /**
     * Test attribute "type"
     */
    public function testPropertyType()
    {
        $this->AccountResult->setType(\FreeClimb\Api\Model\AccountType::TRIAL);
        $this->assertEquals(\FreeClimb\Api\Model\AccountType::TRIAL, $this->AccountResult->getType());
        $this->AccountResult->setType(\FreeClimb\Api\Model\AccountType::FULL);
        $this->assertEquals(\FreeClimb\Api\Model\AccountType::FULL, $this->AccountResult->getType());
    }
    /**
     * Test attribute "status"
     */
    public function testPropertyStatus()
    {
        $this->AccountResult->setStatus(\FreeClimb\Api\Model\AccountStatus::CLOSED);
        $this->assertEquals(\FreeClimb\Api\Model\AccountStatus::CLOSED, $this->AccountResult->getStatus());
        $this->AccountResult->setStatus(\FreeClimb\Api\Model\AccountStatus::SUSPENDED);
        $this->assertEquals(\FreeClimb\Api\Model\AccountStatus::SUSPENDED, $this->AccountResult->getStatus());
        $this->AccountResult->setStatus(\FreeClimb\Api\Model\AccountStatus::ACTIVE);
        $this->assertEquals(\FreeClimb\Api\Model\AccountStatus::ACTIVE, $this->AccountResult->getStatus());
    }
    /**
     * Test attribute "subresource_uris"
     */
    public function testPropertySubresourceUris()
    {
        $this->AccountResult->setSubresourceUris(new \stdClass);
        $this->assertInstanceOf(\stdClass::class, $this->AccountResult->getSubresourceUris());
    }

    /**
* Test method toStringTest
*/
public function toStringTest() {
    $test1 = new AccountResult();    
    $test1->setUri("TS");
    $test1->setDateCreated("TS");
    $test1->setDateUpdated("TS");
    $test1->setRevision(1);
    $test1->setAccountId("TS");
    $test1->setApiKey("TS");
    $test1->setAlias("TS");
    $test1->setLabel("TS");
    $test1->setType(\FreeClimb\Api\Model\AccountType::TRIAL);
    $test1->setStatus(\FreeClimb\Api\Model\AccountStatus::CLOSED);
    $testObject = new stdClass(); 
    $test1->setSubresourceUris($testObject);

    $toString1 = $test1->__toString();
    assert(is_string($toString1));
}

/**
 * Test method toHeaderValue
 */
public function toHeaderValueTest()
{
    $test1 = new AccountResult();
    $test1->setUri("TS");
    $test1->setDateCreated("TS");
    $test1->setDateUpdated("TS");
    $test1->setRevision(1);
    $test1->setAccountId("TS");
    $test1->setApiKey("TS");
    $test1->setAlias("TS");
    $test1->setLabel("TS");
    $test1->setType(\FreeClimb\Api\Model\AccountType::TRIAL);
    $test1->setStatus(\FreeClimb\Api\Model\AccountStatus::CLOSED);
    $testObject = new stdClass();
    $test1->setSubresourceUris($testObject);

    $toHeaderValue1 = $test1->toHeaderValue();
    assert(is_string($toHeaderValue1));
}


}
