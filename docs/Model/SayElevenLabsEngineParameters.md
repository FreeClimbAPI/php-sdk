# # SayElevenLabsEngineParameters

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**model_id** | **string** | The ID of the ElevenLabs model to use for the TTS. The complete list of valid values for the model_id attribute is shown below. | [optional] [default to 'eleven_turbo_v2_5']
**voice_id** | **string** | The ID of the ElevenLabs voice to use for the TTS. The complete list of valid values for the voice_id attribute is shown below. | [optional]
**language_code** | **string** | The language code to use for the TTS. The complete list of valid values for the language_code attribute is shown below. | [optional] [default to 'en']
**voice_settings** | [**\FreeClimb\Api\Model\SayElevenLabsEngineParametersVoiceSettings**](SayElevenLabsEngineParametersVoiceSettings.md) |  | [optional]
**pronunciation_dictionary** | [**\FreeClimb\Api\Model\SayElevenLabsEngineParametersPronunciationDictionaryInner[]**](SayElevenLabsEngineParametersPronunciationDictionaryInner.md) |  | [optional]
**seed** | **int** |  | [optional]
**previous_text** | **string** |  | [optional]
**next_text** | **string** |  | [optional]
**previous_request_ids** | **string[]** |  | [optional]
**next_request_ids** | **string[]** |  | [optional]
**apply_language_text_normalization** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
