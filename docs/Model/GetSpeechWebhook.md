# # GetSpeechWebhook

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**request_type** | **string** | Context or reason why this request is being made. Will be getSpeech - The GetSpeech command has completed and its actionUrl is being invoked. | [optional]
**call_id** | **string** | Unique ID for this Call, generated by FreeClimb. | [optional]
**account_id** | **string** | Account ID associated with your account. | [optional]
**from** | **string** | Phone number of the party that initiated the Call (in E.164 format). | [optional]
**to** | **string** | Phone number provisioned to you and to which this Call is directed (in E.164 format). | [optional]
**call_status** | [**\FreeClimb\Api\Model\CallStatus**](CallStatus.md) |  | [optional]
**direction** | [**\FreeClimb\Api\Model\CallDirection**](CallDirection.md) |  | [optional]
**conference_id** | **string** | Unique ID of the Conference. | [optional]
**queue_id** | **string** | This is only populated if the request pertains to a Queue. Otherwise, it is set to null. | [optional]
**reason** | [**\FreeClimb\Api\Model\GetSpeechReason**](GetSpeechReason.md) |  | [optional]
**recognition_result** | **string** | Semantic content (either a string if speech was recognized or a digit if a digit was input instead of speech) returned from the entry or tag that was recognized within the grammar. The content will be replaced by &#39;xxxxx&#39; when privacyMode is set to true. This field is populated only if the reason field is set to recognition or digit. | [optional]
**confidence** | **int** | Level of confidence in the obtained result. This is a value in the range 0 to 100 – with 0 being total lack of confidence and 100 being absolute certainty in the recognition. This field is populated only if the reason field is set to recognition. | [optional]
**parent_call_id** | **string** | ID of the Call that created this leg (child call). | [optional]
**completion_reason** | **string** | Advanced diagnostic information if reason was error. See RFC 6787 section 9.4.12 - speech recognition. | [optional]
**completion_cause** | **string** | Advanced diagnostic information if reason was error. See RFC 6787 section 9.4.11 - speech recognition. | [optional]
**mrcp_code** | **int** | Advanced diagnostic information if reason was error. See RFC 6787 section 5.4 - MRCPv2 specification. | [optional]
**mrcp_diagnostic** | **string** | Advanced diagnostic information if reason was error. See RFC 6787 section 5.4 - MRCPv2 specification. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
