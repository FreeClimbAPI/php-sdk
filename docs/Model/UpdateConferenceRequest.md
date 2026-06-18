# # UpdateConferenceRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**alias** | **string** | Description for this conference. Maximum 64 characters. | [optional]
**play_beep** | [**\FreeClimb\Api\Model\PlayBeep**](PlayBeep.md) |  | [optional]
**status** | [**\FreeClimb\Api\Model\UpdateConferenceRequestStatus**](UpdateConferenceRequestStatus.md) |  | [optional]

## Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$json = <<<'JSON'
{
  "alias": "Customer Conference",
  "playBeep": "always",
  "status": "empty"
}
JSON;

// create an instance of UpdateConferenceRequest from a JSON string
$update_conference_request = \FreeClimb\Api\ObjectSerializer::deserialize(
    json_decode($json),
    \FreeClimb\Api\Model\UpdateConferenceRequest::class
);
```

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
