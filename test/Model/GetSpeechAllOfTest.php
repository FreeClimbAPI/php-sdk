<?php

/**
 * GetSpeechAllOfTest
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

use FreeClimb\Api\Model\GetSpeechAllOf;
use PHPUnit\Framework\TestCase;

/**
 * GetSpeechAllOfTest Class Doc Comment
 *
 * @category    Class
 * @description GetSpeechAllOf
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class GetSpeechAllOfTest extends TestCase
{
    protected $GetSpeechAllOf;

    /**
     * Test "GetSpeechAllOf"
     */
    public function setUp() : void
    {
        $this->GetSpeechAllOf = new GetSpeechAllOf();
    }
    /**
     * Test attribute "action_url"
     */
    public function testPropertyActionUrl()
    {
        $this->GetSpeechAllOf->setActionUrl('TS');
        $this->assertEquals('TS', $this->GetSpeechAllOf->getActionUrl());
        $this->assertIsString($this->GetSpeechAllOf->getActionUrl());
    }
    /**
     * Test attribute "grammar_type"
     */
    public function testPropertyGrammarType()
    {
        $this->GetSpeechAllOf->setGrammarType(\FreeClimb\Api\Model\GrammarType::URL);
        $this->assertEquals(\FreeClimb\Api\Model\GrammarType::URL, $this->GetSpeechAllOf->getGrammarType());
        $this->GetSpeechAllOf->setGrammarType(\FreeClimb\Api\Model\GrammarType::BUILT_IN);
        $this->assertEquals(\FreeClimb\Api\Model\GrammarType::BUILT_IN, $this->GetSpeechAllOf->getGrammarType());
    }
    /**
     * Test attribute "grammar_file"
     */
    public function testPropertyGrammarFile()
    {
        $this->GetSpeechAllOf->setGrammarFile('TS');
        $this->assertEquals('TS', $this->GetSpeechAllOf->getGrammarFile());
        $this->assertIsString($this->GetSpeechAllOf->getGrammarFile());
    }
    /**
     * Test attribute "grammar_rule"
     */
    public function testPropertyGrammarRule()
    {
        $this->GetSpeechAllOf->setGrammarRule('TS');
        $this->assertEquals('TS', $this->GetSpeechAllOf->getGrammarRule());
        $this->assertIsString($this->GetSpeechAllOf->getGrammarRule());
    }
    /**
     * Test attribute "play_beep"
     */
    public function testPropertyPlayBeep()
    {
        $this->GetSpeechAllOf->setPlayBeep(false);
        $this->assertFalse($this->GetSpeechAllOf->getPlayBeep());
        $this->assertIsBool($this->GetSpeechAllOf->getPlayBeep());
    }
    /**
     * Test attribute "prompts"
     */
    public function testPropertyPrompts()
    {
        $this->GetSpeechAllOf->setPrompts([]);
        $this->assertEquals([], $this->GetSpeechAllOf->getPrompts());
        $this->assertIsArray($this->GetSpeechAllOf->getPrompts());
    }
    /**
     * Test attribute "no_input_timeout_ms"
     */
    public function testPropertyNoInputTimeoutMs()
    {
        
        
        $this->GetSpeechAllOf->setNoInputTimeoutMs(1);
        $this->assertEquals(1, $this->GetSpeechAllOf->getNoInputTimeoutMs());
        $this->assertIsNumeric($this->GetSpeechAllOf->getNoInputTimeoutMs());
        
    }
    /**
     * Test attribute "recognition_timeout_ms"
     */
    public function testPropertyRecognitionTimeoutMs()
    {
        
        
        $this->GetSpeechAllOf->setRecognitionTimeoutMs(1);
        $this->assertEquals(1, $this->GetSpeechAllOf->getRecognitionTimeoutMs());
        $this->assertIsNumeric($this->GetSpeechAllOf->getRecognitionTimeoutMs());
        
    }
    /**
     * Test attribute "confidence_threshold"
     */
    public function testPropertyConfidenceThreshold()
    {
        
        
        $this->GetSpeechAllOf->setConfidenceThreshold(1);
        $this->assertEquals(1, $this->GetSpeechAllOf->getConfidenceThreshold());
        $this->assertIsNumeric($this->GetSpeechAllOf->getConfidenceThreshold());
        
    }
    /**
     * Test attribute "sensitivity_level"
     */
    public function testPropertySensitivityLevel()
    {
        
        
        $this->GetSpeechAllOf->setSensitivityLevel(1);
        $this->assertEquals(1, $this->GetSpeechAllOf->getSensitivityLevel());
        $this->assertIsNumeric($this->GetSpeechAllOf->getSensitivityLevel());
        
    }
    /**
     * Test attribute "speech_complete_timeout_ms"
     */
    public function testPropertySpeechCompleteTimeoutMs()
    {
        
        
        $this->GetSpeechAllOf->setSpeechCompleteTimeoutMs(1);
        $this->assertEquals(1, $this->GetSpeechAllOf->getSpeechCompleteTimeoutMs());
        $this->assertIsNumeric($this->GetSpeechAllOf->getSpeechCompleteTimeoutMs());
        
    }
    /**
     * Test attribute "speech_incomplete_timeout_ms"
     */
    public function testPropertySpeechIncompleteTimeoutMs()
    {
        
        
        $this->GetSpeechAllOf->setSpeechIncompleteTimeoutMs(1);
        $this->assertEquals(1, $this->GetSpeechAllOf->getSpeechIncompleteTimeoutMs());
        $this->assertIsNumeric($this->GetSpeechAllOf->getSpeechIncompleteTimeoutMs());
        
    }
    /**
     * Test attribute "privacy_mode"
     */
    public function testPropertyPrivacyMode()
    {
        $this->GetSpeechAllOf->setPrivacyMode(false);
        $this->assertFalse($this->GetSpeechAllOf->getPrivacyMode());
        $this->assertIsBool($this->GetSpeechAllOf->getPrivacyMode());
    }

    /**
* Test method toStringTest
*/
public function toStringTest() {
    $test1 = new GetSpeechAllOf();    
    try {
        $uri1 = "TEST_STRING";
        $test1->setActionUrl($uri1);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    $test1->setGrammarType(\FreeClimb\Api\Model\GrammarType::URL);
    $test1->setGrammarFile("TS");
    $test1->setGrammarRule("TS");
    $test1->setPlayBeep(true);
    $testList = [];
    $test1->setPrompts($testList);
    $test1->setNoInputTimeoutMs(1);
    $test1->setRecognitionTimeoutMs(1);
    $test1->setConfidenceThreshold(1);
    $test1->setSensitivityLevel(1);
    $test1->setSpeechCompleteTimeoutMs(1);
    $test1->setSpeechIncompleteTimeoutMs(1);
    $test1->setPrivacyMode(true);

    $toString1 = $test1->__toString();
    assert(is_string($toString1));
}

/**
 * Test method toHeaderValue
 */
public function toHeaderValueTest()
{
    $test1 = new GetSpeechAllOf();
    try {
        $uri1 = "TEST_STRING";
        $test1->setActionUrl($uri1);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    $test1->setGrammarType(\FreeClimb\Api\Model\GrammarType::URL);
    $test1->setGrammarFile("TS");
    $test1->setGrammarRule("TS");
    $test1->setPlayBeep(true);
    $testList = [];
    $test1->setPrompts($testList);
    $test1->setNoInputTimeoutMs(1);
    $test1->setRecognitionTimeoutMs(1);
    $test1->setConfidenceThreshold(1);
    $test1->setSensitivityLevel(1);
    $test1->setSpeechCompleteTimeoutMs(1);
    $test1->setSpeechIncompleteTimeoutMs(1);
    $test1->setPrivacyMode(true);

    $toHeaderValue1 = $test1->toHeaderValue();
    assert(is_string($toHeaderValue1));
}


}
