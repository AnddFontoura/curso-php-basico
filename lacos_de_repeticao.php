<?php

    /**
     * Laços de repetição são estruturas feitas para que possamos
     * repetir uma determinada operação até que uma questão lógica
     * seja resolvida. (Resolvida entende-se dada como verdadeira ou falsa)
     * 
     * O PHP possui os seguites laços de repetição
     * do while,
     * while,
     * foreach,
     * for,
     * 
     * Seguiremos explicando eles no código.
     * 
     * Para ver o resultado desse código, utilize
     * http://localhost/curso-php-basico/lacos_de_repeticao.php
     */

    $latamCountry = [
    'Brasil',
    'Bolivia',
    'Paraguai',
    'Uruguai',
    'Argentina',
    ];

    echo "<h1> Exemplo com 'do while' </h1>";

    $i = 0;
    do {
        echo $latamCountry[$i] . '<br>';
        $i++;
    } while ($i < count($latamCountry));

    echo "<h1> Exemplo com 'while' </h1>";

    $i = 0;
    while ($i < count($latamCountry)) {
        echo $latamCountry[$i] . '<br>';
        $i++;
    }

    echo "<h1> Exemplo com 'foreach' </h1>";

    foreach($latamCountry as $country){
        echo $country . '<br>';
    }

    echo "<h1> Exemplo com 'for' </h1>";

    for($i = 0; $i < count($latamCountry); $i++) {
        echo $latamCountry[$i] . '<br>';
    }

    /**
     * Tá, se todos os laços produzem o mesmo efeito, quando utilizar um ou outro?
     * 
     * É simples.
     * 
     * o laço 'do while' (faça enquanto) ele sempre executa pelo menos uma vez, não utilize
     * se você não tiver a certeza que a variável chega nesse momento preenchido
     * ou você pode gerar um erro na execução do código.
     * 
     * O operador while (enquanto) ele geralmente é utilizado quando você tem certeza da condição
     * e ela sempre vai acontecer de forma simples, sem a necessidade de comparar variáveis.
     * 
     * O operador foreach (para cada) é mais utilizado hoje em dia quando 'tanto faz' a quantidade 
     * de registros ou dados na sua variável e você quer passar obrigatoriamente por todas elas.
     * 
     * Já o for (para) é amplamento usado quando há necessidade de se passar apenas por alguns registros
     * colocando condicionais ou situações. 
     */

 
