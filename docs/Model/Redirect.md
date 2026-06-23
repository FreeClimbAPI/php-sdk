# # Redirect

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**action_url** | **string** | URL to request a new PerCL script to continue with the current Call&#39;s processing. When &#x60;Redirect&#x60; invokes the &#x60;actionUrl&#x60;, an &#x60;inbound&#x60; Webhook is sent. This request therefore looks identical to the initial request (made to the &#x60;voiceUrl&#x60; of the number that was called) for an inbound Call. |

## Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$json = <<<'JSON'
{
  "command": "Redirect",
  "actionUrl": "https://www.example.com"
}
JSON;

// create an instance of Redirect from a JSON string
$redirect = \FreeClimb\Api\ObjectSerializer::deserialize(
    json_decode($json),
    \FreeClimb\Api\Model\Redirect::class
);
```

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
