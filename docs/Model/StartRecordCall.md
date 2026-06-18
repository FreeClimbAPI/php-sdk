# # StartRecordCall

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------

## Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$json = <<<'JSON'
{
  "command": "StartRecordCall"
}
JSON;

// create an instance of StartRecordCall from a JSON string
$start_record_call = \FreeClimb\Api\ObjectSerializer::deserialize(
    json_decode($json),
    \FreeClimb\Api\Model\StartRecordCall::class
);
```

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
