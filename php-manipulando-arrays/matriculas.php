<?php

$notasBimestre1 = [
    'Ana',  
    'ze', 
    'pinguelo',
    'banana',
    'macaco',
];

$novosAlunos = [
    'jef',
    'nico',
    'nath',
];

$alunos2022 = array_merge($notasBimestre1, $novosAlunos);


$alunos = [...$notasBimestre1, ...$novosAlunos];
array_push($alunos, 'Enrico', 'Ze cavera');

// ... -> unpacking o array, como se estivesse jogando o elemento
// array_push() adiciona novo elemento no fim do array
// $array[] = 'Novo elemento' também adiciona novos elementos  

array_unshift($alunos, 'Sthephane'); 

// array_unshit() adiciona um novo elemento no início do array

var_dump($alunos);