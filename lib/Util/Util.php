<?php

/**
 * Util
 *
 * PHP version 5
 *
 * @category Class
 * @package  FreeClimb
 * @author   wcasey@vailsys.com
 * @link     https://github.com/FreeClimbAPI
 */

/**
 * FreeClimb API
 *
 */

namespace FreeClimb\Util;

use \FreeClimb\ObjectSerializer;

/**
 * AccountRequest Class Doc Comment
 *
 * @category Class
 * @package  FreeClimb
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Util
{
    /**
     * @var UtilInterface
     */
    protected $util;

    /**
     * Constructor
     *
     */
    public function __construct()
    {
    }

    /**
     * getResponseHeader
     *
     */
    public function getResponseHeader($header, $response)
    {
        foreach ($response as $key => $r) {
            // Match the header name up to ':', compare lower case
            if (stripos($r, $header . ':') === 0) {
                list($headername, $headervalue) = explode(":", $r, 2);
                return trim($headervalue);
            }
        }
    }
}