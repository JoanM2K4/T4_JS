<?php
include("calculos.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    // Llamada a la función ValidarDatos
    $validacion = ValidarDatos($a, $b, $c);

    $resultado = "";
    if ($validacion !== true) {
        $resultado = "<div class='alert alert-danger mt-4'>$validacion</div>";
    } else {
        $resultado = "<div class='alert alert-success mt-4'>" . cuadratica($a, $b, $c) . "</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Ecuación Cuadrática</title>
    <link rel="stylesheet" href="./css/etiloForm3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- Enlace al archivo de estilos personalizado para este formulario -->
    <link rel="stylesheet" href="../css/form4estilos.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/t4p3.css">   
</head>

<body>
    <!-- Inclusión del menú -->
    <?php include("../base/menu.html"); ?>

    <div class="card h-100"><!--Titulo de la aplicación-->
        <h1 class="card-header">Cálculo de reices racionales </h1>

        <div class="container mt-5">
            <h2 class="text-center">Calculadora de Ecuación Cuadrática</h2>
            <form method="post" class="mt-4">
                <div class="mb-3">
                    <label for="a" class="form-label">Coeficiente a:</label>
                    <input type="text" class="form-control" id="a" name="a" placeholder="Ingrese el coeficiente a"
                        required>
                </div>
                <div class="mb-3">
                    <label for="b" class="form-label">Coeficiente b:</label>
                    <input type="text" class="form-control" id="b" name="b" placeholder="Ingrese el coeficiente b"
                        required>
                </div>
                <div class="mb-3">
                    <label for="c" class="form-label">Coeficiente c:</label>
                    <input type="text" class="form-control" id="c" name="c" placeholder="Ingrese el coeficiente c"
                        required>
                </div>
                <button type="submit" class="btn btn-primary">Calcular Raíces</button>
            </form>

            <?php
            if (isset($resultado)) {
                echo $resultado;
            }
            ?>
        </div>

    <!-- Inclusión del pie de página -->
    <?php include("../base/footer.html") ?>
</body>

</html>