<?php

// This Program Tweets out a simple message

require "twitteroauth/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;





/* Enter YOUR Credentials
 *
 * Consumer Key
 * Consumer Secret
 * Access Token
 * Access Token Secret
 *
 */


$ck = 'XXXXXXXXXXXXXXXXXXX';
$cs = 'XXXXXXXXXXXXXXXXXXX';

$at = 'XXXXXXXXXXXXXXXXXXX';
$ats = 'XXXXXXXXXXXXXXXXXXX';

// Creates Connection
$connection = new TwitterOAuth

(   $ck,
    $cs,
    $at,
    $ats

);



//Constructs parameters
$parameters = [
    'status' => "Hello World!"
];

/** Executes Tweet */
$result = $connection->post('statuses/update', $parameters);


?>