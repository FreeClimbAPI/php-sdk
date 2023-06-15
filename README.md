# FreeClimbAPI

FreeClimb is a cloud-based application programming interface (API) that puts the power of the Vail platform in your hands. FreeClimb simplifies the process of creating applications that can use a full range of telephony features without requiring specialized or on-site telephony equipment. Using the FreeClimb REST API to write applications is easy! You have the option to use the language of your choice or hit the API directly. Your application can execute a command by issuing a RESTful request to the FreeClimb API. The base URL to send HTTP requests to the FreeClimb REST API is: /apiserver. FreeClimb authenticates and processes your request.

For more information, please visit [https://www.freeclimb.com/support/](https://www.freeclimb.com/support/).

## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://https://github.com/freeclimbapi/php-sdk.git"
    }
  ],
  "require": {
    "freeclimbapi/php-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/FreeClimbAPI/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure HTTP basic authorization: fc
$config = FreeClimb\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_ACCOUNT_ID')
              ->setPassword('YOUR_API_KEY');


$apiInstance = new FreeClimb\Api\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$buy_incoming_number_request = new \FreeClimb\Api\Model\BuyIncomingNumberRequest(); // \FreeClimb\Api\Model\BuyIncomingNumberRequest | Incoming Number transaction details


try {
    $result = $apiInstance->buyAPhoneNumber($buy_incoming_number_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->buyAPhoneNumber: ', $e->getMessage(), PHP_EOL;
}

```

## Using PerCL
The PerclScript class provides a convenient wrapper to handle PerCL generation in your responses. Simply execute `json_encode` with an instance of the `PerclScript` class and you will have `PerclCommands` serialized and formatted the way you need.


```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$say = new \FreeClimb\Api\Model\Say();
$sms = new \FreeClimb\Api\Model\Sms();
$script = new \FreeClimb\Api\Model\PerclScript();

$say->setText("hello world");
$sms->setFrom("from number");
$sms->setTo("to number");
$sms->setText("hello world SMS");


$script->setCommands(array($say, $sms));

json_encode($script);
/**
* [
*   {
*     "Say": {
*       "text": "hello world"
*     }
*   },
*   {
*     "Sms": {
*       "from": "from number",
*       "to": "to number",
*       "text": "hello world SMS"
*     }
*   }
* ]
*/

?>
```

## API Endpoints

All URIs are relative to *https://www.freeclimb.com/apiserver*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**buyAPhoneNumber**](docs/Api/DefaultApi.md#buyaphonenumber) | **POST** /Accounts/{accountId}/IncomingPhoneNumbers | Buy a Phone Number
*DefaultApi* | [**createAConference**](docs/Api/DefaultApi.md#createaconference) | **POST** /Accounts/{accountId}/Conferences | Create a Conference
*DefaultApi* | [**createAQueue**](docs/Api/DefaultApi.md#createaqueue) | **POST** /Accounts/{accountId}/Queues | Create a Queue
*DefaultApi* | [**createAnApplication**](docs/Api/DefaultApi.md#createanapplication) | **POST** /Accounts/{accountId}/Applications | Create an application
*DefaultApi* | [**deleteARecording**](docs/Api/DefaultApi.md#deletearecording) | **DELETE** /Accounts/{accountId}/Recordings/{recordingId} | Delete a Recording
*DefaultApi* | [**deleteAnApplication**](docs/Api/DefaultApi.md#deleteanapplication) | **DELETE** /Accounts/{accountId}/Applications/{applicationId} | Delete an application
*DefaultApi* | [**deleteAnIncomingNumber**](docs/Api/DefaultApi.md#deleteanincomingnumber) | **DELETE** /Accounts/{accountId}/IncomingPhoneNumbers/{phoneNumberId} | Delete an Incoming Number
*DefaultApi* | [**dequeueAMember**](docs/Api/DefaultApi.md#dequeueamember) | **POST** /Accounts/{accountId}/Queues/{queueId}/Members/{callId} | Dequeue a Member
*DefaultApi* | [**dequeueHeadMember**](docs/Api/DefaultApi.md#dequeueheadmember) | **POST** /Accounts/{accountId}/Queues/{queueId}/Members/Front | Dequeue Head Member
*DefaultApi* | [**downloadARecordingFile**](docs/Api/DefaultApi.md#downloadarecordingfile) | **GET** /Accounts/{accountId}/Recordings/{recordingId}/Download | Download a Recording File
*DefaultApi* | [**filterLogs**](docs/Api/DefaultApi.md#filterlogs) | **POST** /Accounts/{accountId}/Logs | Filter Logs
*DefaultApi* | [**getACall**](docs/Api/DefaultApi.md#getacall) | **GET** /Accounts/{accountId}/Calls/{callId} | Get a Call
*DefaultApi* | [**getAConference**](docs/Api/DefaultApi.md#getaconference) | **GET** /Accounts/{accountId}/Conferences/{conferenceId} | Get a Conference
*DefaultApi* | [**getAMember**](docs/Api/DefaultApi.md#getamember) | **GET** /Accounts/{accountId}/Queues/{queueId}/Members/{callId} | Get a Member
*DefaultApi* | [**getAParticipant**](docs/Api/DefaultApi.md#getaparticipant) | **GET** /Accounts/{accountId}/Conferences/{conferenceId}/Participants/{callId} | Get a Participant
*DefaultApi* | [**getAQueue**](docs/Api/DefaultApi.md#getaqueue) | **GET** /Accounts/{accountId}/Queues/{queueId} | Get a Queue
*DefaultApi* | [**getARecording**](docs/Api/DefaultApi.md#getarecording) | **GET** /Accounts/{accountId}/Recordings/{recordingId} | Get a Recording
*DefaultApi* | [**getAnAccount**](docs/Api/DefaultApi.md#getanaccount) | **GET** /Accounts/{accountId} | Get an Account
*DefaultApi* | [**getAnApplication**](docs/Api/DefaultApi.md#getanapplication) | **GET** /Accounts/{accountId}/Applications/{applicationId} | Get an Application
*DefaultApi* | [**getAnIncomingNumber**](docs/Api/DefaultApi.md#getanincomingnumber) | **GET** /Accounts/{accountId}/IncomingPhoneNumbers/{phoneNumberId} | Get an Incoming Number
*DefaultApi* | [**getAnSmsMessage**](docs/Api/DefaultApi.md#getansmsmessage) | **GET** /Accounts/{accountId}/Messages/{messageId} | Get an SMS Message
*DefaultApi* | [**getHeadMember**](docs/Api/DefaultApi.md#getheadmember) | **GET** /Accounts/{accountId}/Queues/{queueId}/Members/Front | Get Head Member
*DefaultApi* | [**getTenDLCSmsBrand**](docs/Api/DefaultApi.md#gettendlcsmsbrand) | **GET** /Accounts/{accountId}/Messages/10DLC/Brands/{brandId} | Get a 10DLC SMS Brand
*DefaultApi* | [**getTenDLCSmsBrands**](docs/Api/DefaultApi.md#gettendlcsmsbrands) | **GET** /Accounts/{accountId}/Messages/10DLC/Brands | Get list of SMS 10DLC Brands
*DefaultApi* | [**getTenDLCSmsCampaign**](docs/Api/DefaultApi.md#gettendlcsmscampaign) | **GET** /Accounts/{accountId}/Messages/10DLC/Campaigns/{campaignId} | Get a 10DLC SMS Campaign
*DefaultApi* | [**getTenDLCSmsCampaigns**](docs/Api/DefaultApi.md#gettendlcsmscampaigns) | **GET** /Accounts/{accountId}/Messages/10DLC/Campaigns | Get list of SMS 10DLC Campaigns
*DefaultApi* | [**getTenDLCSmsPartnerCampaign**](docs/Api/DefaultApi.md#gettendlcsmspartnercampaign) | **GET** /Accounts/{accountId}/Messages/10DLC/PartnerCampaigns/{campaignId} | Get a 10DLC SMS Partner Campaign
*DefaultApi* | [**getTenDLCSmsPartnerCampaigns**](docs/Api/DefaultApi.md#gettendlcsmspartnercampaigns) | **GET** /Accounts/{accountId}/Messages/10DLC/PartnerCampaigns | Get list of SMS 10DLC Partner Campaigns
*DefaultApi* | [**listActiveQueues**](docs/Api/DefaultApi.md#listactivequeues) | **GET** /Accounts/{accountId}/Queues | List Active Queues
*DefaultApi* | [**listAllAccountLogs**](docs/Api/DefaultApi.md#listallaccountlogs) | **GET** /Accounts/{accountId}/Logs | List All Account Logs
*DefaultApi* | [**listApplications**](docs/Api/DefaultApi.md#listapplications) | **GET** /Accounts/{accountId}/Applications | List applications
*DefaultApi* | [**listAvailableNumbers**](docs/Api/DefaultApi.md#listavailablenumbers) | **GET** /AvailablePhoneNumbers | List available numbers
*DefaultApi* | [**listCallLogs**](docs/Api/DefaultApi.md#listcalllogs) | **GET** /Accounts/{accountId}/Calls/{callId}/Logs | List Call Logs
*DefaultApi* | [**listCallRecordings**](docs/Api/DefaultApi.md#listcallrecordings) | **GET** /Accounts/{accountId}/Calls/{callId}/Recordings | List Call Recordings
*DefaultApi* | [**listCalls**](docs/Api/DefaultApi.md#listcalls) | **GET** /Accounts/{accountId}/Calls | List Calls
*DefaultApi* | [**listConferences**](docs/Api/DefaultApi.md#listconferences) | **GET** /Accounts/{accountId}/Conferences | List Conferences
*DefaultApi* | [**listIncomingNumbers**](docs/Api/DefaultApi.md#listincomingnumbers) | **GET** /Accounts/{accountId}/IncomingPhoneNumbers | List Incoming Numbers
*DefaultApi* | [**listMembers**](docs/Api/DefaultApi.md#listmembers) | **GET** /Accounts/{accountId}/Queues/{queueId}/Members | List Members
*DefaultApi* | [**listParticipants**](docs/Api/DefaultApi.md#listparticipants) | **GET** /Accounts/{accountId}/Conferences/{conferenceId}/Participants | List Participants
*DefaultApi* | [**listRecordings**](docs/Api/DefaultApi.md#listrecordings) | **GET** /Accounts/{accountId}/Recordings | List Recordings
*DefaultApi* | [**listSmsMessages**](docs/Api/DefaultApi.md#listsmsmessages) | **GET** /Accounts/{accountId}/Messages | List SMS Messages
*DefaultApi* | [**makeACall**](docs/Api/DefaultApi.md#makeacall) | **POST** /Accounts/{accountId}/Calls | Make a Call
*DefaultApi* | [**removeAParticipant**](docs/Api/DefaultApi.md#removeaparticipant) | **DELETE** /Accounts/{accountId}/Conferences/{conferenceId}/Participants/{callId} | Remove a Participant
*DefaultApi* | [**sendAnSmsMessage**](docs/Api/DefaultApi.md#sendansmsmessage) | **POST** /Accounts/{accountId}/Messages | Send an SMS Message
*DefaultApi* | [**streamARecordingFile**](docs/Api/DefaultApi.md#streamarecordingfile) | **GET** /Accounts/{accountId}/Recordings/{recordingId}/Stream | Stream a Recording File
*DefaultApi* | [**updateAConference**](docs/Api/DefaultApi.md#updateaconference) | **POST** /Accounts/{accountId}/Conferences/{conferenceId} | Update a Conference
*DefaultApi* | [**updateALiveCall**](docs/Api/DefaultApi.md#updatealivecall) | **POST** /Accounts/{accountId}/Calls/{callId} | Update a Live Call
*DefaultApi* | [**updateAParticipant**](docs/Api/DefaultApi.md#updateaparticipant) | **POST** /Accounts/{accountId}/Conferences/{conferenceId}/Participants/{callId} | Update a Participant
*DefaultApi* | [**updateAQueue**](docs/Api/DefaultApi.md#updateaqueue) | **POST** /Accounts/{accountId}/Queues/{queueId} | Update a Queue
*DefaultApi* | [**updateAnAccount**](docs/Api/DefaultApi.md#updateanaccount) | **POST** /Accounts/{accountId} | Manage an account
*DefaultApi* | [**updateAnApplication**](docs/Api/DefaultApi.md#updateanapplication) | **POST** /Accounts/{accountId}/Applications/{applicationId} | Update an application
*DefaultApi* | [**updateAnIncomingNumber**](docs/Api/DefaultApi.md#updateanincomingnumber) | **POST** /Accounts/{accountId}/IncomingPhoneNumbers/{phoneNumberId} | Update an Incoming Number

## Models

- [AccountRequest](docs/Model/AccountRequest.md)
- [AccountResult](docs/Model/AccountResult.md)
- [AccountResultAllOf](docs/Model/AccountResultAllOf.md)
- [AccountStatus](docs/Model/AccountStatus.md)
- [AccountType](docs/Model/AccountType.md)
- [AddToConference](docs/Model/AddToConference.md)
- [AddToConferenceAllOf](docs/Model/AddToConferenceAllOf.md)
- [AnsweredBy](docs/Model/AnsweredBy.md)
- [ApplicationList](docs/Model/ApplicationList.md)
- [ApplicationListAllOf](docs/Model/ApplicationListAllOf.md)
- [ApplicationRequest](docs/Model/ApplicationRequest.md)
- [ApplicationResult](docs/Model/ApplicationResult.md)
- [ApplicationResultAllOf](docs/Model/ApplicationResultAllOf.md)
- [AvailableNumber](docs/Model/AvailableNumber.md)
- [AvailableNumberList](docs/Model/AvailableNumberList.md)
- [AvailableNumberListAllOf](docs/Model/AvailableNumberListAllOf.md)
- [BuyIncomingNumberRequest](docs/Model/BuyIncomingNumberRequest.md)
- [CallDirection](docs/Model/CallDirection.md)
- [CallList](docs/Model/CallList.md)
- [CallListAllOf](docs/Model/CallListAllOf.md)
- [CallResult](docs/Model/CallResult.md)
- [CallResultAllOf](docs/Model/CallResultAllOf.md)
- [CallStatus](docs/Model/CallStatus.md)
- [Capabilities](docs/Model/Capabilities.md)
- [ConferenceList](docs/Model/ConferenceList.md)
- [ConferenceListAllOf](docs/Model/ConferenceListAllOf.md)
- [ConferenceParticipantList](docs/Model/ConferenceParticipantList.md)
- [ConferenceParticipantListAllOf](docs/Model/ConferenceParticipantListAllOf.md)
- [ConferenceParticipantResult](docs/Model/ConferenceParticipantResult.md)
- [ConferenceParticipantResultAllOf](docs/Model/ConferenceParticipantResultAllOf.md)
- [ConferenceResult](docs/Model/ConferenceResult.md)
- [ConferenceResultAllOf](docs/Model/ConferenceResultAllOf.md)
- [ConferenceStatus](docs/Model/ConferenceStatus.md)
- [CreateConference](docs/Model/CreateConference.md)
- [CreateConferenceAllOf](docs/Model/CreateConferenceAllOf.md)
- [CreateConferenceRequest](docs/Model/CreateConferenceRequest.md)
- [Dequeue](docs/Model/Dequeue.md)
- [Enqueue](docs/Model/Enqueue.md)
- [EnqueueAllOf](docs/Model/EnqueueAllOf.md)
- [FilterLogsRequest](docs/Model/FilterLogsRequest.md)
- [GetDigits](docs/Model/GetDigits.md)
- [GetDigitsAllOf](docs/Model/GetDigitsAllOf.md)
- [GetSpeech](docs/Model/GetSpeech.md)
- [GetSpeechAllOf](docs/Model/GetSpeechAllOf.md)
- [GetSpeechReason](docs/Model/GetSpeechReason.md)
- [GrammarFileBuiltIn](docs/Model/GrammarFileBuiltIn.md)
- [GrammarType](docs/Model/GrammarType.md)
- [Hangup](docs/Model/Hangup.md)
- [HangupAllOf](docs/Model/HangupAllOf.md)
- [IfMachine](docs/Model/IfMachine.md)
- [IncomingNumberList](docs/Model/IncomingNumberList.md)
- [IncomingNumberListAllOf](docs/Model/IncomingNumberListAllOf.md)
- [IncomingNumberRequest](docs/Model/IncomingNumberRequest.md)
- [IncomingNumberResult](docs/Model/IncomingNumberResult.md)
- [IncomingNumberResultAllOf](docs/Model/IncomingNumberResultAllOf.md)
- [Language](docs/Model/Language.md)
- [LogLevel](docs/Model/LogLevel.md)
- [LogList](docs/Model/LogList.md)
- [LogListAllOf](docs/Model/LogListAllOf.md)
- [LogResult](docs/Model/LogResult.md)
- [MachineType](docs/Model/MachineType.md)
- [MakeCallRequest](docs/Model/MakeCallRequest.md)
- [MessageDirection](docs/Model/MessageDirection.md)
- [MessageRequest](docs/Model/MessageRequest.md)
- [MessageRequestAllOf](docs/Model/MessageRequestAllOf.md)
- [MessageResult](docs/Model/MessageResult.md)
- [MessageResultAllOf](docs/Model/MessageResultAllOf.md)
- [MessageStatus](docs/Model/MessageStatus.md)
- [MessagesList](docs/Model/MessagesList.md)
- [MessagesListAllOf](docs/Model/MessagesListAllOf.md)
- [MutableResourceModel](docs/Model/MutableResourceModel.md)
- [OutDial](docs/Model/OutDial.md)
- [OutDialAllOf](docs/Model/OutDialAllOf.md)
- [PaginationModel](docs/Model/PaginationModel.md)
- [Park](docs/Model/Park.md)
- [ParkAllOf](docs/Model/ParkAllOf.md)
- [Pause](docs/Model/Pause.md)
- [PauseAllOf](docs/Model/PauseAllOf.md)
- [PerclCommand](docs/Model/PerclCommand.md)
- [PerclScript](docs/Model/PerclScript.md)
- [Play](docs/Model/Play.md)
- [PlayAllOf](docs/Model/PlayAllOf.md)
- [PlayBeep](docs/Model/PlayBeep.md)
- [PlayEarlyMedia](docs/Model/PlayEarlyMedia.md)
- [PlayEarlyMediaAllOf](docs/Model/PlayEarlyMediaAllOf.md)
- [QueueList](docs/Model/QueueList.md)
- [QueueListAllOf](docs/Model/QueueListAllOf.md)
- [QueueMember](docs/Model/QueueMember.md)
- [QueueMemberList](docs/Model/QueueMemberList.md)
- [QueueMemberListAllOf](docs/Model/QueueMemberListAllOf.md)
- [QueueRequest](docs/Model/QueueRequest.md)
- [QueueResult](docs/Model/QueueResult.md)
- [QueueResultAllOf](docs/Model/QueueResultAllOf.md)
- [QueueResultStatus](docs/Model/QueueResultStatus.md)
- [RecordUtterance](docs/Model/RecordUtterance.md)
- [RecordUtteranceAllOf](docs/Model/RecordUtteranceAllOf.md)
- [RecordUtteranceTermReason](docs/Model/RecordUtteranceTermReason.md)
- [RecordingList](docs/Model/RecordingList.md)
- [RecordingListAllOf](docs/Model/RecordingListAllOf.md)
- [RecordingResult](docs/Model/RecordingResult.md)
- [RecordingResultAllOf](docs/Model/RecordingResultAllOf.md)
- [Redirect](docs/Model/Redirect.md)
- [RedirectAllOf](docs/Model/RedirectAllOf.md)
- [Reject](docs/Model/Reject.md)
- [RejectAllOf](docs/Model/RejectAllOf.md)
- [RemoveFromConference](docs/Model/RemoveFromConference.md)
- [RemoveFromConferenceAllOf](docs/Model/RemoveFromConferenceAllOf.md)
- [RequestType](docs/Model/RequestType.md)
- [SMSTenDLCBrand](docs/Model/SMSTenDLCBrand.md)
- [SMSTenDLCBrandsListResult](docs/Model/SMSTenDLCBrandsListResult.md)
- [SMSTenDLCBrandsListResultAllOf](docs/Model/SMSTenDLCBrandsListResultAllOf.md)
- [SMSTenDLCCampaign](docs/Model/SMSTenDLCCampaign.md)
- [SMSTenDLCCampaignsListResult](docs/Model/SMSTenDLCCampaignsListResult.md)
- [SMSTenDLCCampaignsListResultAllOf](docs/Model/SMSTenDLCCampaignsListResultAllOf.md)
- [SMSTenDLCPartnerCampaign](docs/Model/SMSTenDLCPartnerCampaign.md)
- [SMSTenDLCPartnerCampaignBrand](docs/Model/SMSTenDLCPartnerCampaignBrand.md)
- [SMSTenDLCPartnerCampaignsListResult](docs/Model/SMSTenDLCPartnerCampaignsListResult.md)
- [SMSTenDLCPartnerCampaignsListResultAllOf](docs/Model/SMSTenDLCPartnerCampaignsListResultAllOf.md)
- [Say](docs/Model/Say.md)
- [SayAllOf](docs/Model/SayAllOf.md)
- [SendDigits](docs/Model/SendDigits.md)
- [SendDigitsAllOf](docs/Model/SendDigitsAllOf.md)
- [SetListen](docs/Model/SetListen.md)
- [SetListenAllOf](docs/Model/SetListenAllOf.md)
- [SetTalk](docs/Model/SetTalk.md)
- [SetTalkAllOf](docs/Model/SetTalkAllOf.md)
- [Sms](docs/Model/Sms.md)
- [SmsAllOf](docs/Model/SmsAllOf.md)
- [StartRecordCall](docs/Model/StartRecordCall.md)
- [TerminateConference](docs/Model/TerminateConference.md)
- [TerminateConferenceAllOf](docs/Model/TerminateConferenceAllOf.md)
- [Unpark](docs/Model/Unpark.md)
- [UpdateCallRequest](docs/Model/UpdateCallRequest.md)
- [UpdateCallRequestStatus](docs/Model/UpdateCallRequestStatus.md)
- [UpdateConferenceParticipantRequest](docs/Model/UpdateConferenceParticipantRequest.md)
- [UpdateConferenceRequest](docs/Model/UpdateConferenceRequest.md)
- [UpdateConferenceRequestStatus](docs/Model/UpdateConferenceRequestStatus.md)

## Authorization

### fc

- **Type**: HTTP basic authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

<a name="documentation-for-verify-request-signature"></a>

## Documentation for verifying request signature

- To verify the request signature, we will need to use the verifyRequestSignature method within the Request Verifier class

  RequestVerifier::verifyRequestSignature($requestBody, $requestHeader, $signingSecret, $tolerance);

  This is a method that you can call directly from the request verifier class, it will throw exceptions depending on whether all parts of the request signature is valid otherwise it will throw a specific error message depending on which request signature part is causing issues

  This method requires a requestBody of type string, a requestHeader of type string, a signingSecret of type string, and a tolerance value of type int

  Example code down below

  ```php
  <?php

  namespace FreeClimb\Example;

  use FreeClimb\Api\Util\RequestVerifier;

  class Example
  {
    public function verifyRequestSignatureExample()
    {
        $tolerance = 5 * 60;
        $requestHeader = "t=1679944186,v1=c3957749baf61df4b1506802579cc69a74c77a1ae21447b930e5a704f9ec4120,v1=1ba18712726898fbbe48cd862dd096a709f7ad761a5bab14bda9ac24d963a6a8";
        $requestBody = "{\"accountId\":\"AC1334ffb694cd8d969f51cddf5f7c9b478546d50c\",\"callId\":\"CAccb0b00506553cda09b51c5477f672a49e0b2213\",\"callStatus\":\"ringing\",\"conferenceId\":null,\"direction\":\"inbound\",\"from\":\"+13121000109\",\"parentCallId\":null,\"queueId\":null,\"requestType\":\"inboundCall\",\"to\":\"+13121000096\"}";
        $signingSecret = "sigsec_ead6d3b6904196c60835d039e91b3341c77a7794";

        RequestVerifier::verifyRequestSignature($requestBody, $requestHeader, $signingSecret, $tolerance);
    }
  }
  ```

## Author

support@freeclimb.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
    - Package version: `4.2.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`