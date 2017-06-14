<?php

include 'write_text.php';

// Include twitteroauth
require_once 'twitteroauth-master/autoload.php';
use Abraham\TwitterOAuth\TwitterOAuth;

// Set keys
$consumerKey = '';
$consumerSecret = '';
$accessToken = '';
$accessTokenSecret = '';

// Create object
$tweet = new TwitterOAuth($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);

//upload media
$resultnew = $tweet->upload('media/upload', array('media' => "$id.png"));
var_dump($id);
$mediaID = $resultnew->media_id;
$parameters = array('status' => '','media_ids' => $mediaID);
$response = $tweet->post('statuses/update', $parameters);

unlink("$id.png");

?>