# # SMSTenDLCBrandsListResult

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
**brands** | [**\FreeClimb\Api\Model\SMSTenDLCBrand[]**](SMSTenDLCBrand.md) |  | [optional]

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
  "brands": [
    {
      "mock": true,
      "optionalAttributes": {},
      "accountId": "AC0123456789abcdefABCDEF0123456789abcdef06",
      "brandId": "BVCEBIJ",
      "cspId": "SKGC6G0",
      "firstName": "",
      "lastName": "",
      "displayName": "FreeClimb LLC(mock)",
      "companyName": "FreeClimb LLC",
      "ein": "843793747",
      "einIssuingCountry": "US",
      "phone": "+18475722071",
      "street": "570 Lake Cook Rd Ste 400",
      "city": "Deerfield",
      "state": "IL",
      "postalCode": "60015",
      "country": "US",
      "email": "bmabry@vailsys.com",
      "stockSymbol": "",
      "stockExchange": "NASDAQ",
      "ipAddress": "127.0.0.1",
      "website": "https://www.freeclimb.com/",
      "vertical": "TECHNOLOGY",
      "universalEin": "US_843793747",
      "referenceId": "ACdeadbeef",
      "entityType": "PRIVATE_PROFIT",
      "brandRelationship": "SMALL_ACCOUNT",
      "identityStatus": "VERIFIED",
      "createDate": "2022-07-01T20:29:23Z"
    }
  ]
}
JSON;

// create an instance of SMSTenDLCBrandsListResult from a JSON string
$sms_ten_dlc_brands_list_result = \FreeClimb\Api\ObjectSerializer::deserialize(
    json_decode($json),
    \FreeClimb\Api\Model\SMSTenDLCBrandsListResult::class
);
```

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
