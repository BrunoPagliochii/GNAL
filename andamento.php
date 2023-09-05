<?php
    include('conexao.php');
    include('protect.php');
    include('header.php');

    $consulta = "SELECT * FROM pedido";
    $con = $conn->query($consulta) or die($conn->error);

    $dado = $con->fetch_array();

?>

<body>
    <div class="col-6">
        <div class="m-5">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Serviço em andamento nº <?php echo $dado["id"]?></h4>
                </div>
                <div class="card-body">
                <ul class="list-unstyled mt-3 mb-4">
                    <li><b>Endereço:</b> <?php echo $dado["logradouro"]; echo ' ';?> <br> <?php echo $dado["bairro"]; echo ', '; echo $dado["cidade"];?></li>
                    <li><b>Detalhes:</b> <?php echo $dado["detalhes"]; ?></li>
                </ul>

                <form action="processa2.php" method="POST">
                    <div class="form-group col-md-12">
			            <label for="data_hora"><b>Data e hora para realização da obra</b></label>
				        <input type="datetime-local" name="data_hora" id="data_hora" class="form-control" aria-label="" aria-describedby="inputGroup-sizing-sm">
			        </div>
                    
                    <select class="form-select" id="forma_pagamento" name="forma_pagamento">
                        <option selected>Forma de pagamento</option>
                        <option value="PIX">PIX</option>
                        <option value="Dinheiro">Dinheiro</option>
                        <option value="Cartao de credito">Cartão de crédito</option>
                    </select>

                    <h1 class="card-title pricing-card-title">R$ <?php echo $dado["valor"]; ?><small class="text-muted fw-light"></small></h1>
                    <button type="submit" class="w-100 btn b tn-lg btn-outline-success" value="aceitar">Aceitar</button>

                </form>

            <h1 class="card-title pricing-card-title"><small class="text-muted fw-light"></small></h1>
            <button type="button" class="w-100 btn btn-lg btn-outline-danger" value="recusar" >Recusar</button>

        </div>
        </div>
    </div>
</div>

<?php
    include('footer.php')
?>
