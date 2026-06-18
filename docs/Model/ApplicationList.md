# # ApplicationList

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
**applications** | [**\FreeClimb\Api\Model\ApplicationResult[]**](ApplicationResult.md) |  | [optional]

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
  "applications": [
    {
      "uri": "string",
      "dateCreated": "string",
      "dateUpdated": "string",
      "revision": 0,
      "accountId": "string",
      "applicationId": "string",
      "alias": "string",
      "voiceUrl": "https://www.example.com",
      "voiceFallbackUrl": "https://www.example.com",
      "callConnectUrl": "https://www.example.com",
      "statusCallbackUrl": "https://www.example.com",
      "smsUrl": "https://www.example.com",
      "smsFallbackUrl": "https://www.example.com"
    }
  ]
}
JSON;

// create an instance of ApplicationList from a JSON string
$application_list = \FreeClimb\Api\ObjectSerializer::deserialize(
    json_decode($json),
    \FreeClimb\Api\Model\ApplicationList::class
);
```

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
