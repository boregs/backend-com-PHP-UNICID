<?php
// FOR EACH

//dicionario em php
$notas = [
    'n1' => 8,
    'n2' => 5,
    'n3' => 7,
    'n4' => 9,
    'n5' => 4
];
foreach($notas as $chave => $valor){
    echo "Nota - $chave: $valor <br>"
}
?>