<?php
require_once ("vendor/autoload.php");

try {
    $redis = new \Predis\Client([
        'host' => 'redis'
    ]);
    $redis->set('name', 'Test');
} catch (Exception $e) {
    exit('Connect error');
}
