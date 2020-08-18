<?php 
include("cabecalho.php");
include("conecta.php");
include("banco_produto.php");

        /*Está é a resposta que foi solicitada através do produto_formulario */
        $nome = $_POST["nome"];
        $preco = $_POST["preco"];
        $descricao = $_POST["descricao"];
      
        //GET FOI FEITO PARA TRAZER DADOS
       //Foi colocado uma condição para verificar se o produto foi adicionado ou não.
       if (insereProduto($conexao, $nome, $preco, $descricao)){ ?>
            <!--    "alert-success" permite deixar o background verde -->
            <p class="text-success"> Produto <?= $nome ?>, <?= $preco ?>, <?= $descricao ?> adicionado com sucesso </p>
        <?php  } else { 
         $msg = mysqli_error($conexao);
            ?>
            <p class="text-danger"> Produto <?=  $nome ?>  não foi adicionado: <?= $msg ?> </p>
        <?php
        
        }

       // mysqli_close($conexao);
 ?>      
 <?php include("rodape.php");?>