<?php

    // INFINITYFREE
    //$hostname = "sql102.epizy.com"; //Nome do servidor que se encontra nosso banco de dados
    //$dbname = "epiz_31453952_RIFAS"; //Nome do nosso banco de dados
    //$username = "epiz_31453952"; //Nome do usuário para acesso ao banco de daddos
    //$password = "pM9qN6XY30qv"; //Senha de acesso ao nosso banco de daddos

    // XAMPP
    $hostname = "localhost"; //Nome do servidor que se encontra nosso banco de dados
    $dbname = "rifa"; //Nome do nosso banco de dados
    $username = "root"; //Nome do usuário para acesso ao banco de daddos
    $password = ""; //Senha de acesso ao nosso banco de daddos
    
    try {
        $pdo = new PDO('mysql:host='.$hostname.';dbname='.$dbname, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo 'Conexão com banco de dados, realizado com sucesso!!!';
    }catch(PDOException $e) {
        echo 'Erro: '.$e->getMessage();
    }