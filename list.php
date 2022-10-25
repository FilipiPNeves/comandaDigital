<?php
    include_once "conexao.php";

$query_pedidos = "SELECT id, pedido, anotacoes, mesa FROM pedidos LIMIT 100";
$result_pedidos = $conn->prepare($query_pedidos);
$result_pedidos->execute();


$dados = "";
while($row_pedidos = $result_pedidos->fetch(PDO::FETCH_ASSOC)){
    //var_dump($row_pedidos);
    extract($row_pedidos);
    $dados .= "<tr><td>$id</td><td>$pedido</td><td>$anotacoes</td><td>$mesa</td></tr>";
}

echo $dados;