<?php

require_once("atividades_oobj/Bucket.php");
require_once("atividades_oobj/Computer.php");
require_once("atividades_oobj/Book.php");
require_once("atividades_oobj/Product.php");

$product = new Product();
$product->setDescription("product");
$product->setUnity(10);
$product->getData();

$book = new Book();
$book->setAuthor("Vendetta");
$book->setDescription("action/Sci-Fi");
$book->setUnity("Vol.");
$book->getData();

$computer = new Computer();
$computer->setMemory("5YB");
$computer->setProcessor("ibm threadripper pro 33k");
$computer->setDescription("quantum");
$computer->setUnity("quantity");
$computer->getData();

$bucket = new Bucket();
$bucket->setCapacity("7litres");
$bucket->setDescription("black, plastic");
$bucket->setUnity("quantity");
$bucket->getData();