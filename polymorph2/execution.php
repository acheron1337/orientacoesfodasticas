<?php

require_once("atividades_oobj/Midia.php");
require_once("atividades_oobj/CD.php");
require_once("atividades_oobj/DVD.php");

$midias = array();
          for($i = 0; $i < 5; $i++){
                    echo "what's the midia ?\n
                    1 --> generalized\n
                    2 --> cd\n
                    3 --> dvd\n";
          $type = readline();

          if($type == 1){
                    $midia = new Midia(readline("write the description: "), readline("insert the price: "));
                    array_push($midias, $midia);
          }else if($type == 2){
                    $cd = new CD(readline("write the description: "), readline("insert the price: "));
                    array_push($midias, $cd);
          }else if($type == 3){
                    $cd = new DVD(readline("write the description: "), readline("insert the price: "));
                    array_push($midias, $dvd);
          }else{
                    echo "he type was invalidated";
          }
}
foreach($midias as $midia){
          echo $midia->gettype() . "\n" . $midia->getData() . "\n";
}

