<?php

    $dbhost = '127.0.0.1';
    $dbUsername = 'root';
    $dbpasswor = '';
    $dbName = 'cadcliente';

    $conexao = new mysqli($dbhost, $dbUsername, $dbpasswor, $dbName );

    // if($conexao->connect_errno)
    // {
    //     echo 'erro';
    // }
    // else
    // {
    //     echo 'Conexão Efetuada';
    // }

?>