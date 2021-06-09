<?php

/**Lista produtos do banco de dados */
function listaProdutos(){

    include '../persistencia/conexao.php';
        $sql = 'SELECT * FROM produtos';
        $res = mysqli_query($mysqli, $sql);

    echo "<table class='table table-striped table-hover'>
            <thead>
                <th>SKU</th>
                <th>Categoria</th>
                <th>Produto</th>
                <th>Cor</th>
                <th>Número</th>
                <th>Qtd</th>
                <th>Custo</th>
                <th>Venda</th>
            </thead>";
    while($dado = mysqli_fetch_assoc($res)){
        echo "<tbody>";
        echo "<tr>";
                echo "<td>" . $dado['sku'] . "</td>";
                echo "<td>" . $dado['categoria'] . "</td>";
                echo "<td>" . $dado['produto'] . "</td>";
                echo "<td>" . $dado['cor'] . "</td>";
                echo "<td>" . $dado['numero'] . "</td>";
                echo "<td>" . $dado['qtd'] . "</td>";
                echo "<td> R$ " .number_format($dado['custo'],2,',','.') . "</td>";
                echo "<td> R$ " .number_format($dado['venda'],2,',','.') . "</td>";
        echo "</tr>";
        echo "</tbody>";
    }
    echo "</table>";
}
/**Lista calculos do banco de dados */
function listaCalculos(){
    echo "<div class='container-sm'>";
            echo "<div class='row'>";
                    echo "<div class='col-3'>";
                        echo "Quantidade de Produtos: ", calculaQtd() . "<br>";
                        echo "Valor Total de Venda: ", calculaCusto() . "<br>";
                        echo "Valor Total de Venda: ", calculaVenda();
                    echo "</div>";
                       
                        echo "<div class='col-3'>";
                                echo "Numeração 40: ",calculaNumeracao(40);   
                        echo "</div>";

                        echo "<div class='col-3'>";
                                echo "Numeração 39: ",calculaNumeracao(39);   
                        echo "</div>";

                    echo "<div class='col-3'>";
                        echo "Valor Total de Venda: ", calculaVenda(); 
                    echo "</div>";
            echo "</div>";
    echo "</div>";
}

?>