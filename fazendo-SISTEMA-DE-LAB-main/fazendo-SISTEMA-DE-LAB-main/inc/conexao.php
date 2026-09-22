<?php 
$servidor = "locahost";
$banco = "lab";
$nome = "root";
$senha = "";

$conexao = mysqli_connect($servidor, $banco, $nome, $senha);

if (!$conexao) {
    die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
}

mysqli_set_charset($conexao, 'utf8mb4');
?>  