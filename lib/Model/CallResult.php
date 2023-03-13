<?php
/**
 * CallResult
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
 * CallResult Class Doc Comment
 *
 * @category Class
 * @package  FreeClimb\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CallResult implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CallResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'uri' => 'string',
        'date_created' => 'string',
        'date_updated' => 'string',
        'revision' => 'int',
        'call_id' => 'string',
        'parent_call_id' => 'string',
        'account_id' => 'string',
        'from' => 'string',
        'to' => 'string',
        'phone_number_id' => 'string',
        'call_status' => '\FreeClimb\Api\Model\CallStatus',
        'start_time' => 'string',
        'connect_time' => 'string',
        'end_time' => 'string',
        'duration' => 'int',
        'connect_duration' => 'int',
        'direction' => '\FreeClimb\Api\Model\CallDirection',
        'answered_by' => '\FreeClimb\Api\Model\AnsweredBy',
        'subresource_uris' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'uri' => null,
        'date_created' => null,
        'date_updated' => null,
        'revision' => null,
        'call_id' => null,
        'parent_call_id' => null,
        'account_id' => null,
        'from' => null,
        'to' => null,
        'phone_number_id' => null,
        'call_status' => null,
        'start_time' => null,
        'connect_time' => null,
        'end_time' => null,
        'duration' => null,
        'connect_duration' => null,
        'direction' => null,
        'answered_by' => null,
        'subresource_uris' => null
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
        'uri' => 'uri',
        'date_created' => 'dateCreated',
        'date_updated' => 'dateUpdated',
        'revision' => 'revision',
        'call_id' => 'callId',
        'parent_call_id' => 'parentCallId',
        'account_id' => 'accountId',
        'from' => 'from',
        'to' => 'to',
        'phone_number_id' => 'phoneNumberId',
        'call_status' => 'callStatus',
        'start_time' => 'startTime',
        'connect_time' => 'connectTime',
        'end_time' => 'endTime',
        'duration' => 'duration',
        'connect_duration' => 'connectDuration',
        'direction' => 'direction',
        'answered_by' => 'answeredBy',
        'subresource_uris' => 'subresourceUris'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uri' => 'setUri',
        'date_created' => 'setDateCreated',
        'date_updated' => 'setDateUpdated',
        'revision' => 'setRevision',
        'call_id' => 'setCallId',
        'parent_call_id' => 'setParentCallId',
        'account_id' => 'setAccountId',
        'from' => 'setFrom',
        'to' => 'setTo',
        'phone_number_id' => 'setPhoneNumberId',
        'call_status' => 'setCallStatus',
        'start_time' => 'setStartTime',
        'connect_time' => 'setConnectTime',
        'end_time' => 'setEndTime',
        'duration' => 'setDuration',
        'connect_duration' => 'setConnectDuration',
        'direction' => 'setDirection',
        'answered_by' => 'setAnsweredBy',
        'subresource_uris' => 'setSubresourceUris'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uri' => 'getUri',
        'date_created' => 'getDateCreated',
        'date_updated' => 'getDateUpdated',
        'revision' => 'getRevision',
        'call_id' => 'getCallId',
        'parent_call_id' => 'getParentCallId',
        'account_id' => 'getAccountId',
        'from' => 'getFrom',
        'to' => 'getTo',
        'phone_number_id' => 'getPhoneNumberId',
        'call_status' => 'getCallStatus',
        'start_time' => 'getStartTime',
        'connect_time' => 'getConnectTime',
        'end_time' => 'getEndTime',
        'duration' => 'getDuration',
        'connect_duration' => 'getConnectDuration',
        'direction' => 'getDirection',
        'answered_by' => 'getAnsweredBy',
        'subresource_uris' => 'getSubresourceUris'
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
        $this->container['uri'] = $data['uri'] ?? null;
        $this->container['date_created'] = $data['date_created'] ?? null;
        $this->container['date_updated'] = $data['date_updated'] ?? null;
        $this->container['revision'] = $data['revision'] ?? null;
        $this->container['call_id'] = $data['call_id'] ?? null;
        $this->container['parent_call_id'] = $data['parent_call_id'] ?? null;
        $this->container['account_id'] = $data['account_id'] ?? null;
        $this->container['from'] = $data['from'] ?? null;
        $this->container['to'] = $data['to'] ?? null;
        $this->container['phone_number_id'] = $data['phone_number_id'] ?? null;
        $this->container['call_status'] = $data['call_status'] ?? null;
        $this->container['start_time'] = $data['start_time'] ?? null;
        $this->container['connect_time'] = $data['connect_time'] ?? null;
        $this->container['end_time'] = $data['end_time'] ?? null;
        $this->container['duration'] = $data['duration'] ?? null;
        $this->container['connect_duration'] = $data['connect_duration'] ?? null;
        $this->container['direction'] = $data['direction'] ?? null;
        $this->container['answered_by'] = $data['answered_by'] ?? null;
        $this->container['subresource_uris'] = $data['subresource_uris'] ?? null;
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
     * Gets uri
     *
     * @return string|null
     */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
     * Sets uri
     *
     * @param string|null $uri The URI for this resource, relative to /apiserver.
     *
     * @return self
     */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;

        return $this;
    }

    /**
     * Gets date_created
     *
     * @return string|null
     */
    public function getDateCreated()
    {
        return $this->container['date_created'];
    }

    /**
     * Sets date_created
     *
     * @param string|null $date_created The date that this resource was created (GMT) in RFC 1123 format (e.g., Mon, 15 Jun 2009 20:45:30 GMT).
     *
     * @return self
     */
    public function setDateCreated($date_created)
    {
        $this->container['date_created'] = $date_created;

        return $this;
    }

    /**
     * Gets date_updated
     *
     * @return string|null
     */
    public function getDateUpdated()
    {
        return $this->container['date_updated'];
    }

    /**
     * Sets date_updated
     *
     * @param string|null $date_updated The date that this resource was last updated (GMT) in RFC 1123 format (e.g., Mon, 15 Jun 2009 20:45:30 GMT).
     *
     * @return self
     */
    public function setDateUpdated($date_updated)
    {
        $this->container['date_updated'] = $date_updated;

        return $this;
    }

    /**
     * Gets revision
     *
     * @return int|null
     */
    public function getRevision()
    {
        return $this->container['revision'];
    }

    /**
     * Sets revision
     *
     * @param int|null $revision Revision count for the resource. This count is set to 1 on creation and is incremented every time it is updated.
     *
     * @return self
     */
    public function setRevision($revision)
    {
        $this->container['revision'] = $revision;

        return $this;
    }

    /**
     * Gets call_id
     *
     * @return string|null
     */
    public function getCallId()
    {
        return $this->container['call_id'];
    }

    /**
     * Sets call_id
     *
     * @param string|null $call_id String that uniquely identifies this Call resource.
     *
     * @return self
     */
    public function setCallId($call_id)
    {
        $this->container['call_id'] = $call_id;

        return $this;
    }

    /**
     * Gets parent_call_id
     *
     * @return string|null
     */
    public function getParentCallId()
    {
        return $this->container['parent_call_id'];
    }

    /**
     * Sets parent_call_id
     *
     * @param string|null $parent_call_id ID of the Call that created this leg (child Call).
     *
     * @return self
     */
    public function setParentCallId($parent_call_id)
    {
        $this->container['parent_call_id'] = $parent_call_id;

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
     * @param string|null $account_id ID of the account that owns this Call.
     *
     * @return self
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets from
     *
     * @return string|null
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param string|null $from Phone number that initiated this Call.
     *
     * @return self
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets to
     *
     * @return string|null
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param string|null $to Phone number that received this Call.
     *
     * @return self
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

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
     * @param string|null $phone_number_id If the Call was inbound, this is the ID of the IncomingPhoneNumber that received the Call (DNIS). If the Call was outbound, this is the ID of the phone number from which the Call was placed (ANI).
     *
     * @return self
     */
    public function setPhoneNumberId($phone_number_id)
    {
        $this->container['phone_number_id'] = $phone_number_id;

        return $this;
    }

    /**
     * Gets call_status
     *
     * @return \FreeClimb\Api\Model\CallStatus|null
     */
    public function getCallStatus()
    {
        return $this->container['call_status'];
    }

    /**
     * Sets call_status
     *
     * @param \FreeClimb\Api\Model\CallStatus|null $call_status call_status
     *
     * @return self
     */
    public function setCallStatus($call_status)
    {
        $this->container['call_status'] = $call_status;

        return $this;
    }

    /**
     * Gets start_time
     *
     * @return string|null
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param string|null $start_time Start time of the Call (GMT) in RFC 1123 format (e.g., Mon, 15 Jun 2009 20:45:30 GMT). Empty if the Call has not yet been dialed.
     *
     * @return self
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets connect_time
     *
     * @return string|null
     */
    public function getConnectTime()
    {
        return $this->container['connect_time'];
    }

    /**
     * Sets connect_time
     *
     * @param string|null $connect_time Time the Call was answered (GMT) in RFC 1123 format (e.g., Mon, 15 Jun 2009 20:45:30 GMT). Empty if the Call has not yet been dialed.
     *
     * @return self
     */
    public function setConnectTime($connect_time)
    {
        $this->container['connect_time'] = $connect_time;

        return $this;
    }

    /**
     * Gets end_time
     *
     * @return string|null
     */
    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time
     *
     * @param string|null $end_time End time of the Call (GMT) in RFC 1123 format (e.g., Mon, 15 Jun 2009 20:45:30 GMT). Empty if the Call did not complete successfully.
     *
     * @return self
     */
    public function setEndTime($end_time)
    {
        $this->container['end_time'] = $end_time;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return int|null
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int|null $duration Total length of the Call in seconds. Measures time between startTime and endTime. This value is empty for busy, failed, unanswered or ongoing Calls.
     *
     * @return self
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets connect_duration
     *
     * @return int|null
     */
    public function getConnectDuration()
    {
        return $this->container['connect_duration'];
    }

    /**
     * Sets connect_duration
     *
     * @param int|null $connect_duration Length of time that the Call was connected in seconds. Measures time between connectTime and endTime. This value is empty for busy, failed, unanswered or ongoing Calls.
     *
     * @return self
     */
    public function setConnectDuration($connect_duration)
    {
        $this->container['connect_duration'] = $connect_duration;

        return $this;
    }

    /**
     * Gets direction
     *
     * @return \FreeClimb\Api\Model\CallDirection|null
     */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
     * Sets direction
     *
     * @param \FreeClimb\Api\Model\CallDirection|null $direction direction
     *
     * @return self
     */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;

        return $this;
    }

    /**
     * Gets answered_by
     *
     * @return \FreeClimb\Api\Model\AnsweredBy|null
     */
    public function getAnsweredBy()
    {
        return $this->container['answered_by'];
    }

    /**
     * Sets answered_by
     *
     * @param \FreeClimb\Api\Model\AnsweredBy|null $answered_by answered_by
     *
     * @return self
     */
    public function setAnsweredBy($answered_by)
    {
        $this->container['answered_by'] = $answered_by;

        return $this;
    }

    /**
     * Gets subresource_uris
     *
     * @return object|null
     */
    public function getSubresourceUris()
    {
        return $this->container['subresource_uris'];
    }

    /**
     * Sets subresource_uris
     *
     * @param object|null $subresource_uris The list of subresources for this Call. These include things like logs and recordings associated with the Call.
     *
     * @return self
     */
    public function setSubresourceUris($subresource_uris)
    {
        $this->container['subresource_uris'] = $subresource_uris;

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


