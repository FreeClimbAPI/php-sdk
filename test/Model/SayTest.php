<?php

/**
 * SayTest
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

use FreeClimb\Api\Model\Say;
use PHPUnit\Framework\TestCase;

/**
 * SayTest Class Doc Comment
 *
 * @category    Class
 * @description The &#x60;Say&#x60; command provides Text-To-Speech (TTS) support. It converts text to speech and then renders it in a female voice back to the caller. &#x60;Say&#x60; is useful in cases where it&#39;s difficult to pre-record a prompt for any reason. &#x60;Say&#x60; does not allow barge-in unless nested within a &#x60;GetSpeech&#x60; command. The file will always be played to completion unless nested.
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class SayTest extends TestCase
{
    protected $Say;

    /**
     * Test "Say"
     */
    public function setUp() : void
    {
        $this->Say = new Say();
    }
    /**
     * Test attribute "text"
     */
    public function testPropertyText()
    {
        $this->Say->setText('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->Say->getText());
        $this->assertIsString($this->Say->getText());
        

    }
    /**
     * Test attribute "language"
     */
    public function testPropertyLanguage()
    {
        $this->Say->setLanguage('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->Say->getLanguage());
        $this->assertIsString($this->Say->getLanguage());
        

    }
    /**
     * Test attribute "loop"
     */
    public function testPropertyLoop()
    {
        $this->Say->setLoop(12345);
        $this->assertEquals(12345, $this->Say->getLoop());
        $this->assertIsInt($this->Say->getLoop());
    }
    /**
     * Test attribute "privacy_mode"
     */
    public function testPropertyPrivacyMode()
    {
        $this->Say->setPrivacyMode(true);
        $this->assertTrue($this->Say->getPrivacyMode());
        $this->assertIsBool($this->Say->getPrivacyMode());
    }

    /**
* Test method toStringTest
*/
public function toStringTest() {
    $test1 = new Say();    
      $test1->setText("TS");
      $test1->setLanguage("TS");
      $test1->setLoop(1);
      $test1->setPrivacyMode(true);

    $toString1 = $test1->__toString();
    assert(is_string($toString1));
}

/**
 * Test method toHeaderValue
 */
public function toHeaderValueTest()
{
    $test1 = new Say();
      $test1->setText("TS");
      $test1->setLanguage("TS");
      $test1->setLoop(1);
      $test1->setPrivacyMode(true);

    $toHeaderValue1 = $test1->toHeaderValue();
    assert(is_string($toHeaderValue1));
}


}
