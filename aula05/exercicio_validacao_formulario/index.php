<?php
#exercicio: criar um programa que valida alguns campos antes de mandar para a DB
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $estadocivil = $_POST['estadocivil'];
    $uf = $_POST['uf'];
    $dependentes = $_POST['dependentes'];
    $idade = $_POST['idade'];
    

    echo "Nome: $nome <br>";
    echo "Email: $email <br>";
    #verificar estado civil
    switch($estadocivil){
        case "Casado<br>":
            print("C");
            break;
            case "Solteiro":
                print("S<br>");                
                break;
                case "Divorciado":
                    print("D<br>");                    
                    break;
                    case "Viuvo":
                        print("V<br>");                        
                        break;
        default;
            print('ERRO: Estado Civil invalido<br>');
            break;
    }

    #verificar UF
    $uf_sigla = strtoupper($uf);
    print($uf_sigla . '<br>');

    #verificar dependentes
    if($dependentes < 0){
        print("ERRO: Numero de depentendes invalido<br>");
    }else{
        print("Dependentes: $dependentes<br>");
    }

    #verificar idade

    if($idade < 18){
        print("ERRO: Idade menor que permitida, SAIA DO SITE<br>");
    }else{
        print("Idade valida, prossiga.<br>");
    }
?>