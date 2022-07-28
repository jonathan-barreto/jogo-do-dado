<?php

class Dado {
    public function RetornarNumeroAleatorio(){
        $numero = rand(1,6);
        return $numero;
    }

    public function MostrarResultadoJogoDado($numero1, $numero2){
        if($numero1 > $numero2){
            return "Jogador1 ganhou!";
        }
        else if($numero1 < $numero2){
            return "Jogador2 ganhou!";
        }
        else{
            return "Empate";
        }  
    }
}