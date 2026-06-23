# # SetListen

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**listen** | **bool** | Specifying &#x60;false&#x60; will silence the Conference for this Participant. | [optional]

## Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$json = <<<'JSON'
{
  "command": "SetListen",
  "listen": false
}
JSON;

// create an instance of SetListen from a JSON string
$set_listen = \FreeClimb\Api\ObjectSerializer::deserialize(
    json_decode($json),
    \FreeClimb\Api\Model\SetListen::class
);
```

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
