# # ModifyBlobRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**blob** | **object** |  |
**alias** | **string** | Custom identifier for this blob that is unique for the owning account. It will be set to the blobId by default if not provided. | [optional]

## Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$json = <<<'JSON'
{
  "blob": {
    "firstName": "John",
    "lastName": "Doe"
  },
  "alias": "customer-profile"
}
JSON;

// create an instance of ModifyBlobRequest from a JSON string
$modify_blob_request = \FreeClimb\Api\ObjectSerializer::deserialize(
    json_decode($json),
    \FreeClimb\Api\Model\ModifyBlobRequest::class
);
```

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
