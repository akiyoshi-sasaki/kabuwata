<?php

var_dump($_POST);

require '.twitter.php';
require 'TwistOAuth/build/TwistOAuth.phar';

$consumer_key        = TwitterApi::CONSUMER_TOKEN;
$consumer_secret     = TwitterApi::CONSUMER_SECRET;
$access_token        = TwitterApi::ACCESS_TOKEN;
$access_token_secret = TwitterApi::ACCESS_TOKEN_SECRET;
$connection = new TwistOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);


if (isset($_POST['keyword'])) {

　　　　$keyword = str_replace(' ', '', $_POST['keyword']);　	
	$count = (isset($_POST['count'])) ? $_POST['count'] : 10;

	// キーワードによるツイート検索
	$tweets_params = ['q' => str_replace(',', ' OR ', $keyword), 'count' => $count];
	var_dump($tweets_params);
	$tweets        = $connection->get('search/tweets', $tweets_params)->statuses;

	foreach($tweets as $tweet){
		echo '名前:' . $tweet->user->name . "<br>";
		echo '本文:' . $tweet->text . "<br>";
		echo "<br>";
	}
}

require_once('index.html');
exit;
