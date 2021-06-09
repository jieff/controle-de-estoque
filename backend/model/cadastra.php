<?php


function cadastraProdutos(){
        include '../persistencia/conexao.php';
        $produto   = strtoupper($_POST['produto']);
        $categoria = $_POST['categoria'];
        $custo     = $_POST['custo'];
        $venda     = $_POST['venda'];
        $qtd       = $_POST['qtd'];
        $sku       = strtolower($_POST['sku']); 
        $numero    = $_POST['numero'];
        $cor       = $_POST['cor'];
        $ean       = $_POST['ean'];
        $sql = "INSERT INTO produtos (produto, categoria, custo, venda, qtd, sku, numero, cor, ean) 
        VALUES('$produto','$categoria','$custo','$venda','$qtd','$sku','$numero','$cor','$ean')";
        mysqli_query($mysqli, $sql);
        header("Location:../../cadastroProduto.html");
}

cadastraProdutos()

?>