<?php

require '.twitter.php';
require 'TwistOAuth/build/TwistOAuth.phar';

var_dump($_POST);

$consumer_key    = TwitterApi::CONSUMER_KEY;
$consumer_secret = TwitterApi::CONSUMER_SECRET;
$access_token    = TwitterApi::ACCESS_TOKEN;
$access_secret   = TwitterApi::ACCESS_SECRET;
$connection = new TwistOAuth($consumer_key, $consumer_secret, $access_token, $access_secret);

if (isset($_POST['keyword'])) {
        $keyword = str_replace(' ', '', $_POST['keyword']);
        $count = (isset($_POST['count'])) ? $_POST['count'] : 10;
				$until = (isset($_POST['until'])) ? $_POST['until'] : date('Y-m-d');

	// キーワードによるツイート検索
	$tweets_params = [
		'q' => str_replace(',', ' OR ', $keyword),
		'count' => $count,
		'lang' => 'ja',
		'result_type' => 'mixed',
		'until' => $until;
	];
	$tweets        = $connection->get('search/tweets', $tweets_params)->statuses;

	foreach($tweets as $tweet){
		echo '名前:' . $tweet->user->name . "<br>";
		echo '本文:' . $tweet->text . "<br>";
		echo "<br>";
	}
}

require_once('index.html');
exit;
