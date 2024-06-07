<?php
include 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numVoltas = $_POST['numVoltas'];
    $tempos = $_POST['voltas'];

    $tempos = lerTempos($numVoltas, $tempos);
    list($melhorTempo, $voltaMelhorTempo, $tempoMedio) = calcularEstatisticas($tempos);

    echo "Melhor tempo: " . $melhorTempo . "<br>";
    echo "Volta com o melhor tempo: " . $voltaMelhorTempo . "<br>";
    echo "Tempo médio: " . $tempoMedio . "<br>";
} else {
    echo "Método de requisição inválido.";
}
?>