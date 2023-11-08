<?php

$penalizado = false;
$horaInicial = 8;
$horaFinal = 17;

$horaEntrada= 8;
$tiempoMaximoRetraso = 0.1;


function hours ($penalizado, $horaInicial, $horaFinal, $horaEntrada, $tiempoMaximoRetraso){
 
    if ($penalizado) {
        echo $penalizado;
    };

    if (!$penalizado){
        
        $horaEntradaMaxima = $horaEntrada + $tiempoMaximoRetraso;

        $horaEntradaAnalizada = 0;

        if ($horaInicial < $horaEntradaMaxima){
            $horaEntradaAnalizada = $horaEntrada;
        }
        else {
            $horaEntradaAnalizada= $horaInicial;
        };

        $horas = ($horaFinal > $horaEntradaAnalizada) ?  $horaFinal - $horaEntradaAnalizada : 0;

        return $horas;

    };
};

$resultado = hours($penalizado, $horaInicial, $horaFinal, $horaEntrada, $tiempoMaximoRetraso);

echo $resultado;