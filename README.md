# FreeClimbAPI

FreeClimb is a cloud-based application programming interface (API) that puts the power of the Vail platform in your hands. FreeClimb simplifies the process of creating applications that can use a full range of telephony features without requiring specialized or on-site telephony equipment. Using the FreeClimb REST API to write applications is easy! You have the option to use the language of your choice or hit the API directly. Your application can execute a command by issuing a RESTful request to the FreeClimb API. The base URL to send HTTP requests to the FreeClimb REST API is: /apiserver. FreeClimb authenticates and processes your request.

For more information, please visit [https://www.freeclimb.com/support/](https://www.freeclimb.com/support/).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

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
*DefaultApi* | [**createBlob**](docs/Api/DefaultApi.md#createblob) | **POST** /Accounts/{accountId}/Blobs | Create a Blob
*DefaultApi* | [**createExport**](docs/Api/DefaultApi.md#createexport) | **POST** /Accounts/{accountId}/Exports | Create an Export
*DefaultApi* | [**createKnowledgeBaseCompletion**](docs/Api/DefaultApi.md#createknowledgebasecompletion) | **POST** /Accounts/{accountId}/KnowledgeBases/{knowledgeBaseId}/Completion | Query the knowledge base
*DefaultApi* | [**deleteARecording**](docs/Api/DefaultApi.md#deletearecording) | **DELETE** /Accounts/{accountId}/Recordings/{recordingId} | Delete a Recording
*DefaultApi* | [**deleteAnApplication**](docs/Api/DefaultApi.md#deleteanapplication) | **DELETE** /Accounts/{accountId}/Applications/{applicationId} | Delete an application
*DefaultApi* | [**deleteAnExport**](docs/Api/DefaultApi.md#deleteanexport) | **DELETE** /Accounts/{accountId}/Exports/{exportId} | Delete an Export
*DefaultApi* | [**deleteAnIncomingNumber**](docs/Api/DefaultApi.md#deleteanincomingnumber) | **DELETE** /Accounts/{accountId}/IncomingPhoneNumbers/{phoneNumberId} | Delete an Incoming Number
*DefaultApi* | [**deleteBlob**](docs/Api/DefaultApi.md#deleteblob) | **DELETE** /Accounts/{accountId}/Blobs/{blobId} | Delete Blob
*DefaultApi* | [**dequeueAMember**](docs/Api/DefaultApi.md#dequeueamember) | **POST** /Accounts/{accountId}/Queues/{queueId}/Members/{callId} | Dequeue a Member
*DefaultApi* | [**dequeueHeadMember**](docs/Api/DefaultApi.md#dequeueheadmember) | **POST** /Accounts/{accountId}/Queues/{queueId}/Members/Front | Dequeue Head Member
*DefaultApi* | [**downloadARecordingFile**](docs/Api/DefaultApi.md#downloadarecordingfile) | **GET** /Accounts/{accountId}/Recordings/{recordingId}/Download | Download a Recording File
*DefaultApi* | [**downloadAnExport**](docs/Api/DefaultApi.md#downloadanexport) | **GET** /Accounts/{accountId}/Exports/{exportId}/Download | Download an Export
*DefaultApi* | [**filterLogs**](docs/Api/DefaultApi.md#filterlogs) | **POST** /Accounts/{accountId}/Logs | Filter Logs
*DefaultApi* | [**getACall**](docs/Api/DefaultApi.md#getacall) | **GET** /Accounts/{accountId}/Calls/{callId} | Get a Call
*DefaultApi* | [**getAConference**](docs/Api/DefaultApi.md#getaconference) | **GET** /Accounts/{accountId}/Conferences/{conferenceId} | Get a Conference
*DefaultApi* | [**getAMember**](docs/Api/DefaultApi.md#getamember) | **GET** /Accounts/{accountId}/Queues/{queueId}/Members/{callId} | Get a Member
*DefaultApi* | [**getAParticipant**](docs/Api/DefaultApi.md#getaparticipant) | **GET** /Accounts/{accountId}/Conferences/{conferenceId}/Participants/{callId} | Get a Participant
*DefaultApi* | [**getAQueue**](docs/Api/DefaultApi.md#getaqueue) | **GET** /Accounts/{accountId}/Queues/{queueId} | Get a Queue
*DefaultApi* | [**getARecording**](docs/Api/DefaultApi.md#getarecording) | **GET** /Accounts/{accountId}/Recordings/{recordingId} | Get a Recording
*DefaultApi* | [**getAnAccount**](docs/Api/DefaultApi.md#getanaccount) | **GET** /Accounts/{accountId} | Get an Account
*DefaultApi* | [**getAnApplication**](docs/Api/DefaultApi.md#getanapplication) | **GET** /Accounts/{accountId}/Applications/{applicationId} | Get an Application
*DefaultApi* | [**getAnExport**](docs/Api/DefaultApi.md#getanexport) | **GET** /Accounts/{accountId}/Exports/{exportId} | Get an Export
*DefaultApi* | [**getAnIncomingNumber**](docs/Api/DefaultApi.md#getanincomingnumber) | **GET** /Accounts/{accountId}/IncomingPhoneNumbers/{phoneNumberId} | Get an Incoming Number
*DefaultApi* | [**getAnSmsMessage**](docs/Api/DefaultApi.md#getansmsmessage) | **GET** /Accounts/{accountId}/Messages/{messageId} | Get an SMS Message
*DefaultApi* | [**getBlob**](docs/Api/DefaultApi.md#getblob) | **GET** /Accounts/{accountId}/Blobs/{blobId} | Get Blob
*DefaultApi* | [**getHeadMember**](docs/Api/DefaultApi.md#getheadmember) | **GET** /Accounts/{accountId}/Queues/{queueId}/Members/Front | Get Head Member
*DefaultApi* | [**getTenDLCSmsBrand**](docs/Api/DefaultApi.md#gettendlcsmsbrand) | **GET** /Accounts/{accountId}/Messages/10DLC/Brands/{brandId} | Get a 10DLC SMS Brand
*DefaultApi* | [**getTenDLCSmsBrands**](docs/Api/DefaultApi.md#gettendlcsmsbrands) | **GET** /Accounts/{accountId}/Messages/10DLC/Brands | Get list of SMS 10DLC Brands
*DefaultApi* | [**getTenDLCSmsCampaign**](docs/Api/DefaultApi.md#gettendlcsmscampaign) | **GET** /Accounts/{accountId}/Messages/10DLC/Campaigns/{campaignId} | Get a 10DLC SMS Campaign
*DefaultApi* | [**getTenDLCSmsCampaigns**](docs/Api/DefaultApi.md#gettendlcsmscampaigns) | **GET** /Accounts/{accountId}/Messages/10DLC/Campaigns | Get list of SMS 10DLC Campaigns
*DefaultApi* | [**getTenDLCSmsPartnerCampaign**](docs/Api/DefaultApi.md#gettendlcsmspartnercampaign) | **GET** /Accounts/{accountId}/Messages/10DLC/PartnerCampaigns/{campaignId} | Get a 10DLC SMS Partner Campaign
*DefaultApi* | [**getTenDLCSmsPartnerCampaigns**](docs/Api/DefaultApi.md#gettendlcsmspartnercampaigns) | **GET** /Accounts/{accountId}/Messages/10DLC/PartnerCampaigns | Get list of SMS 10DLC Partner Campaigns
*DefaultApi* | [**getTollFreeSmsCampaign**](docs/Api/DefaultApi.md#gettollfreesmscampaign) | **GET** /Accounts/{accountId}/Messages/TollFree/Campaigns/{campaignId} | Get a TollFree SMS Campaign
*DefaultApi* | [**getTollFreeSmsCampaigns**](docs/Api/DefaultApi.md#gettollfreesmscampaigns) | **GET** /Accounts/{accountId}/Messages/TollFree/Campaigns | Get list of TollFree Campaigns
*DefaultApi* | [**listActiveQueues**](docs/Api/DefaultApi.md#listactivequeues) | **GET** /Accounts/{accountId}/Queues | List Active Queues
*DefaultApi* | [**listAllAccountLogs**](docs/Api/DefaultApi.md#listallaccountlogs) | **GET** /Accounts/{accountId}/Logs | List All Account Logs
*DefaultApi* | [**listApplications**](docs/Api/DefaultApi.md#listapplications) | **GET** /Accounts/{accountId}/Applications | List applications
*DefaultApi* | [**listAvailableNumbers**](docs/Api/DefaultApi.md#listavailablenumbers) | **GET** /AvailablePhoneNumbers | List available numbers
*DefaultApi* | [**listBlobs**](docs/Api/DefaultApi.md#listblobs) | **GET** /Accounts/{accountId}/Blobs | List Blobs belonging to an account.
*DefaultApi* | [**listCallLogs**](docs/Api/DefaultApi.md#listcalllogs) | **GET** /Accounts/{accountId}/Calls/{callId}/Logs | List Call Logs
*DefaultApi* | [**listCallRecordings**](docs/Api/DefaultApi.md#listcallrecordings) | **GET** /Accounts/{accountId}/Calls/{callId}/Recordings | List Call Recordings
*DefaultApi* | [**listCalls**](docs/Api/DefaultApi.md#listcalls) | **GET** /Accounts/{accountId}/Calls | List Calls
*DefaultApi* | [**listConferenceRecordings**](docs/Api/DefaultApi.md#listconferencerecordings) | **GET** /Accounts/{accountId}/Conferences/{conferenceId}/Recordings | List Conference Recordings
*DefaultApi* | [**listConferences**](docs/Api/DefaultApi.md#listconferences) | **GET** /Accounts/{accountId}/Conferences | List Conferences
*DefaultApi* | [**listExports**](docs/Api/DefaultApi.md#listexports) | **GET** /Accounts/{accountId}/Exports | List Exports
*DefaultApi* | [**listIncomingNumbers**](docs/Api/DefaultApi.md#listincomingnumbers) | **GET** /Accounts/{accountId}/IncomingPhoneNumbers | List Incoming Numbers
*DefaultApi* | [**listMembers**](docs/Api/DefaultApi.md#listmembers) | **GET** /Accounts/{accountId}/Queues/{queueId}/Members | List Members
*DefaultApi* | [**listParticipants**](docs/Api/DefaultApi.md#listparticipants) | **GET** /Accounts/{accountId}/Conferences/{conferenceId}/Participants | List Participants
*DefaultApi* | [**listRecordings**](docs/Api/DefaultApi.md#listrecordings) | **GET** /Accounts/{accountId}/Recordings | List Recordings
*DefaultApi* | [**listSmsMessages**](docs/Api/DefaultApi.md#listsmsmessages) | **GET** /Accounts/{accountId}/Messages | List SMS Messages
*DefaultApi* | [**makeACall**](docs/Api/DefaultApi.md#makeacall) | **POST** /Accounts/{accountId}/Calls | Make a Call
*DefaultApi* | [**makeAWebrtcJwt**](docs/Api/DefaultApi.md#makeawebrtcjwt) | **POST** /Accounts/{accountId}/Calls/WebRTC/Token | Make a JWT for WebRTC calling
*DefaultApi* | [**modifyBlob**](docs/Api/DefaultApi.md#modifyblob) | **PATCH** /Accounts/{accountId}/Blobs/{blobId} | Modify Blob
*DefaultApi* | [**removeAParticipant**](docs/Api/DefaultApi.md#removeaparticipant) | **DELETE** /Accounts/{accountId}/Conferences/{conferenceId}/Participants/{callId} | Remove a Participant
*DefaultApi* | [**replaceBlob**](docs/Api/DefaultApi.md#replaceblob) | **PUT** /Accounts/{accountId}/Blobs/{blobId} | Replace Blob
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
- [AccountStatus](docs/Model/AccountStatus.md)
- [AccountType](docs/Model/AccountType.md)
- [AddToConference](docs/Model/AddToConference.md)
- [AddToConferenceNotificationWebhook](docs/Model/AddToConferenceNotificationWebhook.md)
- [AddToQueueNotificationWebhook](docs/Model/AddToQueueNotificationWebhook.md)
- [AnsweredBy](docs/Model/AnsweredBy.md)
- [ApplicationList](docs/Model/ApplicationList.md)
- [ApplicationRequest](docs/Model/ApplicationRequest.md)
- [ApplicationResult](docs/Model/ApplicationResult.md)
- [AvailableNumber](docs/Model/AvailableNumber.md)
- [AvailableNumberList](docs/Model/AvailableNumberList.md)
- [BargeInReason](docs/Model/BargeInReason.md)
- [BlobListResponse](docs/Model/BlobListResponse.md)
- [BlobResult](docs/Model/BlobResult.md)
- [BuyIncomingNumberRequest](docs/Model/BuyIncomingNumberRequest.md)
- [CallControlWebhook](docs/Model/CallControlWebhook.md)
- [CallDirection](docs/Model/CallDirection.md)
- [CallEndedReason](docs/Model/CallEndedReason.md)
- [CallList](docs/Model/CallList.md)
- [CallResult](docs/Model/CallResult.md)
- [CallStatus](docs/Model/CallStatus.md)
- [CallStatusWebhook](docs/Model/CallStatusWebhook.md)
- [Capabilities](docs/Model/Capabilities.md)
- [CompletionRequest](docs/Model/CompletionRequest.md)
- [CompletionResult](docs/Model/CompletionResult.md)
- [CompletionResultStatus](docs/Model/CompletionResultStatus.md)
- [ConferenceList](docs/Model/ConferenceList.md)
- [ConferenceParticipantList](docs/Model/ConferenceParticipantList.md)
- [ConferenceParticipantResult](docs/Model/ConferenceParticipantResult.md)
- [ConferenceRecordingStatusWebhook](docs/Model/ConferenceRecordingStatusWebhook.md)
- [ConferenceResult](docs/Model/ConferenceResult.md)
- [ConferenceStatus](docs/Model/ConferenceStatus.md)
- [ConferenceStatusWebhook](docs/Model/ConferenceStatusWebhook.md)
- [CreateBlobRequest](docs/Model/CreateBlobRequest.md)
- [CreateConference](docs/Model/CreateConference.md)
- [CreateConferenceRequest](docs/Model/CreateConferenceRequest.md)
- [CreateConferenceWebhook](docs/Model/CreateConferenceWebhook.md)
- [CreateWebRTCToken](docs/Model/CreateWebRTCToken.md)
- [Dequeue](docs/Model/Dequeue.md)
- [DequeueWebhook](docs/Model/DequeueWebhook.md)
- [Enqueue](docs/Model/Enqueue.md)
- [ExportList](docs/Model/ExportList.md)
- [ExportOutputType](docs/Model/ExportOutputType.md)
- [ExportRequest](docs/Model/ExportRequest.md)
- [ExportRequestOutput](docs/Model/ExportRequestOutput.md)
- [ExportResourceType](docs/Model/ExportResourceType.md)
- [ExportResult](docs/Model/ExportResult.md)
- [ExportResultOutput](docs/Model/ExportResultOutput.md)
- [ExportStatus](docs/Model/ExportStatus.md)
- [FilterLogsRequest](docs/Model/FilterLogsRequest.md)
- [GetDigits](docs/Model/GetDigits.md)
- [GetDigitsReason](docs/Model/GetDigitsReason.md)
- [GetDigitsWebhook](docs/Model/GetDigitsWebhook.md)
- [GetSpeech](docs/Model/GetSpeech.md)
- [GetSpeechReason](docs/Model/GetSpeechReason.md)
- [GetSpeechWebhook](docs/Model/GetSpeechWebhook.md)
- [GrammarFileBuiltIn](docs/Model/GrammarFileBuiltIn.md)
- [GrammarType](docs/Model/GrammarType.md)
- [Hangup](docs/Model/Hangup.md)
- [IfMachine](docs/Model/IfMachine.md)
- [InboundCallWebhook](docs/Model/InboundCallWebhook.md)
- [IncomingNumberList](docs/Model/IncomingNumberList.md)
- [IncomingNumberRequest](docs/Model/IncomingNumberRequest.md)
- [IncomingNumberResult](docs/Model/IncomingNumberResult.md)
- [Language](docs/Model/Language.md)
- [LeaveConferenceWebhook](docs/Model/LeaveConferenceWebhook.md)
- [LogLevel](docs/Model/LogLevel.md)
- [LogList](docs/Model/LogList.md)
- [LogResult](docs/Model/LogResult.md)
- [MachineDetectedWebhook](docs/Model/MachineDetectedWebhook.md)
- [MachineType](docs/Model/MachineType.md)
- [MakeCallRequest](docs/Model/MakeCallRequest.md)
- [MessageDeliveryWebhook](docs/Model/MessageDeliveryWebhook.md)
- [MessageDirection](docs/Model/MessageDirection.md)
- [MessageRequest](docs/Model/MessageRequest.md)
- [MessageResult](docs/Model/MessageResult.md)
- [MessageStatus](docs/Model/MessageStatus.md)
- [MessageStatusWebhook](docs/Model/MessageStatusWebhook.md)
- [MessagesList](docs/Model/MessagesList.md)
- [ModifyBlobRequest](docs/Model/ModifyBlobRequest.md)
- [MutableResourceModel](docs/Model/MutableResourceModel.md)
- [OutDial](docs/Model/OutDial.md)
- [OutDialApiConnectWebhook](docs/Model/OutDialApiConnectWebhook.md)
- [OutDialConnectWebhook](docs/Model/OutDialConnectWebhook.md)
- [OutDialStartWebhook](docs/Model/OutDialStartWebhook.md)
- [PaginationModel](docs/Model/PaginationModel.md)
- [Park](docs/Model/Park.md)
- [Pause](docs/Model/Pause.md)
- [PerclCommand](docs/Model/PerclCommand.md)
- [PerclScript](docs/Model/PerclScript.md)
- [PlatformError](docs/Model/PlatformError.md)
- [Play](docs/Model/Play.md)
- [PlayBeep](docs/Model/PlayBeep.md)
- [PlayEarlyMedia](docs/Model/PlayEarlyMedia.md)
- [QueueList](docs/Model/QueueList.md)
- [QueueMember](docs/Model/QueueMember.md)
- [QueueMemberList](docs/Model/QueueMemberList.md)
- [QueueRequest](docs/Model/QueueRequest.md)
- [QueueResult](docs/Model/QueueResult.md)
- [QueueResultStatus](docs/Model/QueueResultStatus.md)
- [QueueWaitWebhook](docs/Model/QueueWaitWebhook.md)
- [RecordUtterance](docs/Model/RecordUtterance.md)
- [RecordUtteranceTermReason](docs/Model/RecordUtteranceTermReason.md)
- [RecordWebhook](docs/Model/RecordWebhook.md)
- [RecordingList](docs/Model/RecordingList.md)
- [RecordingResult](docs/Model/RecordingResult.md)
- [Redirect](docs/Model/Redirect.md)
- [RedirectWebhook](docs/Model/RedirectWebhook.md)
- [Reject](docs/Model/Reject.md)
- [RemoveFromConference](docs/Model/RemoveFromConference.md)
- [RemoveFromQueueNotificationWebhook](docs/Model/RemoveFromQueueNotificationWebhook.md)
- [ReplaceBlobRequest](docs/Model/ReplaceBlobRequest.md)
- [RequestType](docs/Model/RequestType.md)
- [SMSTenDLCBrand](docs/Model/SMSTenDLCBrand.md)
- [SMSTenDLCBrandAltBusinessIdType](docs/Model/SMSTenDLCBrandAltBusinessIdType.md)
- [SMSTenDLCBrandEntityType](docs/Model/SMSTenDLCBrandEntityType.md)
- [SMSTenDLCBrandIdentityStatus](docs/Model/SMSTenDLCBrandIdentityStatus.md)
- [SMSTenDLCBrandRelationship](docs/Model/SMSTenDLCBrandRelationship.md)
- [SMSTenDLCBrandStockExchange](docs/Model/SMSTenDLCBrandStockExchange.md)
- [SMSTenDLCBrandsListResult](docs/Model/SMSTenDLCBrandsListResult.md)
- [SMSTenDLCCampaign](docs/Model/SMSTenDLCCampaign.md)
- [SMSTenDLCCampaignStatus](docs/Model/SMSTenDLCCampaignStatus.md)
- [SMSTenDLCCampaignsListResult](docs/Model/SMSTenDLCCampaignsListResult.md)
- [SMSTenDLCPartnerCampaign](docs/Model/SMSTenDLCPartnerCampaign.md)
- [SMSTenDLCPartnerCampaignBrand](docs/Model/SMSTenDLCPartnerCampaignBrand.md)
- [SMSTenDLCPartnerCampaignStatus](docs/Model/SMSTenDLCPartnerCampaignStatus.md)
- [SMSTenDLCPartnerCampaignsListResult](docs/Model/SMSTenDLCPartnerCampaignsListResult.md)
- [SMSTollFreeCampaign](docs/Model/SMSTollFreeCampaign.md)
- [SMSTollFreeCampaignRegistrationStatus](docs/Model/SMSTollFreeCampaignRegistrationStatus.md)
- [SMSTollFreeCampaignsListResult](docs/Model/SMSTollFreeCampaignsListResult.md)
- [Say](docs/Model/Say.md)
- [SayClassic](docs/Model/SayClassic.md)
- [SayElevenLabs](docs/Model/SayElevenLabs.md)
- [SayElevenLabsEngine](docs/Model/SayElevenLabsEngine.md)
- [SayElevenLabsEngineParameters](docs/Model/SayElevenLabsEngineParameters.md)
- [SayElevenLabsEngineParametersPronunciationDictionaryInner](docs/Model/SayElevenLabsEngineParametersPronunciationDictionaryInner.md)
- [SayElevenLabsEngineParametersVoiceSettings](docs/Model/SayElevenLabsEngineParametersVoiceSettings.md)
- [SayNeural](docs/Model/SayNeural.md)
- [SayNeuralEngine](docs/Model/SayNeuralEngine.md)
- [SayNeuralEngineParameters](docs/Model/SayNeuralEngineParameters.md)
- [SayNeuralTextType](docs/Model/SayNeuralTextType.md)
- [SayStandard](docs/Model/SayStandard.md)
- [SayStandardContentType](docs/Model/SayStandardContentType.md)
- [SayStandardCulture](docs/Model/SayStandardCulture.md)
- [SayStandardEngine](docs/Model/SayStandardEngine.md)
- [SayStandardVoice](docs/Model/SayStandardVoice.md)
- [SendDigits](docs/Model/SendDigits.md)
- [SetDTMFPassThrough](docs/Model/SetDTMFPassThrough.md)
- [SetListen](docs/Model/SetListen.md)
- [SetTalk](docs/Model/SetTalk.md)
- [Sms](docs/Model/Sms.md)
- [StartRecordCall](docs/Model/StartRecordCall.md)
- [TFN](docs/Model/TFN.md)
- [TFNCampaign](docs/Model/TFNCampaign.md)
- [TerminateConference](docs/Model/TerminateConference.md)
- [TranscribeReason](docs/Model/TranscribeReason.md)
- [TranscribeTermReason](docs/Model/TranscribeTermReason.md)
- [TranscribeUtterance](docs/Model/TranscribeUtterance.md)
- [TranscribeUtteranceRecord](docs/Model/TranscribeUtteranceRecord.md)
- [TranscribeWebhook](docs/Model/TranscribeWebhook.md)
- [Unpark](docs/Model/Unpark.md)
- [UpdateCallRequest](docs/Model/UpdateCallRequest.md)
- [UpdateCallRequestStatus](docs/Model/UpdateCallRequestStatus.md)
- [UpdateConferenceParticipantRequest](docs/Model/UpdateConferenceParticipantRequest.md)
- [UpdateConferenceRequest](docs/Model/UpdateConferenceRequest.md)
- [UpdateConferenceRequestStatus](docs/Model/UpdateConferenceRequestStatus.md)
- [Webhook](docs/Model/Webhook.md)

## Authorization

Authentication schemes defined for the API:
### fc

- **Type**: HTTP basic authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@freeclimb.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
    - Package version: `5.3.0`
    - Generator version: `7.9.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
