<?php

function contartempo(string $date) : string
{

    $agora = strtotime(date('Y-m-d H:i:s'));
    $tempo = strtotime($date);

    echo ($agora);
    echo "<hr>";
    echo ($tempo);

    $diferenca = $tempo - $agora;

}

contartempo( 2025-10-27 14:10:20)