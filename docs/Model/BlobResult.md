# # BlobResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**blob_id** | **string** | Identifier which can be used to reference this blob in future interations. | [optional]
**account_id** | **string** |  | [optional]
**alias** | **string** | Custom identifier for this blob that is unique for the owning account. It will be set to the blobId by default if not provided in the creation request. | [optional]
**revision** | **int** |  | [optional]
**date_created** | **\DateTime** | An RFC3339 timestamp with millisecond resolution. It represents the time this blob was created. | [optional]
**date_updated** | **\DateTime** | An RFC3339 timestamp with millisecond resolution. It represents the time this blob was last modified, which at creation will always equal dateCreated. | [optional]
**expires_at** | **\DateTime** | An RFC3339 timestamp with millisecond resolution. It represents the time at which this blob will expire and self delete. | [optional]
**blob** | **object** | Blob content | [optional]

## Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$json = <<<'JSON'
{
  "blobId": "BL0123456789abcdefABCDEF0123456789abcdef02",
  "accountId": "AC0123456789abcdefABCDEF0123456789abcdef01",
  "alias": "string",
  "revision": 0,
  "dateCreated": "2022-01-01T00:00:00Z",
  "dateUpdated": "2022-01-01T00:00:00Z",
  "expiresAt": "2022-01-01T00:00:00Z"
}
JSON;

// create an instance of BlobResult from a JSON string
$blob_result = \FreeClimb\Api\ObjectSerializer::deserialize(
    json_decode($json),
    \FreeClimb\Api\Model\BlobResult::class
);
```

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
