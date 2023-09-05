<?php
    include('protect.php');
    include('header.php');
?>

<main class="form-dav">
        <div class="formulario-dav">
            <form action="processa1.php" method="POST">
                <div class="dav">
                    <label for="servico"><h3>Serviços</h3></label>
                    <select id="servico" name="servico">
                        <option value="pedreiro">Pedreiro</option>
                        <option value="eletrecista">Eletrecista</option>
                        <option value="encanador">Encanador</option>
                        <option value="jardineiro">Jardineiro</option>
                        <option value="pintor">Pintor</option>
                    </select>
                </div>

                <div class="dav">
                    <label for="detalhes"><h3>Detalhes</h3></label>
                    <input id="detalhes" type="text" name="detalhes" placeholder="EX: Troca de lampada" required>
                </div>

                <div class="dav">
                    <label for="logradouro"><h3>Logradouro</h3></label>
                    <input id="logradouro" type="text" name="logradouro" placeholder="Ex: Rua do Comércio, Numero 12" required>
                </div>

                <div class="dav">
                    <label for="bairro"><h3>Bairro</h3></label>
                    <input id="bairro" type="text" name="bairro" placeholder="Ex: Centro" required>
                </div>

                <div class="dav">
                    <label for="cidade"><h3>Cidade</h3></label>
                    <input id="cidade" type="text" name="cidade" placeholder="Ex: Concórdia" required>
                </div>

                <div class="dav">
                    <label for="horario"><h3>Hora</h3></label>
                    <input id="horario" type="datetime-local" name="horario" placeholder="Horario para chegada do contratado" required>
                </div>



                <div class="envia-dav">
                    <input type="submit" value="Enviar">
                </div>
            </div>
        </form>
    </main>

    <?php
    include('footer.php');
    ?>

</body>