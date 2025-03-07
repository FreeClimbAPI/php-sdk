<?php

/**
 * IfMachine
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
 * IfMachine Class Doc Comment
 *
 * @category Class
 * @description Specifies how FreeClimb should handle this OutDial if an answering machine answers the Call. Valid values: &#x60;redirect&#x60; invokes the ifMachineUrl for instructions. &#x60;hangup&#x60; hangs up the Call. The ifMachineUrl will not be invoked.
 * @package  FreeClimb\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class IfMachine
{
    /**
     * Possible values of this enum
     */
    public const REDIRECT = "redirect";
    public const HANGUP = "hangup";


    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [

            self::REDIRECT,
            self::HANGUP
        ];
    }
}


