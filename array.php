<?php

$meses = array();
$mes =[
    'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho',
    'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'
];
foreach ($mes as $key => $value) {
    echo $key . '=>' . $value . '<br>';
}
echo '<hr>';
echo 'VAR_DUMP';
var_dump($mes);
echo '<hr>';
echo 'Posição 1 do array MÊS'. '<br>';
echo $mes[1];
echo '<hr>';

function dataAtual(): string
{
    $diaMes = date('d');
    $diaSemana = date('w');
    $mes = date('n');
    $ano = date('Y');

    $nomeDosMeses = [ 'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho',
        'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];

    $nomeDiaDaSemana = ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];

    $dataFormatada = $nomeDiaDaSemana[$diaSemana] . ',' . $diaMes . ',' . 'de';
}


