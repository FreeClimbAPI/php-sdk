# # BuyIncomingNumberRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**phone_number** | **string** | Phone number to purchase in E.164 format (as returned in the list of Available Phone Numbers). |
**alias** | **string** | Description for this new incoming phone number (max 64 characters). | [optional]
**application_id** | **string** | ID of the application that should handle phone calls to the number. | [optional]

## Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$json = <<<'JSON'
{
  "phoneNumber": "+12025551234",
  "alias": "Main Office Line",
  "applicationId": "AP0123456789abcdefABCDEF0123456789abcdef03"
}
JSON;

// create an instance of BuyIncomingNumberRequest from a JSON string
$buy_incoming_number_request = \FreeClimb\Api\ObjectSerializer::deserialize(
    json_decode($json),
    \FreeClimb\Api\Model\BuyIncomingNumberRequest::class
);
```

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
