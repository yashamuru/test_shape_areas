<?php

error_reporting(E_ALL);

require_once 'vendor/autoload.php';

echo 'Task3 :'.PHP_EOL;
$tagWriter = new Tasks\Task3\TagWriter();
echo $tagWriter->process('abcdef');

echo PHP_EOL;
echo 'Task4 :'.PHP_EOL;

$calculator = new Tasks\Task4\PolygonCalculator();
$parser = new Tasks\Task4\CSVParser();
$parser->setCalculator($calculator);

echo $parser->processCSV('dataTask4.csv');