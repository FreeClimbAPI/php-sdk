# # CallResultAllOfSubresourceUris

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**logs** | **string** | The URI for the logs associated with this Call. | [optional]
**recordings** | **string** | The URI for the recordings associated with this Call. | [optional]

## Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$json = <<<'JSON'
{
  "logs": "string",
  "recordings": "string"
}
JSON;

// create an instance of CallResultAllOfSubresourceUris from a JSON string
$call_result_all_of_subresource_uris = \FreeClimb\Api\ObjectSerializer::deserialize(
    json_decode($json),
    \FreeClimb\Api\Model\CallResultAllOfSubresourceUris::class
);
```

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
