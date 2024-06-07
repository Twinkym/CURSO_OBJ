<?php

if(isset($_GET['prompt']) && $_GET['prompt'] != "") {
    $prompt = $_GET['prompt'];
    
    $api_key = "YOUR_API_KEY";

    $data = [
        "prompt" => $prompt,
        "model" => "text-davinci-003",
        "max_tokens" => 100
    ];

    $ch = curl_init('https://api.openai.com/v1/engines/davinci-codex/completions');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($daata));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Authorization: Bearer ' . $api_key
    ]);

    $response = curl_exec($ch);
    curl_close($ch);

    $response = json_decode($response, true);

    if(isset($response_data['choices'][0]['text'])) {
        echo '<pre>' . htmlspecailchars($response_data['choices'][0]['text']) . '</pre>';
    } else {
        echo '<pre>' . htmlspecailchars($response_data['error']['message']) . '</pre>';
    }
} else {
        echo '<pre>' . htmlspecialchars($response_data['error']['No prompt provided']) . '</pre>';
}
?>

