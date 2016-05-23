?php

require_once 'PollBot.php';

define('BOT_TOKEN', '203130442:AAGpk6XhWVgXrPZf0L3wxQVPawkat-h-XaU');
define('BOT_WEBHOOK', 'https://votadetran.herokuapp.com/poll-bot-webhook.php');

$bot = new PollBot(BOT_TOKEN, 'PollBotChat');

if (php_sapi_name() == 'cli') {
  if ($argv[1] == 'set') {
    $bot->setWebhook(BOT_WEBHOOK);
  } else if ($argv[1] == 'remove') {
    $bot->removeWebhook();
  }
  exit;
}

$response = file_get_contents('php://input');
$update = json_decode($response, true);

$bot->init();
$bot->onUpdateReceived($update);
