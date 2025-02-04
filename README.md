# Qwen AI PHP SDK

A PHP package to interact with the Qwen AI API for text generation, web search, image generation, and video generation.

[![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)

## Table of Contents

- [Installation](#installation)
- [Usage](#usage)
  - [Text Generation](#text-generation)
  - [Web Search](#web-search)
  - [Image Generation](#image-generation)
  - [Video Generation](#video-generation)
- [License](#license)

---

## Installation

Install the package via Composer:

```bash
composer require azozzalfiras/qwen-ai
```

## Usage
### Text Generation
Generate text using the Qwen AI API.

```php
<?php

require 'vendor/autoload.php';

use QwenAI\QwenAI;

// Get the API token from the DashScope Console: https://dashscope.console.aliyun.com/
// Follow these steps:
// 1. Log in to your Alibaba Cloud account.
// 2. Navigate to the "API Keys" section in the DashScope Console.
// 3. Generate a new API key and paste it below.
$apiToken = 'your_api_token_here';
$qwen = new QwenAI($apiToken);

// Generate text
$textResponse = $qwen->text()->generate("Explain quantum mechanics.");
print_r($textResponse);
```

## Web Search
Perform a web search using the Qwen AI API.
```php
<?php

require 'vendor/autoload.php';

use QwenAI\QwenAI;

$apiToken = 'your_api_token_here';
$qwen = new QwenAI($apiToken);

// Perform a web search
$searchResponse = $qwen->webSearch()->search("Latest AI research");
print_r($searchResponse);
```

## Image Generation
Generate an image using the Qwen AI API.

```php
<?php

require 'vendor/autoload.php';

use QwenAI\QwenAI;

$apiToken = 'your_api_token_here';
$qwen = new QwenAI($apiToken);

// Generate an image
$imageResponse = $qwen->image()->generate("A futuristic cityscape");
print_r($imageResponse);
```

## Video Generation
Generate a video using the Qwen AI API.

```php
<?php

require 'vendor/autoload.php';

use QwenAI\QwenAI;

$apiToken = 'your_api_token_here';
$qwen = new QwenAI($apiToken);

// Generate a video
$videoResponse = $qwen->video()->generate("A time-lapse of a sunrise");
print_r($videoResponse);
```

## License


MIT License

Copyright (c) 2025 Azozz ALFiras

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
