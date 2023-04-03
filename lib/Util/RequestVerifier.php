<?php

namespace FreeClimb\Api\Util;

use Exception;
use FreeClimb\Api\Util\SignatureInformation;

class RequestVerifier
{
    public const DEFAULT_TOLERANCE = 5 * 60 * 1000;

    public static function verifyRequestSignature(string $requestBody, string $requestHeader, string $signingSecret, int $tolerance = DEFAULT_TOLERANCE)
    {
        $verifier = new RequestVerifier();
        $verifier->checkRequestBody($requestBody);
        $verifier->checkRequestHeader($requestHeader);
        $verifier->checkSigningSecret($signingSecret);
        $verifier->checkTolerance($tolerance);
        $info = new SignatureInformation($requestHeader);
        $verifier->verifyTolerance($info, $tolerance);
        $verifier->verifySignature($info, $requestBody, $requestHeader);
    }
    function checkRequestBody(string $requestBody)
    {
        if ($requestBody === "" or $requestBody === null) {
            throw new Exception('Request Body cannot be empty or null');
        }
    }

    function checkRequestHeader(string $requestHeader)
    {
        if ($requestHeader === "" or $requestHeader === null) {
            throw new Exception('Error with request header, Request header is empty');
        } else if (!str_contains($requestHeader, "t=")) {
            throw new Exception("Error with request header, timestamp is not present");
        } else if (!str_contains($requestHeader, "v1=")) {
            throw new Exception("Error with request header, signatures are not present");
        }
    }
    function checkSigningSecret(string $signingSecret)
    {
        if ($signingSecret === "" || $signingSecret === null) {
            throw new Exception('Signing secret cannot be empty or null');
        }
    }
    function checkTolerance(int $tolerance)
    {
        if ($tolerance <= 0 || $tolerance >= PHP_INT_MAX || $tolerance === NAN) {
            throw new Exception("Tolerance value must be a positive integer");
        }
    }
    function verifyTolerance(SignatureInformation $info, int $tolerance)
    {
        $currentTime = $info->getCurrentUnixTime();
        if (!$info->isRequestTimeValid($tolerance)) {
            throw new Exception("Request time exceeded tolerance threshold. Request: " . $info->requestTimestamp
                . ", CurrentTime: " . strval($currentTime) . ", tolerance: " . $tolerance);
        }
    }
    function verifySignature(SignatureInformation $info, string $requestBody, string $signingSecret)
    {
        if (!$info->isSignatureSafe($requestBody, $signingSecret)) {
            throw new Exception("Unverified signature request, If this request was unexpected, it may be from a bad actor. Please proceed with caution. If the request was exepected, please check any typos or issues with the signingSecret");
        }
    }
}