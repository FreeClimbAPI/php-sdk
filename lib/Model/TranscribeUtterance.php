<?php
/**
 * TranscribeUtterance
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
 * Do not edit the class manually.
 */

namespace FreeClimb\Api\Model;

use \ArrayAccess;
use \FreeClimb\Api\ObjectSerializer;

/**
 * TranscribeUtterance Class Doc Comment
 *
 * @category Class
 * @description The &#x60;TranscribeUtterance&#x60; command transcribes the caller’s voice and returns transcription of the audio and optionally returns the recording of the audio transcribed.  &#x60;TranscribeUtterance&#x60; is blocking and is a terminal command. As such, the actionUrl property is required, and control of the Call picks up using the &#x60;PerCL&#x60; returned in response of the &#x60;actionUrl&#x60;. Recording and Transcription information is returned in the actionUrl request. If the reason this command ended was due to the call hanging up, any PerCL returned will not execute.
 * @package  FreeClimb\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TranscribeUtterance implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TranscribeUtterance';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'action_url' => 'string',
        'play_beep' => 'bool',
        'record' => '\FreeClimb\Api\Model\TranscribeUtteranceRecord',
        'privacy_for_logging' => 'bool',
        'privacy_for_recording' => 'bool',
        'prompts' => 'mixed[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'action_url' => null,
        'play_beep' => null,
        'record' => null,
        'privacy_for_logging' => null,
        'privacy_for_recording' => null,
        'prompts' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'action_url' => 'actionUrl',
        'play_beep' => 'playBeep',
        'record' => 'record',
        'privacy_for_logging' => 'privacyForLogging',
        'privacy_for_recording' => 'privacyForRecording',
        'prompts' => 'prompts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'action_url' => 'setActionUrl',
        'play_beep' => 'setPlayBeep',
        'record' => 'setRecord',
        'privacy_for_logging' => 'setPrivacyForLogging',
        'privacy_for_recording' => 'setPrivacyForRecording',
        'prompts' => 'setPrompts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'action_url' => 'getActionUrl',
        'play_beep' => 'getPlayBeep',
        'record' => 'getRecord',
        'privacy_for_logging' => 'getPrivacyForLogging',
        'privacy_for_recording' => 'getPrivacyForRecording',
        'prompts' => 'getPrompts'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['action_url'] = $data['action_url'] ?? null;
        $this->container['play_beep'] = $data['play_beep'] ?? false;
        $this->container['record'] = $data['record'] ?? null;
        $this->container['privacy_for_logging'] = $data['privacy_for_logging'] ?? false;
        $this->container['privacy_for_recording'] = $data['privacy_for_recording'] ?? false;
        $this->container['prompts'] = $data['prompts'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['action_url'] === null) {
            $invalidProperties[] = "'action_url' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets action_url
     *
     * @return string
     */
    public function getActionUrl()
    {
        return $this->container['action_url'];
    }

    /**
     * Sets action_url
     *
     * @param string $action_url action_url
     *
     * @return self
     */
    public function setActionUrl($action_url)
    {
        $this->container['action_url'] = $action_url;

        return $this;
    }

    /**
     * Gets play_beep
     *
     * @return bool|null
     */
    public function getPlayBeep()
    {
        return $this->container['play_beep'];
    }

    /**
     * Sets play_beep
     *
     * @param bool|null $play_beep play_beep
     *
     * @return self
     */
    public function setPlayBeep($play_beep)
    {
        $this->container['play_beep'] = $play_beep;

        return $this;
    }

    /**
     * Gets record
     *
     * @return \FreeClimb\Api\Model\TranscribeUtteranceRecord|null
     */
    public function getRecord()
    {
        return $this->container['record'];
    }

    /**
     * Sets record
     *
     * @param \FreeClimb\Api\Model\TranscribeUtteranceRecord|null $record record
     *
     * @return self
     */
    public function setRecord($record)
    {
        $this->container['record'] = $record;

        return $this;
    }

    /**
     * Gets privacy_for_logging
     *
     * @return bool|null
     */
    public function getPrivacyForLogging()
    {
        return $this->container['privacy_for_logging'];
    }

    /**
     * Sets privacy_for_logging
     *
     * @param bool|null $privacy_for_logging privacy_for_logging
     *
     * @return self
     */
    public function setPrivacyForLogging($privacy_for_logging)
    {
        $this->container['privacy_for_logging'] = $privacy_for_logging;

        return $this;
    }

    /**
     * Gets privacy_for_recording
     *
     * @return bool|null
     */
    public function getPrivacyForRecording()
    {
        return $this->container['privacy_for_recording'];
    }

    /**
     * Sets privacy_for_recording
     *
     * @param bool|null $privacy_for_recording privacy_for_recording
     *
     * @return self
     */
    public function setPrivacyForRecording($privacy_for_recording)
    {
        $this->container['privacy_for_recording'] = $privacy_for_recording;

        return $this;
    }

    /**
     * Gets prompts
     *
     * @return mixed[]|null
     */
    public function getPrompts()
    {
        return $this->container['prompts'];
    }

    /**
     * Sets prompts
     *
     * @param mixed[]|null $prompts prompts
     *
     * @return self
     */
    public function setPrompts($prompts)
    {
        $this->container['prompts'] = $prompts;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset) : mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value) : void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset) : void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize() : mixed
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString() : string
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue() : string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }

}


