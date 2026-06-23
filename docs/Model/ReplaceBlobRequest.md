# # ReplaceBlobRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**blob** | **object** |  |

## Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$json = <<<'JSON'
{
  "blob": {
    "firstName": "John",
    "lastName": "Doe"
  }
}
JSON;

// create an instance of ReplaceBlobRequest from a JSON string
$replace_blob_request = \FreeClimb\Api\ObjectSerializer::deserialize(
    json_decode($json),
    \FreeClimb\Api\Model\ReplaceBlobRequest::class
);
```

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
