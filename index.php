<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha página PHP</title>
</head>

<body>
    <!-- comentário html -->

    <?php
    alteração

    // CÓDIGO PHP AQUI
    
    echo "Olá, mundo!"; // Imprime uma mensagem na tela
    
    echo "<br>";

    // VARIÁVEIS
    $nome = "John";
    $idade = 17;
    $altura = 1.75;


    echo "Meu nome é $nome, tenho $idade anos e minha altura é $altura metros.";

    echo "<br>";

    // CONDICIONAIS
    if ($idade >= 18) {
        echo "Você é maior de idade.";
    } else {
        echo "Você é menor de idade.";
    }

    echo "<br>";

    // LAÇOS DE REPETIÇÃO
    // echo "Tabuada do 5: <br>";
    // for ($x = 0; $x <= 10; $x++) {
    //     $resultado = 5 * $x;
    //     echo "5 x $x = $resultado <br>";
    // }

    // FUNÇÕES
    
    function tabuada($valor)
    {
        echo "Tabuada do $valor: <br>";
        for ($x = 0; $x <= 10; $x++) {
            $resultado = $valor * $x;
            echo "$valor x $x = $resultado <br>";
        }
    }
    tabuada(1);
    tabuada(2);
    tabuada(3);

    // tabuadaDois();



    ?>


</body>

</html>