# # Unpark

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------

## Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$json = <<<'JSON'
{
  "command": "Unpark"
}
JSON;

// create an instance of Unpark from a JSON string
$unpark = \FreeClimb\Api\ObjectSerializer::deserialize(
    json_decode($json),
    \FreeClimb\Api\Model\Unpark::class
);
```

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
