<?php
require_once("IConsumidorEnergia.php");

class Comercial implements IConsumidorEnergia
{
          private int $consumo;

          public function getValorFatura(){
                    if ($this->consumo <= 100) {
                              $fatura=1.45*$this->consumo;
                    } else{
                              $faturas=1.65*$this->consumo;
                    }
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
