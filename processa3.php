<?php
session_start();
include_once("conexao.php");

if(!empty($_POST['estrela'])){
	$estrela = $_POST['estrela'];
	
	//Salvar no banco de dados
	$result_avaliacoes = "INSERT INTO avaliacoes (qnt_estrela, criado) VALUES ('$estrela', NOW())";
	$resultado_avaliacoes = mysqli_query($conn, $result_avaliacoes);
	
	if(mysqli_insert_id($conn)){
		$_SESSION['msg'] = "Avaliação cadastrada com sucesso";
		header("Location: index.php");
	}else{
		$_SESSION['msg'] = "Erro ao cadastrar a avaliação";
		header("Location: index.php");
	}
	
}else{
	$_SESSION['msg'] = "Necessário selecionar pelo menos 1 estrela";
	header("Location: index.php");
}