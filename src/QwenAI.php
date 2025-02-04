<?php

namespace QwenAI;

use QwenAI\TextGeneration;
use QwenAI\WebSearch;
use QwenAI\ImageGeneration;
use QwenAI\VideoGeneration;

class QwenAI
{
    private $apiToken;

    public function __construct(string $apiToken)
    {
        $this->apiToken = $apiToken;
    }

    /**
     * Get an instance of the TextGeneration handler.
     */
    public function text(): TextGeneration
    {
        return new TextGeneration($this->apiToken);
    }

    /**
     * Get an instance of the WebSearch handler.
     */
    public function webSearch(): WebSearch
    {
        return new WebSearch($this->apiToken);
    }

    /**
     * Get an instance of the ImageGeneration handler.
     */
    public function image(): ImageGeneration
    {
        return new ImageGeneration($this->apiToken);
    }

    /**
     * Get an instance of the VideoGeneration handler.
     */
    public function video(): VideoGeneration
    {
        return new VideoGeneration($this->apiToken);
    }
}