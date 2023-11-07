<?php

$hostname = "localhost"; //Endereço do Banco, pode ser um link 
$bancodedados = "feiratecno"; //
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . mysqli->connect_errno .")" . mysqli->connect_error;
}

md5($senha);

