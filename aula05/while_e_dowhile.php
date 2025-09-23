<?php 
# while comum
$numero = 0;
/*
while($numero == 100){
    echo $numero"<br>";
    $numero++;
}
echo "Fim do loop";
*/

# do while | while pode nunca executar o código, do-while executa o código pelo menos uma vez.
do {
    echo $numero . "<br>";
    $numero++;
} while($numero <= 100);

echo "Fim do loop";

# O while verifica a condição antes de executar o bloco (pode nunca rodar), enquanto o do-while executa 
#o bloco primeiro e verifica a condição depois (garantindo que rode pelo menos uma vez).
?>