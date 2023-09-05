<?php
    include('protect.php');
    include('header.php');
?>

<body>

    <!--Corpo do site-->
    <main class="corpo-index">
        <h1><b>Escolha uma de nossas opções de serviço a baixo!</b></h1>
    
        <!--Icones de serviço de cima-->
        <div class="holder-cima">

            <div class="imagem-cima">
              <a href="nova.php"><img src="./img/pedreiro.png" alt="pedreiro"></a>
            </div>
          
            <div class="imagem-cima">
              <a href="nova.php"><img src="./img/eletrecista.png" alt="eletrecista"></a>
            </div>

            <div class="imagem-cima">
              <a href="nova.php"><img src="./img/encanador.png" alt="encanador"></a>
            </div>
        </div>

              <!--Icones de serviço de cima-->
        <div class="holder-baixo">
              <div class="imagem-baixo">
                <a href="nova.php"><img src="./img/jardineiro.png" alt="jardineiro"></a>
              </div>

              <div class="imagem-baixo">
                <a href="nova.php"><img src="./img/pintor.png" alt="pintor"></a>
              </div>

              <div class="imagem-baixo">
                <a href="nova.php"><img src="./img/carpinteiro.png" alt="pintor"></a>
              </div>
        </div>
    </main>
  
<?php
    include('footer.php');
?>