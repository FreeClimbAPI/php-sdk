# # TranscribeUtteranceRecord

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**save_recording** | **bool** |  | [optional] [default to false]
**max_length_sec** | **int** |  | [optional] [default to 60]
**rcrd_termination_silence_time_ms** | **int** |  | [optional]

## Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$json = <<<'JSON'
{
  "saveRecording": false,
  "maxLengthSec": 60,
  "rcrdTerminationSilenceTimeMs": 0
}
JSON;

// create an instance of TranscribeUtteranceRecord from a JSON string
$transcribe_utterance_record = \FreeClimb\Api\ObjectSerializer::deserialize(
    json_decode($json),
    \FreeClimb\Api\Model\TranscribeUtteranceRecord::class
);
```

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
