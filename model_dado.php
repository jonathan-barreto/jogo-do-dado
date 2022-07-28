<?php

include "Dado.php";
$dado = new Dado();

if(isset($_POST["numero1"]) && isset($_POST["numero2"])){
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    $resolver = $dado->MostrarResultadoJogoDado($numero1, $numero2);
    echo $resolver;
} else {
    $resultado = $dado->RetornarNumeroAleatorio();
    echo $resultado;
}

?>