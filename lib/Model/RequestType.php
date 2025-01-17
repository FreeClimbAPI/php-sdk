<?php

/**
 * RequestType
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
 * RequestType Class Doc Comment
 *
 * @category Class
 * @package  FreeClimb\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RequestType
{
    /**
     * Possible values of this enum
     */
    public const INBOUND_CALL = "inboundCall";
    public const RECORD = "record";
    public const GET_DIGITS = "getDigits";
    public const GET_SPEECH = "getSpeech";
    public const REDIRECT = "redirect";
    public const PAUSE = "pause";
    public const OUT_DIAL_START = "outDialStart";
    public const OUT_DIAL_CONNECT = "outDialConnect";
    public const OUT_DIAL_API_CONNECT = "outDialApiConnect";
    public const MACHINE_DETECTED = "machineDetected";
    public const DEQUEUE = "dequeue";
    public const QUEUE_WAIT = "queueWait";
    public const ADD_TO_QUEUE_NOTIFICATION = "addToQueueNotification";
    public const REMOVE_FROM_QUEUE_NOTIFICATION = "removeFromQueueNotification";
    public const CALL_STATUS = "callStatus";
    public const CREATE_CONFERENCE = "createConference";
    public const CONFERENCE_STATUS = "conferenceStatus";
    public const LEAVE_CONFERENCE = "leaveConference";
    public const ADD_TO_CONFERENCE_NOTIFICATION = "addToConferenceNotification";
    public const CONFERENCE_RECORDING_STATUS = "conferenceRecordingStatus";
    public const CONFERENCE_CALL_CONTROL = "conferenceCallControl";
    public const MESSAGE_DELIVERY = "messageDelivery";
    public const MESSAGE_STATUS = "messageStatus";


    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [

            self::INBOUND_CALL,
            self::RECORD,
            self::GET_DIGITS,
            self::GET_SPEECH,
            self::REDIRECT,
            self::PAUSE,
            self::OUT_DIAL_START,
            self::OUT_DIAL_CONNECT,
            self::OUT_DIAL_API_CONNECT,
            self::MACHINE_DETECTED,
            self::DEQUEUE,
            self::QUEUE_WAIT,
            self::ADD_TO_QUEUE_NOTIFICATION,
            self::REMOVE_FROM_QUEUE_NOTIFICATION,
            self::CALL_STATUS,
            self::CREATE_CONFERENCE,
            self::CONFERENCE_STATUS,
            self::LEAVE_CONFERENCE,
            self::ADD_TO_CONFERENCE_NOTIFICATION,
            self::CONFERENCE_RECORDING_STATUS,
            self::CONFERENCE_CALL_CONTROL,
            self::MESSAGE_DELIVERY,
            self::MESSAGE_STATUS
        ];
    }
}


