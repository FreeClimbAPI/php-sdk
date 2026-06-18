# # MessageRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uri** | **string** | The URI for this resource, relative to /apiserver. | [optional]
**date_created** | **string** | The date that this resource was created (GMT) in RFC 1123 format (e.g., Mon, 15 Jun 2009 20:45:30 GMT). | [optional]
**date_updated** | **string** | The date that this resource was last updated (GMT) in RFC 1123 format (e.g., Mon, 15 Jun 2009 20:45:30 GMT). | [optional]
**revision** | **int** | Revision count for the resource. This count is set to 1 on creation and is incremented every time it is updated. | [optional]
**from** | **string** | Phone number to use as the sender. This must be an incoming phone number that you have purchased from FreeClimb. |
**to** | **string** | Phone number to receive the message. Must be within FreeClimb&#39;s service area. |
**text** | **string** | Text contained in the message (maximum 160 characters).   **Note:** For text, only ASCII characters are supported. |
**notification_url** | **string** | When the Message changes status, this URL is invoked using HTTP POST with the messageStatus parameters.  **Note:** This is a notification only; any PerCL returned is ignored. | [optional]
**media_urls** | **string[]** | an array of HTTP URLs which are to be used as attachments to the message. This will force the message into being an MMS message and must be done using a from number which is MMS capabile. | [optional]

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
  "from": "+12025551234",
  "to": "+13035559876",
  "text": "Hello from FreeClimb!",
  "notificationUrl": "https://www.myapp.com/messageStatus",
  "mediaUrls": [
    "https://www.myapp.com/image.jpg"
  ]
}
JSON;

// create an instance of MessageRequest from a JSON string
$message_request = \FreeClimb\Api\ObjectSerializer::deserialize(
    json_decode($json),
    \FreeClimb\Api\Model\MessageRequest::class
);
```

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
