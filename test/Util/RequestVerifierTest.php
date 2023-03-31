<?php

namespace FreeClimb\Api\Test\Util;

use Exception;
use FreeClimb\Api\Util\RequestVerifier;
use PHPUnit\Framework\TestCase;

class RequestVerifierTest extends TestCase
{
    protected $requestVerifierObject;

    public function setUp(): void
    {
        $this->requestVerifierObject = new RequestVerifier();
    }

    public function testCheckRequestBody()
    {
        $tolerance = 5 * 60;
        $requestBody = "";
        $signingSecret = "sigsec_ead6d3b6904196c60835d039e91b3341c77a7793";
        $requestHeader = "t=1679944186,v1=c3957749baf61df4b1506802579cc69a74c77a1ae21447b930e5a704f9ec4120,v1=1ba18712726898fbbe48cd862dd096a709f7ad761a5bab14bda9ac24d963a6a8";
        try {
            $this->requestVerifierObject->verifyRequestSignature($requestBody, $requestHeader, $signingSecret, $tolerance);
            $this->fail('Exception was not thrown');
        } catch (Exception $e) {
            $this->assertSame("Request Body cannot be empty or null", $e->getMessage());
        }
    }

    public function testCheckRequestHeaderNoSignatures()
    {
        $tolerance = 5 * 60;
        $requestBody = "{\"accountId\":\"AC1334ffb694cd8d969f51cddf5f7c9b478546d50c\",\"callId\":\"CAccb0b00506553cda09b51c5477f672a49e0b2213\",\"callStatus\":\"ringing\",\"conferenceId\":null,\"direction\":\"inbound\",\"from\":\"+13121000109\",\"parentCallId\":null,\"queueId\":null,\"requestType\":\"inboundCall\",\"to\":\"+13121000096\"}";
        $signingSecret = "sigsec_ead6d3b6904196c60835d039e91b3341c77a7793";
        $requestHeader = "t=1679944186,";
        try {
            $this->requestVerifierObject->verifyRequestSignature($requestBody, $requestHeader, $signingSecret, $tolerance);
            $this->fail('Exception was not thrown');
        } catch (Exception $e) {
            $this->assertSame("Error with request header, signatures are not present", $e->getMessage());
        }
    }

    public function testCheckRequestHeaderNoTimestamp()
    {
        $tolerance = 5 * 60;
        $requestBody = "{\"accountId\":\"AC1334ffb694cd8d969f51cddf5f7c9b478546d50c\",\"callId\":\"CAccb0b00506553cda09b51c5477f672a49e0b2213\",\"callStatus\":\"ringing\",\"conferenceId\":null,\"direction\":\"inbound\",\"from\":\"+13121000109\",\"parentCallId\":null,\"queueId\":null,\"requestType\":\"inboundCall\",\"to\":\"+13121000096\"}";
        $signingSecret = "sigsec_ead6d3b6904196c60835d039e91b3341c77a7793";
        $requestHeader = "v1=c3957749baf61df4b1506802579cc69a74c77a1ae21447b930e5a704f9ec4120,v1=1ba18712726898fbbe48cd862dd096a709f7ad761a5bab14bda9ac24d963a6a8";
        try {
            $this->requestVerifierObject->verifyRequestSignature($requestBody, $requestHeader, $signingSecret, $tolerance);
            $this->fail('FormValidationException was not thrown');
        } catch (Exception $e) {
            $this->assertSame("Error with request header, timestamp is not present", $e->getMessage());
        }
    }

    public function testCheckRequestHeaderEmptyRequestHeader()
    {
        $tolerance = 5 * 60;
        $requestBody = "{\"accountId\":\"AC1334ffb694cd8d969f51cddf5f7c9b478546d50c\",\"callId\":\"CAccb0b00506553cda09b51c5477f672a49e0b2213\",\"callStatus\":\"ringing\",\"conferenceId\":null,\"direction\":\"inbound\",\"from\":\"+13121000109\",\"parentCallId\":null,\"queueId\":null,\"requestType\":\"inboundCall\",\"to\":\"+13121000096\"}";
        $signingSecret = "sigsec_ead6d3b6904196c60835d039e91b3341c77a7793";
        $requestHeader = "";
        try {
            $this->requestVerifierObject->verifyRequestSignature($requestBody, $requestHeader, $signingSecret, $tolerance);
            $this->fail('FormValidationException was not thrown');
        } catch (Exception $e) {
            $this->assertSame("Error with request header, Request header is empty", $e->getMessage());
        }
    }

