<?php
/**
 * RecordUtteranceAllOf
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
 * RecordUtteranceAllOf Class Doc Comment
 *
 * @category Class
 * @package  FreeClimb\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class RecordUtteranceAllOf implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RecordUtterance_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'action_url' => 'string',
        'silence_timeout_ms' => 'int',
        'finish_on_key' => 'string',
        'max_length_sec' => 'int',
        'play_beep' => 'bool',
        'auto_start' => 'bool',
        'privacy_mode' => 'bool'
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
        'silence_timeout_ms' => null,
        'finish_on_key' => null,
        'max_length_sec' => null,
        'play_beep' => null,
        'auto_start' => null,
        'privacy_mode' => null
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
        'silence_timeout_ms' => 'silenceTimeoutMs',
        'finish_on_key' => 'finishOnKey',
        'max_length_sec' => 'maxLengthSec',
        'play_beep' => 'playBeep',
        'auto_start' => 'autoStart',
        'privacy_mode' => 'privacyMode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'action_url' => 'setActionUrl',
        'silence_timeout_ms' => 'setSilenceTimeoutMs',
        'finish_on_key' => 'setFinishOnKey',
        'max_length_sec' => 'setMaxLengthSec',
        'play_beep' => 'setPlayBeep',
        'auto_start' => 'setAutoStart',
        'privacy_mode' => 'setPrivacyMode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'action_url' => 'getActionUrl',
        'silence_timeout_ms' => 'getSilenceTimeoutMs',
        'finish_on_key' => 'getFinishOnKey',
        'max_length_sec' => 'getMaxLengthSec',
        'play_beep' => 'getPlayBeep',
        'auto_start' => 'getAutoStart',
        'privacy_mode' => 'getPrivacyMode'
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
        $this->container['silence_timeout_ms'] = $data['silence_timeout_ms'] ?? null;
        $this->container['finish_on_key'] = $data['finish_on_key'] ?? null;
        $this->container['max_length_sec'] = $data['max_length_sec'] ?? null;
        $this->container['play_beep'] = $data['play_beep'] ?? null;
        $this->container['auto_start'] = $data['auto_start'] ?? null;
        $this->container['privacy_mode'] = $data['privacy_mode'] ?? null;
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
     * @param string $action_url URL to which information on the completed recording is submitted. The PerCL received in response is then used to continue with Call processing.
     *
     * @return self
     */
    public function setActionUrl($action_url)
    {
        $this->container['action_url'] = $action_url;

        return $this;
    }

    /**
     * Gets silence_timeout_ms
     *
     * @return int|null
     */
    public function getSilenceTimeoutMs()
    {
        return $this->container['silence_timeout_ms'];
    }

    /**
     * Sets silence_timeout_ms
     *
     * @param int|null $silence_timeout_ms Interval of silence that should elapse before ending the recording.
     *
     * @return self
     */
    public function setSilenceTimeoutMs($silence_timeout_ms)
    {
        $this->container['silence_timeout_ms'] = $silence_timeout_ms;

        return $this;
    }

    /**
     * Gets finish_on_key
     *
     * @return string|null
     */
    public function getFinishOnKey()
    {
        return $this->container['finish_on_key'];
    }

    /**
     * Sets finish_on_key
     *
     * @param string|null $finish_on_key Key that triggers the end of the recording. any digit, '#', or '*'
     *
     * @return self
     */
    public function setFinishOnKey($finish_on_key)
    {
        $this->container['finish_on_key'] = $finish_on_key;

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
     * @param int|null $max_length_sec Maximum length for the command execution in seconds.
     *
     * @return self
     */
    public function setMaxLengthSec($max_length_sec)
    {
        $this->container['max_length_sec'] = $max_length_sec;

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
     * @param bool|null $play_beep Indicates whether to play a beep sound before the start of the recording. If set to `false`, no beep is played.
     *
     * @return self
     */
    public function setPlayBeep($play_beep)
    {
        $this->container['play_beep'] = $play_beep;

        return $this;
    }

    /**
     * Gets auto_start
     *
     * @return bool|null
     */
    public function getAutoStart()
    {
        return $this->container['auto_start'];
    }

    /**
     * Sets auto_start
     *
     * @param bool|null $auto_start If `false`, recording begins immediately after the RecordUtterance command is processed. If `true`, recording begins when audio is present and if audio begins before the `maxLengthSec` timeout. If no audio begins before `maxLengthSec`, no recording is generated.
     *
     * @return self
     */
    public function setAutoStart($auto_start)
    {
        $this->container['auto_start'] = $auto_start;

        return $this;
    }

    /**
     * Gets privacy_mode
     *
     * @return bool|null
     */
    public function getPrivacyMode()
    {
        return $this->container['privacy_mode'];
    }

    /**
     * Sets privacy_mode
     *
     * @param bool|null $privacy_mode Parameter `privacyMode` will not log the `text` as required by PCI compliance.
     *
     * @return self
     */
    public function setPrivacyMode($privacy_mode)
    {
        $this->container['privacy_mode'] = $privacy_mode;

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


