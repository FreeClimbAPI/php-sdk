<?php

/**
 * MessageResult
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
 * MessageResult Class Doc Comment
 *
 * @category Class
 * @package  FreeClimb\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MessageResult implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MessageResult';

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
        'account_id' => 'string',
        'message_id' => 'string',
        'status' => '\FreeClimb\Api\Model\MessageStatus',
        'from' => 'string',
        'to' => 'string',
        'text' => 'string',
        'direction' => 'string',
        'notification_url' => 'string',
        'brand_id' => 'string',
        'campaign_id' => 'string',
        'segment_count' => 'float',
        'media_urls' => 'string[]',
        'tfn' => '\FreeClimb\Api\Model\TFN',
        'phone_number_id' => 'string',
        'application_id' => 'string'
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
        'account_id' => null,
        'message_id' => null,
        'status' => null,
        'from' => null,
        'to' => null,
        'text' => null,
        'direction' => null,
        'notification_url' => 'uri',
        'brand_id' => null,
        'campaign_id' => null,
        'segment_count' => null,
        'media_urls' => 'uri',
        'tfn' => null,
        'phone_number_id' => null,
        'application_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'uri' => false,
        'date_created' => false,
        'date_updated' => false,
        'revision' => false,
        'account_id' => true,
        'message_id' => true,
        'status' => true,
        'from' => true,
        'to' => true,
        'text' => true,
        'direction' => true,
        'notification_url' => true,
        'brand_id' => true,
        'campaign_id' => true,
        'segment_count' => true,
        'media_urls' => true,
        'tfn' => false,
        'phone_number_id' => true,
        'application_id' => true
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
        'uri' => 'uri',
        'date_created' => 'dateCreated',
        'date_updated' => 'dateUpdated',
        'revision' => 'revision',
        'account_id' => 'accountId',
        'message_id' => 'messageId',
        'status' => 'status',
        'from' => 'from',
        'to' => 'to',
        'text' => 'text',
        'direction' => 'direction',
        'notification_url' => 'notificationUrl',
        'brand_id' => 'brandId',
        'campaign_id' => 'campaignId',
        'segment_count' => 'segmentCount',
        'media_urls' => 'mediaUrls',
        'tfn' => 'tfn',
        'phone_number_id' => 'phoneNumberId',
        'application_id' => 'applicationId'
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
        'account_id' => 'setAccountId',
        'message_id' => 'setMessageId',
        'status' => 'setStatus',
        'from' => 'setFrom',
        'to' => 'setTo',
        'text' => 'setText',
        'direction' => 'setDirection',
        'notification_url' => 'setNotificationUrl',
        'brand_id' => 'setBrandId',
        'campaign_id' => 'setCampaignId',
        'segment_count' => 'setSegmentCount',
        'media_urls' => 'setMediaUrls',
        'tfn' => 'setTfn',
        'phone_number_id' => 'setPhoneNumberId',
        'application_id' => 'setApplicationId'
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
        'account_id' => 'getAccountId',
        'message_id' => 'getMessageId',
        'status' => 'getStatus',
        'from' => 'getFrom',
        'to' => 'getTo',
        'text' => 'getText',
        'direction' => 'getDirection',
        'notification_url' => 'getNotificationUrl',
        'brand_id' => 'getBrandId',
        'campaign_id' => 'getCampaignId',
        'segment_count' => 'getSegmentCount',
        'media_urls' => 'getMediaUrls',
        'tfn' => 'getTfn',
        'phone_number_id' => 'getPhoneNumberId',
        'application_id' => 'getApplicationId'
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
        $this->setIfExists('uri', $data ?? [], null);
        $this->setIfExists('date_created', $data ?? [], null);
        $this->setIfExists('date_updated', $data ?? [], null);
        $this->setIfExists('revision', $data ?? [], null);
        $this->setIfExists('account_id', $data ?? [], null);
        $this->setIfExists('message_id', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('from', $data ?? [], null);
        $this->setIfExists('to', $data ?? [], null);
        $this->setIfExists('text', $data ?? [], null);
        $this->setIfExists('direction', $data ?? [], null);
        $this->setIfExists('notification_url', $data ?? [], null);
        $this->setIfExists('brand_id', $data ?? [], null);
        $this->setIfExists('campaign_id', $data ?? [], null);
        $this->setIfExists('segment_count', $data ?? [], null);
        $this->setIfExists('media_urls', $data ?? [], null);
        $this->setIfExists('tfn', $data ?? [], null);
        $this->setIfExists('phone_number_id', $data ?? [], null);
        $this->setIfExists('application_id', $data ?? [], null);
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
        if (is_null($uri)) {
            throw new \InvalidArgumentException('non-nullable uri cannot be null');
        }
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
        if (is_null($date_created)) {
            throw new \InvalidArgumentException('non-nullable date_created cannot be null');
        }
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
        if (is_null($date_updated)) {
            throw new \InvalidArgumentException('non-nullable date_updated cannot be null');
        }
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
        if (is_null($revision)) {
            throw new \InvalidArgumentException('non-nullable revision cannot be null');
        }
        $this->container['revision'] = $revision;

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
     * @param string|null $account_id String that uniquely identifies this account resource.
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
     * Gets message_id
     *
     * @return string|null
     */
    public function getMessageId()
    {
        return $this->container['message_id'];
    }

    /**
     * Sets message_id
     *
     * @param string|null $message_id String that uniquely identifies this message resource
     *
     * @return self
     */
    public function setMessageId($message_id)
    {
        if (is_null($message_id)) {
            array_push($this->openAPINullablesSetToNull, 'message_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('message_id', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['message_id'] = $message_id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \FreeClimb\Api\Model\MessageStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \FreeClimb\Api\Model\MessageStatus|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            array_push($this->openAPINullablesSetToNull, 'status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('status', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['status'] = $status;

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
     * @param string|null $from Phone number in E.164 format that sent the message.
     *
     * @return self
     */
    public function setFrom($from)
    {
        if (is_null($from)) {
            array_push($this->openAPINullablesSetToNull, 'from');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('from', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
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
     * @param string|null $to Phone number in E.164 format that received the message.
     *
     * @return self
     */
    public function setTo($to)
    {
        if (is_null($to)) {
            array_push($this->openAPINullablesSetToNull, 'to');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('to', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['to'] = $to;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string|null $text Message contents
     *
     * @return self
     */
    public function setText($text)
    {
        if (is_null($text)) {
            array_push($this->openAPINullablesSetToNull, 'text');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('text', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets direction
     *
     * @return string|null
     */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
     * Sets direction
     *
     * @param string|null $direction Noting whether the message was inbound or outbound
     *
     * @return self
     */
    public function setDirection($direction)
    {
        if (is_null($direction)) {
            array_push($this->openAPINullablesSetToNull, 'direction');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('direction', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['direction'] = $direction;

        return $this;
    }

    /**
     * Gets notification_url
     *
     * @return string|null
     */
    public function getNotificationUrl()
    {
        return $this->container['notification_url'];
    }

    /**
     * Sets notification_url
     *
     * @param string|null $notification_url URL invoked when message sent
     *
     * @return self
     */
    public function setNotificationUrl($notification_url)
    {
        if (is_null($notification_url)) {
            array_push($this->openAPINullablesSetToNull, 'notification_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('notification_url', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['notification_url'] = $notification_url;

        return $this;
    }

    /**
     * Gets brand_id
     *
     * @return string|null
     */
    public function getBrandId()
    {
        return $this->container['brand_id'];
    }

    /**
     * Sets brand_id
     *
     * @param string|null $brand_id The unique identifier for the brand associated with the message
     *
     * @return self
     */
    public function setBrandId($brand_id)
    {
        if (is_null($brand_id)) {
            array_push($this->openAPINullablesSetToNull, 'brand_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('brand_id', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['brand_id'] = $brand_id;

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
     * @param string|null $campaign_id The unique identifier for the campaign associated with the message
     *
     * @return self
     */
    public function setCampaignId($campaign_id)
    {
        if (is_null($campaign_id)) {
            array_push($this->openAPINullablesSetToNull, 'campaign_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('campaign_id', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['campaign_id'] = $campaign_id;

        return $this;
    }

    /**
     * Gets segment_count
     *
     * @return float|null
     */
    public function getSegmentCount()
    {
        return $this->container['segment_count'];
    }

    /**
     * Sets segment_count
     *
     * @param float|null $segment_count The number of segments into which the message was split
     *
     * @return self
     */
    public function setSegmentCount($segment_count)
    {
        if (is_null($segment_count)) {
            array_push($this->openAPINullablesSetToNull, 'segment_count');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('segment_count', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['segment_count'] = $segment_count;

        return $this;
    }

    /**
     * Gets media_urls
     *
     * @return string[]|null
     */
    public function getMediaUrls()
    {
        return $this->container['media_urls'];
    }

    /**
     * Sets media_urls
     *
     * @param string[]|null $media_urls an array of HTTP URLs which were attached this this message
     *
     * @return self
     */
    public function setMediaUrls($media_urls)
    {
        if (is_null($media_urls)) {
            array_push($this->openAPINullablesSetToNull, 'media_urls');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('media_urls', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['media_urls'] = $media_urls;

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
        if (is_null($tfn)) {
            throw new \InvalidArgumentException('non-nullable tfn cannot be null');
        }
        $this->container['tfn'] = $tfn;

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
     * @param string|null $phone_number_id String that uniquely identifies the phoneNumber resource used to send this Message
     *
     * @return self
     */
    public function setPhoneNumberId($phone_number_id)
    {
        if (is_null($phone_number_id)) {
            array_push($this->openAPINullablesSetToNull, 'phone_number_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('phone_number_id', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['phone_number_id'] = $phone_number_id;

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
     * @param string|null $application_id String that uniquely identifies the Application resource used to send this Message
     *
     * @return self
     */
    public function setApplicationId($application_id)
    {
        if (is_null($application_id)) {
            array_push($this->openAPINullablesSetToNull, 'application_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('application_id', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['application_id'] = $application_id;

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


