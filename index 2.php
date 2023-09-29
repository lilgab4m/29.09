<?php
// Declare 3 variáveis com tipos de dados diferentes


$variavel1 = 42;            // Um inteiro
$variavel2 = "O diaz e top!";  // Uma string
$variavel3 = 3.14;      // Um número de ponto flutuante

// Função para verificar se a variável é um inteiro


function verificarTipo($variavel) {
    if (is_int($variavel)) {
        echo "A variável é do tipo inteiro.";
    } else {
        echo "A variável não é do tipo inteiro.";
    }
}

// Verifique o tipo de cada variável
verificarTipo($variavel1);
echo "<br>";

verificarTipo($variavel2);
echo "<br>";

verificarTipo($variavel3);
echo "<br>";
?>
