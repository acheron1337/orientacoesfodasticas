<?php

require_once("./atividades_oobj/Comercial.php");
require_once("./atividades_oobj/Residencial.php");
require_once("./atividades_oobj/Industrial.php");

$i=1;
do {

    echo "1 --> CALCULAR FATURAMENTO RESIDENCIAL\n";
    echo "2 --> CALCULAR FATURAMENTO COMERCIAL\n";
    echo "3 --> CALCULCAR FATURAMENO INDUSTRIAL\n";
    echo "0 --> CANCELAR\n";
    $i=readline("SELECIONE UMA OPCÇÃO: ");

    if($i==1){

        $fatura=new Residencial();
        $fatura->setConsumo(readline("VALOR GASTO EM KWH? : "));
        printf("\nSua fatura custa R$%.2f!\n\n", $fatura->getValorFatura());

    } else if($i==2){

        $fatura=new Comercial();
        $fatura->setConsumo(readline("VALOR GASTO EM KWH? : "));
        printf("\nSUA FATURA CUSTA R$%.2f!\n\n", $fatura->getValorFatura());

    } else if($i==3){

        $fatura=new Industrial();
        $fatura->setConsumo(readline("VALOR GASTO EM KWH? : "));
        printf("\nSUA FATURA CUSTA R$%.2f!\n\n", $fatura->getValorFatura());

    } else if($i==0){

        echo "\nCANCELADO\n\n";
        break;

    } else{

        echo "\nOPCÇÃO NÃO VALIDADA\n\n";

    }

} while($i!=0);