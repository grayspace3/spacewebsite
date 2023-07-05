<?php
function chat($question)
{
    $apiKey = "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";
    $url = 'https://api.openai.com/v1/chat/completions';

    $headers = array(
        "Authorization: Bearer {$apiKey}",
        // "OpenAI-Organization: YOUR-ORG-STRING",
        "Content-Type: application/json"
    );

    // Define messages
    $messages = array();
    $message = array();
    $message["role"] = "user";
    $message["content"] = $question;
    $messages[] = $message;

    // Define data
    $data = array();
    $data["model"] = "gpt-3.5-turbo";
    $data["messages"] = $messages;
    $data["max_tokens"] = 500;

    // init curl
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($curl);
    if (curl_errno($curl)) {
        // echo 'Error:' . curl_error($curl);
        return false;
    } else {
        $obj = json_decode($result);
        $text = $obj->choices[0]->message->content;
        // var_dump($text);
        // var_dump($obj);
        return $text;
    }

    curl_close($curl);
}

// echo chat("how many stars in the universe?");