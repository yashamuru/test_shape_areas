<?php

error_reporting(E_ALL);

require_once 'vendor/autoload.php';

$tagWriter = new Enables\TagWriter();
echo $tagWriter->process('abcdef');