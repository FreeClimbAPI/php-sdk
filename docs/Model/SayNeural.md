# # SayNeural

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**text** | **string** | The message to be played to the caller using TTS. The size of the string is limited to 4 KB (or 4,096 bytes). An empty string will cause the command to be skipped. |
**loop** | **int** | Number of times the text is said. Specifying &#39;0&#39; causes the &#x60;SayNeural&#x60; action to loop until the Call is hung up. | [optional] [default to 1]
**privacy_mode** | **bool** | Parameter &#x60;privacyMode&#x60; will not log the &#x60;text&#x60; as required by PCI compliance. | [optional] [default to false]
**engine** | [**\FreeClimb\Api\Model\SayNeuralEngine**](SayNeuralEngine.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
