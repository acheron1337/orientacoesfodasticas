<?php
require_once("IConsumidorEnergia.php");

class Industrial implements IConsumidorEnergia
{
          private int $consumo;

          public function getValorFatura(){
                    if ($this->consumo <= 500) {
                              $fatura = 1.80 * $this->consumo;
                    } else {
                              $fatura = 2.30 * $this->consumo;
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
