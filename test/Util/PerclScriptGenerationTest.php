<?php
namespace FreeClimb\Api\Test\Util;

use PHPUnit\Framework\TestCase;

class PerclScriptGenerationTest extends TestCase
{
    public function testPerCLScript()
    {
        $script = new \FreeClimb\Api\Model\PerclScript();
        $say = new \FreeClimb\Api\Model\Say();
        $say->setText("Hello, World!");
        $getSpeech = new \FreeClimb\Api\Model\GetSpeech();
        $getSpeech->setActionUrl("https://example.com/update");
        $getSpeech->setPrompts(array($say));
        $script->setCommands(array($say, $getSpeech));
        $perclString = $script->toJSON();
        $this->assertEquals("[{\"Say\":{\"text\":\"Hello, World!\",\"loop\":1}},{\"GetSpeech\":{\"actionUrl\":\"https://example.com/update\",\"prompts\":[{\"Say\":{\"text\":\"Hello, World!\",\"loop\":1}}]}}]", $perclString);
    }
}