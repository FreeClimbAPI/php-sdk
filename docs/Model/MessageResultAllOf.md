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

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
