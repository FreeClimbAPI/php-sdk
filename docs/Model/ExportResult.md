# # ExportResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | String that uniquely identifies this account resource. |
**uri** | **string** |  |
**date_created** | **string** |  |
**date_updated** | **string** |  |
**revision** | **int** |  |
**export_id** | **string** | String that uniquely identifies this export resource |
**status** | [**\FreeClimb\Api\Model\ExportStatus**](ExportStatus.md) |  |
**size** | **int** |  |
**resource_type** | [**\FreeClimb\Api\Model\ExportResourceType**](ExportResourceType.md) |  |
**query** | **object** | Query params used to filter exported documents |
**format** | **string[]** | Desired fields of exported documents |
**output** | [**\FreeClimb\Api\Model\ExportResultOutput**](ExportResultOutput.md) |  |

## Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$json = <<<'JSON'
{
  "accountId": "AC0123456789abcdefABCDEF0123456789abcdef07",
  "uri": "/Accounts/AC0123456789abcdefABCDEF0123456789abcdef07/Exports/EX0123456789abcdefABCDEF0123456789abcdef08",
  "dateCreated": "Wed, 26 Jun 2024 15:45:06 UTC",
  "dateUpdated": "Wed, 26 Jun 2024 15:45:06 UTC",
  "revision": 1,
  "exportId": "EX0123456789abcdefABCDEF0123456789abcdef08",
  "status": "completed",
  "size": 12893786,
  "resourceType": "Messages",
  "query": {
    "direction": "inbound"
  },
  "format": [
    "messageId",
    "dateUpdated",
    "segmentCount",
    "status"
  ],
  "output": {
    "type": "csv"
  }
}
JSON;

// create an instance of ExportResult from a JSON string
$export_result = \FreeClimb\Api\ObjectSerializer::deserialize(
    json_decode($json),
    \FreeClimb\Api\Model\ExportResult::class
);
```

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
