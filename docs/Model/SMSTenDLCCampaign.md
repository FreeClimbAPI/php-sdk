# # SMSTenDLCCampaign

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | ID of the account that created this Queue. | [optional]
**campaign_id** | **string** | Alphanumeric identifier assigned by the registry for a campaign. This identifier is required by the NetNumber OSR SMS enabling process of 10DLC. |
**csp_id** | **string** | Alphanumeric identifier of the CSP associated with this campaign. |
**reseller_id** | **string** | Alphanumeric identifier of the reseller that you want to associate with this campaign. | [optional]
**status** | **string** | Current campaign status. Possible values: ACTIVE, EXPIRED. A newly created campaign defaults to ACTIVE status. | [optional]
**create_date** | **\DateTime** | Unix timestamp when campaign was created. | [optional]
**auto_renewal** | **bool** | Campaign subscription auto-renewal status. | [optional]
**billed_date** | **\DateTime** | Campaign recent billed date. | [optional]
**brand_id** | **string** | Alphanumeric identifier of the brand associated with this campaign. |
**usecase** | **string** | Campaign usecase. Must be of defined valid types. Use &#x60;/registry/enum/usecase&#x60; operation to retrieve usecases available for given brand. |
**sub_usecases** | **string[]** | Campaign sub-usecases. Must be of defined valid sub-usecase types. Use &#x60;/registry/enum/usecase&#x60; operation to retrieve list of valid sub-usecases |
**description** | **string** | Summary description of this campaign. |
**embedded_link** | **bool** | Does message generated by the campaign include URL link in SMS? | [optional] [default to false]
**embedded_phone** | **bool** | Does message generated by the campaign include phone number in SMS? | [optional] [default to false]
**affiliate_marketing** | **bool** | Does message content controlled by affiliate marketing other than the brand? | [optional]
**number_pool** | **bool** | Does campaign utilize pool of phone nubers? | [optional] [default to false]
**age_gated** | **bool** | Age gated content in campaign. | [optional]
**direct_lending** | **bool** |  | [optional]
**subscriber_optin** | **bool** | Does campaign require subscriber to opt-in before SMS is sent to subscriber? | [optional] [default to false]
**subscriber_optout** | **bool** | Does campaign support subscriber opt-out keyword(s)? | [optional] [default to false]
**subscriber_help** | **bool** | Does campaign responds to help keyword(s)? | [optional] [default to false]
**sample1** | **string** | Message sample. Some campaign tiers require 1 or more message samples. | [optional]
**sample2** | **string** | Message sample. Some campaign tiers require 2 or more message samples. | [optional]
**sample3** | **string** | Message sample. Some campaign tiers require 3 or more message samples. | [optional]
**sample4** | **string** | Message sample. Some campaign tiers require 4 or more message samples. | [optional]
**sample5** | **string** | Message sample. Some campaign tiers require 5 or more message samples. | [optional]
**message_flow** | **string** | Message flow description. | [optional]
**help_message** | **string** | Help message of the campaign. | [optional]
**reference_id** | **string** | Caller supplied campaign reference ID. If supplied, the value must be unique across all submitted campaigns. Can be used to prevent duplicate campaign registrations. | [optional]
**mock** | **bool** | Campaign created from mock brand. Mocked campaign cannot be shared with an upstream CNP. |
**next_renewal_or_expiration_date** | **\DateTime** | When the campaign would be due for its next renew/bill date. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)