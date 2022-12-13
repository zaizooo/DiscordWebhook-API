<?php

namespace discord;

class Webhook {
 public function __construct(String $webhookurl){
   define('WEBHOOK_URL', $webhookurl);
  }
 
}
