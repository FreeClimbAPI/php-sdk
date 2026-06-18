# # SetTalk

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**talk** | **bool** | Specifying &#x60;false&#x60; mutes the Participant. | [optional]

## Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$json = <<<'JSON'
{
  "command": "SetTalk",
  "talk": false
}
JSON;

// create an instance of SetTalk from a JSON string
$set_talk = \FreeClimb\Api\ObjectSerializer::deserialize(
    json_decode($json),
    \FreeClimb\Api\Model\SetTalk::class
);
```

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
