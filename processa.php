<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$cpf = filter_input(INPUT_POST, 'cpf');
$senha = filter_input(INPUT_POST, 'senha');
$confirme_senha = filter_input(INPUT_POST, 'confirme_senha');

$result_usuario = "INSERT INTO users (nome, sobrenome, email, cpf, senha, confirme_senha, criado) VALUES ('$nome', '$sobrenome', '$email', '$cpf', '$senha', '$confirme_senha', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	header("Location: login.php");
}else{
	header("Location: cadastro.php");
}
