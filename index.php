<?php
require ('FileReader.php');
$fileReader = new FileReader();
var_dump($fileReader->readFile('product_distributors.txt'));