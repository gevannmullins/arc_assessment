<?php
// show error reporting
error_reporting(E_ALL);

// set your default time-zone
date_default_timezone_set('UTC');

/**
 *
 * TODO: Implement JWT Authentication
 *
 */
// variables used for jwt
$key = "example_key";
$iss = "http://local.api";
$aud = "http://local.api";
$iat = 1356999524;
$nbf = 1357000000;