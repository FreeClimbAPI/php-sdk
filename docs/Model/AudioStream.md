# # AudioStream

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**location** | **string** | The gRPC server location that will receive the grpc stream as a uri and must be port 80 or 443. |
**action_url** | **string** | A request is made to this URL when the gRPC session is concluded. The PerCL script returned in response to the actionUrl will be executed on the call. | [optional]
**content_type** | **string** | The type and sample rate of the audio being received over the channel must match the environmental sample rate. | [optional]
**meta_data** | **string[]** | An arbitrary array of strings passed through FC to the GRPC server can be used to pass state or other information about the call. | [optional]
**privacy_mode** | **bool** | Enables audio redaction with full call recording while gRPC session is running and blocks logging of any DTMFs received by FreeClimb. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
