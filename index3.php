<?php
// Declare suas variáveis com números

$var1 = 50;
$var2 = 75;
$var3 = "Paulao xave";


// Verifique se a variável é um número

if (is_numeric($var1)) {
    if (is_numeric($var2)) 
        if (is_float($var3)) 
    // Se for um número, multiplique por 2
    $resultado = $var1 * 2;
    echo"<br>";
    $resultado = $var2 *2;
    echo"<br>";
    // Verifique se o novo número é maior que 100
    if ($resultado > 100) {
        echo "O resultado é maior que 100: " . $resultado;
    } else {
        echo "O resultado não é maior que 100: " . $resultado;
    }
}else {
    echo "A variável não é um número.";
}
?>
