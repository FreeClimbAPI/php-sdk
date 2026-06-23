# # TTSEngine

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | [**\FreeClimb\Api\Model\TTSEngineName**](TTSEngineName.md) |  | [optional]
**parameters** | **array<string,mixed>** | Parameters for the TTS engine. The parameters are specific to the engine and are documented in the engine&#39;s documentation. | [optional]

## Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$json = <<<'JSON'
{
  "name": "freeclimb.standard"
}
JSON;

// create an instance of TTSEngine from a JSON string
$tts_engine = \FreeClimb\Api\ObjectSerializer::deserialize(
    json_decode($json),
    \FreeClimb\Api\Model\TTSEngine::class
);
```

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
