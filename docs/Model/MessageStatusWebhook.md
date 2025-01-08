# # MessageStatusWebhook

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**request_type** | **string** | Value will be messageStatus - An outbound SMS has changed status and the Sms command&#39;s notificationUrl is being invoked. | [optional]
**account_id** | **string** | Account ID associated with your account. | [optional]
**message_id** | **string** | Unique ID for this message, generated by FreeClimb. | [optional]
**call_id** | **string** | Unique ID for the Call in the context of which the Sms PerCL command was issued. | [optional]
**from** | **string** | aPhone number used to initiate the SMS message (in E.164 format). | [optional]
**to** | **string** | Destination number of the SMS message (in E.164 format). | [optional]
**text** | **string** | Body of the SMS message. | [optional]
**direction** | **string** | Value will be outbound to indicate an outgoing SMS from FreeClimb. | [optional]
**application_id** | **string** | ID of the application to which the destination number is assigned. May be null if the originating number is invalid in some way or is not registered to an application. | [optional]
**status** | [**\FreeClimb\Api\Model\MessageStatus**](MessageStatus.md) |  | [optional]
**phone_number_id** | **string** | ID of the destination phone number. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)