<?php
//Declaração do array.
$num = array(12,24,53,54,11,27,29,87,67,98,100);

//Função para verificar se o valor é par ou impar e imprimir na tela.
function par_ou_impar($array = array()){
    for($i=0;$i<count($array);$i++){
        echo $array[$i]." - ".
           $teste = $array[$i] % 2 == 0? $x = "par"."<br/>":$x = "impar"."<br/>"; # Verifica se é par ou impar.
    }
}

//Utilização da função.
par_ou_impar($num);

?>