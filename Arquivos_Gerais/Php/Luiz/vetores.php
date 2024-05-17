<?php

echo "<pre>";
$lista = array('Leonardo','Michelangelo','Donatelo','Rafael');
$lista[5] = 'Von Google';
$lista[] = 'Salvador Daqui';
echo "Vertor, Lista:";
var_dump($lista);

$alunos["aluno1"] = array ("nome" =>"Leonardo","telefone"=> "(11)94546-5559");
$alunos["aluno2"] = "Michelangelo";
$alunos["aluno3"] = "Donatelo";
$alunos["aluno4"] = "Rafael";

var_dump($alunos);

echo $alunos['aluno1']["nome"];

$links[]=array('link'=>'www.etecjk.com','descricao'=>'site da escola');
$links[]=array('link'=>'www.cps.gov.br','descricao'=>'site da instituição');

for($i=0;$i<count($links);$i=$i+1){
    echo "<br><a href=\"".$links[$i]['link']."\">".links[$i]['descricao']."</a><br>";
}