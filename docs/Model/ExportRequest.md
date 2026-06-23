# # ExportRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**resource_type** | [**\FreeClimb\Api\Model\ExportResourceType**](ExportResourceType.md) |  |
**format** | **string[]** |  | [optional]
**output** | [**\FreeClimb\Api\Model\ExportRequestOutput**](ExportRequestOutput.md) |  |
**query** | **object** |  | [optional]

## Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$json = <<<'JSON'
{
  "resourceType": "Messages",
  "format": [
    "messageId",
    "dateUpdated",
    "status"
  ],
  "output": {
    "type": "csv"
  },
  "query": {
    "direction": "inbound"
  }
}
JSON;

// create an instance of ExportRequest from a JSON string
$export_request = \FreeClimb\Api\ObjectSerializer::deserialize(
    json_decode($json),
    \FreeClimb\Api\Model\ExportRequest::class
);
```

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
