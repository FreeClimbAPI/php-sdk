<?php

/**
 * ApplicationList
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
 * ApplicationList Class Doc Comment
 *
 * @category Class
 * @package  FreeClimb
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ApplicationList implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ApplicationList';

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
        'applications' => '\FreeClimb\PerCL\ApplicationResult[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'total' => null,
        'start' => null,
        'end' => null,
        'page' => null,
        'num_pages' => null,
        'page_size' => null,
        'next_page_uri' => null,
        'applications' => null
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
        'total' => 'total',
        'start' => 'start',
        'end' => 'end',
        'page' => 'page',
        'num_pages' => 'numPages',
        'page_size' => 'pageSize',
        'next_page_uri' => 'nextPageUri',
        'applications' => 'applications'
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
        'applications' => 'setApplications'
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
        'applications' => 'getApplications'
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
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['end'] = isset($data['end']) ? $data['end'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['num_pages'] = isset($data['num_pages']) ? $data['num_pages'] : null;
        $this->container['page_size'] = isset($data['page_size']) ? $data['page_size'] : null;
        $this->container['next_page_uri'] = isset($data['next_page_uri']) ? $data['next_page_uri'] : null;
        $this->container['applications'] = isset($data['applications']) ? $data['applications'] : null;
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
     * @return $this
     */
    public function setTotal($total)
    {
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
     * @return $this
     */
    public function setStart($start)
    {
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
     * @return $this
     */
    public function setEnd($end)
    {
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
     * @return $this
     */
    public function setPage($page)
    {
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
     * @return $this
     */
    public function setNumPages($num_pages)
    {
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
     * @return $this
     */
    public function setPageSize($page_size)
    {
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
     * @return $this
     */
    public function setNextPageUri($next_page_uri)
    {
        $this->container['next_page_uri'] = $next_page_uri;

        return $this;
    }

    /**
     * Gets applications
     *
     * @return \FreeClimb\PerCL\ApplicationResult[]|null
     */
    public function getApplications()
    {
        return $this->container['applications'];
    }

    /**
     * Sets applications
     *
     * @param \FreeClimb\PerCL\ApplicationResult[]|null $applications applications
     *
     * @return $this
     */
    public function setApplications($applications)
    {
        $this->container['applications'] = $applications;

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


