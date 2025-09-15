<?php 
// supondo que a variavel $mes recebeu um dado via front-end
$mes = 12;
if ($mes == 1 || $mes == 12 && $mes < 13){
    echo "Condição verdadeira". '<br>';
    print("Estamos no mês: " . $mes);
}
else{
    echo "Condição falsa";
}
?>