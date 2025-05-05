<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller 4_Programando en PHP</title>
    
    <!--boostrap css-->

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/style.css">

    <style type="text/css">
        .cont{
            display: inline-flex;
        }
    </style>
</head>
<body>
<div class="container-fluid"><!--Inicia contenedor principal-->
        <?php include("../base/menu.html") ?>
        <main class="mt-5"> <!--etiqueta para utilizar un archivo de estilos y aplicarlos a todos los elementos de la clase-->
            
            <div class="row fila"><!--Inicia row-->
                
                <div class="col-md-12"> <!--inicia columna de 12-->
                    
                    <div class="card h-100"><!--inicio div para card-->
                        <h1 class="card-header">Elementos Básicos de la programación en PHP_Salida de datos</h1>
                    </div><!--fin div para card-->
                    <div class="card h-100"><!--inicio div para card-->
                        <h1 class="card-header">Operaciones con PHP</h1>
                    </div><!--fin div para card-->
                    <div class="container"><!--Inicio div para insertar formularios y código PHP-->

                        <div class="row cont"><!--Inicio sección-->

                            <div class=" col-md-6"><!--inicio col izquierda-->
                                <?php include("form1.php") ?><!--incrustar form1.php-->
                            </div><!--fin col izquierda-->

                            <div class=" col-md-6"><!--inicio col derecha-->
                                <?php include("Operaciones.php")?><!--incrustar Operaciones.php-->
                            </div><!--fin col derecha-->
                            

                        </div><!--fin sección-->
                        

                    </div><!--fin div formularios-->
                </div><!--finaliza columna de 12-->
                    
                
            </div><!--fin row-->
            
        </main>
    </><!--finaliza contenedor principal-->
    <?php include("../base/footer.html") ?>

</body>
</html>