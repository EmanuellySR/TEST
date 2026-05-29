<?php
$num1 = 10;
$num2 = 5;
$operacao = "+";

switch ($operacao) {
    case "+":
        $resultado = $num1 + $num2;
        echo "Resultado: " . $resultado;
        break;

    case "-":
        $resultado = $num1 - $num2;
        echo "Resultado: " . $resultado;
        break;

    case "*":
        $resultado = $num1 * $num2;
        echo "Resultado: " . $resultado;
        break;

    case "/":
        if ($num2 != 0) {
            $resultado = $num1 / $num2;
            echo "Resultado: " . $resultado;
        } else {
            echo "divisão por zero";
        }
        break;

}
?>