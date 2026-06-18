# # CreateBlobRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**alias** | **string** | Custom identifier for this blob that is unique for the owning account. It will be set to the blobId by default if not provided. | [optional]
**expires_at** | **string** | An RFC3339 timestamp with millisecond resolution. This timestamp defines the time at which this blob will delete itself. It must not be more than 48 hours in the future and will default to 9 hours in the future if not provided. | [optional]
**blob** | **object** |  |

## Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$json = <<<'JSON'
{
  "alias": "customer-profile",
  "expiresAt": "2006-01-02T15:04:05.000Z",
  "blob": {
    "firstName": "John",
    "lastName": "Doe"
  }
}
JSON;

// create an instance of CreateBlobRequest from a JSON string
$create_blob_request = \FreeClimb\Api\ObjectSerializer::deserialize(
    json_decode($json),
    \FreeClimb\Api\Model\CreateBlobRequest::class
);
```

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
