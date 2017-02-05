<?php

require __DIR__ . '/../autoload.php';

$db = new \App\Db();
$res = $db->queryEach('SELECT * FROM news', [], 'App\Models\Article');
echo '<pre>';
var_dump($res);
echo '-----------<br>';
$res = $db->queryEach('SELECT * FROM news', []);
var_dump($res);