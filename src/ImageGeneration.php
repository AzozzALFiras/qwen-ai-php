<?php

namespace QwenAI;

class ImageGeneration
{
    private $apiToken;

    public function __construct(string $apiToken)
    {
        $this->apiToken = $apiToken;
    }

    /**
     * Generate an image using the Qwen API.
     */
    public function generate(string $prompt): array
    {
        $apiUrl = 'https://dashscope.aliyuncs.com/api/v1/services/image/generation'; // Example URL
        $data = [
            "prompt" => $prompt
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