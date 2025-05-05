form4.php
<!-- Formulario para ingresar un ángulo en grados -->
<form method="post"> <!-- El método POST se usa para enviar datos al servidor -->
    
    <!-- Etiqueta para el campo de entrada del ángulo -->
    <label for="angulo">Ingrese un ángulo en grados:</label>

    <!-- Campo numérico para que el usuario introduzca un ángulo. "step='any'" permite decimales. -->
    <input type="number" name="angulo" step="any" required>

    <!-- Botón para enviar el formulario y activar el cálculo -->
    <input type="submit" value="Calcular">

</form>