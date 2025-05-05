<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" href="../css/boostrap.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/T4P2.css"> 
</head>
<body class="body-custom">
    <div class="container-custom"><!-- Inicia contenedor principal -->
    <?php include("../base/menu.php") ?>

        <div class="holy-grail-body">
            <section class="holy-grail-content">
                <?php include("form2.php"); ?>

                <div class="resultado-container">
                    <div class="card custom-card">
                        <div class="card-header custom-header">Resultado</div>
                        <div class="card-body">
                            <p class="card-text custom-text">
                                <?php
                                @$sueldobru = $_POST["sueldobru"];
                                @$pagoxhoras = $_POST["pagoxhoras"];

                                include("funciones.php");

                                if (isset($_POST["boton"]) && validarsueldobru($sueldobru, $pagoxhoras) === true) {
                                    sueldo($sueldobru, $pagoxhoras);
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <?php include("../base/footer.html"); ?>
    </div>
</body>
</html>
