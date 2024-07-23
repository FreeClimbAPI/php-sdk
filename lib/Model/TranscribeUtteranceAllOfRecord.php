<?php
/**
 * TranscribeUtteranceAllOfRecord
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
 * TranscribeUtteranceAllOfRecord Class Doc Comment
 *
 * @category Class
 * @package  FreeClimb\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TranscribeUtteranceAllOfRecord implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TranscribeUtterance_allOf_record';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'save_recording' => 'bool',
        'max_length_sec' => 'int',
        'rcrd_termination_silence_time_ms' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'save_recording' => null,
        'max_length_sec' => null,
        'rcrd_termination_silence_time_ms' => null
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
        'save_recording' => 'saveRecording',
        'max_length_sec' => 'maxLengthSec',
        'rcrd_termination_silence_time_ms' => 'rcrdTerminationSilenceTimeMs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'save_recording' => 'setSaveRecording',
        'max_length_sec' => 'setMaxLengthSec',
        'rcrd_termination_silence_time_ms' => 'setRcrdTerminationSilenceTimeMs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'save_recording' => 'getSaveRecording',
        'max_length_sec' => 'getMaxLengthSec',
        'rcrd_termination_silence_time_ms' => 'getRcrdTerminationSilenceTimeMs'
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
        $this->container['save_recording'] = $data['save_recording'] ?? false;
        $this->container['max_length_sec'] = $data['max_length_sec'] ?? 60;
        $this->container['rcrd_termination_silence_time_ms'] = $data['rcrd_termination_silence_time_ms'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['max_length_sec']) && ($this->container['max_length_sec'] > 60)) {
            $invalidProperties[] = "invalid value for 'max_length_sec', must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['max_length_sec']) && ($this->container['max_length_sec'] < 1)) {
            $invalidProperties[] = "invalid value for 'max_length_sec', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['rcrd_termination_silence_time_ms']) && ($this->container['rcrd_termination_silence_time_ms'] > 3000)) {
            $invalidProperties[] = "invalid value for 'rcrd_termination_silence_time_ms', must be smaller than or equal to 3000.";
        }

        if (!is_null($this->container['rcrd_termination_silence_time_ms']) && ($this->container['rcrd_termination_silence_time_ms'] <= 0)) {
            $invalidProperties[] = "invalid value for 'rcrd_termination_silence_time_ms', must be bigger than 0.";
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
     * Gets save_recording
     *
     * @return bool|null
     */
    public function getSaveRecording()
    {
        return $this->container['save_recording'];
    }

    /**
     * Sets save_recording
     *
     * @param bool|null $save_recording save_recording
     *
     * @return self
     */
    public function setSaveRecording($save_recording)
    {
        $this->container['save_recording'] = $save_recording;

        return $this;
    }

    /**
     * Gets max_length_sec
     *
     * @return int|null
     */
    public function getMaxLengthSec()
    {
        return $this->container['max_length_sec'];
    }

    /**
     * Sets max_length_sec
     *
     * @param int|null $max_length_sec max_length_sec
     *
     * @return self
     */
    public function setMaxLengthSec($max_length_sec)
    {

        if (!is_null($max_length_sec) && ($max_length_sec > 60)) {
            throw new \InvalidArgumentException('invalid value for $max_length_sec when calling TranscribeUtteranceAllOfRecord., must be smaller than or equal to 60.');
        }
        if (!is_null($max_length_sec) && ($max_length_sec < 1)) {
            throw new \InvalidArgumentException('invalid value for $max_length_sec when calling TranscribeUtteranceAllOfRecord., must be bigger than or equal to 1.');
        }

        $this->container['max_length_sec'] = $max_length_sec;

        return $this;
    }

    /**
     * Gets rcrd_termination_silence_time_ms
     *
     * @return int|null
     */
    public function getRcrdTerminationSilenceTimeMs()
    {
        return $this->container['rcrd_termination_silence_time_ms'];
    }

    /**
     * Sets rcrd_termination_silence_time_ms
     *
     * @param int|null $rcrd_termination_silence_time_ms rcrd_termination_silence_time_ms
     *
     * @return self
     */
    public function setRcrdTerminationSilenceTimeMs($rcrd_termination_silence_time_ms)
    {

        if (!is_null($rcrd_termination_silence_time_ms) && ($rcrd_termination_silence_time_ms > 3000)) {
            throw new \InvalidArgumentException('invalid value for $rcrd_termination_silence_time_ms when calling TranscribeUtteranceAllOfRecord., must be smaller than or equal to 3000.');
        }
        if (!is_null($rcrd_termination_silence_time_ms) && ($rcrd_termination_silence_time_ms <= 0)) {
            throw new \InvalidArgumentException('invalid value for $rcrd_termination_silence_time_ms when calling TranscribeUtteranceAllOfRecord., must be bigger than 0.');
        }

        $this->container['rcrd_termination_silence_time_ms'] = $rcrd_termination_silence_time_ms;

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


