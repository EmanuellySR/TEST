
<?php

    $idade = 17;
    $temCarteira = true;

    if ($idade >=18 && $temCarteira == true){
        echo "pode dirigir";
    }
    else {
        echo "nao pode dirigir";
    }

    echo "<br>";

    $dia = "sabado";
    if ($dia == "sabado" || $dia == "domingo") {
        echo "final de semana";
    }
    else {
        echo "dia de semana";
    }

    echo "<br>";

    $nota = 8;

    if($nota >= 7){
        echo "aprovado";
    }
    elseif ($nota >= 5){
        echo "recuperação";
    }
    else {
        echo "reprovado";
    }
    echo "<br>";

    #operador tenário

    $idade1 = 5;
    $mensagem = ($idade1 >= 18) ? "maior de idade": "menor de idade";
    echo $mensagem;
    
    ?>