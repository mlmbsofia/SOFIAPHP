<?php

date_default_timezone_set('America/Sao_Paulo');
function saudacao() : string
{
    $hora = date('H');
    if ($hora < 0 && $hora > 5) {
        $saudacao = "Boa madrugda!";
    }
    elseif ($hora >= 5 && $hora < 12) {
        $saudacao = "Bom dia!";
    }
    elseif ($hora >= 12 && $hora < 18) {
        $saudacao = "Boa tarde!";
    }
    elseif ($hora >= 18 && $hora < 24) {
        $saudacao = "Boa noite!";
    }
    return $saudacao;

    }

