<?php

namespace FreeClimb\Api\Test\Util;

use FreeClimb\Api\Util\SignatureInformation;
use PHPUnit\Framework\TestCase;

class SignatureInformationTest extends TestCase
{
    protected $signatureInformation;
    private static int $timestamp = 1679944186;
    private static int $currentTime;
    private int $MAX_INTEGER = 2147483647;
    public function setUp(): void
    {
        $requestHeader = "t=" . strval(self::$timestamp) . ",v1=2f33654710a27e57828fa8556c2ed47c7a324aca88f155e296579e2ae851ce7b,v1=1ba18712726898fbbe48cd862dd096a709f7ad761a5bab14bda9ac24d963a6a8";
        $this->signatureInformation = new SignatureInformation($requestHeader);
        self::$currentTime = $this->signatureInformation->getCurrentUnixTime();
    }

    public function testIsRequestTimeValidTrue()
    {
        $tolerance = 5 * 60;
        $requestHeader = "t=" . strval(self::$currentTime) . ",v1=2f33654710a27e57828fa8556c2ed47c7a324aca88f155e296579e2ae851ce7b,v1=1ba18712726898fbbe48cd862dd096a709f7ad761a5bab14bda9ac24d963a6a8";
        $this->signatureInformation = new SignatureInformation($requestHeader);
        $this->assertEquals($this->signatureInformation->isRequestTimeValid($tolerance), true);
    }

    public function testIsRequestTimeValidFalse()
    {
        $timeCalcuation = self::$currentTime - (600 * 60);
        $requestHeader = "t=" . strval($timeCalcuation) . ",v1=2f33654710a27e57828fa8556c2ed47c7a324aca88f155e296579e2ae851ce7b,v1=1ba18712726898fbbe48cd862dd096a709f7ad761a5bab14bda9ac24d963a6a8";
        $this->signatureInformation = new SignatureInformation($requestHeader);
        $tolerance = 500 * 60;
        $this->assertEquals($this->signatureInformation->isRequestTimeValid($tolerance), false);
    }

    public function testIsSignatureSafeTrue()
    {
        $requestBody = "{\"accountId\":\"AC0123456789abcdefABCDEF0123456789abcdef00\",\"callId\":\"CA0123456789abcdefABCDEF0123456789abcdef00\",\"callStatus\":\"ringing\",\"conferenceId\":null,\"direction\":\"inbound\",\"from\":\"+13121000109\",\"parentCallId\":null,\"queueId\":null,\"requestType\":\"inboundCall\",\"to\":\"+13121000096\"}";
        $signingSecret = "sigsec_ead6d3b6904196c60835d039e91b3341c77a7793";
        $this->assertEquals($this->signatureInformation->isSignatureSafe($requestBody, $signingSecret), true);
    }

    public function testIsSignatureSafeFalse()
    {
        $requestBody = "{\"accountId\":\"AC0123456789abcdefABCDEF0123456789abcdef00\",\"callId\":\"CA0123456789abcdefABCDEF0123456789abcdef00\",\"callStatus\":\"ringing\",\"conferenceId\":null,\"direction\":\"inbound\",\"from\":\"+13121000109\",\"parentCallId\":null,\"queueId\":null,\"requestType\":\"inboundCall\",\"to\":\"+13121000096\"}";
        $signingSecret = "sigsec_ead6d3b6904196c60835d039e91b3341c77a7794";
        $this->assertEquals($this->signatureInformation->isSignatureSafe($requestBody, $signingSecret), false);
    }
}