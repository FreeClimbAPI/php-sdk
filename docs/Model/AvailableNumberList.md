# # AvailableNumberList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**total** | **int** | Total amount of requested resource. | [optional]
**start** | **int** | Resource index at start of current page | [optional]
**end** | **int** | Resource index at end of current page | [optional]
**page** | **int** | Current page | [optional]
**num_pages** | **int** | Total number of pages | [optional]
**page_size** | **int** | Number of items per page | [optional]
**next_page_uri** | **string** | Uri to retrieve the next page of items | [optional]
**available_phone_numbers** | [**\FreeClimb\Api\Model\AvailableNumber[]**](AvailableNumber.md) |  | [optional]

## Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$json = <<<'JSON'
{
  "total": 0,
  "start": 0,
  "end": 0,
  "page": 0,
  "numPages": 0,
  "pageSize": 0,
  "nextPageUri": "string",
  "availablePhoneNumbers": [
    {
      "capabilities": {
        "voice": false,
        "sms": false,
        "tollFree": false,
        "tenDLC": false,
        "shortCode": false
      },
      "campaignId": "string",
      "phoneNumber": "string",
      "alias": "string",
      "region": "string",
      "country": "string"
    }
  ]
}
JSON;

// create an instance of AvailableNumberList from a JSON string
$available_number_list = \FreeClimb\Api\ObjectSerializer::deserialize(
    json_decode($json),
    \FreeClimb\Api\Model\AvailableNumberList::class
);
```

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
