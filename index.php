<?php // callback.php
define("CHANNEL_SECRET", '4f58ede53c177b91a366fadaae13e654');
define("CHANNEL_TOKEN",
    'SZIEjPPziAyMs8r+Pryeb9VhEDRfWxuNOjf27oF8uJezGPG75FQ2nKZJLimAIM3LdEDgCK7XV/HvlrUzb6eFb9dOZOVtkkraJ+OTJd5qkavWLAX0ZxXAOgnzXY9ulefLOKce4g4db09Qxy7i41NA/wdB04t89/1O/w1cDnyilFU=');
define('MENU_ID','richmenu-62b3fa1c49c51feef6ea4548a100e40f');
require __DIR__."/vendor/autoload.php";
require_once (__DIR__.'/vendor/linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php');

function messageContent($event, $text){
    return [
        'replyToken' => $event['replyToken'],
        'messages' => [
            [
                'type' => 'text',
                'text' => $text
            ]
        ]
    ];
}

$client = new LINEBotTiny(LINE_MESSAGING_API_CHANNEL_TOKEN, LINE_MESSAGING_API_CHANNEL_SECRET);
foreach ($client->parseEvents() as $event) {
    /** get user id */
    $userId = $event['source']['userId'];
    error_log('User_ID: '.$userId);
    switch ($event['type']) {
        case 'message':
            $message = $event['message'];
            switch ($message['type']) {
                case 'text':
                    $request = $message['text'];
                    $model_nm = $request;
                    error_log(implode(' / ', $event), 0);
                    $client->replyMessage(messageContent($event,$model_nm));
                    break;
            }
    }
}
