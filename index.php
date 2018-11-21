<?php // callback.php
require "vendor / autoload.php";
require_once ('vendor / linecorp / line-bot-sdk / line-bot-sdk-tiny / LINEBotTiny.php');
$access_token = 'oPJj2g+gPNOvLAtQz0CWyY6dkj/lIw86ZB2MtqPoWp5jN0EZDF4tXiIdR32FbpGYGQPvI6Wtxg0IwBPEyzUMyeVJdhhCyZo1cP1z+HQ/UV+9fHbbsUrueMZqrzMYkMNNuxoDTJXKWzM1PY6LurByvwdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents ('php: // input');
// Parse JSON
$events = json_decode ($content, true);
// Validate parsed JSON data
if (! Is_null ($events ['events'])) {
// Loop through each event
    foreach ($events ['events'] as $event) {
// Reply only when message is in 'text'
        $event ['type'] == 'message' && $event ['message'] ['type'] == 'text';
// Get text sent
        $text = $event ['source'] ['userId'];
// Get replyToken
        $replyToken = $event ['replyToken'];
// Build message to reply back
        $messages = [
            'type' => 'text',
            'text' => $text
        ];
// Make a POST Request for Messaging API to reply to sender
        $url = 'https://api.line.me/v2/bot/message/reply';
        $data = [
            'replyToken' => $replyToken,
            'messages' => [$messages]
        ];
        $post = json_encode($data);
        $headers = array('Content-Type: application / json', 'Authorization: Bearer' . $access_token);
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        $result = curl_exec($ch);
        curl_close($ch);
        echo $result . "\ r \ n";
    }
}
echo "OK";
?>