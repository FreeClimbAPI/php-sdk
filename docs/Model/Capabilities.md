# # Capabilities

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**voice** | **bool** | Indicates whether a number can be used for voice calls. Replaces voiceEnabled. |
**sms** | **bool** | Indicates whether a number can be used SMS messaging. Replaces smsEnabled. |
**toll_free** | **bool** | Indicates that a number is toll-free and will make toll-free calls, and when enabled, toll-free messages. |
**ten_dlc** | **bool** | Indicates that a number, if sms is true, will be used for 10DLC messaging |
**short_code** | **bool** | Indicates that a number is a short code and can be used for short code messaging |

## Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$json = <<<'JSON'
{
  "voice": false,
  "sms": false,
  "tollFree": false,
  "tenDLC": false,
  "shortCode": false
}
JSON;

// create an instance of Capabilities from a JSON string
$capabilities = \FreeClimb\Api\ObjectSerializer::deserialize(
    json_decode($json),
    \FreeClimb\Api\Model\Capabilities::class
);
```

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
