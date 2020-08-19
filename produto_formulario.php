<?php
include("cabecalho.php");
include("conecta.php");
include("banco_produto.php");
include("banco_categoria.php");


$categorias = listaCategorias($conexao);
?>

    <!--Faz um requisão para a página adiciona_produto -->
                <h1>Formulario de produto</h1>
    <form action="adiciona_produto.php" method="post">
        <table class="table">
        <tr>
            <td> Nome: </td>
            <td> <input class="form-control" type="text" name="nome"><br/></td>
        </tr> 
        <tr>
             <td>Preço:</td>
             <td> <input class= "form-control" type="number" name="preco"><br/></td>
        </tr>
        <tr>
        <td>Descrição</td>
             <td> <textarea class= "form-control" name="descricao"> </textarea><br/></td>
        </tr>
        <tr>
            <td> Usado</td>
            <td><input type="checkbox" name="usado" value="true"> Usado </td>
        </tr>
        <tr>
        <td> Categoria</td>
        <td>
            <select name="categoria_id" class="form-control">
            <?php foreach($categorias as $categoria) : ?>
                <option value="<?=$categoria['id']?>">  <?=$categoria['nome']?><br/>
                </option>                                         
            <?php endforeach ?>
        </td>
            <td><input class= "btn btn-primary" type="submit" value="Cadastrar"></td>
        </tr>
</table>
    </form>
<?php include("rodape.php");?>
