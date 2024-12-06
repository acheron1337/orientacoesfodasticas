<?php

require_once("Product.php");

class Book extends Product{
          private $author;

          public function getData(){
                    echo "\n", "Book", "\n";
                    $data = parent::getData(). "|" . "Author: " . $this->author . "\n";
                    echo $data;
          }

          public function getAuthor(){
                    return $this->author;
          }
          public function setAuthor($author){
                    $this->author = $author;

                    return $this;
          }
}