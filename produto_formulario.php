<?php include("cabecalho.php");?>
    <!--Faz um requisão para a página adiciona_produto -->
                <h1>Formulario de produto</h1>
    <form action="adiciona_produto.php">
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
        <td><input class= "btn btn-primary" type="submit" value="Cadastrar"></td>
        </tr>
</table>
    </form>
<?php include("rodape.php");?>
