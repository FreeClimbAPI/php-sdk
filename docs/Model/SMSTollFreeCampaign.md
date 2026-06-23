# # SMSTollFreeCampaign

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | ID of the account that created this toll-free campaign |
**campaign_id** | **string** | Alphanumeric identifier used by the platform to identify this toll-free campaign |
**use_case** | **string** |  |
**registration_status** | [**\FreeClimb\Api\Model\SMSTollFreeCampaignRegistrationStatus**](SMSTollFreeCampaignRegistrationStatus.md) |  |
**date_created** | **string** |  |
**date_updated** | **string** |  |
**revision** | **int** |  |

## Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$json = <<<'JSON'
{
  "accountId": "string",
  "campaignId": "string",
  "useCase": "string",
  "registrationStatus": "UNREGISTERED",
  "dateCreated": "string",
  "dateUpdated": "string",
  "revision": 0
}
JSON;

// create an instance of SMSTollFreeCampaign from a JSON string
$sms_toll_free_campaign = \FreeClimb\Api\ObjectSerializer::deserialize(
    json_decode($json),
    \FreeClimb\Api\Model\SMSTollFreeCampaign::class
);
```

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
