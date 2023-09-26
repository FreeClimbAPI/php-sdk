<?php

/**
 * RecordUtteranceTest
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

use FreeClimb\Api\Model\RecordUtterance;
use PHPUnit\Framework\TestCase;

/**
 * RecordUtteranceTest Class Doc Comment
 *
 * @category    Class
 * @description The &#x60;RecordUtterance&#x60; command records the caller&#39;s voice and returns the URL of a file containing the audio recording. &#x60;RecordUtterance&#x60; is blocking and is a terminal command. As such, the &#x60;actionUrl&#x60; property is required, and control of the Call picks up using the PerCL returned in response to the &#x60;actionUrl&#x60;. Recording information is returned in the &#x60;actionUrl&#x60; request.
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class RecordUtteranceTest extends TestCase
{
    protected $RecordUtterance;

    /**
     * Test "RecordUtterance"
     */
    public function setUp() : void
    {
        $this->RecordUtterance = new RecordUtterance();
    }
    /**
     * Test attribute "action_url"
     */
    public function testPropertyActionUrl()
    {
        $this->RecordUtterance->setActionUrl('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->RecordUtterance->getActionUrl());
        $this->assertIsString($this->RecordUtterance->getActionUrl());
        

    }
    /**
     * Test attribute "silence_timeout_ms"
     */
    public function testPropertySilenceTimeoutMs()
    {
        $this->RecordUtterance->setSilenceTimeoutMs(12345);
        $this->assertEquals(12345, $this->RecordUtterance->getSilenceTimeoutMs());
        $this->assertIsInt($this->RecordUtterance->getSilenceTimeoutMs());
    }
    /**
     * Test attribute "finish_on_key"
     */
    public function testPropertyFinishOnKey()
    {
        $this->RecordUtterance->setFinishOnKey('TEST_STRING');
        $this->assertEquals('TEST_STRING', $this->RecordUtterance->getFinishOnKey());
        $this->assertIsString($this->RecordUtterance->getFinishOnKey());
        

    }
    /**
     * Test attribute "max_length_sec"
     */
    public function testPropertyMaxLengthSec()
    {
        $this->RecordUtterance->setMaxLengthSec(12345);
        $this->assertEquals(12345, $this->RecordUtterance->getMaxLengthSec());
        $this->assertIsInt($this->RecordUtterance->getMaxLengthSec());
    }
    /**
     * Test attribute "play_beep"
     */
    public function testPropertyPlayBeep()
    {
        $this->RecordUtterance->setPlayBeep(true);
        $this->assertTrue($this->RecordUtterance->getPlayBeep());
        $this->assertIsBool($this->RecordUtterance->getPlayBeep());
    }
    /**
     * Test attribute "auto_start"
     */
    public function testPropertyAutoStart()
    {
        $this->RecordUtterance->setAutoStart(true);
        $this->assertTrue($this->RecordUtterance->getAutoStart());
        $this->assertIsBool($this->RecordUtterance->getAutoStart());
    }
    /**
     * Test attribute "privacy_mode"
     */
    public function testPropertyPrivacyMode()
    {
        $this->RecordUtterance->setPrivacyMode(true);
        $this->assertTrue($this->RecordUtterance->getPrivacyMode());
        $this->assertIsBool($this->RecordUtterance->getPrivacyMode());
    }

    /**
* Test attribute toStringTest
*/
public function toStringTest() {
    $test1 = new RecordUtterance();    
      try {
          $uri1 = "TEST_STRING";
          $test1->setActionUrl($uri1);
      } catch (Exception $e) {
          echo $e->getMessage();
      }
      $test1->setSilenceTimeoutMs(1);
      $test1->setFinishOnKey("TS");
      $test1->setMaxLengthSec(1);
      $test1->setPlayBeep(true);
      $test1->setAutoStart(true);
      $test1->setPrivacyMode(true);

    $toString1 = $test1->__toString();
    assert(is_string($toString1));
}

/**
 * Test attribute toHeaderValue
 */
public function toHeaderValueTest()
{
    $test1 = new RecordUtterance();
      try {
          $uri1 = "TEST_STRING";
          $test1->setActionUrl($uri1);
      } catch (Exception $e) {
          echo $e->getMessage();
      }
      $test1->setSilenceTimeoutMs(1);
      $test1->setFinishOnKey("TS");
      $test1->setMaxLengthSec(1);
      $test1->setPlayBeep(true);
      $test1->setAutoStart(true);
      $test1->setPrivacyMode(true);

    $toHeaderValue1 = $test1->toHeaderValue();
    assert(is_string($toHeaderValue1));
}


}
