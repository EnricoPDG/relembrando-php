<?php 

$notas = [
    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],
    [
        'aluno' => 'Zezinho',
        'nota' => 1,
    ],
    [
        'aluno' => 'João',
        'nota' => 3,
    ]
];

function ordenaNotas(array $nota1, array $nota2): int 
{
    
    return $nota2['nota'] <=> $nota1['nota'];
}



usort($notas, 'ordenaNotas');
var_dump($notas);