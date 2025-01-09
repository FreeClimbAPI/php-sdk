<?php

/**
 * MessagesList
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
 * MessagesList Class Doc Comment
 *
 * @category Class
 * @package  FreeClimb\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MessagesList implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MessagesList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'total' => 'int',
        'start' => 'int',
        'end' => 'int',
        'page' => 'int',
        'num_pages' => 'int',
        'page_size' => 'int',
        'next_page_uri' => 'string',
        'messages' => '\FreeClimb\Api\Model\MessageResult[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'total' => null,
        'start' => null,
        'end' => null,
        'page' => null,
        'num_pages' => null,
        'page_size' => null,
        'next_page_uri' => null,
        'messages' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'total' => true,
        'start' => true,
        'end' => true,
        'page' => true,
        'num_pages' => true,
        'page_size' => true,
        'next_page_uri' => true,
        'messages' => true
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
        'total' => 'total',
        'start' => 'start',
        'end' => 'end',
        'page' => 'page',
        'num_pages' => 'numPages',
        'page_size' => 'pageSize',
        'next_page_uri' => 'nextPageUri',
        'messages' => 'messages'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'total' => 'setTotal',
        'start' => 'setStart',
        'end' => 'setEnd',
        'page' => 'setPage',
        'num_pages' => 'setNumPages',
        'page_size' => 'setPageSize',
        'next_page_uri' => 'setNextPageUri',
        'messages' => 'setMessages'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'total' => 'getTotal',
        'start' => 'getStart',
        'end' => 'getEnd',
        'page' => 'getPage',
        'num_pages' => 'getNumPages',
        'page_size' => 'getPageSize',
        'next_page_uri' => 'getNextPageUri',
        'messages' => 'getMessages'
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
        $this->setIfExists('total', $data ?? [], null);
        $this->setIfExists('start', $data ?? [], null);
        $this->setIfExists('end', $data ?? [], null);
        $this->setIfExists('page', $data ?? [], null);
        $this->setIfExists('num_pages', $data ?? [], null);
        $this->setIfExists('page_size', $data ?? [], null);
        $this->setIfExists('next_page_uri', $data ?? [], null);
        $this->setIfExists('messages', $data ?? [], null);
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
     * Gets total
     *
     * @return int|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param int|null $total Total amount of requested resource.
     *
     * @return self
     */
    public function setTotal($total)
    {
        if (is_null($total)) {
            array_push($this->openAPINullablesSetToNull, 'total');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('total', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets start
     *
     * @return int|null
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
     * Sets start
     *
     * @param int|null $start Resource index at start of current page
     *
     * @return self
     */
    public function setStart($start)
    {
        if (is_null($start)) {
            array_push($this->openAPINullablesSetToNull, 'start');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('start', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['start'] = $start;

        return $this;
    }

    /**
     * Gets end
     *
     * @return int|null
     */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
     * Sets end
     *
     * @param int|null $end Resource index at end of current page
     *
     * @return self
     */
    public function setEnd($end)
    {
        if (is_null($end)) {
            array_push($this->openAPINullablesSetToNull, 'end');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('end', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['end'] = $end;

        return $this;
    }

    /**
     * Gets page
     *
     * @return int|null
     */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
     * Sets page
     *
     * @param int|null $page Current page
     *
     * @return self
     */
    public function setPage($page)
    {
        if (is_null($page)) {
            array_push($this->openAPINullablesSetToNull, 'page');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('page', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['page'] = $page;

        return $this;
    }

    /**
     * Gets num_pages
     *
     * @return int|null
     */
    public function getNumPages()
    {
        return $this->container['num_pages'];
    }

    /**
     * Sets num_pages
     *
     * @param int|null $num_pages Total number of pages
     *
     * @return self
     */
    public function setNumPages($num_pages)
    {
        if (is_null($num_pages)) {
            array_push($this->openAPINullablesSetToNull, 'num_pages');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('num_pages', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['num_pages'] = $num_pages;

        return $this;
    }

    /**
     * Gets page_size
     *
     * @return int|null
     */
    public function getPageSize()
    {
        return $this->container['page_size'];
    }

    /**
     * Sets page_size
     *
     * @param int|null $page_size Number of items per page
     *
     * @return self
     */
    public function setPageSize($page_size)
    {
        if (is_null($page_size)) {
            array_push($this->openAPINullablesSetToNull, 'page_size');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('page_size', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['page_size'] = $page_size;

        return $this;
    }

    /**
     * Gets next_page_uri
     *
     * @return string|null
     */
    public function getNextPageUri()
    {
        return $this->container['next_page_uri'];
    }

    /**
     * Sets next_page_uri
     *
     * @param string|null $next_page_uri Uri to retrieve the next page of items
     *
     * @return self
     */
    public function setNextPageUri($next_page_uri)
    {
        if (is_null($next_page_uri)) {
            array_push($this->openAPINullablesSetToNull, 'next_page_uri');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('next_page_uri', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['next_page_uri'] = $next_page_uri;

        return $this;
    }

    /**
     * Gets messages
     *
     * @return \FreeClimb\Api\Model\MessageResult[]|null
     */
    public function getMessages()
    {
        return $this->container['messages'];
    }

    /**
     * Sets messages
     *
     * @param \FreeClimb\Api\Model\MessageResult[]|null $messages Array of messages
     *
     * @return self
     */
    public function setMessages($messages)
    {
        if (is_null($messages)) {
            array_push($this->openAPINullablesSetToNull, 'messages');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('messages', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['messages'] = $messages;

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


