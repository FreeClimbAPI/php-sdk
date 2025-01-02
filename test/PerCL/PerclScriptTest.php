<?php

namespace FreeClimb\Api\Test\PerCL;

use PHPUnit\Framework\TestCase;

class PerclScriptTest extends TestCase
{
    public function testPerCLScript()
    {
        $script = new \FreeClimb\Api\Model\PerclScript();
        $say = new \FreeClimb\Api\Model\Say();
        $say->setText("Hello, World!");
        $getSpeech = new \FreeClimb\Api\Model\GetSpeech();
        $getSpeech->setActionUrl("https://example.com/update");
        $getSpeech->setPrompts([$say]);
        $script->setCommands([$say, $getSpeech]);
        $perclString = $script->toJSON();
        $this->assertEquals("[{\"Say\":{\"text\":\"Hello, World!\",\"loop\":1}},{\"GetSpeech\":{\"actionUrl\":\"https://example.com/update\",\"prompts\":[{\"Say\":{\"text\":\"Hello, World!\",\"loop\":1}}]}}]", $perclString);
    }
}