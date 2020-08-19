<?php
include("cabecalho.php");
include("conecta.php");
include("banco_produto.php"); ?>

<?php
    //criei um array para verificar a remoção e exibir, o true foi convertido de boolean para tipo string
    if(array_key_exists("removido", $_GET) && $_GET["removido"] == "true") {
?>
    <p class="alert-success"> Produto apagado com sucesso. </p>
<?php
    }
?>
         <!--uma linha de cada cor/ adiciona borda -->
<table class = "table table-striped table-bordered">
    <tr>
        <td><b>Nome do produto</b></td>
        <td><b>Preço</b></td>
        <td><b>Descrição</b></td>
        <td><b>Categoria</b></td>
        <td> </td>
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
        <td><?= substr($produto['descricao'], 0, 60) ?></td>
        <td><?= $produto['categoria_nome'] ?></td>
        <td>
            <form action="remove_produto.php?id=<?=$produto['id']?>" method="post">
            <input type="hidden" name="id" value="<?= $produto['id']?>">
            <button class="btn btn-danger">remover</button>
        </form>
        </td>
 </tr>
    <?php
        }
    ?>
</table>

<?php include("rodape.php"); ?>
  