<?php
    /**
     * O PHP assim como outras linguagens de programação necessita de váriaveis
     * a grosso modo, variaveis são espaços de memória alocados para armazenar 
     * uma determinada informação. As variaveis geralmente não podem começar com
     * outra coisa senão letras, mas podem ser seguidas de numeros, _ e - mas nunca
     * utilize caracteres especiais (acentos e simbolos) e devem sempre ser precedidas
     * por $.
     * 
     * Ex: $minhaVariavel01, $minha_VariAvEL_02
     * 
     * No PHP as variáveis são case sensitive, portanto $minhaVar é diferente de $minhavar
     * 
     * Não é necessário atribuir um escopo da sua variável, no PHP as variaveis podem trocar
     * de escopo a qualquer momento, embora não seja recomendado.
     * 
     * Para ver o resultado desse código, utilize
     * http://localhost/curso-php-basico/entendendo_variaveis.php
     */

    $varString = '200';
    $varInt = 200;
    $varFloat = 20.0;
    $varBooleanNum = 0;
    $varBooleanString = false;
    
    /**
     * No PHP temos funções para determinar qual o tipo de uma variável, geralmente são invocadas
     * por 'is_' e o tipo da variavel.
     * 
     * Ex: is_string, is_numeric, is_boolean e assim vai.
     */

    if (is_numeric($varString)) {
        echo 'É numérica <br>';
    } else { 
        echo 'Não é numérica <br>'; 
    }

    if (is_bool($varBooleanNum)) {
        echo 'É booleana <br>';
    } else { 
        echo 'Não é booleana <br>'; 
    }

    if (is_string($varFloat)) {
        echo 'É string <br>';
    } else { 
        echo 'Não é string <br>'; 
    }

    /**
     * Além desses tipos clássicos também podemos ter variáveis que são Arrays ou Objetos
     * 
     */

    $meuArray = [
        1.85,
        'Castanho claro',
        'nerd'
    ];

    $meuOutroArray = array (
        1.45, 
        'Preto', 
        'Extrovertido'
    );

    if (is_array($meuArray)) {
        echo 'variavel $meuArray é um array  <br>';
    }
    
    if (is_array($meuOutroArray)) {
        echo 'variavel $meuOutroArray é um array  <br>';
    }

    /**
     * Também temos uma maneira de declarar objetos
     */

    $meuObjeto = (object) 'foo';

    if (is_object($meuObjeto)) {
        echo "Varável é um objeto <br>";
    }
