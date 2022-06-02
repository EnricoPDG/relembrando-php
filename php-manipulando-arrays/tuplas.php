<?php

$dados = [
    'nome' => 'Nath',
    'idade' => 19,
    'beleza' => 10,
];

extract($dados);
var_dump($nome, $idade, $beleza);

var_dump(compact('nome','idade','beleza'));