    public function testCheckSigningSecret()
    {
        $tolerance = 5 * 60;
        $requestHeader = "t=1679944186,v1=c3957749baf61df4b1506802579cc69a74c77a1ae21447b930e5a704f9ec4120,v1=1ba18712726898fbbe48cd862dd096a709f7ad761a5bab14bda9ac24d963a6a8";
        $requestBody = "{\"accountId\":\"AC1334ffb694cd8d969f51cddf5f7c9b478546d50c\",\"callId\":\"CAccb0b00506553cda09b51c5477f672a49e0b2213\",\"callStatus\":\"ringing\",\"conferenceId\":null,\"direction\":\"inbound\",\"from\":\"+13121000109\",\"parentCallId\":null,\"queueId\":null,\"requestType\":\"inboundCall\",\"to\":\"+13121000096\"}";
        $signingSecret = "";
        try {
            $this->requestVerifierObject->verifyRequestSignature($requestBody, $requestHeader, $signingSecret, $tolerance);
            $this->fail('Exception was not thrown');
        } catch (Exception $e) {
            $this->assertSame("Signing secret cannot be empty or null", $e->getMessage());
        }
    }

    public function testCheckToleranceNegativeValue()
    {
        $tolerance = -5;
        $requestHeader = "t=1679944186,v1=c3957749baf61df4b1506802579cc69a74c77a1ae21447b930e5a704f9ec4120,v1=1ba18712726898fbbe48cd862dd096a709f7ad761a5bab14bda9ac24d963a6a8";
        $requestBody = "{\"accountId\":\"AC1334ffb694cd8d969f51cddf5f7c9b478546d50c\",\"callId\":\"CAccb0b00506553cda09b51c5477f672a49e0b2213\",\"callStatus\":\"ringing\",\"conferenceId\":null,\"direction\":\"inbound\",\"from\":\"+13121000109\",\"parentCallId\":null,\"queueId\":null,\"requestType\":\"inboundCall\",\"to\":\"+13121000096\"}";
        $signingSecret = "sigsec_ead6d3b6904196c60835d039e91b3341c77a7793";
        try {
            $this->requestVerifierObject->verifyRequestSignature($requestBody, $requestHeader, $signingSecret, $tolerance);
            $this->fail('Exception was not thrown');
        } catch (Exception $e) {
            $this->assertSame("Tolerance value must be a positive integer", $e->getMessage());
        }
    }

    public function testCheckToleranceZeroValue()
    {
        $tolerance = 0;
        $requestHeader = "t=1679944186,v1=c3957749baf61df4b1506802579cc69a74c77a1ae21447b930e5a704f9ec4120,v1=1ba18712726898fbbe48cd862dd096a709f7ad761a5bab14bda9ac24d963a6a8";
        $requestBody = "{\"accountId\":\"AC1334ffb694cd8d969f51cddf5f7c9b478546d50c\",\"callId\":\"CAccb0b00506553cda09b51c5477f672a49e0b2213\",\"callStatus\":\"ringing\",\"conferenceId\":null,\"direction\":\"inbound\",\"from\":\"+13121000109\",\"parentCallId\":null,\"queueId\":null,\"requestType\":\"inboundCall\",\"to\":\"+13121000096\"}";
        $signingSecret = "sigsec_ead6d3b6904196c60835d039e91b3341c77a7793";
        try {
            $this->requestVerifierObject->verifyRequestSignature($requestBody, $requestHeader, $signingSecret, $tolerance);
            $this->fail('Exception was not thrown');
        } catch (Exception $e) {
            $this->assertSame("Tolerance value must be a positive integer", $e->getMessage());
        }
    }

    public function testCheckToleranceNaNValue()
    {
        $tolerance = (int) NAN;
        $requestHeader = "t=1679944186,v1=c3957749baf61df4b1506802579cc69a74c77a1ae21447b930e5a704f9ec4120,v1=1ba18712726898fbbe48cd862dd096a709f7ad761a5bab14bda9ac24d963a6a8";
        $requestBody = "{\"accountId\":\"AC1334ffb694cd8d969f51cddf5f7c9b478546d50c\",\"callId\":\"CAccb0b00506553cda09b51c5477f672a49e0b2213\",\"callStatus\":\"ringing\",\"conferenceId\":null,\"direction\":\"inbound\",\"from\":\"+13121000109\",\"parentCallId\":null,\"queueId\":null,\"requestType\":\"inboundCall\",\"to\":\"+13121000096\"}";
        $signingSecret = "sigsec_ead6d3b6904196c60835d039e91b3341c77a7793";
        try {
            $this->requestVerifierObject->verifyRequestSignature($requestBody, $requestHeader, $signingSecret, $tolerance);
            $this->fail('Exception was not thrown');
        } catch (Exception $e) {
            $this->assertSame("Tolerance value must be a positive integer", $e->getMessage());
        }
    }

