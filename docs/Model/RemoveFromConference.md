# # RemoveFromConference

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------

## Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$json = <<<'JSON'
{
  "command": "RemoveFromConference"
}
JSON;

// create an instance of RemoveFromConference from a JSON string
$remove_from_conference = \FreeClimb\Api\ObjectSerializer::deserialize(
    json_decode($json),
    \FreeClimb\Api\Model\RemoveFromConference::class
);
```

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
