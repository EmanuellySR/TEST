<?php
        //Array Indexado - Acesso pelo índice
        $frutas = ["Maracujá", "Laranja", "Uva", "Morango"];
        echo $frutas[3];
        $frutas[1] = "Goiaba";
        $frutas[] = "Limão";
        echo "<br>";
        print_r($frutas);
        echo "<br>";

        //Array Associativo - Acesso pela chave: Key=>value
        $pessoa = [
            "Nome" => "Manaus",
            "Idade" => 17,
            "Altura" => 1.65
        ];
        echo $pessoa["Idade"];
        echo "<br>";

        //Array Numérico Multimendisional

        $vendas = [
            ["Camiseta", 15, 30.5],
            ["Tênis", 45, 50.5],
            ["Calça", 15, 150.5]
        ];

        print_r($vendas[2][1]);
         echo "<br>";

         //Array Associativo Multidimensional

         $alunos = [
            "pessoa1" => [
                "nome" => "Joana",
                "idade" => 20,
                "altura" => 1.70
            ],
             "pessoa2" => [
                "nome" => "Sandra",
                "idade" => 49,
                "altura" => 1.66
            ]
         ];

         echo $alunos["pessoa2"]["nome"];


?>