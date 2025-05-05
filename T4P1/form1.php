<?php
// Captura de datos del formulario
@$num1 = $_POST["num1"];
@$num2 = $_POST["num2"];
@$op = $_POST["operacion"];

// Inicia el formulario
echo '
<style>
    .form-container {
        display: flex;
        justify-content: flex-start;
        gap: 30px; /* Espacio más controlado entre los dos lados */
        padding: 10px;
        max-width: 800px; /* Limita el ancho total para evitar exceso de espacio */
        margin: 0; /* Centra el formulario horizontalmente */
    }

    .form-left, .form-right {
        width: auto; /* Alternativa mejor controlada a `flex: 1` */
    }
</style>

<form autocomplete="off" action="index.php" method="POST" role="form">
    <div class="form-container">
        <!-- LADO IZQUIERDO: VALOR 1 Y 2 -->
        <div class="form-left">
            <legend>Ingrese Valor 1</legend>
            <input type="text" name="num1" placeholder="Ingrese sólo números"><br><br>

            <legend>Ingrese Valor 2</legend>
            <input type="text" name="num2" placeholder="Ingrese sólo números"><br><br>
        </div>

        <!-- LADO DERECHO: OPERACIÓN Y BOTONES -->
        <div class="form-right">
            <label for="operacion"><strong>ELIJA LA OPERACIÓN</strong></label><br>
            <select name="operacion" id="operacion">
                <option value="1">SUMA</option>
                <option value="2">RESTA</option>
                <option value="3">MULTIPLICACIÓN</option>
                <option value="4">DIVISIÓN</option>
                <option value="5">POTENCIA</option>
                <option value="6">RAÍZ CUADRADA DE VALOR 1 Y 2</option>
            </select><br><br>

            <button type="submit" class="btn btn-primary btn-calcula">Calcular</button><br><br>
            <button type="reset" class="btn btn-default btn-limpiar">Limpiar casillas</button><br><br>
        </div>
    </div>
</form>
';
?>