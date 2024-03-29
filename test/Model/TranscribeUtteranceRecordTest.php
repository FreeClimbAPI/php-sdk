<?php

/**
 * TranscribeUtteranceRecordTest
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

use FreeClimb\Api\Model\TranscribeUtteranceRecord;
use PHPUnit\Framework\TestCase;

/**
 * TranscribeUtteranceRecordTest Class Doc Comment
 *
 * @category    Class
 * @description TranscribeUtteranceRecord
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class TranscribeUtteranceRecordTest extends TestCase
{
    protected $TranscribeUtteranceRecord;

    /**
     * Test "TranscribeUtteranceRecord"
     */
    public function setUp() : void
    {
        $this->TranscribeUtteranceRecord = new TranscribeUtteranceRecord();
    }
    /**
     * Test attribute "save_recording"
     */
    public function testPropertySaveRecording()
    {
        $this->TranscribeUtteranceRecord->setSaveRecording(true);
        $this->assertTrue($this->TranscribeUtteranceRecord->getSaveRecording());
        $this->assertIsBool($this->TranscribeUtteranceRecord->getSaveRecording());
    }
    /**
     * Test attribute "max_length_sec"
     */
    public function testPropertyMaxLengthSec()
    {
        $this->TranscribeUtteranceRecord->setMaxLengthSec(60);
        $this->assertEquals(60, $this->TranscribeUtteranceRecord->getMaxLengthSec());
        $this->assertIsInt($this->TranscribeUtteranceRecord->getMaxLengthSec());
    }
    /**
     * Test attribute "rcrd_termination_silence_time_ms"
     */
    public function testPropertyRcrdTerminationSilenceTimeMs()
    {
        $this->TranscribeUtteranceRecord->setRcrdTerminationSilenceTimeMs(60);
        $this->assertEquals(60, $this->TranscribeUtteranceRecord->getRcrdTerminationSilenceTimeMs());
        $this->assertIsInt($this->TranscribeUtteranceRecord->getRcrdTerminationSilenceTimeMs());
    }

    /**
* Test method toStringTest
*/
public function toStringTest() {
    $test1 = new TranscribeUtteranceRecord();    
      $test1->setSaveRecording(true);
      $test1->setMaxLengthSec(1);
      $test1->setRcrdTerminationSilenceTimeMs(1);

    $toString1 = $test1->__toString();
    assert(is_string($toString1));
}

/**
 * Test method toHeaderValue
 */
public function toHeaderValueTest()
{
    $test1 = new TranscribeUtteranceRecord();
      $test1->setSaveRecording(true);
      $test1->setMaxLengthSec(1);
      $test1->setRcrdTerminationSilenceTimeMs(1);

    $toHeaderValue1 = $test1->toHeaderValue();
    assert(is_string($toHeaderValue1));
}


}
