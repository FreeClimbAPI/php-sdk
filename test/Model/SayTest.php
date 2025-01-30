<?php

/**
 * SayTest
 *
 * PHP version 7.4
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
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace FreeClimb\Api\Test\Model;

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
#[\AllowDynamicProperties]
class SayTest extends TestCase
{
    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
        $this->Say = new \FreeClimb\Api\Model\Say();
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test attribute "text"
     */
    public function testPropertyText()
    {

        $this->Say->setText('TS');
        $this->assertEquals('TS', $this->Say->getText());
        $this->assertIsString($this->Say->getText());
    }
    /**
     * Test attribute "language"
     */
    public function testPropertyLanguage()
    {

        $this->Say->setLanguage('TS');
        $this->assertEquals('TS', $this->Say->getLanguage());
        $this->assertIsString($this->Say->getLanguage());
    }
    /**
     * Test attribute "loop"
     */
    public function testPropertyLoop()
    {


        $this->Say->setloop(1);
        $this->assertEquals(1, $this->Say->getloop());
        $this->assertIsNumeric($this->Say->getloop());

    }
    /**
     * Test attribute "privacy_mode"
     */
    public function testPropertyPrivacyMode()
    {
        $this->Say->setprivacyMode(false);
        $this->assertFalse($this->Say->getprivacyMode());
        $this->assertIsBool($this->Say->getprivacyMode());
    }
}
