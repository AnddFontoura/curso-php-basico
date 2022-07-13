<?php
    /**
     * As variaveis contém informações importantes para nós
     * e algumas vezes precisamos imprimi-las para entender
     * seu conteúdo e acompanhar o que está sendo feito em 
     * nosso código.
     * 
     * Existem algumas maneiras de se fazer isso.
     * 
     * Para ver o resultado desse código, utilize
     * http://localhost/curso-php-basico/imprimindo_variaveis.php
     */

    /**
     * Se a sua variável é uma string, array ou númerico você 
     * pode apresenta-la através do comando echo
     * 
     * Note que há duas maneiras de se fazer isso, utilizando
     * ' ou ", mas nunca os dois ao mesmo tempo
     */

    $varString = "Goku";
    $varArray = [
        'nome' => 'Goku'
    ];
    
    echo 'Olá, eu sou o ' . $varString. ' !';
    echo '<hr>';
    echo "Olá, eu sou o $varString  !";
    echo '<hr>';
    echo 'Olá, eu sou o ' . $varArray['nome']. ' !';
    echo '<hr>';
    echo "Olá, eu sou o {$varArray['nome']} !";

    /**
     * Caso seja necessário 'debugar' o código, apresentar
     * todos os valores de uma variavel, podemos utilizar o
     * var_dump($var)
     * 
     * Dica: se utilizado com a classe '<pre>' antes ele sai
     * formatado.
     */

    $varArray = [
        'nome' => 'Ditto',
        'habilidades' => [
            'transformacao',
            'investida',
            'poder oculto'
        ],
    ];

    echo "<hr>";
    var_dump($varArray);
    echo "<hr>";
    echo "<pre>";
    var_dump($varArray);
    echo "<pre>";