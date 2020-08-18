<?php include("cabecalho.php");?>
<?php include("conecta.php");?>

    <?php
        //Cria uma função que é chamada uma única vez
        function insereProduto($conexao, $nome, $preco) {
            //É informado parametros que o servidor vai receber
            $query = "insert into produtos (nome, preco) values ('{$nome}', {$preco})";
            //Retorna o resultado do mysql query
            return mysqli_query($conexao, $query);
        }

        /*Está é a resposta que foi solicitada através do produto_formulario */
        $nome = $_GET["nome"];
        $preco = $_GET["preco"];
      
       //Foi colocado uma condição para verificar se o produto foi adicionado ou não.
       if (insereProduto($conexao, $nome, $preco)){ ?>
            <!--    "alert-success" permite deixar o background verde -->
            <p class="text-success"> Produto <?= $nome ?>, <?= $preco ?>  adicionado com sucesso </p>
        <?php  } else { 
         $msg = mysqli_error($conexao);
            ?>
            <p class="text-danger"> Produto <?=  $nome ?>  não foi adicionado: <?= $msg ?> </p>
        <?php
        
        }

       // mysqli_close($conexao);
 ?>      
 <?php include("rodape.php");?>