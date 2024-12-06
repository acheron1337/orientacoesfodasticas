<?php

class Product {
          private $description;
          private $unity;

          public function getData(){
                    $data = 'Description: ' . $this->description . " | " . 'Unity: ' . $this->unity;
                    echo $data;
          }

          public function getDescription($description){
                    return $this->description;
          }
          public function setDescription($description): self{
                    $this->description = $description;
                    return $this;
          }

          public function getUnity($unity){
                    return $this->unity;
          }
          public function setUnity($unity): self{
                    $this->unity = $unity;
                    return $this;
          }
}