# # RecordingResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uri** | **string** | The URI for this resource, relative to /apiserver. | [optional]
**date_created** | **string** | The date that this resource was created (GMT) in RFC 1123 format (e.g., Mon, 15 Jun 2009 20:45:30 GMT). | [optional]
**date_updated** | **string** | The date that this resource was last updated (GMT) in RFC 1123 format (e.g., Mon, 15 Jun 2009 20:45:30 GMT). | [optional]
**revision** | **int** | Revision count for the resource. This count is set to 1 on creation and is incremented every time it is updated. | [optional]
**recording_id** | **string** | String that uniquely identifies this recording resource. | [optional]
**account_id** | **string** | ID of the account that created this recording. | [optional]
**call_id** | **string** | ID of the Call that was recorded. If a Conference was recorded, this value is empty and the conferenceId property is populated. | [optional]
**duration_sec** | **int** | Length of the recording in seconds. | [optional]
**conference_id** | **string** | ID of the Conference that was recorded. If a Call was recorded, this value is empty and the callId property is populated. | [optional]

## Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$json = <<<'JSON'
{
  "uri": "string",
  "dateCreated": "string",
  "dateUpdated": "string",
  "revision": 0,
  "recordingId": "string",
  "accountId": "string",
  "callId": "string",
  "durationSec": 0,
  "conferenceId": "string"
}
JSON;

// create an instance of RecordingResult from a JSON string
$recording_result = \FreeClimb\Api\ObjectSerializer::deserialize(
    json_decode($json),
    \FreeClimb\Api\Model\RecordingResult::class
);
```

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
