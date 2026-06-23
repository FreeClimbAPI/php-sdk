# # UpdateCallRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | [**\FreeClimb\Api\Model\UpdateCallRequestStatus**](UpdateCallRequestStatus.md) |  |

## Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$json = <<<'JSON'
{
  "status": "canceled"
}
JSON;

// create an instance of UpdateCallRequest from a JSON string
$update_call_request = \FreeClimb\Api\ObjectSerializer::deserialize(
    json_decode($json),
    \FreeClimb\Api\Model\UpdateCallRequest::class
);
```

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
