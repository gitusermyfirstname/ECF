<?php

require_once "../../vendor/autoload.php";

$manager = new MongoDB\Driver\Manager('mongodb://localhost:27017');
var_dump($manager);



// Connect to mongodb
// echo "Connection to database successfully";
// // select a database
// $db = $m->examplesdb;
// echo "Database examplesdb selected";
// $collection = $db->examplescol;
// echo "Collection selected succsessfully";
// $cursor = $collection->find(); 
// // echo $client;

