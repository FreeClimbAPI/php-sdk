# # RecordUtterance

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**action_url** | **string** | URL to which information on the completed recording is submitted. The PerCL received in response is then used to continue with Call processing. |
**silence_timeout_ms** | **int** | Interval of silence that should elapse before ending the recording. | [optional]
**finish_on_key** | **string** | Key that triggers the end of the recording. any digit, &#39;#&#39;, or &#39;*&#39; | [optional]
**max_length_sec** | **int** | Maximum length for the command execution in seconds. | [optional]
**play_beep** | **bool** | Indicates whether to play a beep sound before the start of the recording. If set to &#x60;false&#x60;, no beep is played. | [optional]
**auto_start** | **bool** | If &#x60;false&#x60;, recording begins immediately after the RecordUtterance command is processed. If &#x60;true&#x60;, recording begins when audio is present and if audio begins before the &#x60;maxLengthSec&#x60; timeout. If no audio begins before &#x60;maxLengthSec&#x60;, no recording is generated. | [optional]
**privacy_mode** | **bool** | Parameter &#x60;privacyMode&#x60; will not log the &#x60;text&#x60; as required by PCI compliance. | [optional]

## Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$json = <<<'JSON'
{
  "command": "RecordUtterance",
  "actionUrl": "https://www.example.com",
  "silenceTimeoutMs": 0,
  "finishOnKey": "string",
  "maxLengthSec": 0,
  "playBeep": false,
  "autoStart": false,
  "privacyMode": false
}
JSON;

// create an instance of RecordUtterance from a JSON string
$record_utterance = \FreeClimb\Api\ObjectSerializer::deserialize(
    json_decode($json),
    \FreeClimb\Api\Model\RecordUtterance::class
);
```

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
