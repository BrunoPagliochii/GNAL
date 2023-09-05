<?php
    include('conexao.php');
    include('protect.php');
    include('header.php');

    $consulta = "SELECT * FROM pedido";
    $con = $conn->query($consulta) or die($conn->error);
    
    $dado = $con->fetch_array();

    $consulta1 = "SELECT * FROM dav";
    $con1 = $conn->query($consulta1) or die($conn->error);
    
    $dado1 = $con1->fetch_array();
?>

<body>
    <div class="col-6">
        <div class="m-5">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3 pb-0">
                    
                    <form method="POST" action="processa3.php" enctype="multipart/form-data">
                        <div class="card-body">
                            <li class="list-unstyled mt-0 mb-4"><img src="./img/perfil.png" alt=""> <b><?php echo $dado1["associado"]; ?></b> <div class="estrelas">
                            <input type="radio" id="vazio" name="estrela" value="" checked>

                            <label for="estrela_um"><i class="fa"></i></label>
                            <input type="radio" id="estrela_um" name="estrela" value="1">

                            <label for="estrela_dois"><i class="fa"></i></label>
                            <input type="radio" id="estrela_dois" name="estrela" value="2">

                            <label for="estrela_tres"><i class="fa"></i></label>
                            <input type="radio" id="estrela_tres" name="estrela" value="3">

                            <label for="estrela_quatro"><i class="fa"></i></label>
                            <input type="radio" id="estrela_quatro" name="estrela" value="4">

                            <label for="estrela_cinco"><i class="fa"></i></label>
                            <input type="radio" id="estrela_cinco" name="estrela" value="5" checked>

                            <input type="submit" value="Avaliar">
                        </div>
                    </form>
                </div></li>
            </div>

            <div class="card-body">
            <ul class="list-unstyled mt-0 mb-4">
            <h4 class="my-0 fw-normal"><b>Pedido nº <?php echo $dado["id"]?></b></h4> <br>
                <li><b>Endereço:</b> <?php echo $dado["logradouro"]; echo ' ';?> <br> <?php echo $dado["bairro"]; echo ', '; echo $dado["cidade"];?></li>
                <li><b>Detalhes:</b> <?php echo $dado["detalhes"]; ?></li>
                <li><b>Forma de Pagamento:</b> <?php echo $dado1["forma_pagamento"]; ?></li>
                <li><b>Detalhes:</b> <?php echo $dado["detalhes"]; ?></li>
                <li><b>Status:</b> Finalizado</li>
            </ul>

        </div>
    </div>
</div>

<?php
    include('footer.php')
?>
