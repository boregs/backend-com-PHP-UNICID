<?php 
    echo "Ola, sou um codigo PHP";
    
    //criação de variaveis | criadas atraves do "$"
    $var = "sou uma variavel";   
    $idade = 25;
    
    echo "<br>"; // break line igual HTML
    
    //print de variaveis
    echo $var . "<br>"; //break line
    echo $idade;


    $nome = "Rafael";
    $idade = 18;
    echo"<br>";
    echo"<br>";

    echo "Meu nome é " . $nome . "<br>";
    echo "E minha idade é " . $idade;

    echo"<br>";

    // chamando a variavel dentro do "print"
    $tec = "Isso é um teste";
    echo "print: $tec"; 
    echo"<br>";
    // soma de variaveis:
    $x = '4';
    $y = '6';           // funciona tanto com aspas nos numeros quanto sem nenhuma aspas nos numeros

    echo $x + $y;
    echo"<br>";
    //juntar variaveis:
    $x = '4';
    $y = '6';           // funciona tanto com aspas nos numeros quanto sem nenhuma aspas nos numeros

    echo $x.$y; //ao inves de somar os numeros, ele junta eles | nesse caso fazendo o numero 46
    echo"<br>";

    //contantes | diferente das variaveis, elas nunca mudam
    define("teste", "Sou uma constante");
    echo teste;
    echo"<br>";
    
    const teste2 = "eu tbm sou uma constante";
    echo teste2;
?>