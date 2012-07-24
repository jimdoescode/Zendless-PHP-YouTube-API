<?php
    session_start();

    require 'api/google_oauth.php';
    require 'api/youtube.php';

    $key = '**************'; //TODO: This should be the key given to you by google
    $secret = '***************'; //TODO: This should be the secret given to you by google

    $auth = new google_oauth($key, $secret);
    $oauth_token = $auth->get_access_token($_GET['oauth_token'], $_SESSION['token_secret'], $_GET['oauth_verifier']);

    //Make sure you urlencode the values of $oauth_token before passing it to the youtube api
    foreach($oauth_token as $key => $value)
        $oauth_token[$key] = urlencode($value);

    $youtube_api_key = '****************'; //TODO: This should be the api key give to you by youtube

    $youtube = new youtube($youtube_api_key, $key, $secret, $oauth_token);

    echo $youtube->getUserProfile('default', array('alt'=>'json'));