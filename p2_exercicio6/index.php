<?php

$alunos = array(
    0 => array("Matricula"=>  1, "Nome"=>"Paulo", "Altura"=>1.92),
    1 => array("Matricula"=>  2, "Nome"=>"Fernando", "Altura"=>1.87),
    2 => array("Matricula"=>  3, "Nome"=>"Guilherme", "Altura"=>1.67),
    3 => array("Matricula"=>  4, "Nome"=>"Lucas", "Altura"=>1.73),
    4 => array("Matricula"=>  5, "Nome"=>"Mateus", "Altura"=>1.82),
    5 => array("Matricula"=>  6, "Nome"=>"Tiago", "Altura"=>1.58),
    6 => array("Matricula"=>  7, "Nome"=>"Marcos", "Altura"=>1.65),
    7 => array("Matricula"=>  8, "Nome"=>"Paco", "Altura"=>1.70),
    8 => array("Matricula"=>  9, "Nome"=>"Wesley", "Altura"=>1.98),
    9 => array("Matricula"=>  10, "Nome"=>"Jorge", "Altura"=>1.93),
    10 => array("Matricula"=>  11 ,"Nome"=>"Roberto", "Altura"=>1.49),
    11 => array("Matricula"=>  12 ,"Nome"=>"Francisco", "Altura"=>1.57),
    12 => array("Matricula"=>  13 ,"Nome"=>"Fabio", "Altura"=>1.67),
    13 => array("Matricula"=>  14 ,"Nome"=>"Flavio", "Altura"=>1.78),
    14 => array("Matricula"=>  15 ,"Nome"=>"Antonio", "Altura"=>1.79),
    15 => array("Matricula"=>  16 ,"Nome"=>"Joao", "Altura"=>1.75),
    16 => array("Matricula"=>  17 ,"Nome"=>"Estevao", "Altura"=>1.73),
    17 => array("Matricula"=>  18 ,"Nome"=>"Carlos", "Altura"=>1.86),
    18 => array("Matricula"=>  19 ,"Nome"=>"Alfredo", "Altura"=>1.68),
    19 => array("Matricula"=>  20 ,"Nome"=>"Alberto", "Altura"=>2.00),
);

// Função de comparação.
function cmp($a , $b){
    return $a["Altura"] < $b["Altura"];
}
// Função para ordenação dos valores e impressão na tela.
function ordena_apresenta($array = array()) {
    usort($array, 'cmp');
    
    for($i=0;$i<5;$i++){
    $aluno = $array[$i];
    echo "Matricula: ".$aluno["Matricula"]." - Altura: ".$aluno["Altura"]."<br />";
    }
}

ordena_apresenta($alunos);

?>