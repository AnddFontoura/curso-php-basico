<?php
    if(!empty($_POST)) {
        $dbType = "mysql";
        $host = "localhost";
        $database = "blog";
        $port = 3306;
        $userName = "root";
        $userPassword = "";
        $options = [
            PDO::ATTR_PERSISTENT => TRUE,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
        ];
    
        $dsn = $dbType . ":host=" . $host . ";dbname=" . $database . ";port=" .$port; 
        
        try {
            $dbConnection = new PDO($dsn, $userName, $userPassword, $options);
        } catch (Exception $e) {
            switch($e->getCode()) {
                case 1049: 
                    echo "O banco de dados está com o nome errado";
                    break;
    
                default:
                    echo "Não faço ideia do que aconteceu. Reveja tudo!";
                    break;
            }
        }

        $publicationName = $_POST['publicationName'];
        $publicationDescription = $_POST['publicationDescription'];

        $sql = "
            INSERT INTO
                posts
                (name, description, created_at)
            VALUES
                ('$publicationName', '$publicationDescription', NOW())
        ";

        $query = $dbConnection->prepare($sql);
        $result = $query->execute();

        if ($result) {
            echo "Dado salvo com sucesso";
        } else {
            echo "Deu Ruim papito";
        }


    } else {
        echo "Você não veio por formulário então não vou fazer nada não";
    }
?>