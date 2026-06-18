# # MessagesList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**total** | **int** | Total amount of requested resource. | [optional]
**start** | **int** | Resource index at start of current page | [optional]
**end** | **int** | Resource index at end of current page | [optional]
**page** | **int** | Current page | [optional]
**num_pages** | **int** | Total number of pages | [optional]
**page_size** | **int** | Number of items per page | [optional]
**next_page_uri** | **string** | Uri to retrieve the next page of items | [optional]
**messages** | [**\FreeClimb\Api\Model\MessageResult[]**](MessageResult.md) | Array of messages | [optional]

## Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$json = <<<'JSON'
{
  "total": 0,
  "start": 0,
  "end": 0,
  "page": 0,
  "numPages": 0,
  "pageSize": 0,
  "nextPageUri": "string",
  "messages": [
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
  ]
}
JSON;

// create an instance of MessagesList from a JSON string
$messages_list = \FreeClimb\Api\ObjectSerializer::deserialize(
    json_decode($json),
    \FreeClimb\Api\Model\MessagesList::class
);
```

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
