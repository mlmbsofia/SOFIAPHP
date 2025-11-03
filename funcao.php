<?php
function mediaValores ($nota1, $nota2, $nota3, $nota4)
{
   $media = $nota1 + $nota2 + $nota3 + $nota4 / 4;
   return $media;
}

echo 'A sua média é: ' . mediaValores( 5.5,5.5, 5.5, 5.5,);
echo'<hr>';

$alunos[0]["nome"] = "Olivia";
$alunos[0]["nota"] = mediaValores( 4, 4, 4, 4,);


$alunos[1]["nome"] = "Cris";
$alunos[1]["nota"] = mediaValores( 3, 3, 3, 3,);

$alunos[2]["nome"] = "Ane";
$alunos[2]["nota"] = mediaValores( 3, 6, 9, 0,);

var_dump($alunos);

for ($i = 0; $i < count($alunos); $i++) {
    echo 'Nome do aluno: ' . $alunos[$i]["nome"] . '<br> Nota' . $alunos[$i]["nota"] . '<br>' . '<br>';
}


