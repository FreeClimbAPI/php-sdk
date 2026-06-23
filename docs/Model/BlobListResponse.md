# # BlobListResponse

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
**blobs** | [**\FreeClimb\Api\Model\BlobResult[]**](BlobResult.md) |  | [optional]

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
  "blobs": [
    {
      "blobId": "BL0123456789abcdefABCDEF0123456789abcdef02",
      "accountId": "AC0123456789abcdefABCDEF0123456789abcdef01",
      "alias": "string",
      "revision": 0,
      "dateCreated": "2022-01-01T00:00:00Z",
      "dateUpdated": "2022-01-01T00:00:00Z",
      "expiresAt": "2022-01-01T00:00:00Z"
    }
  ]
}
JSON;

// create an instance of BlobListResponse from a JSON string
$blob_list_response = \FreeClimb\Api\ObjectSerializer::deserialize(
    json_decode($json),
    \FreeClimb\Api\Model\BlobListResponse::class
);
```

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
