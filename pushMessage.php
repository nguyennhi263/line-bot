<?php
/**
 * Created by PhpStorm.
 * User: Asto-Nhi
 * Date: 12/3/2018
 * Time: 10:49 AM
 */

define("CHANNEL_SECRET", 'dcd4d682871e3013f2fe9f0cd14a3b0c');
define("CHANNEL_TOKEN",
    'oPJj2g+gPNOvLAtQz0CWyY6dkj/lIw86ZB2MtqPoWp5jN0EZDF4tXiIdR32FbpGYGQPvI6Wtxg0IwBPEyzUMyeVJdhhCyZo1cP1z+HQ/UV+9fHbbsUrueMZqrzMYkMNNuxoDTJXKWzM1PY6LurByvwdB04t89/1O/w1cDnyilFU=');
define('USER_ID','U2901a050f0a7f3dba558dca2e0ab455a');
require __DIR__."/vendor/autoload.php";
require_once (__DIR__.'/vendor/linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php');

function messageContent(){
    return array (
        array(
            "type"=> "text",
            "text"=> "Hello, world 1"
        ),
        array(
            "type"=> "text",
            "text"=> "Hello, world 2"
        )
    );
}

$client = new LINEBotTiny(CHANNEL_TOKEN, CHANNEL_SECRET);
$client->pushMessage(USER_ID,messageContent());