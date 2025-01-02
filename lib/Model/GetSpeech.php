<?php

/**
 * GetSpeech
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
 * GetSpeech Class Doc Comment
 *
 * @category Class
 * @description The &#x60;GetSpeech&#x60; command enables the Caller to respond to the application using a supported language. Unlike DTMF entry, which implicitly restricts the user to using the available buttons on the phone key pad, speech input allows for flexible audio inputs based on grammar. FreeClimb supports grammars written using GRXML compatible with the Microsoft Speech Platform. &#x60;GetSpeech&#x60; is only supported on a single call leg. It is not supported when there are two or more call legs connected (as in within a Conference).
 * @package  FreeClimb\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetSpeech extends PerclCommand
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetSpeech';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'action_url' => 'string',
        'grammar_type' => '\FreeClimb\Api\Model\GrammarType',
        'grammar_file' => 'string',
        'grammar_rule' => 'string',
        'play_beep' => 'bool',
        'prompts' => '\FreeClimb\Api\Model\PerclCommand[]',
        'no_input_timeout_ms' => 'int',
        'recognition_timeout_ms' => 'int',
        'confidence_threshold' => 'float',
        'sensitivity_level' => 'float',
        'speech_complete_timeout_ms' => 'int',
        'speech_incomplete_timeout_ms' => 'int',
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
        'grammar_type' => null,
        'grammar_file' => null,
        'grammar_rule' => null,
        'play_beep' => null,
        'prompts' => null,
        'no_input_timeout_ms' => null,
        'recognition_timeout_ms' => null,
        'confidence_threshold' => null,
        'sensitivity_level' => null,
        'speech_complete_timeout_ms' => null,
        'speech_incomplete_timeout_ms' => null,
        'privacy_mode' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'action_url' => false,
        'grammar_type' => true,
        'grammar_file' => false,
        'grammar_rule' => false,
        'play_beep' => false,
        'prompts' => false,
        'no_input_timeout_ms' => false,
        'recognition_timeout_ms' => false,
        'confidence_threshold' => false,
        'sensitivity_level' => false,
        'speech_complete_timeout_ms' => false,
        'speech_incomplete_timeout_ms' => false,
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
        'grammar_type' => 'grammarType',
        'grammar_file' => 'grammarFile',
        'grammar_rule' => 'grammarRule',
        'play_beep' => 'playBeep',
        'prompts' => 'prompts',
        'no_input_timeout_ms' => 'noInputTimeoutMs',
        'recognition_timeout_ms' => 'recognitionTimeoutMs',
        'confidence_threshold' => 'confidenceThreshold',
        'sensitivity_level' => 'sensitivityLevel',
        'speech_complete_timeout_ms' => 'speechCompleteTimeoutMs',
        'speech_incomplete_timeout_ms' => 'speechIncompleteTimeoutMs',
        'privacy_mode' => 'privacyMode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'action_url' => 'setActionUrl',
        'grammar_type' => 'setGrammarType',
        'grammar_file' => 'setGrammarFile',
        'grammar_rule' => 'setGrammarRule',
        'play_beep' => 'setPlayBeep',
        'prompts' => 'setPrompts',
        'no_input_timeout_ms' => 'setNoInputTimeoutMs',
        'recognition_timeout_ms' => 'setRecognitionTimeoutMs',
        'confidence_threshold' => 'setConfidenceThreshold',
        'sensitivity_level' => 'setSensitivityLevel',
        'speech_complete_timeout_ms' => 'setSpeechCompleteTimeoutMs',
        'speech_incomplete_timeout_ms' => 'setSpeechIncompleteTimeoutMs',
        'privacy_mode' => 'setPrivacyMode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'action_url' => 'getActionUrl',
        'grammar_type' => 'getGrammarType',
        'grammar_file' => 'getGrammarFile',
        'grammar_rule' => 'getGrammarRule',
        'play_beep' => 'getPlayBeep',
        'prompts' => 'getPrompts',
        'no_input_timeout_ms' => 'getNoInputTimeoutMs',
        'recognition_timeout_ms' => 'getRecognitionTimeoutMs',
        'confidence_threshold' => 'getConfidenceThreshold',
        'sensitivity_level' => 'getSensitivityLevel',
        'speech_complete_timeout_ms' => 'getSpeechCompleteTimeoutMs',
        'speech_incomplete_timeout_ms' => 'getSpeechIncompleteTimeoutMs',
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
        $this->setIfExists('grammar_type', $data ?? [], null);
        $this->setIfExists('grammar_file', $data ?? [], null);
        $this->setIfExists('grammar_rule', $data ?? [], null);
        $this->setIfExists('play_beep', $data ?? [], null);
        $this->setIfExists('prompts', $data ?? [], null);
        $this->setIfExists('no_input_timeout_ms', $data ?? [], null);
        $this->setIfExists('recognition_timeout_ms', $data ?? [], null);
        $this->setIfExists('confidence_threshold', $data ?? [], null);
        $this->setIfExists('sensitivity_level', $data ?? [], null);
        $this->setIfExists('speech_complete_timeout_ms', $data ?? [], null);
        $this->setIfExists('speech_incomplete_timeout_ms', $data ?? [], null);
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
        if ($this->container['grammar_file'] === null) {
            $invalidProperties[] = "'grammar_file' can't be null";
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
     * @param string $action_url When the caller has finished speaking or the command has timed out, FreeClimb will make a POST request to this URL. A PerCL response is expected to continue handling the call.
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
     * Gets grammar_type
     *
     * @return \FreeClimb\Api\Model\GrammarType|null
     */
    public function getGrammarType()
    {
        return $this->container['grammar_type'];
    }

    /**
     * Sets grammar_type
     *
     * @param \FreeClimb\Api\Model\GrammarType|null $grammar_type grammar_type
     *
     * @return self
     */
    public function setGrammarType($grammar_type)
    {
        if (is_null($grammar_type)) {
            array_push($this->openAPINullablesSetToNull, 'grammar_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('grammar_type', $nullablesSetToNull, true);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['grammar_type'] = $grammar_type;

        return $this;
    }

    /**
     * Gets grammar_file
     *
     * @return string
     */
    public function getGrammarFile()
    {
        return $this->container['grammar_file'];
    }

    /**
     * Sets grammar_file
     *
     * @param string $grammar_file The grammar file to use for speech recognition. If grammarType is set to URL, this attribute is specified as a download URL.
     *
     * @return self
     */
    public function setGrammarFile($grammar_file)
    {
        if (is_null($grammar_file)) {
            throw new \InvalidArgumentException('non-nullable grammar_file cannot be null');
        }
        $this->container['grammar_file'] = $grammar_file;

        return $this;
    }

    /**
     * Gets grammar_rule
     *
     * @return string|null
     */
    public function getGrammarRule()
    {
        return $this->container['grammar_rule'];
    }

    /**
     * Sets grammar_rule
     *
     * @param string|null $grammar_rule The grammar rule within the specified grammar file to use for speech recognition. This attribute is optional if `grammarType` is `URL` and ignored if `grammarType` is `BUILTIN`.
     *
     * @return self
     */
    public function setGrammarRule($grammar_rule)
    {
        if (is_null($grammar_rule)) {
            throw new \InvalidArgumentException('non-nullable grammar_rule cannot be null');
        }
        $this->container['grammar_rule'] = $grammar_rule;

        return $this;
    }

    /**
     * Gets play_beep
     *
     * @return bool|null
     */
    public function getPlayBeep()
    {
        return $this->container['play_beep'];
    }

    /**
     * Sets play_beep
     *
     * @param bool|null $play_beep Indicates whether a beep should be played just before speech recognition is initiated so that the speaker can start to speak.
     *
     * @return self
     */
    public function setPlayBeep($play_beep)
    {
        if (is_null($play_beep)) {
            throw new \InvalidArgumentException('non-nullable play_beep cannot be null');
        }
        $this->container['play_beep'] = $play_beep;

        return $this;
    }

    /**
     * Gets prompts
     *
     * @return \FreeClimb\Api\Model\PerclCommand[]|null
     */
    public function getPrompts()
    {
        return $this->container['prompts'];
    }

    /**
     * Sets prompts
     *
     * @param \FreeClimb\Api\Model\PerclCommand[]|null $prompts The JSON array of PerCL commands to nest within the `GetSpeech` command. The `Say`, `Play`, and `Pause` commands can be used. The nested actions are executed while FreeClimb is waiting for input from the caller. This allows for playing menu options to the caller and to prompt for the expected input. These commands stop executing when the caller begins to input speech.
     *
     * @return self
     */
    public function setPrompts($prompts)
    {
        if (is_null($prompts)) {
            throw new \InvalidArgumentException('non-nullable prompts cannot be null');
        }
        $this->container['prompts'] = $prompts;

        return $this;
    }

    /**
     * Gets no_input_timeout_ms
     *
     * @return int|null
     */
    public function getNoInputTimeoutMs()
    {
        return $this->container['no_input_timeout_ms'];
    }

    /**
     * Sets no_input_timeout_ms
     *
     * @param int|null $no_input_timeout_ms When recognition is started and there is no speech detected for `noInputTimeoutMs` milliseconds, the recognizer will terminate the recognition operation.
     *
     * @return self
     */
    public function setNoInputTimeoutMs($no_input_timeout_ms)
    {
        if (is_null($no_input_timeout_ms)) {
            throw new \InvalidArgumentException('non-nullable no_input_timeout_ms cannot be null');
        }
        $this->container['no_input_timeout_ms'] = $no_input_timeout_ms;

        return $this;
    }

    /**
     * Gets recognition_timeout_ms
     *
     * @return int|null
     */
    public function getRecognitionTimeoutMs()
    {
        return $this->container['recognition_timeout_ms'];
    }

    /**
     * Sets recognition_timeout_ms
     *
     * @param int|null $recognition_timeout_ms When playback of prompts ends and there is no match for `recognitionTimeoutMs` milliseconds, the recognizer will terminate the recognition operation.
     *
     * @return self
     */
    public function setRecognitionTimeoutMs($recognition_timeout_ms)
    {
        if (is_null($recognition_timeout_ms)) {
            throw new \InvalidArgumentException('non-nullable recognition_timeout_ms cannot be null');
        }
        $this->container['recognition_timeout_ms'] = $recognition_timeout_ms;

        return $this;
    }

    /**
     * Gets confidence_threshold
     *
     * @return float|null
     */
    public function getConfidenceThreshold()
    {
        return $this->container['confidence_threshold'];
    }

    /**
     * Sets confidence_threshold
     *
     * @param float|null $confidence_threshold When a recognition resource recognizes a spoken phrase, it associates a confidence level with that match. Parameter `confidenceThreshold` specifies what confidence level is considered a successful match. Values are between 0.0 and 1.0.
     *
     * @return self
     */
    public function setConfidenceThreshold($confidence_threshold)
    {
        if (is_null($confidence_threshold)) {
            throw new \InvalidArgumentException('non-nullable confidence_threshold cannot be null');
        }
        $this->container['confidence_threshold'] = $confidence_threshold;

        return $this;
    }

    /**
     * Gets sensitivity_level
     *
     * @return float|null
     */
    public function getSensitivityLevel()
    {
        return $this->container['sensitivity_level'];
    }

    /**
     * Sets sensitivity_level
     *
     * @param float|null $sensitivity_level The speech recognizer supports a variable level of sound sensitivity. The sensitivityLevel attribute allows for filtering out background noise, so it is not mistaken for speech. Values are between 0.0 and 1.0
     *
     * @return self
     */
    public function setSensitivityLevel($sensitivity_level)
    {
        if (is_null($sensitivity_level)) {
            throw new \InvalidArgumentException('non-nullable sensitivity_level cannot be null');
        }
        $this->container['sensitivity_level'] = $sensitivity_level;

        return $this;
    }

    /**
     * Gets speech_complete_timeout_ms
     *
     * @return int|null
     */
    public function getSpeechCompleteTimeoutMs()
    {
        return $this->container['speech_complete_timeout_ms'];
    }

    /**
     * Sets speech_complete_timeout_ms
     *
     * @param int|null $speech_complete_timeout_ms Parameter `speechCompleteTimeoutMs` specifies the length of silence required following user speech before the speech recognizer finalizes a result. This timeout applies when the recognizer currently has a complete match against an active grammar. Reasonable speech complete timeout values are typically in the range of 0.3 seconds to 1.0 seconds.
     *
     * @return self
     */
    public function setSpeechCompleteTimeoutMs($speech_complete_timeout_ms)
    {
        if (is_null($speech_complete_timeout_ms)) {
            throw new \InvalidArgumentException('non-nullable speech_complete_timeout_ms cannot be null');
        }
        $this->container['speech_complete_timeout_ms'] = $speech_complete_timeout_ms;

        return $this;
    }

    /**
     * Gets speech_incomplete_timeout_ms
     *
     * @return int|null
     */
    public function getSpeechIncompleteTimeoutMs()
    {
        return $this->container['speech_incomplete_timeout_ms'];
    }

    /**
     * Sets speech_incomplete_timeout_ms
     *
     * @param int|null $speech_incomplete_timeout_ms Parameter `speechIncompleteTimeoutMs` specifies the length of silence following user speech after which a recognizer finalizes a result. This timeout applies when the speech prior to the silence is an incomplete match of all active grammars. Timeout `speechIncompleteTimeoutMs` is usually longer than `speechCompleteTimeoutMs` to allow users to pause mid-utterance.
     *
     * @return self
     */
    public function setSpeechIncompleteTimeoutMs($speech_incomplete_timeout_ms)
    {
        if (is_null($speech_incomplete_timeout_ms)) {
            throw new \InvalidArgumentException('non-nullable speech_incomplete_timeout_ms cannot be null');
        }
        $this->container['speech_incomplete_timeout_ms'] = $speech_incomplete_timeout_ms;

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
     * @param bool|null $privacy_mode Parameter privacyMode will not log the `text` as required by PCI compliance.
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


