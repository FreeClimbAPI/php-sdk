# # CompletionResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**response** | **string** | The generative response from the KnowledgeBase |
**status** | [**\FreeClimb\Api\Model\CompletionResultStatus**](CompletionResultStatus.md) |  |

## Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$json = <<<'JSON'
{
  "response": "string",
  "status": "success"
}
JSON;

// create an instance of CompletionResult from a JSON string
$completion_result = \FreeClimb\Api\ObjectSerializer::deserialize(
    json_decode($json),
    \FreeClimb\Api\Model\CompletionResult::class
);
```

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
