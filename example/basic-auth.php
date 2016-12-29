<?php

/* 
 * This is a basic auth example for bungies oauth2
 */

###### CHANGE BELOW ######
$authURL = "";
###### CHANGE STOP #######

$config = new Bungie\Auth\Config([
    'authUrl' => $authURL
]);

try {
    $auth = new Bungie\Auth\Authentication($config);
    $auth->authenticate();
} catch (Exception $ex) {
    # Do something!
}