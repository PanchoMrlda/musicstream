<?php

namespace Config;

class SlackMessageSender
{
  var $slackWebhook;

  public function __construct()
  {
    $this->slackWebhook = env('SLACK_WEBHOOK');
  }

  public function sendMessage(String $text)
  {
    $message = array(
      'payload' => json_encode(array(
        'text' => $text,
        'username' => env('APP_NAME')
      ))
    );

    $c = curl_init($this->slackWebhook);
    curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($c, CURLOPT_POST, true);
    curl_setopt($c, CURLOPT_POSTFIELDS, $message);
    curl_exec($c);
    curl_close($c);
  }
}
