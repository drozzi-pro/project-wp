<?php
require_once dirname(__DIR__) . '/vendor/autoload.php';
use function Env\env;

$dotenv = Dotenv\Dotenv::createUnsafeImmutable('../', ['.env'], false);
$isDev = false;

if (file_exists('../.env')) {
    $dotenv->load();
    $isDev = env('WP_ENV') ? env('WP_ENV') === 'development' : $isDev;
}


define('IS_DEV', $isDev);
