<?php

function contarTempo(string $date) : string
{

    $agora = strtotime(date('Y-m-d H:i:s'));
    $tempo = strtotime($date);

    echo ('Data do pc '. $agora);
    echo "<hr>";
    echo ('Data digitada '. $tempo);

    $diferenca = $tempo - $agora;
    echo "<hr>";
    echo ('Diferença '. $diferenca);

    $segundos = ($diferenca);
    $minutos= round($diferenca / 60);
    $horas = round($diferenca / 3600);
    $dias = round($diferenca / 86400);
    $semanas = round($diferenca / 604800);
    $meses = round($diferenca / 2419200);
    $anos = round($diferenca / 31536000);

    if ($segundos >= 60) {
        return 'Agora ';
    }elseif ($minutos >= 60) {
        return $minutos == 1 ? ' Há um minuto' : "Há" . $minutos . " minutos";
    }elseif ($horas >= 24) {
        return $horas == 1 ? ' Há 1 hora' : "Há" . $horas . " horas";
    }elseif ($dias >= 7) {
        return $dias == 1 ? ' Há 1 dia' : 'Há' . $dias . ' dias';
    }elseif ($semanas >= 4) {
        return $semanas == 1 ? 'há 1 semana' : 'Há' . $meses . " semanas";
    }elseif ($meses >= 12) {
        return $meses == 1 ? 'há 1 mês' : 'Há' . $meses . 'meses';
    }else{
        return $anos == 1 ? 'há 1 ano' : 'há' . $anos . " anos";
    }

}
echo '<hr>';
echo contarTempo('2025-10-27 15:12:00');