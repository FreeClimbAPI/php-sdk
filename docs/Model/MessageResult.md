# # MessageResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uri** | **string** | The URI for this resource, relative to /apiserver. | [optional]
**date_created** | **string** | The date that this resource was created (GMT) in RFC 1123 format (e.g., Mon, 15 Jun 2009 20:45:30 GMT). | [optional]
**date_updated** | **string** | The date that this resource was last updated (GMT) in RFC 1123 format (e.g., Mon, 15 Jun 2009 20:45:30 GMT). | [optional]
**revision** | **int** | Revision count for the resource. This count is set to 1 on creation and is incremented every time it is updated. | [optional]
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
**media_urls** | **string[]** | an array of HTTP URLs which were attached this this message | [optional]
**tfn** | [**\FreeClimb\Api\Model\TFN**](TFN.md) |  | [optional]
**phone_number_id** | **string** | String that uniquely identifies the phoneNumber resource used to send this Message | [optional]
**application_id** | **string** | String that uniquely identifies the Application resource used to send this Message | [optional]

## Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$json = <<<'JSON'
{
  "uri": "string",
  "dateCreated": "string",
  "dateUpdated": "string",
  "revision": 0,
  "accountId": "string",
  "messageId": "string",
  "status": "new",
  "from": "string",
  "to": "string",
  "text": "string",
  "direction": "string",
  "notificationUrl": "https://www.example.com",
  "brandId": "string",
  "campaignId": "string",
  "segmentCount": 0,
  "mediaUrls": [
    "https://www.example.com"
  ],
  "tfn": {
    "campaignId": "string"
  },
  "phoneNumberId": "string",
  "applicationId": "string"
}
JSON;

// create an instance of MessageResult from a JSON string
$message_result = \FreeClimb\Api\ObjectSerializer::deserialize(
    json_decode($json),
    \FreeClimb\Api\Model\MessageResult::class
);
```

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
