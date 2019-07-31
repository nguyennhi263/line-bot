<?php // callback.php
define("CHANNEL_SECRET", '4ee6adcd6a2f1fc3e3d7486eb91bbf3f');
define("CHANNEL_TOKEN",
    'Mp4x/jdEW8iWmdEDO9OX88aigc+oHmLHFRwC7Nf8JqYuP1x7p7LhIK/ZtKNwV0k9GQPvI6Wtxg0IwBPEyzUMyeVJdhhCyZo1cP1z+HQ/UV+IEnBHAYtqQDUKguj5F/n9AM4ID2J6L9olHstD5Z+rKQdB04t89/1O/w1cDnyilFU=');
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

//{
//    "type": "image",
//    "originalContentUrl": "https://example.com/original.jpg",
//    "previewImageUrl": "https://example.com/preview.jpg"
//}

$test_image = array (
    'type' => 'image',
    'originalContentUrl' => 'https://fitness-music.jp/user_data/packages/default/img/static/line/main.jpg',
    'previewImageUrl' => 'https://fitness-music.jp/user_data/packages/default/img/static/line/main.jpg'
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
                    $client->replyMessage(messageContent2($event,$test_image));
                    break;
            }
    }
}
