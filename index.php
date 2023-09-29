<?php
    // Declare as variáveis com tipos diferentes
    $var1 = 42;       // Tipo: inteiro
    $var2 = "Olá";    // Tipo: string
    $var3 = 3.14;     // Tipo: float

    // Verifica se a variável é um inteiro e apresenta a mensagem correspondente
    if (is_int($var1)) {
        echo "A variável 1 é do tipo inteiro. <br>";
    } else {
        echo "A variável 1 não é do tipo inteiro. <br>";
    }

    if (is_int($var2)) {
        echo "A variável 2 é do tipo inteiro. <br>";
    } else {
        echo "A variável 2 não é do tipo inteiro. <br>";
    }

    if (is_int($var3)) {
        echo "A variável 3 é do tipo inteiro. <br>";
    } else {
        echo "A variável 3 não é do tipo inteiro. <br>";
    }
?>
