<?php

// Execute this PHP file at least once for long polling to activate

set_time_limit(0);

require_once 'PollBot.php';

define('BOT_TOKEN', '203130442:AAGpk6XhWVgXrPZf0L3wxQVPawkat-h-XaU');

$bot = new PollBot(BOT_TOKEN, 'PollBotChat');
$bot->runLongpoll();
