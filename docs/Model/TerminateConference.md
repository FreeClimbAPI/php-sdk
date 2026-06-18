# # TerminateConference

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------

## Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$json = <<<'JSON'
{
  "command": "TerminateConference"
}
JSON;

// create an instance of TerminateConference from a JSON string
$terminate_conference = \FreeClimb\Api\ObjectSerializer::deserialize(
    json_decode($json),
    \FreeClimb\Api\Model\TerminateConference::class
);
```

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
