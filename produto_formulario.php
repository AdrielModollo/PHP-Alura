<?php include("cabecalho.php");?>
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
        <tr>
        <td><input class= "btn btn-primary" type="submit" value="Cadastrar"></td>
        </tr>
</table>
    </form>
<?php include("rodape.php");?>
