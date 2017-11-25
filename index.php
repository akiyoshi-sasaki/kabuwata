<?php

require '.twitter.php';
require 'TwistOAuth/build/TwistOAuth.phar';

$consumer_key        = TwitterApi::CONSUMER_TOKEN;
$consumer_secret     = TwitterApi::CONSUMER_SECRET;
$access_token        = TwitterApi::ACCESS_TOKEN;
$access_token_secret = TwitterApi::ACCESS_TOKEN_SECRET;
$connection = new TwistOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);
var_dump($connection);

echo "Hello, KABUWATA!?";
