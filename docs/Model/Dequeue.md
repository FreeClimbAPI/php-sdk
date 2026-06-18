# # Dequeue

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------

## Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$json = <<<'JSON'
{
  "command": "Dequeue"
}
JSON;

// create an instance of Dequeue from a JSON string
$dequeue = \FreeClimb\Api\ObjectSerializer::deserialize(
    json_decode($json),
    \FreeClimb\Api\Model\Dequeue::class
);
```

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
