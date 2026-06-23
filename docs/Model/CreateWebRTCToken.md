# # CreateWebRTCToken

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**to** | **string** | E.164 formatted phone number to which calls using this token will be made. |
**from** | **string** | E.164 formatted phone number owned by the reqeusting account from which calls using this token will be made. |
**uses** | **int** | number of times this token may be used for a WebRTC call |

## Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$json = <<<'JSON'
{
  "to": "string",
  "from": "string",
  "uses": 0
}
JSON;

// create an instance of CreateWebRTCToken from a JSON string
$create_web_rtc_token = \FreeClimb\Api\ObjectSerializer::deserialize(
    json_decode($json),
    \FreeClimb\Api\Model\CreateWebRTCToken::class
);
```

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
