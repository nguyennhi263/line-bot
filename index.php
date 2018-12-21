<?php // callback.php
define("CHANNEL_SECRET", '908d76b840a42e179b39ca6e5567b02f');
define("CHANNEL_TOKEN",
    'V5+Lhll0yWeFPAgwZ45hYgNRZHkC2o2iF7jMcA0sSIF5OSkabciDRbl9Xhz+p/qHGCU1lPrI5w5FDp1WE7NMKerOjFObwJZf8P7VLpR8bW+tEzoIfHtIOQVfYvu+61WzEubNYKgPunx4PmnnsXvw/wdB04t89/1O/w1cDnyilFU=');
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

$message_carousel = array (
    'type' => 'flex',
    'altText' => 'Example buttons template',
    'contents' => $carousel
);

$test_message = array (
    'type' => 'flex',
    'altText' => 'Example buttons template',
    'contents' =>
        array (
            'type' => 'carousel',
            'contents' =>
                array (
                    0 =>
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
                                                    'text' => '20円パチンコ',
                                                    'weight' => 'bold',
                                                    'color' => '#1DB446',
                                                    'size' => 'sm',
                                                ),
                                            1 =>
                                                array (
                                                    'type' => 'text',
                                                    'text' => '機種:20円スロット',
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
                                                                                    'text' => '検索条件',
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
                                                                                    'text' => ' ',
                                                                                    'size' => 'sm',
                                                                                    'color' => '#555555',
                                                                                ),
                                                                            1 =>
                                                                                array (
                                                                                    'type' => 'text',
                                                                                    'text' => ' ',
                                                                                    'size' => 'sm',
                                                                                    'color' => '#111111',
                                                                                    'align' => 'end',
                                                                                ),
                                                                        ),
                                                                ),
                                                            3 =>
                                                                array (
                                                                    'type' => 'box',
                                                                    'layout' => 'horizontal',
                                                                    'contents' =>
                                                                        array (
                                                                            0 =>
                                                                                array (
                                                                                    'type' => 'text',
                                                                                    'text' => ' ',
                                                                                    'size' => 'sm',
                                                                                    'color' => '#555555',
                                                                                ),
                                                                            1 =>
                                                                                array (
                                                                                    'type' => 'text',
                                                                                    'text' => ' ',
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
                    1 =>
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
                                                    'text' => '20円パチンコ',
                                                    'weight' => 'bold',
                                                    'color' => '#1DB446',
                                                    'size' => 'sm',
                                                ),
                                            1 =>
                                                array (
                                                    'type' => 'text',
                                                    'text' => '機種:20円スロット',
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
                                                                                    'text' => '検索条件',
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
                                                                                    'text' => ' ',
                                                                                    'size' => 'sm',
                                                                                    'color' => '#555555',
                                                                                ),
                                                                            1 =>
                                                                                array (
                                                                                    'type' => 'text',
                                                                                    'text' => ' ',
                                                                                    'size' => 'sm',
                                                                                    'color' => '#111111',
                                                                                    'align' => 'end',
                                                                                ),
                                                                        ),
                                                                ),
                                                            3 =>
                                                                array (
                                                                    'type' => 'box',
                                                                    'layout' => 'horizontal',
                                                                    'contents' =>
                                                                        array (
                                                                            0 =>
                                                                                array (
                                                                                    'type' => 'text',
                                                                                    'text' => ' ',
                                                                                    'size' => 'sm',
                                                                                    'color' => '#555555',
                                                                                ),
                                                                            1 =>
                                                                                array (
                                                                                    'type' => 'text',
                                                                                    'text' => ' ',
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
                ),
        ),
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
                    $client->replyMessage(messageContent2($event,$test_message));
                    break;
            }
    }
}
