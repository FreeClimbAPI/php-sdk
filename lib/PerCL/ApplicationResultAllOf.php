<?php

/**
 * ApplicationResultAllOf
 *
 * PHP version 5
 *
 * @category Class
 * @package  FreeClimb
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * FreeClimb API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 0.0.1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.2
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace FreeClimb\PerCL;

use \ArrayAccess;
use \FreeClimb\ObjectSerializer;

/**
 * ApplicationResultAllOf Class Doc Comment
 *
 * @category Class
 * @package  FreeClimb
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ApplicationResultAllOf implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ApplicationResult_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_id' => 'string',
        'application_id' => 'string',
        'alias' => 'string',
        'voice_url' => 'string',
        'voice_fallback_url' => 'string',
        'call_connect_url' => 'string',
        'status_callback_url' => 'string',
        'sms_url' => 'string',
        'sms_fallback_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'account_id' => null,
        'application_id' => null,
        'alias' => null,
        'voice_url' => null,
        'voice_fallback_url' => null,
        'call_connect_url' => null,
        'status_callback_url' => null,
        'sms_url' => null,
        'sms_fallback_url' => null
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
        'account_id' => 'accountId',
        'application_id' => 'applicationId',
        'alias' => 'alias',
        'voice_url' => 'voiceUrl',
        'voice_fallback_url' => 'voiceFallbackUrl',
        'call_connect_url' => 'callConnectUrl',
        'status_callback_url' => 'statusCallbackUrl',
        'sms_url' => 'smsUrl',
        'sms_fallback_url' => 'smsFallbackUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'application_id' => 'setApplicationId',
        'alias' => 'setAlias',
        'voice_url' => 'setVoiceUrl',
        'voice_fallback_url' => 'setVoiceFallbackUrl',
        'call_connect_url' => 'setCallConnectUrl',
        'status_callback_url' => 'setStatusCallbackUrl',
        'sms_url' => 'setSmsUrl',
        'sms_fallback_url' => 'setSmsFallbackUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'application_id' => 'getApplicationId',
        'alias' => 'getAlias',
        'voice_url' => 'getVoiceUrl',
        'voice_fallback_url' => 'getVoiceFallbackUrl',
        'call_connect_url' => 'getCallConnectUrl',
        'status_callback_url' => 'getStatusCallbackUrl',
        'sms_url' => 'getSmsUrl',
        'sms_fallback_url' => 'getSmsFallbackUrl'
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
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['application_id'] = isset($data['application_id']) ? $data['application_id'] : null;
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
        $this->container['voice_url'] = isset($data['voice_url']) ? $data['voice_url'] : null;
        $this->container['voice_fallback_url'] = isset($data['voice_fallback_url']) ? $data['voice_fallback_url'] : null;
        $this->container['call_connect_url'] = isset($data['call_connect_url']) ? $data['call_connect_url'] : null;
        $this->container['status_callback_url'] = isset($data['status_callback_url']) ? $data['status_callback_url'] : null;
        $this->container['sms_url'] = isset($data['sms_url']) ? $data['sms_url'] : null;
        $this->container['sms_fallback_url'] = isset($data['sms_fallback_url']) ? $data['sms_fallback_url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets account_id
     *
     * @return string|null
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string|null $account_id ID of the account that owns this phone number.
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets application_id
     *
     * @return string|null
     */
    public function getApplicationId()
    {
        return $this->container['application_id'];
    }

    /**
     * Sets application_id
     *
     * @param string|null $application_id ID of the Application that FreeClimb should contact if a Call or SMS arrives for this phone number or a Call from this number is placed. An incoming phone number is not useful until associated with an applicationId.
     *
     * @return $this
     */
    public function setApplicationId($application_id)
    {
        $this->container['application_id'] = $application_id;

        return $this;
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
     * @param string|null $alias Description for this phone number. Typically the conventionally-formatted version of the phone number.
     *
     * @return $this
     */
    public function setAlias($alias)
    {
        $this->container['alias'] = $alias;

        return $this;
    }

    /**
     * Gets voice_url
     *
     * @return string|null
     */
    public function getVoiceUrl()
    {
        return $this->container['voice_url'];
    }

    /**
     * Sets voice_url
     *
     * @param string|null $voice_url The URL FreeClimb will request when a phone number assigned to this Application receives a Call. Used for inbound calls only.
     *
     * @return $this
     */
    public function setVoiceUrl($voice_url)
    {
        $this->container['voice_url'] = $voice_url;

        return $this;
    }

    /**
     * Gets voice_fallback_url
     *
     * @return string|null
     */
    public function getVoiceFallbackUrl()
    {
        return $this->container['voice_fallback_url'];
    }

    /**
     * Sets voice_fallback_url
     *
     * @param string|null $voice_fallback_url The URL that FreeClimb will request if it times out waiting for a response from the voiceUrl. Used for inbound calls only.
     *
     * @return $this
     */
    public function setVoiceFallbackUrl($voice_fallback_url)
    {
        $this->container['voice_fallback_url'] = $voice_fallback_url;

        return $this;
    }

    /**
     * Gets call_connect_url
     *
     * @return string|null
     */
    public function getCallConnectUrl()
    {
        return $this->container['call_connect_url'];
    }

    /**
     * Sets call_connect_url
     *
     * @param string|null $call_connect_url The URL to which FreeClimb will make a POST request informing the result of the outbound Call request. The status property of the request message specifies if the Call was connected or not.
     *
     * @return $this
     */
    public function setCallConnectUrl($call_connect_url)
    {
        $this->container['call_connect_url'] = $call_connect_url;

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
     * @param string|null $status_callback_url A URL to which FreeClimb will make a POST request when the Call ends to notify this app.
     *
     * @return $this
     */
    public function setStatusCallbackUrl($status_callback_url)
    {
        $this->container['status_callback_url'] = $status_callback_url;

        return $this;
    }

    /**
     * Gets sms_url
     *
     * @return string|null
     */
    public function getSmsUrl()
    {
        return $this->container['sms_url'];
    }

    /**
     * Sets sms_url
     *
     * @param string|null $sms_url The URL FreeClimb will request when a phone number assigned to this Application receives an incoming SMS message. Used for inbound SMS only.
     *
     * @return $this
     */
    public function setSmsUrl($sms_url)
    {
        $this->container['sms_url'] = $sms_url;

        return $this;
    }

    /**
     * Gets sms_fallback_url
     *
     * @return string|null
     */
    public function getSmsFallbackUrl()
    {
        return $this->container['sms_fallback_url'];
    }

    /**
     * Sets sms_fallback_url
     *
     * @param string|null $sms_fallback_url The URL that FreeClimb will request if it times out waiting for a response from the smsUrl. Used for inbound SMS only.
     *
     * @return $this
     */
    public function setSmsFallbackUrl($sms_fallback_url)
    {
        $this->container['sms_fallback_url'] = $sms_fallback_url;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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


