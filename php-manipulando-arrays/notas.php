<?php

$notas = [
    'Ana' => null,
    'ze' => 4,
    'pinguelo' => 55,
    'banana' => 11,
    'macaco' => 3,
];


var_dump(in_array(4, $notas));

// array_key_exists = verifica se a chave existe
// in_array = verifica se o valor existe
// isset = verifica se a chave existe e não é nula