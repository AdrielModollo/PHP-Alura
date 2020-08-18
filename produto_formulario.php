<?php include("cabecalho.php");?>
    <!--Faz um requisão para a página adiciona_produto -->
                <h1>Formulario de produto</h1>
    <form action="adiciona_produto.php">
        Nome:
        <input type="text" name="nome"><br/>
        Preço:
        <input type="number" name="preco"><br/>

        <input type="submit" value="Cadastrar">
    </form>
<?php include("rodape.php");?>
