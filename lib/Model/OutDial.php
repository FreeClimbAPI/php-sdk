<?php

/**
 * OutDial
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
use \FreeClimb\Api\ObjectSerializer;

/**
 * OutDial Class Doc Comment
 *
 * @category Class
 * @description The OutDial command is used to call a phone number
 * @package  FreeClimb\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OutDial extends PerclCommand
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OutDial';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'action_url' => 'string',
        'call_connect_url' => 'string',
        'calling_number' => 'string',
        'destination' => 'string',
        'if_machine' => '\FreeClimb\Api\Model\IfMachine',
        'if_machine_url' => 'string',
        'send_digits' => 'string',
        'status_callback_url' => 'string',
        'timeout' => 'int',
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
        'action_url' => 'uri',
        'call_connect_url' => 'uri',
        'calling_number' => null,
        'destination' => null,
        'if_machine' => null,
        'if_machine_url' => 'uri',
        'send_digits' => null,
        'status_callback_url' => 'uri',
        'timeout' => null,
        'privacy_mode' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'action_url' => false,
        'call_connect_url' => false,
        'calling_number' => false,
        'destination' => false,
        'if_machine' => false,
        'if_machine_url' => false,
        'send_digits' => false,
        'status_callback_url' => false,
        'timeout' => false,
        'privacy_mode' => false
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
        return self::$openAPITypes + parent::openAPITypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats + parent::openAPIFormats();
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables + parent::openAPINullables();
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
        'action_url' => 'actionUrl',
        'call_connect_url' => 'callConnectUrl',
        'calling_number' => 'callingNumber',
        'destination' => 'destination',
        'if_machine' => 'ifMachine',
        'if_machine_url' => 'ifMachineUrl',
        'send_digits' => 'sendDigits',
        'status_callback_url' => 'statusCallbackUrl',
        'timeout' => 'timeout',
        'privacy_mode' => 'privacyMode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'action_url' => 'setActionUrl',
        'call_connect_url' => 'setCallConnectUrl',
        'calling_number' => 'setCallingNumber',
        'destination' => 'setDestination',
        'if_machine' => 'setIfMachine',
        'if_machine_url' => 'setIfMachineUrl',
        'send_digits' => 'setSendDigits',
        'status_callback_url' => 'setStatusCallbackUrl',
        'timeout' => 'setTimeout',
        'privacy_mode' => 'setPrivacyMode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'action_url' => 'getActionUrl',
        'call_connect_url' => 'getCallConnectUrl',
        'calling_number' => 'getCallingNumber',
        'destination' => 'getDestination',
        'if_machine' => 'getIfMachine',
        'if_machine_url' => 'getIfMachineUrl',
        'send_digits' => 'getSendDigits',
        'status_callback_url' => 'getStatusCallbackUrl',
        'timeout' => 'getTimeout',
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
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        parent::__construct($data);

        $this->setIfExists('action_url', $data ?? [], null);
        $this->setIfExists('call_connect_url', $data ?? [], null);
        $this->setIfExists('calling_number', $data ?? [], null);
        $this->setIfExists('destination', $data ?? [], null);
        $this->setIfExists('if_machine', $data ?? [], null);
        $this->setIfExists('if_machine_url', $data ?? [], null);
        $this->setIfExists('send_digits', $data ?? [], null);
        $this->setIfExists('status_callback_url', $data ?? [], null);
        $this->setIfExists('timeout', $data ?? [], null);
        $this->setIfExists('privacy_mode', $data ?? [], null);
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
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['action_url'] === null) {
            $invalidProperties[] = "'action_url' can't be null";
        }
        if ($this->container['call_connect_url'] === null) {
            $invalidProperties[] = "'call_connect_url' can't be null";
        }
        if ($this->container['calling_number'] === null) {
            $invalidProperties[] = "'calling_number' can't be null";
        }
        if ($this->container['destination'] === null) {
            $invalidProperties[] = "'destination' can't be null";
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
     * @param string $action_url URL to which FreeClimb sends an HTTP POST request.
     *
     * @return self
     */
    public function setActionUrl($action_url)
    {
        if (is_null($action_url)) {
            throw new \InvalidArgumentException('non-nullable action_url cannot be null');
        }
        $this->container['action_url'] = $action_url;

        return $this;
    }

    /**
     * Gets call_connect_url
     *
     * @return string
     */
    public function getCallConnectUrl()
    {
        return $this->container['call_connect_url'];
    }

    /**
     * Sets call_connect_url
     *
     * @param string $call_connect_url URL to which FreeClimb makes an HTTP POST request informing the result of the OutDial.
     *
     * @return self
     */
    public function setCallConnectUrl($call_connect_url)
    {
        if (is_null($call_connect_url)) {
            throw new \InvalidArgumentException('non-nullable call_connect_url cannot be null');
        }
        $this->container['call_connect_url'] = $call_connect_url;

        return $this;
    }

    /**
     * Gets calling_number
     *
     * @return string
     */
    public function getCallingNumber()
    {
        return $this->container['calling_number'];
    }

    /**
     * Sets calling_number
     *
     * @param string $calling_number he caller ID to show to the called party when FreeClimb calls. This can be one of the following: The To or From number provided in the first Webhook to your webserver. Any phone number you have purchased from FreeClimb.
     *
     * @return self
     */
    public function setCallingNumber($calling_number)
    {
        if (is_null($calling_number)) {
            throw new \InvalidArgumentException('non-nullable calling_number cannot be null');
        }
        $this->container['calling_number'] = $calling_number;

        return $this;
    }

    /**
     * Gets destination
     *
     * @return string
     */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
     * Sets destination
     *
     * @param string $destination E.164 representation of the phone number to Call.
     *
     * @return self
     */
    public function setDestination($destination)
    {
        if (is_null($destination)) {
            throw new \InvalidArgumentException('non-nullable destination cannot be null');
        }
        $this->container['destination'] = $destination;

        return $this;
    }

    /**
     * Gets if_machine
     *
     * @return \FreeClimb\Api\Model\IfMachine|null
     */
    public function getIfMachine()
    {
        return $this->container['if_machine'];
    }

    /**
     * Sets if_machine
     *
     * @param \FreeClimb\Api\Model\IfMachine|null $if_machine if_machine
     *
     * @return self
     */
    public function setIfMachine($if_machine)
    {
        if (is_null($if_machine)) {
            throw new \InvalidArgumentException('non-nullable if_machine cannot be null');
        }
        $this->container['if_machine'] = $if_machine;

        return $this;
    }

    /**
     * Gets if_machine_url
     *
     * @return string|null
     */
    public function getIfMachineUrl()
    {
        return $this->container['if_machine_url'];
    }

    /**
     * Sets if_machine_url
     *
     * @param string|null $if_machine_url When the `ifMachine` flag is set to `redirect`, this attribute specifies a URL to which FreeClimb makes a POST request when an answering machine or a fax machine is detected. This URL is required if the `ifMachine` flag is set to `redirect`. Otherwise, it should not be included.
     *
     * @return self
     */
    public function setIfMachineUrl($if_machine_url)
    {
        if (is_null($if_machine_url)) {
            throw new \InvalidArgumentException('non-nullable if_machine_url cannot be null');
        }
        $this->container['if_machine_url'] = $if_machine_url;

        return $this;
    }

    /**
     * Gets send_digits
     *
     * @return string|null
     */
    public function getSendDigits()
    {
        return $this->container['send_digits'];
    }

    /**
     * Sets send_digits
     *
     * @param string|null $send_digits DTMF tones to play to the outdialed Call. This is typically used to dial a number and then dial an extension.
     *
     * @return self
     */
    public function setSendDigits($send_digits)
    {
        if (is_null($send_digits)) {
            throw new \InvalidArgumentException('non-nullable send_digits cannot be null');
        }
        $this->container['send_digits'] = $send_digits;

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
     * @param string|null $status_callback_url When the outdialed Call leg terminates, FreeClimb sends a `callStatus` Webhook to the `statusCallbackUrl`. This is a notification only; any PerCL command returned is ignored.
     *
     * @return self
     */
    public function setStatusCallbackUrl($status_callback_url)
    {
        if (is_null($status_callback_url)) {
            throw new \InvalidArgumentException('non-nullable status_callback_url cannot be null');
        }
        $this->container['status_callback_url'] = $status_callback_url;

        return $this;
    }

    /**
     * Gets timeout
     *
     * @return int|null
     */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
     * Sets timeout
     *
     * @param int|null $timeout Maximum time in seconds the `OutDial` command waits for the called party to answer the Call. When a timeout occurs, FreeClimb invokes the `callConnectUrl` Webhook to report that the out-dialed Call has ended with a status of `noAnswer`.
     *
     * @return self
     */
    public function setTimeout($timeout)
    {
        if (is_null($timeout)) {
            throw new \InvalidArgumentException('non-nullable timeout cannot be null');
        }
        $this->container['timeout'] = $timeout;

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
        if (is_null($privacy_mode)) {
            throw new \InvalidArgumentException('non-nullable privacy_mode cannot be null');
        }
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


