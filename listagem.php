<?php
include("cabecalho.php");
include("conecta.php");
include("banco_produto.php"); ?>
         
         
         <!--uma linha de cada cor/ adiciona borda -->
<table class = "table table-striped table-bordered">
<tr>
        <td><b>Nome do produto</b></td>
        <td><b>Preço</b></td>
    </tr>
    <?php
        //nesta etapa chama a função do banco de dados
        $produtos = listaProdutos($conexao);
        // para cada um dos produtos execute este código:
        foreach($produtos as $produto) {
    ?>
    <tr> 
        <td><?= $produto['nome'] ?></td>
        <td><?= $produto['preco'] ?></td>
    </tr>
    <?php
        }
    ?>
</table>

<?php include("rodape.php"); ?>
  