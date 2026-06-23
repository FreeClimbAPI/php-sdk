# # TFNCampaign

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | ID of the account that created this participant. |
**campaign_id** | **string** | TFNCampaignId |
**use_case** | **string** |  |
**registration_status** | [**\FreeClimb\Api\Model\SMSTollFreeCampaignRegistrationStatus**](SMSTollFreeCampaignRegistrationStatus.md) |  |
**date_created** | **string** |  |
**date_updated** | **string** |  |
**date_created_iso** | **string** |  |
**date_updated_iso** | **string** |  |
**revision** | **int** |  |

## Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$json = <<<'JSON'
{
  "accountId": "string",
  "campaignId": "cmptfn_387ec3f6e03b340553f35f29c8f118cdf3eae08a",
  "useCase": "string",
  "registrationStatus": "UNREGISTERED",
  "dateCreated": "string",
  "dateUpdated": "string",
  "dateCreatedISO": "string",
  "dateUpdatedISO": "string",
  "revision": 0
}
JSON;

// create an instance of TFNCampaign from a JSON string
$tfn_campaign = \FreeClimb\Api\ObjectSerializer::deserialize(
    json_decode($json),
    \FreeClimb\Api\Model\TFNCampaign::class
);
```

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
