<?php
include("cabecalho.php");
include("conecta.php");
include("banco_produto.php");
include("banco_categoria.php");

$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);
$categorias = listaCategorias($conexao);
$usado = $produto['usado'] ? "checked='checked'" : "";
?>

    <!--Faz um requisão para a página adiciona_produto -->
                <h1>Alterando produto</h1>
    <form action="altera_produto.php" method="post">
        <input type="hidden" name="id" value="<?=$produto['id']?>">
        <table class="table">
        <tr>
            <td> Nome: </td>
            <td> <input class="form-control" type="text" name="nome" value="<?=$produto['nome']?>"><br/></td>
        </tr> 
        <tr>
             <td>Preço:</td>
             <td> <input class= "form-control" type="number" name="preco" value="<?=$produto['preco']?>"><br/></td>
        </tr>
        <tr>
        <td>Descrição</td>
             <td> <textarea class= "form-control" name="descricao"> <?=$produto['descricao']?> </textarea><br/></td>
        </tr>
        <tr>
            <td> Usado</td>
            <td><input type="checkbox" name="usado" value="true" <?=$usado?>> Usado </td>
        </tr>
        <tr>
        <td> Categoria</td>
        <td>
            <select name="categoria_id" class="form-control">
            <?php foreach($categorias as $categoria) : 
                $essaEhACategoria = $produto['categoria_id'] == $categoria['id'];
                $selecao = $essaEhACategoria ? "selected='selected'" : "";
                ?>
                <option value="<?=$categoria['id']?>" <?=$selecao?>> 
                <?=$categoria['nome']?><br/>
                </option>                                         
            <?php endforeach ?>
        </td>
            <td><input class= "btn btn-primary" type="submit" value="Alterar"></td>
        </tr>
</table>
    </form>
<?php include("rodape.php");?>
