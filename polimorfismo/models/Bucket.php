<?php

require_once("Product.php");

class Bucket extends Product{
          private $capacity;

          public function getData(){
              echo "\n", "Bucket", "\n";
              $data = parent::getData() . "|" . "Capacity: " . $this->capacity;
              echo $data, "\n";
          }

          public function getCapacity(){
                    return $this->capacity;
          }
          public function setCapacity($capacity){
                    $this->capacity = $capacity;
                    return $this;
          }
}