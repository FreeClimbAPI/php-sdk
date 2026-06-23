# # ExportRequestOutput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | [**\FreeClimb\Api\Model\ExportOutputType**](ExportOutputType.md) |  |

## Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$json = <<<'JSON'
{
  "type": "csv"
}
JSON;

// create an instance of ExportRequestOutput from a JSON string
$export_request_output = \FreeClimb\Api\ObjectSerializer::deserialize(
    json_decode($json),
    \FreeClimb\Api\Model\ExportRequestOutput::class
);
```

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
