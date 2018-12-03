<?php // callback.php
define("CHANNEL_SECRET", 'dcd4d682871e3013f2fe9f0cd14a3b0c');
define("CHANNEL_TOKEN",
    'oPJj2g+gPNOvLAtQz0CWyY6dkj/lIw86ZB2MtqPoWp5jN0EZDF4tXiIdR32FbpGYGQPvI6Wtxg0IwBPEyzUMyeVJdhhCyZo1cP1z+HQ/UV+9fHbbsUrueMZqrzMYkMNNuxoDTJXKWzM1PY6LurByvwdB04t89/1O/w1cDnyilFU=');
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

$client = new LINEBotTiny(CHANNEL_TOKEN, CHANNEL_SECRET);
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
