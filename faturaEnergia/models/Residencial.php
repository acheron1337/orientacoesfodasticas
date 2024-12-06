<?php

require_once("IConsumidorEnergia.php");

class Residencial implements IConsumidorEnergia {
          private int $consumo;

          public function getValorFatura(){
                    $fatura=1.05*$this->consumo;
                    return $fatura;
          }

          public function getConsumo(){
                    return $this->consumo;
          }

          public function setConsumo($consumo){
                    $this->consumo = $consumo;
                    return $this;
          }
}