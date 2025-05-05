<?php
// Definición de la clase Trigonometria
class Trigonometria {
    // Atributos privados para almacenar los grados y su equivalente en radianes
    private $grados;
    private $radianes;

    // Constructor que recibe el valor del ángulo en grados y lo convierte a radianes
    public function __construct($grados) {
        $this->grados = $grados;
        $this->radianes = deg2rad($grados); // Conversión a radianes
    }

    // Método para calcular y devolver el seno del ángulo
    public function getSeno() {
        return round(sin($this->radianes), 4); // Redondea a 4 decimales
    }

    // Método para calcular y devolver el coseno del ángulo
    public function getCoseno() {
        return round(cos($this->radianes), 4); // Redondea a 4 decimales
    }

    // Método para calcular y devolver la tangente del ángulo
    public function getTangente() {
        $cos = cos($this->radianes);
        // Si el coseno es prácticamente cero, la tangente es indefinida
        if (abs($cos) < 1e-10) return "Indefinida";
        return round(tan($this->radianes), 4); // Redondea a 4 decimales
    }

    // Método para determinar en qué eje o cuadrante se encuentra el ángulo
    public function getCuadrante() {
        $modulo = fmod($this->grados, 360); // Reduce el ángulo a un valor entre 0 y 359
        if ($modulo < 0) $modulo += 360; // Asegura que sea positivo

        // Determina la ubicación según el valor del ángulo
        if ($modulo == 0 || $modulo == 180 || $modulo == 360) return "Eje X";
        if ($modulo == 90 || $modulo == 270) return "Eje Y";
        if ($modulo > 0 && $modulo < 90) return "Primer cuadrante";
        if ($modulo > 90 && $modulo < 180) return "Segundo cuadrante";
        if ($modulo > 180 && $modulo < 270) return "Tercer cuadrante";
        return "Cuarto cuadrante";
    }
}

// Verifica si se envió el formulario por método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $grados = $_POST["angulo"]; // Obtiene el valor ingresado por el usuario

    // Crea un objeto de la clase Trigonometria
    $trigo = new Trigonometria($grados);

    // Imprime los resultados
    echo "<h3>Resultados:</h3>";
    echo "<div class='resultados'>";
    echo "Ángulo ingresado: $grados&nbsp;&deg;<br>";
    echo "Seno: " . $trigo->getSeno() . "<br>";
    echo "Coseno: " . $trigo->getCoseno() . "<br>";
    echo "Tangente: " . $trigo->getTangente() . "<br>";
    echo "Ubicación: " . $trigo->getCuadrante() . "<br>";
    echo "</div>";
}
?>