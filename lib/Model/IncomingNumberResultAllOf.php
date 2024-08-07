<?php
/**
 * IncomingNumberResultAllOf
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
 * IncomingNumberResultAllOf Class Doc Comment
 *
 * @category Class
 * @package  FreeClimb\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class IncomingNumberResultAllOf implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IncomingNumberResult_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'capabilities' => '\FreeClimb\Api\Model\Capabilities',
        'campaign_id' => 'string',
        'phone_number_id' => 'string',
        'account_id' => 'string',
        'application_id' => 'string',
        'phone_number' => 'string',
        'alias' => 'string',
        'region' => 'string',
        'country' => 'string',
        'voice_enabled' => 'bool',
        'sms_enabled' => 'bool',
        'offnet' => 'bool',
        'tfn' => '\FreeClimb\Api\Model\TFN'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'capabilities' => null,
        'campaign_id' => null,
        'phone_number_id' => null,
        'account_id' => null,
        'application_id' => null,
        'phone_number' => null,
        'alias' => null,
        'region' => null,
        'country' => null,
        'voice_enabled' => null,
        'sms_enabled' => null,
        'offnet' => null,
        'tfn' => null
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
        'capabilities' => 'capabilities',
        'campaign_id' => 'campaignId',
        'phone_number_id' => 'phoneNumberId',
        'account_id' => 'accountId',
        'application_id' => 'applicationId',
        'phone_number' => 'phoneNumber',
        'alias' => 'alias',
        'region' => 'region',
        'country' => 'country',
        'voice_enabled' => 'voiceEnabled',
        'sms_enabled' => 'smsEnabled',
        'offnet' => 'offnet',
        'tfn' => 'tfn'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'capabilities' => 'setCapabilities',
        'campaign_id' => 'setCampaignId',
        'phone_number_id' => 'setPhoneNumberId',
        'account_id' => 'setAccountId',
        'application_id' => 'setApplicationId',
        'phone_number' => 'setPhoneNumber',
        'alias' => 'setAlias',
        'region' => 'setRegion',
        'country' => 'setCountry',
        'voice_enabled' => 'setVoiceEnabled',
        'sms_enabled' => 'setSmsEnabled',
        'offnet' => 'setOffnet',
        'tfn' => 'setTfn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'capabilities' => 'getCapabilities',
        'campaign_id' => 'getCampaignId',
        'phone_number_id' => 'getPhoneNumberId',
        'account_id' => 'getAccountId',
        'application_id' => 'getApplicationId',
        'phone_number' => 'getPhoneNumber',
        'alias' => 'getAlias',
        'region' => 'getRegion',
        'country' => 'getCountry',
        'voice_enabled' => 'getVoiceEnabled',
        'sms_enabled' => 'getSmsEnabled',
        'offnet' => 'getOffnet',
        'tfn' => 'getTfn'
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
        $this->container['capabilities'] = $data['capabilities'] ?? null;
        $this->container['campaign_id'] = $data['campaign_id'] ?? null;
        $this->container['phone_number_id'] = $data['phone_number_id'] ?? null;
        $this->container['account_id'] = $data['account_id'] ?? null;
        $this->container['application_id'] = $data['application_id'] ?? null;
        $this->container['phone_number'] = $data['phone_number'] ?? null;
        $this->container['alias'] = $data['alias'] ?? null;
        $this->container['region'] = $data['region'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
        $this->container['voice_enabled'] = $data['voice_enabled'] ?? null;
        $this->container['sms_enabled'] = $data['sms_enabled'] ?? null;
        $this->container['offnet'] = $data['offnet'] ?? null;
        $this->container['tfn'] = $data['tfn'] ?? null;
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
     * Gets capabilities
     *
     * @return \FreeClimb\Api\Model\Capabilities|null
     */
    public function getCapabilities()
    {
        return $this->container['capabilities'];
    }

    /**
     * Sets capabilities
     *
     * @param \FreeClimb\Api\Model\Capabilities|null $capabilities capabilities
     *
     * @return self
     */
    public function setCapabilities($capabilities)
    {
        $this->container['capabilities'] = $capabilities;

        return $this;
    }

    /**
     * Gets campaign_id
     *
     * @return string|null
     */
    public function getCampaignId()
    {
        return $this->container['campaign_id'];
    }

    /**
     * Sets campaign_id
     *
     * @param string|null $campaign_id The campaign ID generated by the campaign registry
     *
     * @return self
     */
    public function setCampaignId($campaign_id)
    {
        $this->container['campaign_id'] = $campaign_id;

        return $this;
    }

    /**
     * Gets phone_number_id
     *
     * @return string|null
     */
    public function getPhoneNumberId()
    {
        return $this->container['phone_number_id'];
    }

    /**
     * Sets phone_number_id
     *
     * @param string|null $phone_number_id String that uniquely identifies this phone number resource.
     *
     * @return self
     */
    public function setPhoneNumberId($phone_number_id)
    {
        $this->container['phone_number_id'] = $phone_number_id;

        return $this;
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
     * @return self
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
     * @return self
     */
    public function setApplicationId($application_id)
    {
        $this->container['application_id'] = $application_id;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string|null $phone_number Phone number in E.164 format.
     *
     * @return self
     */
    public function setPhoneNumber($phone_number)
    {
        $this->container['phone_number'] = $phone_number;

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
     * @return self
     */
    public function setAlias($alias)
    {
        $this->container['alias'] = $alias;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string|null $region State or province of this phone number.
     *
     * @return self
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country Country of this phone number.
     *
     * @return self
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets voice_enabled
     *
     * @return bool|null
     * @deprecated
     */
    public function getVoiceEnabled()
    {
        return $this->container['voice_enabled'];
    }

    /**
     * Sets voice_enabled
     *
     * @param bool|null $voice_enabled Indicates whether the phone number can handle Calls. Typically set to true for all numbers.
     *
     * @return self
     * @deprecated
     */
    public function setVoiceEnabled($voice_enabled)
    {
        $this->container['voice_enabled'] = $voice_enabled;

        return $this;
    }

    /**
     * Gets sms_enabled
     *
     * @return bool|null
     * @deprecated
     */
    public function getSmsEnabled()
    {
        return $this->container['sms_enabled'];
    }

    /**
     * Sets sms_enabled
     *
     * @param bool|null $sms_enabled Indication of whether the phone number can handle sending and receiving SMS messages. Typically set to true for all numbers.
     *
     * @return self
     * @deprecated
     */
    public function setSmsEnabled($sms_enabled)
    {
        $this->container['sms_enabled'] = $sms_enabled;

        return $this;
    }

    /**
     * Gets offnet
     *
     * @return bool|null
     */
    public function getOffnet()
    {
        return $this->container['offnet'];
    }

    /**
     * Sets offnet
     *
     * @param bool|null $offnet The offnet field is a boolean representing whether the number is offnet registered or not. This field will be rendered only for requests to the IncomingPhone number resource.
     *
     * @return self
     */
    public function setOffnet($offnet)
    {
        $this->container['offnet'] = $offnet;

        return $this;
    }

    /**
     * Gets tfn
     *
     * @return \FreeClimb\Api\Model\TFN|null
     */
    public function getTfn()
    {
        return $this->container['tfn'];
    }

    /**
     * Sets tfn
     *
     * @param \FreeClimb\Api\Model\TFN|null $tfn tfn
     *
     * @return self
     */
    public function setTfn($tfn)
    {
        $this->container['tfn'] = $tfn;

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


