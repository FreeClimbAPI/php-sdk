# # UpdateConferenceParticipantRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**talk** | **bool** | (Optional) Default is &#x60;true&#x60;. Setting to &#x60;false&#x60; mutes the Participant. FreeClimb returns an error and ignores any other value. | [optional]
**listen** | **bool** | (Optional) Default is &#x60;true&#x60;. Setting to &#x60;false&#x60; silences the Conference for this Participant. FreeClimb returns an error and ignores any other value. | [optional]
**dtmf_pass_through** | **bool** | (Optional) Default is &#x60;true&#x60;. Setting to &#x60;false&#x60; mutes dtmf audio for this Participant. FreeClimb returns an error and ignores any other value. | [optional]

## Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$json = <<<'JSON'
{
  "talk": true,
  "listen": true,
  "dtmfPassThrough": true
}
JSON;

// create an instance of UpdateConferenceParticipantRequest from a JSON string
$update_conference_participant_request = \FreeClimb\Api\ObjectSerializer::deserialize(
    json_decode($json),
    \FreeClimb\Api\Model\UpdateConferenceParticipantRequest::class
);
```

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
