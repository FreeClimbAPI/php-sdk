<?php

namespace FreeClimb\Api\Test\Util;

use FreeClimb\Api\Util\SignatureInformation;
use PHPUnit\Framework\TestCase;

class SignatureInformationTest extends TestCase
{
    protected $signatureInformationObject;

    public function setUp(): void
    {
        $requestHeader = "t=1679944186,v1=c3957749baf61df4b1506802579cc69a74c77a1ae21447b930e5a704f9ec4120,v1=1ba18712726898fbbe48cd862dd096a709f7ad761a5bab14bda9ac24d963a6a8";
        $this->signatureInformationObject = new SignatureInformation($requestHeader);
    }

    public function testIsRequestTimeValidTrue()
    {
        $tolerance = 5 * 60;
        $this->assertEquals($this->signatureInformationObject->isRequestTimeValid($tolerance), true);
    }

    public function testIsRequestTimeValidFalse()
    {
        $tolerance = 5 * 60 * 10000;
        $this->assertEquals($this->signatureInformationObject->isRequestTimeValid($tolerance), false);
    }

    public function testIsSignatureSafeTrue()
    {
        $requestBody = "{\"accountId\":\"AC1334ffb694cd8d969f51cddf5f7c9b478546d50c\",\"callId\":\"CAccb0b00506553cda09b51c5477f672a49e0b2213\",\"callStatus\":\"ringing\",\"conferenceId\":null,\"direction\":\"inbound\",\"from\":\"+13121000109\",\"parentCallId\":null,\"queueId\":null,\"requestType\":\"inboundCall\",\"to\":\"+13121000096\"}";
        $signingSecret = "sigsec_ead6d3b6904196c60835d039e91b3341c77a7793";
        $this->assertEquals($this->signatureInformationObject->isSignatureSafe($requestBody, $signingSecret), true);
    }

    public function testIsSignatureSafeFalse()
    {
        $requestBody = "{\"accountId\":\"AC1334ffb694cd8d969f51cddf5f7c9b478546d50c\",\"callId\":\"CAccb0b00506553cda09b51c5477f672a49e0b2213\",\"callStatus\":\"ringing\",\"conferenceId\":null,\"direction\":\"inbound\",\"from\":\"+13121000109\",\"parentCallId\":null,\"queueId\":null,\"requestType\":\"inboundCall\",\"to\":\"+13121000096\"}";
        $signingSecret = "sigsec_ead6d3b6904196c60835d039e91b3341c77a7794";
        $this->assertEquals($this->signatureInformationObject->isSignatureSafe($requestBody, $signingSecret), false);
    }
}