<?php

namespace QwenAI;

class TextGeneration
{
    private $apiToken;

    public function __construct(string $apiToken)
    {
        $this->apiToken = $apiToken;
    }

    /**
     * Generate text using the Qwen API.
     */
    public function generate(string $prompt, int $maxTokens = 100, float $temperature = 0.7): array
    {
        $apiUrl = 'https://dashscope.aliyuncs.com/api/v1/services/aigc/text-generation/generation';
        $data = [
            "model" => "qwen2.5-max",
            "input" => [
                "prompt" => $prompt
            ],
            "parameters" => [
                "max_tokens" => $maxTokens,
                "temperature" => $temperature
            ]
        ];

        return $this->sendRequest($apiUrl, $data);
    }

    /**
     * Send a cURL request to the API.
     */
    private function sendRequest(string $url, array $data): array
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Authorization: Bearer ' . $this->apiToken
        ]);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            throw new \Exception('cURL Error: ' . curl_error($ch));
        }

        curl_close($ch);

        return json_decode($response, true);
    }
}