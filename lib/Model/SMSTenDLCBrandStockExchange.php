<?php

/**
 * SMSTenDLCBrandStockExchange
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
 * SMSTenDLCBrandStockExchange Class Doc Comment
 *
 * @category Class
 * @description (Required for public company) stock exchange.
 * @package  FreeClimb\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SMSTenDLCBrandStockExchange
{
    /**
     * Possible values of this enum
     */
    public const NONE = "NONE";
    public const NASDAQ = "NASDAQ";
    public const NYSE = "NYSE";
    public const AMEX = "AMEX";
    public const AMX = "AMX";
    public const ASX = "ASX";
    public const B3 = "B3";
    public const BME = "BME";
    public const BSE = "BSE";
    public const FRA = "FRA";
    public const ICEX = "ICEX";
    public const JPX = "JPX";
    public const JSE = "JSE";
    public const KRX = "KRX";
    public const LON = "LON";
    public const NSE = "NSE";
    public const OMX = "OMX";
    public const SEHK = "SEHK";
    public const SGX = "SGX";
    public const SSE = "SSE";
    public const STO = "STO";
    public const SWX = "SWX";
    public const SZSE = "SZSE";
    public const TSX = "TSX";
    public const TWSE = "TWSE";
    public const VSE = "VSE";
    public const OTHER = "OTHER";


    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [

            self::NONE,
            self::NASDAQ,
            self::NYSE,
            self::AMEX,
            self::AMX,
            self::ASX,
            self::B3,
            self::BME,
            self::BSE,
            self::FRA,
            self::ICEX,
            self::JPX,
            self::JSE,
            self::KRX,
            self::LON,
            self::NSE,
            self::OMX,
            self::SEHK,
            self::SGX,
            self::SSE,
            self::STO,
            self::SWX,
            self::SZSE,
            self::TSX,
            self::TWSE,
            self::VSE,
            self::OTHER
        ];
    }
}

