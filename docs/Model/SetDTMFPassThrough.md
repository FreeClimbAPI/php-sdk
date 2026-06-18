# # SetDTMFPassThrough

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dtmf_pass_through** | **bool** | Specifying &#x60;false&#x60; mutes the Participant&#39;s dtmf audio. | [optional]

## Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$json = <<<'JSON'
{
  "command": "SetDTMFPassThrough",
  "dtmfPassThrough": false
}
JSON;

// create an instance of SetDTMFPassThrough from a JSON string
$set_dtmf_pass_through = \FreeClimb\Api\ObjectSerializer::deserialize(
    json_decode($json),
    \FreeClimb\Api\Model\SetDTMFPassThrough::class
);
```

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
