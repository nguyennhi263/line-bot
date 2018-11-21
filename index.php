<?php // callback.php
define("LINE_MESSAGING_API_CHANNEL_SECRET", 'dcd4d682871e3013f2fe9f0cd14a3b0c');
define("LINE_MESSAGING_API_CHANNEL_TOKEN",
    'oPJj2g+gPNOvLAtQz0CWyY6dkj/lIw86ZB2MtqPoWp5jN0EZDF4tXiIdR32FbpGYGQPvI6Wtxg0IwBPEyzUMyeVJdhhCyZo1cP1z+HQ/UV+9fHbbsUrueMZqrzMYkMNNuxoDTJXKWzM1PY6LurByvwdB04t89/1O/w1cDnyilFU=');

require __DIR__."/vendor/autoload.php";
require_once (__DIR__.'/vendor /linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php');
$client = new LINEBotTiny('oPJj2g+gPNOvLAtQz0CWyY6dkj/lIw86ZB2MtqPoWp5jN0EZDF4tXiIdR32FbpGYGQPvI6Wtxg0IwBPEyzUMyeVJdhhCyZo1cP1z+HQ/UV+9fHbbsUrueMZqrzMYkMNNuxoDTJXKWzM1PY6LurByvwdB04t89/1O/w1cDnyilFU=',
    'dcd4d682871e3013f2fe9f0cd14a3b0c');
foreach ($client->parseEvents() as $event) {
    switch ($event['type']) {
        case 'message':
            $message = $event['message'];
            switch ($message['type']) {
                case 'text':
                    $request = $message['text'];
                    /** get key words from request
                     * then remove kanji , etc */
                    //$model_nm = Logic::validateTextSearch($request);
                    $model_nm = $request;
                    $client->replyMessage(getText($event,$model_nm));
            }
    }
}
function getText($event, $text){
    return array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'text',
                'text' => $text
            )
        )
    );
}