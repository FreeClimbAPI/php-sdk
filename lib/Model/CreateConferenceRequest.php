<?php
/**
 * CreateConferenceRequest
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
 * CreateConferenceRequest Class Doc Comment
 *
 * @category Class
 * @package  FreeClimb\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CreateConferenceRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateConferenceRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'alias' => 'string',
        'play_beep' => 'string',
        'record' => 'bool',
        'wait_url' => 'string',
        'status_callback_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'alias' => null,
        'play_beep' => null,
        'record' => null,
        'wait_url' => null,
        'status_callback_url' => null
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
        'alias' => 'alias',
        'play_beep' => 'playBeep',
        'record' => 'record',
        'wait_url' => 'waitUrl',
        'status_callback_url' => 'statusCallbackUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'alias' => 'setAlias',
        'play_beep' => 'setPlayBeep',
        'record' => 'setRecord',
        'wait_url' => 'setWaitUrl',
        'status_callback_url' => 'setStatusCallbackUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alias' => 'getAlias',
        'play_beep' => 'getPlayBeep',
        'record' => 'getRecord',
        'wait_url' => 'getWaitUrl',
        'status_callback_url' => 'getStatusCallbackUrl'
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

    const PLAY_BEEP_ALWAYS = 'always';
    const PLAY_BEEP_NEVER = 'never';
    const PLAY_BEEP_ENTRY_ONLY = 'entryOnly';
    const PLAY_BEEP_EXIT_ONLY = 'exitOnly';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPlayBeepAllowableValues()
    {
        return [
            self::PLAY_BEEP_ALWAYS,
            self::PLAY_BEEP_NEVER,
            self::PLAY_BEEP_ENTRY_ONLY,
            self::PLAY_BEEP_EXIT_ONLY,
        ];
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
        $this->container['alias'] = $data['alias'] ?? null;
        $this->container['play_beep'] = $data['play_beep'] ?? 'always';
        $this->container['record'] = $data['record'] ?? null;
        $this->container['wait_url'] = $data['wait_url'] ?? null;
        $this->container['status_callback_url'] = $data['status_callback_url'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPlayBeepAllowableValues();
        if (!is_null($this->container['play_beep']) && !in_array($this->container['play_beep'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'play_beep', must be one of '%s'",
                $this->container['play_beep'],
                implode("', '", $allowedValues)
            );
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
     * Gets alias
     *
     * @return string|null
     */
    public function getAlias()
    {
        return $this->container['alias'];
    }

    /**
     * Sets alias
     *
     * @param string|null $alias A description for this Conference. Maximum 64 characters.
     *
     * @return self
     */
    public function setAlias($alias)
    {
        $this->container['alias'] = $alias;

        return $this;
    }

    /**
     * Gets play_beep
     *
     * @return string|null
     */
    public function getPlayBeep()
    {
        return $this->container['play_beep'];
    }

    /**
     * Sets play_beep
     *
     * @param string|null $play_beep Controls when a beep is played. Valid values: `always`, `never`, `entryOnly`, `exitOnly`.
     *
     * @return self
     */
    public function setPlayBeep($play_beep)
    {
        $allowedValues = $this->getPlayBeepAllowableValues();
        if (!is_null($play_beep) && !in_array($play_beep, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'play_beep', must be one of '%s'",
                    $play_beep,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['play_beep'] = $play_beep;

        return $this;
    }

    /**
     * Gets record
     *
     * @return bool|null
     */
    public function getRecord()
    {
        return $this->container['record'];
    }

    /**
     * Sets record
     *
     * @param bool|null $record Setting to `true` records the entire Conference.
     *
     * @return self
     */
    public function setRecord($record)
    {
        $this->container['record'] = $record;

        return $this;
    }

    /**
     * Gets wait_url
     *
     * @return string|null
     */
    public function getWaitUrl()
    {
        return $this->container['wait_url'];
    }

    /**
     * Sets wait_url
     *
     * @param string|null $wait_url If specified, a URL for the audio file that provides custom hold music for the Conference when it is in the populated state. Otherwise, FreeClimb uses a system default audio file. This is always fetched using HTTP GET and is fetched just once &mdash; when the Conference is created.
     *
     * @return self
     */
    public function setWaitUrl($wait_url)
    {
        $this->container['wait_url'] = $wait_url;

        return $this;
    }

    /**
     * Gets status_callback_url
     *
     * @return string|null
     */
    public function getStatusCallbackUrl()
    {
        return $this->container['status_callback_url'];
    }

    /**
     * Sets status_callback_url
     *
     * @param string|null $status_callback_url This URL is invoked when the status of the Conference changes. For more information, see **statusCallbackUrl** (below).
     *
     * @return self
     */
    public function setStatusCallbackUrl($status_callback_url)
    {
        $this->container['status_callback_url'] = $status_callback_url;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetGet($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
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
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


