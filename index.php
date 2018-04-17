<?php
ini_set('memory_limit', '64Mb');
require('FileReader.php');
require('JsonParser.php');

$fileReader = new FileReader('txt/product_distributors.txt');
$generator = $fileReader->readFile();
$jsonParser = new JsonParser($generator);

$arr = $jsonParser->parseJson();
var_dump(
    $arr
);