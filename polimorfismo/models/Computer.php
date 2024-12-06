<?php
require_once("Product.php");

class Computer extends Product {
          private $processor;
          private $memory;

          public function getData(){
                    echo "\n", "Computer", "\n";
                    $data = parent::getData() . "|" . "Processor : " . $this->processor . "|" . "Memory : " . $this->memory;
                    echo $data;
          }

          //processor
          public function getProcessor(){
                    return $this->processor;
          }
          public function setProcessor($processor): self{
                    $this->processor = $processor;
                    return $this;
          }
          
          //memory
          public function getMemory(){
                    return $this->memory;
          }
          public function setMemory($memory): self{
                    $this->memory = $memory;
                    return $this;
          }
}