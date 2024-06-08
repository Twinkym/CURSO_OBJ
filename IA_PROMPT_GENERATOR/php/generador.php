<?php

if (isset($_GET['prompt']) && $_GET['prompt'] != "") {
    $prompt = $_GET['prompt'];
    
    $api_key = "sk-generator-YawXrGuzYr8Ecr3UBtPvT3BlbkFJYOErHuhLL1xa33wuBkfZ";

    $data = [
        "model" => "gpt-3.5-turbo",
        "messages" => [
            ["role" => "system", "content" => "You are a helpful assistant."],
            ["role" => "user", "content" => $prompt]
        ],
        "max_tokens" => 100,
    ];

    $ch = curl_init('https://api.openai.com/v1/chat/completions');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Authorization: Bearer ' . $api_key,
    ]);

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        echo 'Error: ' . curl_error($ch);
    } else {
        $response_data = json_decode($response, true);
        if (json_last_error() === JSON_ERROR_NONE) {
            if (isset($response_data['choices'][0]['message']['content'])) {
                echo '<pre>' . htmlspecialchars($response_data['choices'][0]['message']['content']) . '</pre>';
            } else {
                if (isset($response_data['error'])) {
                    echo '<pre>' . htmlspecialchars($response_data['error']['message']) . '</pre>';
                } else {
                    echo 'Error generating prompt: No text returned in response.';
                }
            }
        } else {
            echo 'Error decoding JSON response: ' . json_last_error_msg();
        }
    }

    curl_close($ch);
} else {
    echo 'No prompt provided';
}
?>
