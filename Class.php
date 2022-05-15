<?php

class Imc {
    private $peso;
    private $altura;

    function __construct($p, $a)
    {
        $this->peso = $p;
        $this->altura = $a;
    }
    function calcular() {

        $msg = "<span class='danger'>Peso e altura não compatíveis.</span>";
        
        if ($this->altura > 1 || $this->peso >= 18.5) {

            $result = $this->peso / ($this->altura ^ 2) + 3.5;
            $NumFtd = number_format($result,2,",",".");
    
            switch ($result) {
                case $result <= 18.5:
                    $msg = 	 "Resultado: $NumFtd."
                            ."\n\t\t\t"
                            ."<br/>\n"
                            ."\t\t\t"
                            ."<span class='warning'>E você está classificado como Abaixo do peso</span>.";
                    break;
                case $result > 18.51 and $result < 24.9:
                    $msg = 	 "Resultado: $NumFtd."
                            ."\n\t\t\t"
                            ."<br/>\n"
                            ."\t\t\t"
                            ."<span class='success'>E você está classificado como Saudável</span>.";
                    break;
                case $result >= 25 and $result < 29.9:
                    $msg = 	 "Resultado: $NumFtd."
                            ."\n\t\t\t"
                            ."<br/>\n"
                            ."\t\t\t"
                            ."<span class='warning'>E você está classificado com Sobrepeso</span>.";
                    break;
                case $result >= 30 and $result < 34.9:
                    $msg =  "Resultado: $NumFtd."
                            ."\n\t\t\t"
                            ."<br/>\n"
                            ."\t\t\t"
                            ."<span class='between'>E você está classificado com Obesidade grau 1</span>.";
                    break;
                case $result >= 35 and $result < 39.9:
                    $msg = 	 "Resultado: $NumFtd."
                            ."\n\t\t\t"
                            ."<br/>\n"
                            ."\t\t\t"
                            ."<span class='danger'>E você está classificado com Obesidade grau 2</span>.";
                    break;
                case $result >= 40:
                    $msg = 	 "Resultado: $NumFtd."
                            ."<br/>\n"
                            ."\t\t\t"
                            ."<span class='danger'>E você está classificado com Obesidade grau 3</span>.";
                    break;
                default:
                    $msg = "ERRO!!!!";
                    break;
            }
        }
        return $msg;
    }
}
/*

IMC             	    Resultado
Menos do que 18,5	    Magreza
Entre 18,51 e 24,9	    Saudável
Entre 25.0 e 29,9 	    Sobrepeso
Entre 30.0 e 34,9	    Obesidade grau 1
Entre 35.0 e 39,9	    Obesidade grau 2
Mais do que 40.0	    Obesidade grau 3


*/
?>