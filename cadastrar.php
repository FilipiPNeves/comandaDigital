<?php
    include_once "conexao.php";

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$query_pedido = "INSERT INTO pedidos (pedido, anotacoes, mesa) VALUES (:pedido, :anotacoes, :mesa)";
$cadastrar_pedido = $conn->prepare($query_pedido);
$cadastrar_pedido->bindParam(':pedido', $dados['pedido']);
$cadastrar_pedido->bindParam(':anotacoes', $dados['anotacoes']);
$cadastrar_pedido->bindParam(':mesa', $dados['mesa']);
$cadastrar_pedido->execute();

if($cadastrar_pedido->rowCount()){
    $retorna = ['erro' => false, 'msg' => "<div class='alert alert-success' role='alert'>Pedido cadastrado com sucesso!</div>"];
}else{
    $retorna = ['erro' => true, 'msg' => "<div class='alert alert-danger' role='alert'>Pedido NÃO cadastrado com sucesso!</div>"];
}

echo json_encode($retorna);