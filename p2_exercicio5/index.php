<?php

$alunos = array(
    0 => array("Nome"=>"Paulo", "Nota"=>9),
    1 => array("Nome"=>"Fernando", "Nota"=>6),
    2 => array("Nome"=>"Guilherme", "Nota"=>7),
    3 => array("Nome"=>"Lucas", "Nota"=>8),
    4 => array("Nome"=>"Mateus", "Nota"=>6),
    5 => array("Nome"=>"Tiago", "Nota"=>4),
    6 => array("Nome"=>"Marcos", "Nota"=>10),
    7 => array("Nome"=>"Paco", "Nota"=>3),
    8 => array("Nome"=>"Wesley", "Nota"=>5),
    9 => array("Nome"=>"Jorge", "Nota"=>7),
    10 => array("Nome"=>"Roberto", "Nota"=>6),
    11 => array("Nome"=>"Francisco", "Nota"=>2),
    12 => array("Nome"=>"Fabio", "Nota"=>8),
    13 => array("Nome"=>"Flavio", "Nota"=>6),
    14 => array("Nome"=>"Antonio", "Nota"=>7),
    15 => array("Nome"=>"Joao", "Nota"=>9),
    16 => array("Nome"=>"Estevao", "Nota"=>8),
    17 => array("Nome"=>"Carlos", "Nota"=>10),
    18 => array("Nome"=>"Alfredo", "Nota"=>9),
    19 => array("Nome"=>"Alberto", "Nota"=>9),
);


function aprovados_reprovados($array = array()){
    for($i=0;$i<count($array);$i++):
    $aluno = $array[$i];
    if ($aluno["Nota"] < 5){
        $aluno["Final"] = "Reprovado";
    }else{
        $aluno["Final"] = "Aprovado";
    } ?>
    <li><?=$aluno["Nome"]. " - ".$aluno["Nota"]." - ".$aluno["Final"]."<br />";?></li>
    <?php endfor;
}

?>


<ul>
<?php
aprovados_reprovados($alunos);
?>
</ul>