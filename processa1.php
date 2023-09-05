<?php
include_once("conexao.php");

$servico = filter_input(INPUT_POST, 'servico', FILTER_SANITIZE_STRING);
$detalhes = filter_input(INPUT_POST, 'detalhes', FILTER_SANITIZE_STRING);
$logradouro = filter_input(INPUT_POST, 'logradouro', FILTER_SANITIZE_STRING);
$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$horario = filter_input(INPUT_POST, 'horario');


$result_usuario = "INSERT INTO pedido (servico, detalhes, logradouro, bairro, cidade, horario, criado) VALUES ('$servico', '$detalhes', '$logradouro', '$bairro', '$cidade', '$horario', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	header("Location: andamento.php");
}else{
	header("Location: nova.php");
}
