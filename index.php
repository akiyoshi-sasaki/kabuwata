<?php

require '.twitter.php';
require 'TwistOAuth/build/TwistOAuth.phar';

$consumer_key    = TwitterApi::CONSUMER_KEY;
$consumer_secret = TwitterApi::CONSUMER_SECRET;
$access_token    = TwitterApi::ACCESS_TOKEN;
$access_secret   = TwitterApi::ACCESS_SECRET;
$connection = new TwistOAuth($consumer_key, $consumer_secret, $access_token, $access_secret);

if (isset($_POST['keyword'])) {
        $keyword = str_replace(' ', '', $_POST['keyword']);
        $count = (isset($_POST['count'])) ? $_POST['count'] : 10;

				$year = (isset($_POST['year'])) ? $_POST['year'] : date('Y');
				$month = (isset($_POST['month'])) ? $_POST['month'] : date('m');
				$day = (isset($_POST['day'])) ? $_POST['day'] : date('d');
				$until = $year . '-' . $month . '-' . $day;
				$conjunction = (isset($_POST['conjunction'])) ? $_POST['conjunction'] : 'OR';
	// キーワードによるツイート検索
	$tweets_params = [
		'q' => '"' . str_replace(',', '" ' . $conjunction . ' "', $keyword) . '"',
		'count' => $count,
		'lang' => 'ja',
		'result_type' => 'mixed',
		//'since' => $until . '_00:00:00_JST',
		'until' => $until . '_23:59:59_JST'
	];
	$tweets        = $connection->get('search/tweets', $tweets_params)->statuses;

	var_dump($tweets_params);
//	var_dump($tweets);

	foreach($tweets as $tweet){
		echo '名前:' . $tweet->user->name . "<br>";
		echo '本文:' . $tweet->text . "<br>";
		echo "<br>";
	}
}

require_once('index.html');
exit;
