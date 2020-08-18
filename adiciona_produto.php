<html>
    <?php
        /*Está é requisão que foi solicitada através do produto_formulario */
        $nome = $_GET["nome"];
        $preco = $_GET["preco"];
    ?>
    <h1> Produto <?php echo $nome; ?> , <?php echo $preco; ?> adicionado com sucesso </h1>
</html>