<?php

$nomes = ["Jao", "Joana", "Jose"];


for ($i = 0; $i < count($nomes); $i++)
    {
        echo $nomes[$i] . "<br>";
    }
    echo "<br>";

    foreach ($nomes as $nome){
        echo $nome . "<br>";
    }
?>