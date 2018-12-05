<?php
/**
 * Created by PhpStorm.
 * User: Asto-Nhi
 * Date: 11/28/2018
 * Time: 2:41 PM
 */

define("CHANNEL_SECRET", 'd215e3425ea2f157a90ade1cccdb09b7');
define("CHANNEL_TOKEN",
    '1623658758');
require __DIR__."/vendor/autoload.php";
require_once (__DIR__.'/vendor/linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php');

$client = new LINEBotTiny(CHANNEL_TOKEN, CHANNEL_SECRET);
$url = "https://nguyennhi263.herokuapp.com/auth.php";

if (isset($_GET['code'])) {
   $token =  $client->getUserToken($_GET['code'],$url);
   var_dump($token);
   var_dump($client->getUserInfo($token));
}

    ?>