<?php
session_start();
include_once("conexao.php");

$data_hora = filter_input(INPUT_POST, 'data_hora');
$forma_pagamento = filter_input(INPUT_POST, 'forma_pagamento');

$result_usuario = "INSERT INTO dav (data_hora, forma_pagamento, criado) VALUES ('$data_hora', '$forma_pagamento', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	header("Location: historico.php");
}else{
	header("Location: historico.php");
}