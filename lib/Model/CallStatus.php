<?php

/**
 * CallStatus
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
 * CallStatus Class Doc Comment
 *
 * @category Class
 * @description * &#x60;queued&#x60; &amp;ndash; Call is ready and waiting in line before going out. * &#x60;ringing&#x60; &amp;ndash; Call is currently ringing. * &#x60;inProgress&#x60; &amp;ndash; Call was answered and is currently in progress. * &#x60;canceled&#x60; &amp;ndash; Call was hung up while it was queued or ringing. * &#x60;completed&#x60; &amp;ndash; Call was answered and has ended normally. * &#x60;busy&#x60; &amp;ndash; Caller received a busy signal. * &#x60;failed&#x60; &amp;ndash; Call could not be completed as dialed, most likely because the phone number was non-existent. * &#x60;noAnswer&#x60; &amp;ndash; Call ended without being answered.
 * @package  FreeClimb\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CallStatus
{
    /**
     * Possible values of this enum
     */
    public const QUEUED = "queued";
    public const RINGING = "ringing";
    public const IN_PROGRESS = "inProgress";
    public const CANCELED = "canceled";
    public const COMPLETED = "completed";
    public const FAILED = "failed";
    public const BUSY = "busy";
    public const NO_ANSWER = "noAnswer";


    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [

            self::QUEUED,
            self::RINGING,
            self::IN_PROGRESS,
            self::CANCELED,
            self::COMPLETED,
            self::FAILED,
            self::BUSY,
            self::NO_ANSWER
        ];
    }
}


