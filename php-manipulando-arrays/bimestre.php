<?php

$notasBimestre1 = [
    'Ana' => 1,
    'ze' => 4,
    'pinguelo' => 55,
    'banana' => 11,
    'macaco' => 3,
];

$notasBimestre2 = [
    'ze' => 4,
    'pinguelo' => 55,
    'banana' => 11,
    'macaco' => 3,
];

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);

var_dump(array_values($alunosFaltantes));

// array_diff() verifica a diferença de valores de dois arrays 
// array_diff_key() varifica a diferença de valores de duas chaves
// array_diff_assoc() verifica se existe diferença de valor e chave
// array_keys() pega todos as chaves do array
// array_values() pega todas os valores do array