<?php
// Función validarsueldobruto, verifica el sueldo bruto y pago por horas extras.
// Parámetros:
//   - $sueldobru: Sueldo bruto ingresado por el usuario.
//   - $pagoxhoras: Pago por horas extras ingresado por el usuario.
// Retorna true si ambos valores son numéricos y sueldobru y pagoxhoras > 0.
// false en caso contrario y muestra un mensaje de error.
function validarsueldobru($sueldobru, $pagoxhoras) {
    $valido = false;

    if (is_numeric($sueldobru) && is_numeric($pagoxhoras)) {
        if ($sueldobru < 0 && $pagoxhoras < 0) {
            echo '<h4 class="parr2"> Introduce valores mayores a 0. </h4>';
        } else {
            $valido = true;
        }
    } else {
        echo '<h1 class="parr2"> ERROR LETRAS </h1>';
    }
    echo "<br>";
    return $valido;
}

// Función: sueldo calcula el sueldo neto restando las deducciones del sueldo bruto.
// Parámetros:
//   - $sueldobru: Sueldo bruto ingresado por el usuario.
//   - $pagoxhoras: Pago por horas extras ingresado por el usuario.
// Muestra: El sueldo neto.
function sueldo($sueldobru, $pagoxhoras) {
    $sueldo = ($sueldobru + $pagoxhoras);
    $deduccionSeguro = number_format($sueldo * 0.0975, 2);
    $deduccionEducat = number_format($sueldo * 0.0125, 2);

    $sueldototal = $sueldo - $deduccionSeguro - $deduccionEducat;

    echo "El sueldo bruto es: " . $sueldo;
    echo "<br>";
    echo "El sueldo neto es: " . $sueldototal;
}
?>
