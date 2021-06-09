<?php

//calcula custo total dos produtos
function calculaCusto(){

    include '../persistencia/conexao.php';
    $sql = 'SELECT sum(custo) FROM produtos';
    $res = mysqli_query($mysqli, $sql);

    while($dado = mysqli_fetch_assoc($res)){
        echo "R$ ".number_format($dado['sum(custo)'],2,',','.');
    } 
}
//calcula preço total de vendas
function calculaVenda(){

    include '../persistencia/conexao.php';
    $sql = 'SELECT sum(venda) FROM produtos';
    $res = mysqli_query($mysqli, $sql);

    while($dado = mysqli_fetch_assoc($res)){
        echo "R$ ".number_format($dado['sum(venda)'],2,',','.');
    } 
}
//calcula a quantidade total de produtos
function calculaQtd(){

    include '../persistencia/conexao.php';
    $sql = 'SELECT sum(qtd) FROM produtos';
    $res = mysqli_query($mysqli, $sql);

    while($dado = mysqli_fetch_assoc($res)){
        echo $dado['sum(qtd)'];
    } 
}
//calcula a quantidade de produtos por numeração
function calculaNumeracao($n){

    include '../persistencia/conexao.php';
    $sql = "SELECT sum(qtd) FROM produtos WHERE numero='$n'";
    $res = mysqli_query($mysqli, $sql);

    while($dado = mysqli_fetch_assoc($res)){
        echo $dado['sum(qtd)'];
    }
}

?>