    public function testCheckToleranceMaxValue()
    {
        $tolerance = PHP_INT_MAX;
        $requestHeader = "t=1679944186,v1=c3957749baf61df4b1506802579cc69a74c77a1ae21447b930e5a704f9ec4120,v1=1ba18712726898fbbe48cd862dd096a709f7ad761a5bab14bda9ac24d963a6a8";
        $requestBody = "{\"accountId\":\"AC1334ffb694cd8d969f51cddf5f7c9b478546d50c\",\"callId\":\"CAccb0b00506553cda09b51c5477f672a49e0b2213\",\"callStatus\":\"ringing\",\"conferenceId\":null,\"direction\":\"inbound\",\"from\":\"+13121000109\",\"parentCallId\":null,\"queueId\":null,\"requestType\":\"inboundCall\",\"to\":\"+13121000096\"}";
        $signingSecret = "sigsec_ead6d3b6904196c60835d039e91b3341c77a7793";
        try {
            $this->requestVerifierObject->verifyRequestSignature($requestBody, $requestHeader, $signingSecret, $tolerance);
            $this->fail('Exception was not thrown');
        } catch (Exception $e) {
            $this->assertSame("Tolerance value must be a positive integer", $e->getMessage());
        }
    }

    public function testVerifyTolerance()
    {
        $currentTime = time();
        $tolerance = 5 * 60;
        $requestHeader = "t=1900871395,v1=c3957749baf61df4b1506802579cc69a74c77a1ae21447b930e5a704f9ec4120,v1=1ba18712726898fbbe48cd862dd096a709f7ad761a5bab14bda9ac24d963a6a8";
        $requestBody = "{\"accountId\":\"AC1334ffb694cd8d969f51cddf5f7c9b478546d50c\",\"callId\":\"CAccb0b00506553cda09b51c5477f672a49e0b2213\",\"callStatus\":\"ringing\",\"conferenceId\":null,\"direction\":\"inbound\",\"from\":\"+13121000109\",\"parentCallId\":null,\"queueId\":null,\"requestType\":\"inboundCall\",\"to\":\"+13121000096\"}";
        $signingSecret = "sigsec_ead6d3b6904196c60835d039e91b3341c77a7793";
        try {
            $this->requestVerifierObject->verifyRequestSignature($requestBody, $requestHeader, $signingSecret, $tolerance);
            $this->fail('Exception was not thrown');
        } catch (Exception $e) {
            $this->assertSame("Request time exceeded tolerance threshold. Request: 1900871395, CurrentTime: " . strval($currentTime) . ", tolerance: " . $tolerance, $e->getMessage());
        }
    }
    public function testVerifySignature()
    {
        $tolerance = 5 * 60;
        $requestHeader = "t=1679944186,v1=c3957749baf61df4b1506802579cc69a74c77a1ae21447b930e5a704f9ec4120,v1=1ba18712726898fbbe48cd862dd096a709f7ad761a5bab14bda9ac24d963a6a8";
        $requestBody = "{\"accountId\":\"AC1334ffb694cd8d969f51cddf5f7c9b478546d50c\",\"callId\":\"CAccb0b00506553cda09b51c5477f672a49e0b2213\",\"callStatus\":\"ringing\",\"conferenceId\":null,\"direction\":\"inbound\",\"from\":\"+13121000109\",\"parentCallId\":null,\"queueId\":null,\"requestType\":\"inboundCall\",\"to\":\"+13121000096\"}";
        $signingSecret = "sigsec_ead6d3b6904196c60835d039e91b3341c77a7794";
        try {
            $this->requestVerifierObject->verifyRequestSignature($requestBody, $requestHeader, $signingSecret, $tolerance);
            $this->fail('Exception was not thrown');
        } catch (Exception $e) {
            $this->assertSame("Unverified signature request, If this request was unexpected, it may be from a bad actor. Please proceed with caution. If the request was exepected, please check any typos or issues with the signingSecret", $e->getMessage());
        }
    }
}