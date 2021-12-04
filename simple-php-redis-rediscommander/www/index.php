<?php
try {
    $redis = new Redis();
    $redis->connect('redis', 6379);
} catch(RedisException $e) {
    exit('Connect error');
}

for($i=0;$i < 100; $i++)
    $redis->set('key'.$i,$i);

