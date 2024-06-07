<?php
session_start();

function lerTempos($numVoltas, $tempos) {
    if (count($tempos) != $numVoltas) {
        die("Número de tempos fornecidos não corresponde ao número de voltas.");
    }
    return $tempos;
}

function calcularEstatisticas($tempos) {
    $melhorTempo = min($tempos);
    $voltaMelhorTempo = array_search($melhorTempo, $tempos) + 1;
    $tempoMedio = array_sum($tempos) / count($tempos);
    
    return [$melhorTempo, $voltaMelhorTempo, $tempoMedio];
}

function calcularSomaCheques($cheques) {
    return array_sum($cheques);
}
?>