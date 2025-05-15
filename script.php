<?php
    // $nome_da_variavel = $_array ]
    $nome_aluno = $_POST ['nome_aluno'];
    $nota01 = $_POST ['nota01'];
    $nota02 = $_POST ['nota02'];
    $nota03 = $_POST ['nota03'];

    $media = ($nota01+$nota02+$nota03)/3;

    echo"Aluno: ".$nome_aluno;
    echo "<br>";
    echo "Sua média é: ".$media;
    
    if ($media > 5)
    {
        echo"Aprovado";
    }

    elseif ($media == 5)
    {
        echo"Recuperação";        
    }

    else
    {
        echo "Reprovado";
    }

    
/*Exibe todas as informações do array

print_r($_POST);

//comando para quebrar a linha
echo "<br>";

Exibe todas as informações 
do array com informações

var_dump($_POST);
echo "<br>";
echo $_POST['nome_aluno'];
echo "<br>";
echo $_POST['nota01'];
echo "<br>";


$nota1 = $_POST['nota01'];
$nota2 =  
echo $nota1; */

?>