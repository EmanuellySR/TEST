<?php

    if ($_SERVER["REQUEST_METHOD"]=="GET"){
        $nome = $_GET['nome'];
        $senha = $_GET['senha'];
    }
    echo $nome;
    echo "<br>";


?>