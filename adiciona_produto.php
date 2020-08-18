<?php include("cabecalho.php");?>
    <?php
        /*Está é a resposta que foi solicitada através do produto_formulario */
        $nome = $_GET["nome"];
        $preco = $_GET["preco"];
    ?>
    
        <p class="alert-success"> Produto <?php echo $nome; ?> , <?php echo $preco; ?> adicionado com sucesso </>
 <?php include("rodape.php");?>