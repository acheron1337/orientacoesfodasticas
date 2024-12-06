<?php

class Midia {
          protected $description;
          protected $price;

          public function __construct($d, $p){
                    $this->description = $d;
                    $this->price = $p;
          }

          public function getData(){
                    return "description: " . $this->description . "\nprice: " . $this->price . "\n";
          }
          public function gettype(){
                    return "generalized";
          }
}