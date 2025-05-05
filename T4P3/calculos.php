<?php
function ValidarDatos($a, $b, $c) {
    // Verificar que los valores no estén vacíos
    if (empty($a) || empty($b) || empty($c)) {
        return "Todos los campos son obligatorios. Por favor, complete los tres coeficientes.";
    }

    // Verificar que los valores sean números válidos
    if (!is_numeric($a) || !is_numeric($b) || !is_numeric($c)) {
        return "Todos los coeficientes deben ser números válidos.";
    }

    // Convertir los valores a números flotantes
    $a = floatval($a);
    $b = floatval($b);
    $c = floatval($c);

    // Verificar que 'a' no sea igual a 0
    if ($a == 0) {
        return "No es una ecuación cuadrática. El coeficiente 'a' debe ser diferente de 0.";
    }

    // Calcular el discriminante
    $discriminante = pow($b, 2) - 4 * $a * $c;

    // Verificar que el discriminante no sea negativo
    if ($discriminante < 0) {
        return "Error: El discriminante (b² - 4ac) es menor que cero, por lo que no se pueden calcular raíces reales.";
    }

    return true; // Datos válidos
}

function cuadratica($a, $b, $c) {
    $a = floatval($a);
    $b = floatval($b);
    $c = floatval($c);

    $discriminante = pow($b, 2) - 4 * $a * $c;

    if ($discriminante == 0) {
        $x = -$b / (2 * $a);
        return "La ecuación tiene una raíz doble: x = $x";
    } else {
        $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
        $x2 = (-$b - sqrt($discriminante)) / (2 * $a);
        return "La ecuación tiene dos raíces reales: x1 = $x1, x2 = $x2";
    }
}
?>