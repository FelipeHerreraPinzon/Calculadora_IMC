<?php
require_once '../Model/CalculadoraIMC.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $altura = $_POST["altura"];
    $peso = $_POST["peso"];

    require_once '../Model/CalculadoraIMC.php';
    $calculator = new CalculadoraIMC($altura, $peso);
    $imc = $calculator->calcularIMC();
    $interpretacion = ($imc !== null) ? $calculator->interpretarIMC($imc) : "";

    require '../Views/resultado.php';
}
?>
