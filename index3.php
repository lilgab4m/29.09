<?php
// Declare duas variáveis com números
$numero1 = 73;
$numero2 = 95;

// Declare uma variável com uma string
$texto = "Paulaoe xave";

// Verifique se a variável é um número
if (is_numeric($numero1)) {
    // Se for um número, multiplique por 2
    $resultado = $numero1 * 2;

    // Verifique se o novo número é maior que 100
    if ($resultado > 100) {
        echo "O resultado é maior que 100 por que é <br>" . $resultado ;
    } else {
        echo "O resultado não é maior que 100 por que é<br>" . $resultado ;
    }
} else {
    echo "A variável não é um número.<br>";
}
?>
