<?php

namespace FreeClimb\Api\Test\Util;

use Exception;
use FreeClimb\Api\Util\RequestVerifier;
use PHPUnit\Framework\TestCase;

class RequestVerifierTest extends TestCase
{
    protected $requestVerifier;

    public function setUp(): void
    {
        $this->requestVerifier = new RequestVerifier();
    }

    public function testCheckRequestBody()
    {
        $tolerance = 5 * 60;
        $requestBody = "";
        $signingSecret = "sigsec_ead6d3b6904196c60835d039e91b3341c77a7793";
        $requestHeader = "t=1679944186,v1=2f33654710a27e57828fa8556c2ed47c7a324aca88f155e296579e2ae851ce7b,v1=1ba18712726898fbbe48cd862dd096a709f7ad761a5bab14bda9ac24d963a6a8";
        try {
            RequestVerifier::verifyRequestSignature($requestBody, $requestHeader, $signingSecret, $tolerance);
            $this->fail('Exception was not thrown');
        } catch (Exception $e) {
            $this->assertSame("Request Body cannot be empty or null", $e->getMessage());
        }
    }

    public function testCheckRequestHeaderNoSignatures()
    {
        $tolerance = 5 * 60;
        $requestBody = "{\"accountId\":\"AC0123456789abcdefABCDEF0123456789abcdef00\",\"callId\":\"CA0123456789abcdefABCDEF0123456789abcdef00\",\"callStatus\":\"ringing\",\"conferenceId\":null,\"direction\":\"inbound\",\"from\":\"+13121000109\",\"parentCallId\":null,\"queueId\":null,\"requestType\":\"inboundCall\",\"to\":\"+13121000096\"}";
        $signingSecret = "sigsec_ead6d3b6904196c60835d039e91b3341c77a7793";
        $requestHeader = "t=1679944186,";
        try {
            RequestVerifier::verifyRequestSignature($requestBody, $requestHeader, $signingSecret, $tolerance);
            $this->fail('Exception was not thrown');
        } catch (Exception $e) {
            $this->assertSame("Error with request header, signatures are not present", $e->getMessage());
        }
    }

    public function testCheckRequestHeaderNoTimestamp()
    {
        $tolerance = 5 * 60;
        $requestBody = "{\"accountId\":\"AC0123456789abcdefABCDEF0123456789abcdef00\",\"callId\":\"CA0123456789abcdefABCDEF0123456789abcdef00\",\"callStatus\":\"ringing\",\"conferenceId\":null,\"direction\":\"inbound\",\"from\":\"+13121000109\",\"parentCallId\":null,\"queueId\":null,\"requestType\":\"inboundCall\",\"to\":\"+13121000096\"}";
        $signingSecret = "sigsec_ead6d3b6904196c60835d039e91b3341c77a7793";
        $requestHeader = "v1=2f33654710a27e57828fa8556c2ed47c7a324aca88f155e296579e2ae851ce7b,v1=1ba18712726898fbbe48cd862dd096a709f7ad761a5bab14bda9ac24d963a6a8";
        try {
            RequestVerifier::verifyRequestSignature($requestBody, $requestHeader, $signingSecret, $tolerance);
            $this->fail('FormValidationException was not thrown');
        } catch (Exception $e) {
            $this->assertSame("Error with request header, timestamp is not present", $e->getMessage());
        }
    }

    public function testCheckRequestHeaderEmptyRequestHeader()
    {
        $tolerance = 5 * 60;
        $requestBody = "{\"accountId\":\"AC0123456789abcdefABCDEF0123456789abcdef00\",\"callId\":\"CA0123456789abcdefABCDEF0123456789abcdef00\",\"callStatus\":\"ringing\",\"conferenceId\":null,\"direction\":\"inbound\",\"from\":\"+13121000109\",\"parentCallId\":null,\"queueId\":null,\"requestType\":\"inboundCall\",\"to\":\"+13121000096\"}";
        $signingSecret = "sigsec_ead6d3b6904196c60835d039e91b3341c77a7793";
        $requestHeader = "";
        try {
            RequestVerifier::verifyRequestSignature($requestBody, $requestHeader, $signingSecret, $tolerance);
            $this->fail('FormValidationException was not thrown');
        } catch (Exception $e) {
            $this->assertSame("Error with request header, Request header is empty", $e->getMessage());
        }
    }

