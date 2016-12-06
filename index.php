<?php

error_reporting(E_ALL);

require_once 'vendor/autoload.php';

echo 'Task3 :'.PHP_EOL;
$tagWriter = new Enables\Task3\TagWriter();
echo $tagWriter->process('abcdef');

echo PHP_EOL;
echo 'Task4 :'.PHP_EOL;
