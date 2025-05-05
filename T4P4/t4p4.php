<!DOCTYPE html>
<html lang="es">

<head>
    <title>Programa 4 - Trigonometría</title>

    <!-- Enlace al archivo de estilos personalizado para este formulario -->
    <link rel="stylesheet" href="../css/form4estilos.css">
</head>

<body>

    <!-- Inclusión del menú -->
    <?php include("../base/menu.html"); ?>

    <div class="card h-100"><!--Titulo de la aplicación-->
        <h1 class="card-header">Cálculo trigonométrico de un ángulo</h1>
    </div><!--Titulo de la aplicación-->
    <!-- Inclusión del formulario para ingresar el ángulo -->
    <?php include("form4.php"); ?>

    <!-- Inclusión del archivo que contiene los cálculos y resultados -->
    <?php include("calculos.php"); ?>

    <!-- Inclusión del pie de página -->
    <?php include("../base/footer.html") ?>
</body>

</html>