    public function testCheckSigningSecret()
    {
        $tolerance = 5 * 60;
        $requestHeader = "t=1679944186,v1=2f33654710a27e57828fa8556c2ed47c7a324aca88f155e296579e2ae851ce7b,v1=1ba18712726898fbbe48cd862dd096a709f7ad761a5bab14bda9ac24d963a6a8";
        $requestBody = "{\"accountId\":\"AC0123456789abcdefABCDEF0123456789abcdef00\",\"callId\":\"CA0123456789abcdefABCDEF0123456789abcdef00\",\"callStatus\":\"ringing\",\"conferenceId\":null,\"direction\":\"inbound\",\"from\":\"+13121000109\",\"parentCallId\":null,\"queueId\":null,\"requestType\":\"inboundCall\",\"to\":\"+13121000096\"}";
        $signingSecret = "";
        try {
            RequestVerifier::verifyRequestSignature($requestBody, $requestHeader, $signingSecret, $tolerance);
            $this->fail('Exception was not thrown');
        } catch (Exception $e) {
            $this->assertSame("Signing secret cannot be empty or null", $e->getMessage());
        }
    }

    public function testCheckToleranceNegativeValue()
    {
        $tolerance = -5;
        $requestHeader = "t=1679944186,v1=2f33654710a27e57828fa8556c2ed47c7a324aca88f155e296579e2ae851ce7b,v1=1ba18712726898fbbe48cd862dd096a709f7ad761a5bab14bda9ac24d963a6a8";
        $requestBody = "{\"accountId\":\"AC0123456789abcdefABCDEF0123456789abcdef00\",\"callId\":\"CA0123456789abcdefABCDEF0123456789abcdef00\",\"callStatus\":\"ringing\",\"conferenceId\":null,\"direction\":\"inbound\",\"from\":\"+13121000109\",\"parentCallId\":null,\"queueId\":null,\"requestType\":\"inboundCall\",\"to\":\"+13121000096\"}";
        $signingSecret = "sigsec_ead6d3b6904196c60835d039e91b3341c77a7793";
        try {
            $this->requestVerifier->verifyRequestSignature($requestBody, $requestHeader, $signingSecret, $tolerance);
            $this->fail('Exception was not thrown');
        } catch (Exception $e) {
            $this->assertSame("Tolerance value must be a positive integer", $e->getMessage());
        }
    }

    public function testCheckToleranceZeroValue()
    {
        $tolerance = 0;
        $requestHeader = "t=1679944186,v1=2f33654710a27e57828fa8556c2ed47c7a324aca88f155e296579e2ae851ce7b,v1=1ba18712726898fbbe48cd862dd096a709f7ad761a5bab14bda9ac24d963a6a8";
        $requestBody = "{\"accountId\":\"AC0123456789abcdefABCDEF0123456789abcdef00\",\"callId\":\"CA0123456789abcdefABCDEF0123456789abcdef00\",\"callStatus\":\"ringing\",\"conferenceId\":null,\"direction\":\"inbound\",\"from\":\"+13121000109\",\"parentCallId\":null,\"queueId\":null,\"requestType\":\"inboundCall\",\"to\":\"+13121000096\"}";
        $signingSecret = "sigsec_ead6d3b6904196c60835d039e91b3341c77a7793";
        try {
            RequestVerifier::verifyRequestSignature($requestBody, $requestHeader, $signingSecret, $tolerance);
            $this->fail('Exception was not thrown');
        } catch (Exception $e) {
            $this->assertSame("Tolerance value must be a positive integer", $e->getMessage());
        }
    }

    public function testCheckToleranceNaNValue()
    {
        $tolerance = (int) NAN;
        $requestHeader = "t=1679944186,v1=2f33654710a27e57828fa8556c2ed47c7a324aca88f155e296579e2ae851ce7b,v1=1ba18712726898fbbe48cd862dd096a709f7ad761a5bab14bda9ac24d963a6a8";
        $requestBody = "{\"accountId\":\"AC0123456789abcdefABCDEF0123456789abcdef00\",\"callId\":\"CA0123456789abcdefABCDEF0123456789abcdef00\",\"callStatus\":\"ringing\",\"conferenceId\":null,\"direction\":\"inbound\",\"from\":\"+13121000109\",\"parentCallId\":null,\"queueId\":null,\"requestType\":\"inboundCall\",\"to\":\"+13121000096\"}";
        $signingSecret = "sigsec_ead6d3b6904196c60835d039e91b3341c77a7793";
        try {
            RequestVerifier::verifyRequestSignature($requestBody, $requestHeader, $signingSecret, $tolerance);
            $this->fail('Exception was not thrown');
        } catch (Exception $e) {
            $this->assertSame("Tolerance value must be a positive integer", $e->getMessage());
        }
    }

