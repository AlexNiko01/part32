<?php
ini_set('memory_limit', '64Mb');
require('FileReader.php');
require('JsonParser.php');
require('CsvExporter.php');

$fileReader = new FileReader('txt/product_distributors.txt');
$generator = $fileReader->readFile();
$jsonParser = new JsonParser($generator);
$productsData = $jsonParser->parseJson();
$csvExporter = new CsvExporter();

$csvExporter->saveCsv($productsData);