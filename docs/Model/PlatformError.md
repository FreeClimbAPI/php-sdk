# # PlatformError

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **int** |  | [optional]
**call** | **string** |  | [optional]
**url** | **string** |  | [optional]
**details** | **object** |  | [optional]

## Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$json = <<<'JSON'
{
  "code": 0,
  "call": "Internal Failure",
  "url": "https://docs.freeclimb.com/reference/error-and-warning-dictionary#0"
}
JSON;

// create an instance of PlatformError from a JSON string
$platform_error = \FreeClimb\Api\ObjectSerializer::deserialize(
    json_decode($json),
    \FreeClimb\Api\Model\PlatformError::class
);
```

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
