# # MessageDeliveryWebhook

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**request_type** | **string** | Value will be messageDelivery - An SMS message has been received by the platform and is being delivered to the customer application associated with the destination number. | [optional]
**account_id** | **string** | Account ID associated with your account. | [optional]
**from** | **string** | Phone number of the party that initiated the Call (in E.164 format). | [optional]
**to** | **string** | Phone number provisioned to you and to which this Call is directed (in E.164 format). | [optional]
**text** | **string** | Body of the SMS message. | [optional]
**direction** | **string** | Value will be inbound to indicate the receipt of a message into the FreeClimb platform. | [optional]
**application_id** | **string** | ID of the application to which the destination number is assigned. | [optional]
**status** | **string** | Value will be received to indicate that the platform has successfully received the incoming message. | [optional]
**phone_number_id** | **string** | ID of the destination phone number. | [optional]
**uri** | **string** | The URI for this resource, relative to the API base URL | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
