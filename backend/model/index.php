<?php

/**Includes do header */
include '../../frontend/header.html';
include '../../frontend/header2.html';

/** Includes necessário para chamar as funcções */
include 'calcula.php';
include 'lista.php';

/**Lista produtos do banco de dados */
echo listaProdutos();

/**Efetua calculos de quantidade total de produtos, 
 * quantidade por numeração, preço de custo total, 
 * e preço de venda total no banco de dados */
echo listaCalculos();


include '../../frontend/footer.html';
?>