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

function messageContent2($event, $text){
    return [
        'replyToken' => $event['replyToken'],
        'messages' => [
            $text
        ]
    ];
}

$body = array (
    'type' => 'flex',
    'altText' => 'Example buttons template',
    'contents' =>
        array (
            'type' => 'bubble',
            'styles' =>
                array (
                    'footer' =>
                        array (
                            'separator' => true,
                        ),
                ),
            'body' =>
                array (
                    'type' => 'box',
                    'layout' => 'vertical',
                    'contents' =>
                        array (
                            0 =>
                                array (
                                    'type' => 'text',
                                    'text' => 'Miraina Tower, 4-1-6 Shinjuku, Tokyo',
                                    'weight' => 'bold',
                                    'color' => '#1DB446',
                                    'size' => 'sm',
                                ),
                            1 =>
                                array (
                                    'type' => 'text',
                                    'text' => 'Brown Store',
                                    'weight' => 'bold',
                                    'margin' => 'md',
                                    'size' => 'xxl',
                                ),
                            2 =>
                                array (
                                    'type' => 'separator',
                                    'margin' => 'xxl',
                                ),
                            3 =>
                                array (
                                    'type' => 'box',
                                    'layout' => 'vertical',
                                    'margin' => 'xxl',
                                    'spacing' => 'sm',
                                    'contents' =>
                                        array (
                                            0 =>
                                                array (
                                                    'type' => 'box',
                                                    'layout' => 'horizontal',
                                                    'contents' =>
                                                        array (
                                                            0 =>
                                                                array (
                                                                    'type' => 'text',
                                                                    'text' => 'Miraina Tower, 4-1-6 Shinjuku, Tokyo',
                                                                    'size' => 'xs',
                                                                    'color' => '#aaaaaa',
                                                                    'wrap' => true,
                                                                    'flex' => 0,
                                                                ),
                                                        ),
                                                ),
                                            1 =>
                                                array (
                                                    'type' => 'separator',
                                                    'margin' => 'xxl',
                                                ),
                                            2 =>
                                                array (
                                                    'type' => 'box',
                                                    'layout' => 'horizontal',
                                                    'margin' => 'xxl',
                                                    'contents' =>
                                                        array (
                                                            0 =>
                                                                array (
                                                                    'type' => 'text',
                                                                    'text' => 'ITEMS',
                                                                    'size' => 'sm',
                                                                    'color' => '#555555',
                                                                ),
                                                            1 =>
                                                                array (
                                                                    'type' => 'text',
                                                                    'text' => '3',
                                                                    'size' => 'sm',
                                                                    'color' => '#111111',
                                                                    'align' => 'end',
                                                                ),
                                                        ),
                                                ),
                                        ),
                                ),
                        ),
                ),
        ),
);

$item = array (
            'type' => 'bubble',
            'styles' =>
                array (
                    'footer' =>
                        array (
                            'separator' => true,
                        ),
                ),
            'body' =>
                array (
                    'type' => 'box',
                    'layout' => 'vertical',
                    'contents' =>
                        array (
                            0 =>
                                array (
                                    'type' => 'text',
                                    'text' => 'Miraina Tower, 4-1-6 Shinjuku, Tokyo',
                                    'weight' => 'bold',
                                    'color' => '#1DB446',
                                    'size' => 'sm',
                                ),
                            1 =>
                                array (
                                    'type' => 'text',
                                    'text' => 'Brown Store',
                                    'weight' => 'bold',
                                    'margin' => 'md',
                                    'size' => 'xxl',
                                ),
                            2 =>
                                array (
                                    'type' => 'separator',
                                    'margin' => 'xxl',
                                ),
                            3 =>
                                array (
                                    'type' => 'box',
                                    'layout' => 'vertical',
                                    'margin' => 'xxl',
                                    'spacing' => 'sm',
                                    'contents' =>
                                        array (
                                            0 =>
                                                array (
                                                    'type' => 'box',
                                                    'layout' => 'horizontal',
                                                    'contents' =>
                                                        array (
                                                            0 =>
                                                                array (
                                                                    'type' => 'text',
                                                                    'text' => 'Miraina Tower, 4-1-6 Shinjuku, Tokyo',
                                                                    'size' => 'xs',
                                                                    'color' => '#aaaaaa',
                                                                    'wrap' => true,
                                                                    'flex' => 0,
                                                                ),
                                                        ),
                                                ),
                                            1 =>
                                                array (
                                                    'type' => 'separator',
                                                    'margin' => 'xxl',
                                                ),
                                            2 =>
                                                array (
                                                    'type' => 'box',
                                                    'layout' => 'horizontal',
                                                    'margin' => 'xxl',
                                                    'contents' =>
                                                        array (
                                                            0 =>
                                                                array (
                                                                    'type' => 'text',
                                                                    'text' => 'ITEMS',
                                                                    'size' => 'sm',
                                                                    'color' => '#555555',
                                                                ),
                                                            1 =>
                                                                array (
                                                                    'type' => 'text',
                                                                    'text' => '3',
                                                                    'size' => 'sm',
                                                                    'color' => '#111111',
                                                                    'align' => 'end',
                                                                ),
                                                        ),
                                                ),
                                        ),
                                ),
                        ),
                ),
);

$carousel = array(
    "type" => "carousel",
    "contents"=> [
        $item,
        $item
    ]
);

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
                    $client->replyMessage(messageContent2($event,$carousel));
                    break;
            }
    }
}
