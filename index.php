<?php

require 'TwistOAuth/build/TwistOAuth.phar';
$consumer_key        = 'G';
$consumer_secret     = 'M';
$access_token        = 'r';
$access_token_secret = '9';
$connection = new TwistOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);
var_dump($connection);

echo "Hello, KABUWATA!?";
