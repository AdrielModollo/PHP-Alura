<?php
include("cabecalho.php");
include("conecta.php");
include("banco_produto.php");

$id = $_POST['id'];
removeProduto($conexao, $id); //busca a função
header("Location: listagem.php?removido=true")
?>

