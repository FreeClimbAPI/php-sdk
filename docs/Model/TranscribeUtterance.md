# # TranscribeUtterance

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**action_url** | **string** |  |
**play_beep** | **bool** |  | [optional] [default to false]
**record** | [**\FreeClimb\Api\Model\TranscribeUtteranceRecord**](TranscribeUtteranceRecord.md) |  | [optional]
**privacy_for_logging** | **bool** |  | [optional] [default to false]
**privacy_for_recording** | **bool** |  | [optional] [default to false]
**prompts** | [**\FreeClimb\Api\Model\PerclCommand[]**](PerclCommand.md) |  | [optional]

## Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$json = <<<'JSON'
{
  "command": "TranscribeUtterance",
  "actionUrl": "https://www.example.com",
  "playBeep": false,
  "record": {
    "saveRecording": false,
    "maxLengthSec": 60,
    "rcrdTerminationSilenceTimeMs": 0
  },
  "privacyForLogging": false,
  "privacyForRecording": false,
  "prompts": [
    {
      "command": "string"
    }
  ]
}
JSON;

// create an instance of TranscribeUtterance from a JSON string
$transcribe_utterance = \FreeClimb\Api\ObjectSerializer::deserialize(
    json_decode($json),
    \FreeClimb\Api\Model\TranscribeUtterance::class
);
```

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
