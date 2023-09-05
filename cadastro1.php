<?php

    include("conexao1.php");

    $msg = false;

    if(isset($_FILES['arquivo'])){

        $extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //pega a extensao do arquivo
        $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
        $diretorio = "uplod/"; //define para aonde enviaremos o arquivo

        move_uploaded_files($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); //efetua o upload

        $sql_code = "INSERT INTO arquivo (arquivo) VALUES (null, '$novo_nome', NOW())";

        if ($mysqli-> query($sql_code)){
            $msg = "Arquivo enviado com sucesso!";
        }
        else {
            $msg = "Falha ao enviar arquivo.";
        }
    }   
?>

<h1>Uplod de arquivos</h1>

<form action="cadastro1.php" method="POST" enctype="multipart/form-data">
    Arquivo = <input type="file" require name="arquivo">
    <input type="submit" value="salvar">
</form>