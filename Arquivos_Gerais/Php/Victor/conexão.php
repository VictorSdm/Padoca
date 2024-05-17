<?php

$dsn = "mysql:host=local;dbname=feirafacil";
$username = "root";
$password = "";
$pdo = new PDO($dsn, $username, $password);


$smtmt = $pdo->query("SELECT feirante FROM carlos ");
while ($aluno = $stmt->fetch()){
          echo $aluno["nome"]. "-" $aluno["email"]. <br>
}
