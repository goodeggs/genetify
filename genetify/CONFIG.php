<?php
$parts = parse_url($_ENV['DATABASE_URL']);
$DB['host'] = $parts['host'];
$DB['user'] = $parts['user'];
$DB['password'] = $parts['pass'];
$DB['database'] = trim($_ENV['path'], '/');

$CONFIG['browscap'] = false; // browscap is defunct, turn off by default if & until a replacement is installed

// change as desired for debugging
error_reporting(E_ALL);

?>
