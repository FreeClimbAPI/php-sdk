# # Pause

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**length** | **int** | Length in milliseconds. FreeClimb will wait silently before continuing on. |

## Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$json = <<<'JSON'
{
  "command": "Pause",
  "length": 0
}
JSON;

// create an instance of Pause from a JSON string
$pause = \FreeClimb\Api\ObjectSerializer::deserialize(
    json_decode($json),
    \FreeClimb\Api\Model\Pause::class
);
```

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
