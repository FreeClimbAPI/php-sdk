# # FilterLogsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pql** | **string** | The filter query for retrieving logs. See **Performance Query Language** below. |

## Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$json = <<<'JSON'
{
  "pql": "2020-06-22T19:42:53.376Z < timestamp < 2020-06-23T19:42:53.376Z"
}
JSON;

// create an instance of FilterLogsRequest from a JSON string
$filter_logs_request = \FreeClimb\Api\ObjectSerializer::deserialize(
    json_decode($json),
    \FreeClimb\Api\Model\FilterLogsRequest::class
);
```

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
