# # Sms

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**to** | **string** | E.164 representation of the phone number to which the message will be sent. Must be within FreeClimb&#39;s service area and E.164 formatting (e.g., +18003608245). |
**from** | **string** | E.164 representation of the phone number to use as the sender. This must be an incoming phone number you have purchased from FreeClimb. |
**text** | **string** | Text contained in the message (maximum 160 characters). |
**notification_url** | **string** | When the message changes status, this URL will be invoked using HTTP POST with the messageStatus parameters. This is a notification only; any PerCL returned will be ignored. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
