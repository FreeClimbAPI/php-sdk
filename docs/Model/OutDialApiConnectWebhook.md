# # OutDialApiConnectWebhook

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**request_type** | **string** | Context or reason why this request is being made. Will be outDialApiConnect - An outbound call spawned by the REST API has connected and the callConnectUrl specified in the API request is being invoked. | [optional]
**account_id** | **string** | Account ID associated with your account. | [optional]
**call_id** | **string** | Unique identifier for this Call, generated by FreeClimb | [optional]
**from** | **string** | Phone number of the party that initiated the Call (in E.164 format). | [optional]
**to** | **string** | Phone number or SIP URL of the party that is receiving the call (phone number in E.164 format). | [optional]
**call_status** | [**\FreeClimb\Api\Model\CallStatus**](CallStatus.md) |  | [optional]
**direction** | [**\FreeClimb\Api\Model\CallDirection**](CallDirection.md) |  | [optional]
**conference_id** | **string** | This is only populated if request pertains to a conference. Otherwise, it is set to null. | [optional]
**queue_id** | **string** | This is only populated if the request pertains to a queue. Otherwise, it is set to null. | [optional]
**parent_call_id** | **string** | ID of the Call that created this leg (child call). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)