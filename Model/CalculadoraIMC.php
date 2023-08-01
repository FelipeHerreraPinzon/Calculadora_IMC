<?php
class CalculadoraIMC {
    private $altura;
    private $peso;

    public function __construct($altura, $peso) {
        $this->altura = floatval($altura);
        $this->peso = floatval($peso);
    }

    public function calcularIMC() {
        if ($this->altura > 0 && $this->peso > 0) {
            $imc = $this->peso / ($this->altura * $this->altura);
            return round($imc, 2);
        }
        return null;
    }

    public function interpretarIMC($imc) {
        if ($imc === null) {
            return "Por favor, ingresa valores válidos para altura y peso.";
        } elseif ($imc < 18.5) {
            return "Peso bajo";
        } elseif ($imc >= 18.5 && $imc <= 24.9) {
            return "Peso normal";
        } elseif ($imc >= 25 && $imc <= 29.9) {
            return "Sobrepeso";
        } else {
            return "Obesidad";
        }
    }
}
?>
