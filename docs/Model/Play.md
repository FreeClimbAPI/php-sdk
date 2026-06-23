# # Play

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**file** | **string** | RL of the audio file to be played to the caller. The URL can be the &#x60;recordingUrl&#x60; generated from the &#x60;RecordUtterance&#x60; or &#x60;StartRecordCall&#x60; PerCL commands. |
**loop** | **int** | Number of times the audio file is played. Specifying &#39;0&#39; causes the Play action to loop until the Call is hung up. | [optional]
**privacy_mode** | **bool** | Parameter &#x60;privacyMode&#x60; will not log the &#x60;text&#x60; as required by PCI compliance. | [optional]

## Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$json = <<<'JSON'
{
  "command": "Play",
  "file": "string",
  "loop": 0,
  "privacyMode": false
}
JSON;

// create an instance of Play from a JSON string
$play = \FreeClimb\Api\ObjectSerializer::deserialize(
    json_decode($json),
    \FreeClimb\Api\Model\Play::class
);
```

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
