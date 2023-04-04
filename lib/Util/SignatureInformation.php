<?php

namespace FreeClimb\Api\Util;

class SignatureInformation
{
    public int $requestTimestamp = 0;
    public array $signatures = [];

    function __construct(string $requestHeader)
    {
        $signature_header = explode(",", $requestHeader);
        foreach ($signature_header as &$signature) {
            [$header, $value] = explode("=", $signature);
            if ($header === "t") {
                $this->requestTimestamp = intval($value);
            } elseif ($header === "v1") {
                array_push($this->signatures, $value);
            }
        }
    }

    function isRequestTimeValid(int $tolerance)
    {
        $currentTime = $this->getCurrentUnixTime();
        $timeCalculation = $this->requestTimestamp + $tolerance;
        return $timeCalculation < $currentTime;
    }

    function isSignatureSafe(string $requestBody, string $signingSecret)
    {
        $hashValue = $this->computeHash($requestBody, $signingSecret);
        return in_array($hashValue, $this->signatures);
    }

    private function computeHash(string $requestBody, string $signingSecret)
    {
        $data = strval($this->requestTimestamp) . "." . $requestBody;
        return hash_hmac('sha256', $data, $signingSecret);
    }

    function getCurrentUnixTime()
    {
        return time();
    }
}