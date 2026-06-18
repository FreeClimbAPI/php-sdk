# # SMSTenDLCCampaignsListResult

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
**campaigns** | [**\FreeClimb\Api\Model\SMSTenDLCCampaign[]**](SMSTenDLCCampaign.md) |  | [optional]

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
  "campaigns": [
    {
      "campaignId": "CX56XX4",
      "accountId": "AC0123456789abcdefABCDEF0123456789abcdef05",
      "cspId": "SX56XX4",
      "brandId": "BX56XX4",
      "usecase": "2FA",
      "description": "mock campaign.",
      "subUsecases": [],
      "resellerId": null,
      "sample1": "Your verification code from FreeClimb is 000000. It expires in 10 minutes.",
      "sample2": null,
      "sample3": null,
      "sample4": null,
      "sample5": null,
      "messageFlow": null,
      "helpMessage": null,
      "referenceId": null,
      "status": "EXPIRED",
      "mock": true,
      "autoRenewal": false,
      "embeddedLink": false,
      "embeddedPhone": false,
      "affiliateMarketing": false,
      "numberPool": false,
      "ageGated": false,
      "directLending": false,
      "subscriberOptin": true,
      "subscriberOptout": false,
      "subscriberHelp": true,
      "createDate": "2022-07-05T15:17:05Z",
      "billedDate": "2022-07-05T00:00:00Z",
      "nextRenewalOrExpirationDate": null
    }
  ]
}
JSON;

// create an instance of SMSTenDLCCampaignsListResult from a JSON string
$sms_ten_dlc_campaigns_list_result = \FreeClimb\Api\ObjectSerializer::deserialize(
    json_decode($json),
    \FreeClimb\Api\Model\SMSTenDLCCampaignsListResult::class
);
```

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
