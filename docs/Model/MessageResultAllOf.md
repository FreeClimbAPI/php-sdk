# # MessageResultAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | String that uniquely identifies this account resource. | [optional]
**message_id** | **string** | String that uniquely identifies this message resource | [optional]
**status** | [**\FreeClimb\Api\Model\MessageStatus**](MessageStatus.md) |  | [optional]
**from** | **string** | Phone number in E.164 format that sent the message. | [optional]
**to** | **string** | Phone number in E.164 format that received the message. | [optional]
**text** | **string** | Message contents | [optional]
**direction** | **string** | Noting whether the message was inbound or outbound | [optional]
**notification_url** | **string** | URL invoked when message sent | [optional]
**brand_id** | **string** | The unique identifier for the brand associated with the message | [optional]
**campaign_id** | **string** | The unique identifier for the campaign associated with the message | [optional]
**segment_count** | **float** | The number of segments into which the message was split | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
