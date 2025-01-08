<?php

/**
 * GetSpeechWebhook
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
 * GetSpeechWebhook Class Doc Comment
 *
 * @category Class
 * @description The GetSpeech command has completed and its actionUrl is being invoked. A PerCL response is expected, unless reason is hangup.
 * @package  FreeClimb\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetSpeechWebhook extends Webhook
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetSpeechWebhook';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'request_type' => 'string',
        'call_id' => 'string',
        'account_id' => 'string',
        'from' => 'string',
        'to' => 'string',
        'call_status' => '\FreeClimb\Api\Model\CallStatus',
        'direction' => '\FreeClimb\Api\Model\CallDirection',
        'conference_id' => 'string',
        'queue_id' => 'string',
        'reason' => '\FreeClimb\Api\Model\GetSpeechReason',
        'recognition_result' => 'string',
        'confidence' => 'int',
        'parent_call_id' => 'string',
        'completion_reason' => 'string',
        'completion_cause' => 'string',
        'mrcp_code' => 'int',
        'mrcp_diagnostic' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'request_type' => null,
        'call_id' => null,
        'account_id' => null,
        'from' => null,
        'to' => null,
        'call_status' => null,
        'direction' => null,
        'conference_id' => null,
        'queue_id' => null,
        'reason' => null,
        'recognition_result' => null,
        'confidence' => null,
        'parent_call_id' => null,
        'completion_reason' => null,
        'completion_cause' => null,
        'mrcp_code' => null,
        'mrcp_diagnostic' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'request_type' => false,
        'call_id' => false,
        'account_id' => false,
        'from' => false,
        'to' => false,
        'call_status' => true,
        'direction' => true,
        'conference_id' => false,
        'queue_id' => true,
        'reason' => false,
        'recognition_result' => false,
        'confidence' => false,
        'parent_call_id' => false,
        'completion_reason' => false,
        'completion_cause' => false,
        'mrcp_code' => false,
        'mrcp_diagnostic' => false
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
        'request_type' => 'requestType',
        'call_id' => 'callId',
        'account_id' => 'accountId',
        'from' => 'from',
        'to' => 'to',
        'call_status' => 'callStatus',
        'direction' => 'direction',
        'conference_id' => 'conferenceId',
        'queue_id' => 'queueId',
        'reason' => 'reason',
        'recognition_result' => 'recognitionResult',
        'confidence' => 'confidence',
        'parent_call_id' => 'parentCallId',
        'completion_reason' => 'completionReason',
        'completion_cause' => 'completionCause',
        'mrcp_code' => 'mrcpCode',
        'mrcp_diagnostic' => 'mrcpDiagnostic'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'request_type' => 'setRequestType',
        'call_id' => 'setCallId',
        'account_id' => 'setAccountId',
        'from' => 'setFrom',
        'to' => 'setTo',
        'call_status' => 'setCallStatus',
        'direction' => 'setDirection',
        'conference_id' => 'setConferenceId',
        'queue_id' => 'setQueueId',
        'reason' => 'setReason',
        'recognition_result' => 'setRecognitionResult',
        'confidence' => 'setConfidence',
        'parent_call_id' => 'setParentCallId',
        'completion_reason' => 'setCompletionReason',
        'completion_cause' => 'setCompletionCause',
        'mrcp_code' => 'setMrcpCode',
        'mrcp_diagnostic' => 'setMrcpDiagnostic'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'request_type' => 'getRequestType',
        'call_id' => 'getCallId',
        'account_id' => 'getAccountId',
        'from' => 'getFrom',
        'to' => 'getTo',
        'call_status' => 'getCallStatus',
        'direction' => 'getDirection',
        'conference_id' => 'getConferenceId',
        'queue_id' => 'getQueueId',
        'reason' => 'getReason',
        'recognition_result' => 'getRecognitionResult',
        'confidence' => 'getConfidence',
        'parent_call_id' => 'getParentCallId',
        'completion_reason' => 'getCompletionReason',
        'completion_cause' => 'getCompletionCause',
        'mrcp_code' => 'getMrcpCode',
        'mrcp_diagnostic' => 'getMrcpDiagnostic'
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

        $this->setIfExists('request_type', $data ?? [], null);
        $this->setIfExists('call_id', $data ?? [], null);
        $this->setIfExists('account_id', $data ?? [], null);
        $this->setIfExists('from', $data ?? [], null);
        $this->setIfExists('to', $data ?? [], null);
        $this->setIfExists('call_status', $data ?? [], null);
        $this->setIfExists('direction', $data ?? [], null);
        $this->setIfExists('conference_id', $data ?? [], null);
        $this->setIfExists('queue_id', $data ?? [], null);
        $this->setIfExists('reason', $data ?? [], null);
        $this->setIfExists('recognition_result', $data ?? [], null);
        $this->setIfExists('confidence', $data ?? [], null);
        $this->setIfExists('parent_call_id', $data ?? [], null);
        $this->setIfExists('completion_reason', $data ?? [], null);
        $this->setIfExists('completion_cause', $data ?? [], null);
        $this->setIfExists('mrcp_code', $data ?? [], null);
        $this->setIfExists('mrcp_diagnostic', $data ?? [], null);
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
     * Gets request_type
     *
     * @return string|null
     */
    public function getRequestType()
    {
        return $this->container['request_type'];
    }

    /**
     * Sets request_type
     *
     * @param string|null $request_type Context or reason why this request is being made. Will be getSpeech - The GetSpeech command has completed and its actionUrl is being invoked.
     *
     * @return self
     */
    public function setRequestType($request_type)
    {
        if (is_null($request_type)) {
            throw new \InvalidArgumentException('non-nullable request_type cannot be null');
        }
        $this->container['request_type'] = $request_type;

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
     * @param string|null $call_id Unique ID for this Call, generated by FreeClimb.
     *
     * @return self
     */
    public function setCallId($call_id)
    {
        if (is_null($call_id)) {
            throw new \InvalidArgumentException('non-nullable call_id cannot be null');
        }
        $this->container['call_id'] = $call_id;

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
     * @param string|null $account_id Account ID associated with your account.
     *
     * @return self
     */
    public function setAccountId($account_id)
    {
        if (is_null($account_id)) {
            throw new \InvalidArgumentException('non-nullable account_id cannot be null');
        }
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
     * @param string|null $from Phone number of the party that initiated the Call (in E.164 format).
     *
     * @return self
     */
    public function setFrom($from)
    {
        if (is_null($from)) {
            throw new \InvalidArgumentException('non-nullable from cannot be null');
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
     * @param string|null $to Phone number provisioned to you and to which this Call is directed (in E.164 format).
     *
     * @return self
     */
    public function setTo($to)
    {
        if (is_null($to)) {
            throw new \InvalidArgumentException('non-nullable to cannot be null');
        }
        $this->container['to'] = $to;

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
        if (is_null($call_status)) {
            array_push($this->openAPINullablesSetToNull, 'call_status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('call_status', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['call_status'] = $call_status;

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
     * Gets conference_id
     *
     * @return string|null
     */
    public function getConferenceId()
    {
        return $this->container['conference_id'];
    }

    /**
     * Sets conference_id
     *
     * @param string|null $conference_id Unique ID of the Conference.
     *
     * @return self
     */
    public function setConferenceId($conference_id)
    {
        if (is_null($conference_id)) {
            throw new \InvalidArgumentException('non-nullable conference_id cannot be null');
        }
        $this->container['conference_id'] = $conference_id;

        return $this;
    }

    /**
     * Gets queue_id
     *
     * @return string|null
     */
    public function getQueueId()
    {
        return $this->container['queue_id'];
    }

    /**
     * Sets queue_id
     *
     * @param string|null $queue_id This is only populated if the request pertains to a Queue. Otherwise, it is set to null.
     *
     * @return self
     */
    public function setQueueId($queue_id)
    {
        if (is_null($queue_id)) {
            array_push($this->openAPINullablesSetToNull, 'queue_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('queue_id', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['queue_id'] = $queue_id;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return \FreeClimb\Api\Model\GetSpeechReason|null
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param \FreeClimb\Api\Model\GetSpeechReason|null $reason reason
     *
     * @return self
     */
    public function setReason($reason)
    {
        if (is_null($reason)) {
            throw new \InvalidArgumentException('non-nullable reason cannot be null');
        }
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets recognition_result
     *
     * @return string|null
     */
    public function getRecognitionResult()
    {
        return $this->container['recognition_result'];
    }

    /**
     * Sets recognition_result
     *
     * @param string|null $recognition_result Semantic content (either a string if speech was recognized or a digit if a digit was input instead of speech) returned from the entry or tag that was recognized within the grammar. The content will be replaced by 'xxxxx' when privacyMode is set to true. This field is populated only if the reason field is set to recognition or digit.
     *
     * @return self
     */
    public function setRecognitionResult($recognition_result)
    {
        if (is_null($recognition_result)) {
            throw new \InvalidArgumentException('non-nullable recognition_result cannot be null');
        }
        $this->container['recognition_result'] = $recognition_result;

        return $this;
    }

    /**
     * Gets confidence
     *
     * @return int|null
     */
    public function getConfidence()
    {
        return $this->container['confidence'];
    }

    /**
     * Sets confidence
     *
     * @param int|null $confidence Level of confidence in the obtained result. This is a value in the range 0 to 100 – with 0 being total lack of confidence and 100 being absolute certainty in the recognition. This field is populated only if the reason field is set to recognition.
     *
     * @return self
     */
    public function setConfidence($confidence)
    {
        if (is_null($confidence)) {
            throw new \InvalidArgumentException('non-nullable confidence cannot be null');
        }
        $this->container['confidence'] = $confidence;

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
     * @param string|null $parent_call_id ID of the Call that created this leg (child call).
     *
     * @return self
     */
    public function setParentCallId($parent_call_id)
    {
        if (is_null($parent_call_id)) {
            throw new \InvalidArgumentException('non-nullable parent_call_id cannot be null');
        }
        $this->container['parent_call_id'] = $parent_call_id;

        return $this;
    }

    /**
     * Gets completion_reason
     *
     * @return string|null
     */
    public function getCompletionReason()
    {
        return $this->container['completion_reason'];
    }

    /**
     * Sets completion_reason
     *
     * @param string|null $completion_reason Advanced diagnostic information if reason was error. See RFC 6787 section 9.4.12 - speech recognition.
     *
     * @return self
     */
    public function setCompletionReason($completion_reason)
    {
        if (is_null($completion_reason)) {
            throw new \InvalidArgumentException('non-nullable completion_reason cannot be null');
        }
        $this->container['completion_reason'] = $completion_reason;

        return $this;
    }

    /**
     * Gets completion_cause
     *
     * @return string|null
     */
    public function getCompletionCause()
    {
        return $this->container['completion_cause'];
    }

    /**
     * Sets completion_cause
     *
     * @param string|null $completion_cause Advanced diagnostic information if reason was error. See RFC 6787 section 9.4.11 - speech recognition.
     *
     * @return self
     */
    public function setCompletionCause($completion_cause)
    {
        if (is_null($completion_cause)) {
            throw new \InvalidArgumentException('non-nullable completion_cause cannot be null');
        }
        $this->container['completion_cause'] = $completion_cause;

        return $this;
    }

    /**
     * Gets mrcp_code
     *
     * @return int|null
     */
    public function getMrcpCode()
    {
        return $this->container['mrcp_code'];
    }

    /**
     * Sets mrcp_code
     *
     * @param int|null $mrcp_code Advanced diagnostic information if reason was error. See RFC 6787 section 5.4 - MRCPv2 specification.
     *
     * @return self
     */
    public function setMrcpCode($mrcp_code)
    {
        if (is_null($mrcp_code)) {
            throw new \InvalidArgumentException('non-nullable mrcp_code cannot be null');
        }
        $this->container['mrcp_code'] = $mrcp_code;

        return $this;
    }

    /**
     * Gets mrcp_diagnostic
     *
     * @return string|null
     */
    public function getMrcpDiagnostic()
    {
        return $this->container['mrcp_diagnostic'];
    }

    /**
     * Sets mrcp_diagnostic
     *
     * @param string|null $mrcp_diagnostic Advanced diagnostic information if reason was error. See RFC 6787 section 5.4 - MRCPv2 specification.
     *
     * @return self
     */
    public function setMrcpDiagnostic($mrcp_diagnostic)
    {
        if (is_null($mrcp_diagnostic)) {
            throw new \InvalidArgumentException('non-nullable mrcp_diagnostic cannot be null');
        }
        $this->container['mrcp_diagnostic'] = $mrcp_diagnostic;

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

    public static function deserialize(string $payload)
    {
        $content = json_decode($payload, false, 512, JSON_THROW_ON_ERROR);
        return ObjectSerializer::deserialize($content, '\FreeClimb\Api\Model\GetSpeechWebhook', []);
    }
}

