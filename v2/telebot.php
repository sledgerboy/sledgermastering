

<?php

use TelegramBot\Api\Client;
use TelegramBot\Api\Types\Update;

require_once "vendor/autoload.php";
$token = "5727077941:AAG5Iw_fvpQddwdc-9rPzsIoLuto9LsxFx8";

try {
    $bot = new Client($token);
    // or initialize with botan.io tracker api key
    // $bot = new \TelegramBot\Api\Client('YOUR_BOT_API_TOKEN', 'YOUR_BOTAN_TRACKER_API_KEY');


    //Handle /ping command
    $bot->command('start', function ($message) use ($bot) {
        $bot->sendMessage($message->getChat()->getId(), 'Быстро введите имя!');
        $bot->$update;
        $message = $update->getMessage();
        $id = $message->getChat()->getId();
        $bot->sendMessage($id, 'Your message 1 is: ' . $message->getText());
    });

    //Handle text messages
    $bot->on(function (Update $update) use ($bot) {
        $message = $update->getMessage();
        $id = $message->getChat()->getId();
        $bot->sendMessage($id, 'Your message 2 is: ' . $message->getText());
    }, function () {
        return true;
    });

    $bot->run();

} catch (\TelegramBot\Api\Exception $e) {
    $e->getMessage();
}

