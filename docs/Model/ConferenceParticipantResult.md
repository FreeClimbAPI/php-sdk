# # ConferenceParticipantResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uri** | **string** | The URI for this resource, relative to /apiserver. | [optional]
**date_created** | **string** | The date that this resource was created (GMT) in RFC 1123 format (e.g., Mon, 15 Jun 2009 20:45:30 GMT). | [optional]
**date_updated** | **string** | The date that this resource was last updated (GMT) in RFC 1123 format (e.g., Mon, 15 Jun 2009 20:45:30 GMT). | [optional]
**revision** | **int** | Revision count for the resource. This count is set to 1 on creation and is incremented every time it is updated. | [optional]
**account_id** | **string** | ID of the account that created this participant. | [optional]
**conference_id** | **string** | ID of the conference this participant is in. | [optional]
**call_id** | **string** | ID of the Call associated with this Participant. | [optional]
**talk** | **bool** | True if this Participant has talk privileges in the Conference. False otherwise. | [optional]
**listen** | **bool** | True if this Participant has listen privileges in the Conference. False otherwise. | [optional]
**dtmf_pass_through** | **bool** | True if this Participant had dtmfPassThrough privileges in the Conference. False otherwise. | [optional]
**start_conf_on_enter** | **bool** | True if this Participant joining the Conference caused the Conference to start (status &#x3D; inProgress). False otherwise. | [optional]

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
  "accountId": "string",
  "conferenceId": "string",
  "callId": "string",
  "talk": false,
  "listen": false,
  "dtmfPassThrough": false,
  "startConfOnEnter": false
}
JSON;

// create an instance of ConferenceParticipantResult from a JSON string
$conference_participant_result = \FreeClimb\Api\ObjectSerializer::deserialize(
    json_decode($json),
    \FreeClimb\Api\Model\ConferenceParticipantResult::class
);
```

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
