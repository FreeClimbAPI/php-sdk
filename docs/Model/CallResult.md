# # CallResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uri** | **string** | The URI for this resource, relative to /apiserver. | [optional]
**date_created** | **string** | The date that this resource was created (GMT) in RFC 1123 format (e.g., Mon, 15 Jun 2009 20:45:30 GMT). | [optional]
**date_updated** | **string** | The date that this resource was last updated (GMT) in RFC 1123 format (e.g., Mon, 15 Jun 2009 20:45:30 GMT). | [optional]
**revision** | **int** | Revision count for the resource. This count is set to 1 on creation and is incremented every time it is updated. | [optional]
**call_id** | **string** | String that uniquely identifies this Call resource. | [optional]
**parent_call_id** | **string** | ID of the Call that created this leg (child Call). | [optional]
**account_id** | **string** | ID of the account that owns this Call. | [optional]
**from** | **string** | Phone number that initiated this Call. | [optional]
**to** | **string** | Phone number that received this Call. | [optional]
**phone_number_id** | **string** | If the Call was inbound, this is the ID of the IncomingPhoneNumber that received the Call (DNIS). If the Call was outbound, this is the ID of the phone number from which the Call was placed (ANI). | [optional]
**call_status** | [**\FreeClimb\Api\Model\CallStatus**](CallStatus.md) |  | [optional]
**start_time** | **string** | Start time of the Call (GMT) in RFC 1123 format (e.g., Mon, 15 Jun 2009 20:45:30 GMT). Empty if the Call has not yet been dialed. | [optional]
**connect_time** | **string** | Time the Call was answered (GMT) in RFC 1123 format (e.g., Mon, 15 Jun 2009 20:45:30 GMT). Empty if the Call has not yet been dialed. | [optional]
**end_time** | **string** | End time of the Call (GMT) in RFC 1123 format (e.g., Mon, 15 Jun 2009 20:45:30 GMT). Empty if the Call did not complete successfully. | [optional]
**duration** | **int** | Total length of the Call in seconds. Measures time between startTime and endTime. This value is empty for busy, failed, unanswered or ongoing Calls. | [optional]
**connect_duration** | **int** | Length of time that the Call was connected in seconds. Measures time between connectTime and endTime. This value is empty for busy, failed, unanswered or ongoing Calls. | [optional]
**direction** | [**\FreeClimb\Api\Model\CallDirection**](CallDirection.md) |  | [optional]
**answered_by** | [**\FreeClimb\Api\Model\AnsweredBy**](AnsweredBy.md) |  | [optional]
**subresource_uris** | **object** | The list of subresources for this Call. These include things like logs and recordings associated with the Call. | [optional]
**application_id** | **string** | ApplicationId associated with the Call. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
