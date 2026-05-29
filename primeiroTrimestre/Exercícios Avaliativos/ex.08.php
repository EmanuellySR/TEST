<?php
$valor = 120;

if ($valor > 100) {
    $desconto = $valor * 0.10;
    $total = $valor - $desconto;

    echo "Valor da compra: R$ " . $valor . "<br>";
    echo "Desconto de 10%: R$ " . $desconto . "<br>";
    
} else {
    echo "Valor da compra: R$ " . $valor . "<br>";
    echo "Sem desconto. Total a pagar: R$ " . $valor;
}
?>