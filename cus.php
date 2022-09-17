<?php 
require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


$pusher = new Pusher\Pusher(
    $_ENV['APP_KEY'],
    $_ENV['APP_SECRET'],
    $_ENV['APP_ID'],
  array('cluster' => $_ENV['APP_CLUSTER'])
);

$data = 10;
$data1 = 5;

$pusher->trigger('my-channel', 'my-event', $data);
$pusher->trigger('my-channel2', 'my-event2', $data1);
?>