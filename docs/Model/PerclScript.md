# # PerclScript

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**commands** | [**\FreeClimb\Api\Model\PerclCommand[]**](PerclCommand.md) | A JSON array of PerCL commands | [optional]

## Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$json = <<<'JSON'
{
  "commands": [
    {
      "command": "string"
    }
  ]
}
JSON;

// create an instance of PerclScript from a JSON string
$percl_script = \FreeClimb\Api\ObjectSerializer::deserialize(
    json_decode($json),
    \FreeClimb\Api\Model\PerclScript::class
);
```

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
