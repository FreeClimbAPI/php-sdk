# # SMSTenDLCBrand

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | ID of the account that created this Queue. | [optional]
**entity_type** | [**\FreeClimb\Api\Model\SMSTenDLCBrandEntityType**](SMSTenDLCBrandEntityType.md) |  |
**csp_id** | **string** | Unique identifier assigned to the csp by the registry. | [optional] [readonly]
**brand_id** | **string** | Unique identifier assigned to the brand by the registry. | [optional] [readonly]
**first_name** | **string** | First or given name. | [optional]
**last_name** | **string** | Last or Surname. | [optional]
**display_name** | **string** | Display or marketing name of the brand. |
**company_name** | **string** | (Required for Non-profit/private/public) Legal company name. | [optional]
**ein** | **string** | (Required for Non-profit) Government assigned corporate tax ID. EIN is 9-digits in U.S. | [optional]
**ein_issuing_country** | **string** | ISO2 2 characters country code. Example: US - United States | [optional]
**phone** | **string** | Valid phone number in e.164 international format. |
**street** | **string** | Street number and name. | [optional]
**city** | **string** | City name | [optional]
**state** | **string** | State. Must be 2 letters code for United States. | [optional]
**postal_code** | **string** | Postal codes. Use 5 digit zipcode for United States | [optional]
**country** | **string** | ISO2 2 characters country code. Example: US - United States |
**email** | **string** | Valid email address of brand support contact. |
**stock_symbol** | **string** | (Required for public company) stock symbol. | [optional]
**stock_exchange** | [**\FreeClimb\Api\Model\SMSTenDLCBrandStockExchange**](SMSTenDLCBrandStockExchange.md) |  | [optional]
**ip_address** | **string** | IP address of the browser requesting to create brand identity. | [optional]
**website** | **string** | Brand website URL. | [optional]
**brand_relationship** | [**\FreeClimb\Api\Model\SMSTenDLCBrandRelationship**](SMSTenDLCBrandRelationship.md) |  |
**vertical** | **string** | Vertical or industry segment of the brand. |
**alt_business_id** | **string** | Alternate business identifier such as DUNS, LEI, or GIIN | [optional]
**alt_business_id_type** | [**\FreeClimb\Api\Model\SMSTenDLCBrandAltBusinessIdType**](SMSTenDLCBrandAltBusinessIdType.md) |  | [optional]
**universal_ein** | **string** | Universal EIN of Brand, Read Only. | [optional] [readonly]
**reference_id** | **string** | Caller supplied brand reference ID. If supplied, the value must be unique across all submitted brands. Can be used to prevent duplicate brand registrations. | [optional]
**optional_attributes** | **array<string,mixed>** | Optional brand attributes. Please refer to GET /enum/optionalAttributeNames for dictionary of optional attribute names. | [optional]
**mock** | **bool** | Test brand. |
**identity_status** | [**\FreeClimb\Api\Model\SMSTenDLCBrandIdentityStatus**](SMSTenDLCBrandIdentityStatus.md) |  |
**create_date** | **\DateTime** | Unix timestamp when brand was created. | [optional]

## Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$json = <<<'JSON'
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
JSON;

// create an instance of SMSTenDLCBrand from a JSON string
$sms_ten_dlc_brand = \FreeClimb\Api\ObjectSerializer::deserialize(
    json_decode($json),
    \FreeClimb\Api\Model\SMSTenDLCBrand::class
);
```

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
