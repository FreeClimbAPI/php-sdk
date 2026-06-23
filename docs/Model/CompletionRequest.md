# # CompletionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**query** | **string** | Question to ask the Knowledge Base |

## Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$json = <<<'JSON'
{
  "query": "What are your business hours?"
}
JSON;

// create an instance of CompletionRequest from a JSON string
$completion_request = \FreeClimb\Api\ObjectSerializer::deserialize(
    json_decode($json),
    \FreeClimb\Api\Model\CompletionRequest::class
);
```

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
