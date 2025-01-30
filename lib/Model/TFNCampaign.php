<?php

/**
 * TFNCampaign
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
 * Do not edit the class manually.
 */

namespace FreeClimb\Api\Model;

use \ArrayAccess;
use \FreeClimb\Api\ObjectSerializer;

/**
 * TFNCampaign Class Doc Comment
 *
 * @category Class
 * @package  FreeClimb\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TFNCampaign implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TFNCampaign';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_id' => 'string',
        'campaign_id' => 'string',
        'use_case' => 'string',
        'registration_status' => '\FreeClimb\Api\Model\SMSTollFreeCampaignRegistrationStatus',
        'date_created' => 'string',
        'date_updated' => 'string',
        'date_created_iso' => 'string',
        'date_updated_iso' => 'string',
        'revision' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account_id' => null,
        'campaign_id' => null,
        'use_case' => null,
        'registration_status' => null,
        'date_created' => null,
        'date_updated' => null,
        'date_created_iso' => null,
        'date_updated_iso' => null,
        'revision' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'account_id' => true,
        'campaign_id' => false,
        'use_case' => false,
        'registration_status' => false,
        'date_created' => false,
        'date_updated' => false,
        'date_created_iso' => false,
        'date_updated_iso' => false,
        'revision' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'account_id' => 'accountId',
        'campaign_id' => 'campaignId',
        'use_case' => 'useCase',
        'registration_status' => 'registrationStatus',
        'date_created' => 'dateCreated',
        'date_updated' => 'dateUpdated',
        'date_created_iso' => 'dateCreatedISO',
        'date_updated_iso' => 'dateUpdatedISO',
        'revision' => 'revision'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'campaign_id' => 'setCampaignId',
        'use_case' => 'setUseCase',
        'registration_status' => 'setRegistrationStatus',
        'date_created' => 'setDateCreated',
        'date_updated' => 'setDateUpdated',
        'date_created_iso' => 'setDateCreatedIso',
        'date_updated_iso' => 'setDateUpdatedIso',
        'revision' => 'setRevision'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'campaign_id' => 'getCampaignId',
        'use_case' => 'getUseCase',
        'registration_status' => 'getRegistrationStatus',
        'date_created' => 'getDateCreated',
        'date_updated' => 'getDateUpdated',
        'date_created_iso' => 'getDateCreatedIso',
        'date_updated_iso' => 'getDateUpdatedIso',
        'revision' => 'getRevision'
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
    public function __construct(?array $data = null)
    {
        $this->setIfExists('account_id', $data ?? [], null);
        $this->setIfExists('campaign_id', $data ?? [], null);
        $this->setIfExists('use_case', $data ?? [], null);
        $this->setIfExists('registration_status', $data ?? [], null);
        $this->setIfExists('date_created', $data ?? [], null);
        $this->setIfExists('date_updated', $data ?? [], null);
        $this->setIfExists('date_created_iso', $data ?? [], null);
        $this->setIfExists('date_updated_iso', $data ?? [], null);
        $this->setIfExists('revision', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['account_id'] === null) {
            $invalidProperties[] = "'account_id' can't be null";
        }
        if ($this->container['campaign_id'] === null) {
            $invalidProperties[] = "'campaign_id' can't be null";
        }
        if (!preg_match("/cmptfn_[a-fA-F0-9]{40}/", $this->container['campaign_id'])) {
            $invalidProperties[] = "invalid value for 'campaign_id', must be conform to the pattern /cmptfn_[a-fA-F0-9]{40}/.";
        }

        if ($this->container['use_case'] === null) {
            $invalidProperties[] = "'use_case' can't be null";
        }
        if ($this->container['registration_status'] === null) {
            $invalidProperties[] = "'registration_status' can't be null";
        }
        if ($this->container['date_created'] === null) {
            $invalidProperties[] = "'date_created' can't be null";
        }
        if ($this->container['date_updated'] === null) {
            $invalidProperties[] = "'date_updated' can't be null";
        }
        if ($this->container['date_created_iso'] === null) {
            $invalidProperties[] = "'date_created_iso' can't be null";
        }
        if ($this->container['date_updated_iso'] === null) {
            $invalidProperties[] = "'date_updated_iso' can't be null";
        }
        if ($this->container['revision'] === null) {
            $invalidProperties[] = "'revision' can't be null";
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
     * Gets account_id
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string $account_id ID of the account that created this participant.
     *
     * @return self
     */
    public function setAccountId($account_id)
    {
        if (is_null($account_id)) {
            array_push($this->openAPINullablesSetToNull, 'account_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('account_id', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets campaign_id
     *
     * @return string
     */
    public function getCampaignId()
    {
        return $this->container['campaign_id'];
    }

    /**
     * Sets campaign_id
     *
     * @param string $campaign_id TFNCampaignId
     *
     * @return self
     */
    public function setCampaignId($campaign_id)
    {
        if (is_null($campaign_id)) {
            throw new \InvalidArgumentException('non-nullable campaign_id cannot be null');
        }

        if ((!preg_match("/cmptfn_[a-fA-F0-9]{40}/", ObjectSerializer::toString($campaign_id)))) {
            throw new \InvalidArgumentException("invalid value for \$campaign_id when calling TFNCampaign., must conform to the pattern /cmptfn_[a-fA-F0-9]{40}/.");
        }

        $this->container['campaign_id'] = $campaign_id;

        return $this;
    }

    /**
     * Gets use_case
     *
     * @return string
     */
    public function getUseCase()
    {
        return $this->container['use_case'];
    }

    /**
     * Sets use_case
     *
     * @param string $use_case use_case
     *
     * @return self
     */
    public function setUseCase($use_case)
    {
        if (is_null($use_case)) {
            throw new \InvalidArgumentException('non-nullable use_case cannot be null');
        }
        $this->container['use_case'] = $use_case;

        return $this;
    }

    /**
     * Gets registration_status
     *
     * @return \FreeClimb\Api\Model\SMSTollFreeCampaignRegistrationStatus
     */
    public function getRegistrationStatus()
    {
        return $this->container['registration_status'];
    }

    /**
     * Sets registration_status
     *
     * @param \FreeClimb\Api\Model\SMSTollFreeCampaignRegistrationStatus $registration_status registration_status
     *
     * @return self
     */
    public function setRegistrationStatus($registration_status)
    {
        if (is_null($registration_status)) {
            throw new \InvalidArgumentException('non-nullable registration_status cannot be null');
        }
        $this->container['registration_status'] = $registration_status;

        return $this;
    }

    /**
     * Gets date_created
     *
     * @return string
     */
    public function getDateCreated()
    {
        return $this->container['date_created'];
    }

    /**
     * Sets date_created
     *
     * @param string $date_created date_created
     *
     * @return self
     */
    public function setDateCreated($date_created)
    {
        if (is_null($date_created)) {
            throw new \InvalidArgumentException('non-nullable date_created cannot be null');
        }
        $this->container['date_created'] = $date_created;

        return $this;
    }

    /**
     * Gets date_updated
     *
     * @return string
     */
    public function getDateUpdated()
    {
        return $this->container['date_updated'];
    }

    /**
     * Sets date_updated
     *
     * @param string $date_updated date_updated
     *
     * @return self
     */
    public function setDateUpdated($date_updated)
    {
        if (is_null($date_updated)) {
            throw new \InvalidArgumentException('non-nullable date_updated cannot be null');
        }
        $this->container['date_updated'] = $date_updated;

        return $this;
    }

    /**
     * Gets date_created_iso
     *
     * @return string
     */
    public function getDateCreatedIso()
    {
        return $this->container['date_created_iso'];
    }

    /**
     * Sets date_created_iso
     *
     * @param string $date_created_iso date_created_iso
     *
     * @return self
     */
    public function setDateCreatedIso($date_created_iso)
    {
        if (is_null($date_created_iso)) {
            throw new \InvalidArgumentException('non-nullable date_created_iso cannot be null');
        }
        $this->container['date_created_iso'] = $date_created_iso;

        return $this;
    }

    /**
     * Gets date_updated_iso
     *
     * @return string
     */
    public function getDateUpdatedIso()
    {
        return $this->container['date_updated_iso'];
    }

    /**
     * Sets date_updated_iso
     *
     * @param string $date_updated_iso date_updated_iso
     *
     * @return self
     */
    public function setDateUpdatedIso($date_updated_iso)
    {
        if (is_null($date_updated_iso)) {
            throw new \InvalidArgumentException('non-nullable date_updated_iso cannot be null');
        }
        $this->container['date_updated_iso'] = $date_updated_iso;

        return $this;
    }

    /**
     * Gets revision
     *
     * @return int
     */
    public function getRevision()
    {
        return $this->container['revision'];
    }

    /**
     * Sets revision
     *
     * @param int $revision revision
     *
     * @return self
     */
    public function setRevision($revision)
    {
        if (is_null($revision)) {
            throw new \InvalidArgumentException('non-nullable revision cannot be null');
        }
        $this->container['revision'] = $revision;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