    public function testCheckToleranceMaxValue()
    {
        $tolerance = PHP_INT_MAX;
        $requestHeader = "t=1679944186,v1=2f33654710a27e57828fa8556c2ed47c7a324aca88f155e296579e2ae851ce7b,v1=1ba18712726898fbbe48cd862dd096a709f7ad761a5bab14bda9ac24d963a6a8";
        $requestBody = "{\"accountId\":\"AC0123456789abcdefABCDEF0123456789abcdef00\",\"callId\":\"CA0123456789abcdefABCDEF0123456789abcdef00\",\"callStatus\":\"ringing\",\"conferenceId\":null,\"direction\":\"inbound\",\"from\":\"+13121000109\",\"parentCallId\":null,\"queueId\":null,\"requestType\":\"inboundCall\",\"to\":\"+13121000096\"}";
        $signingSecret = "sigsec_ead6d3b6904196c60835d039e91b3341c77a7793";
        try {
            RequestVerifier::verifyRequestSignature($requestBody, $requestHeader, $signingSecret, $tolerance);
            $this->fail('Exception was not thrown');
        } catch (Exception $e) {
            $this->assertSame("Tolerance value must be a positive integer", $e->getMessage());
        }
    }

    public function testVerifyTolerance()
    {
        $currentTime = time();
        $timeCalcuation = $currentTime - (6 * 60);
        $tolerance = 5 * 60;
        $requestHeader = "t=" . strval($timeCalcuation) . ",v1=2f33654710a27e57828fa8556c2ed47c7a324aca88f155e296579e2ae851ce7b,v1=1ba18712726898fbbe48cd862dd096a709f7ad761a5bab14bda9ac24d963a6a8";
        $requestBody = "{\"accountId\":\"AC0123456789abcdefABCDEF0123456789abcdef00\",\"callId\":\"CA0123456789abcdefABCDEF0123456789abcdef00\",\"callStatus\":\"ringing\",\"conferenceId\":null,\"direction\":\"inbound\",\"from\":\"+13121000109\",\"parentCallId\":null,\"queueId\":null,\"requestType\":\"inboundCall\",\"to\":\"+13121000096\"}";
        $signingSecret = "sigsec_ead6d3b6904196c60835d039e91b3341c77a7793";
        try {
            RequestVerifier::verifyRequestSignature($requestBody, $requestHeader, $signingSecret, $tolerance);
            $this->fail('Exception was not thrown');
        } catch (Exception $e) {
            $this->assertSame("Request time exceeded tolerance threshold. Request: " . strval($timeCalcuation) . ", CurrentTime: " . strval($currentTime) . ", tolerance: " . $tolerance, $e->getMessage());
        }
    }
    public function testVerifySignature()
    {
        $tolerance = 5 * 60;
        $requestHeader = "t=2130000000,v1=2f33654710a27e57828fa8556c2ed47c7a324aca88f155e296579e2ae851ce7b,v1=bec15a1920821e02cd824d5a3288db0c501289a4373c3253b913f2226d31";
        $requestBody = "{\"accountId\":\"AC0123456789abcdefABCDEF0123456789abcdef00\",\"callId\":\"CA0123456789abcdefABCDEF0123456789abcdef00\",\"callStatus\":\"ringing\",\"conferenceId\":null,\"direction\":\"inbound\",\"from\":\"+13121000109\",\"parentCallId\":null,\"queueId\":null,\"requestType\":\"inboundCall\",\"to\":\"+13121000096\"}";
        $signingSecret = "sigsec_ead6d3b6904196c60835d039e91b3341c77a7794";
        try {
            RequestVerifier::verifyRequestSignature($requestBody, $requestHeader, $signingSecret, $tolerance);
            $this->fail('Exception was not thrown');
        } catch (Exception $e) {
            $this->assertSame("Unverified signature request, If this request was unexpected, it may be from a bad actor. Please proceed with caution. If the request was exepected, please check any typos or issues with the signingSecret", $e->getMessage());
        }
    }
}