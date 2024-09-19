<?php

require_once("modelo/Turma.php");
require_once("modelo/Aluno.php");

$turma1=new Turma();
$turma1->setNome("Segundão");
$turma1->setCurso("TDS");

$aluno=new Aluno();
$alunos=array();
for($i=1;$i<=5;$i++){
    $aluno->setNome(readline("Digite o nome do aluno: "));
    $aluno->setIdade(readline("Digite a idade do aluno: "));
    $aluno->setTurma($turma1);
    array_push($alunos, $aluno);
    $turma1->setAlunos($alunos);
}

// print_r($turma1->getAlunos());

// continuar
