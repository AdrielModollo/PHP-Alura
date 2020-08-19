<?php

    //função para listagem de produtos
    function listaProdutos($conexao){
        $produtos = array();
        //select para busca de produtos atribuido a uma variavel resultado
        $resultado = mysqli_query($conexao, "select p.*,c.nome as categoria_nome from produtos as p join categorias as c on p.categoria_id = c.id");
        //equanto existir produtos é executado
            while($produto = mysqli_fetch_assoc($resultado)) {
                //array puxa todos os produtos armazenado na váriavel $produto.   
                array_push($produtos, $produto);
            }
            //retorna valor atribuido ao array produtos.
            return $produtos;
        }
    

    //Cria uma função que é chamada uma única vez para adição de produtos
    function insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado) {
        //É informado parametros que o servidor vai receber
        $query = "insert into produtos (nome, preco, descricao, categoria_id, usado) values ('{$nome}', {$preco} , '{$descricao}' , {$categoria_id} , {$usado})";
        //Retorna o resultado do mysql query
        return mysqli_query($conexao, $query);
    }


    //Remoção de produtos

    function removeProduto($conexao, $id){
        $query = "delete from produtos where id = {$id}";
        return mysqli_query($conexao, $query);
    }

?>