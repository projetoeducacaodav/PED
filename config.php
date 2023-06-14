<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPasword = 'rato';
$dbName = 'formulario_pedro';

$conexao = new mysqli($dbHost,$dbUsername,$dbPasword,$dbName);

//if($conexao->connect_errno)
//{
//    echo "Erro";
//}
//else
//{
//    echo "conexão efetuada com sucesso";
//}

?>