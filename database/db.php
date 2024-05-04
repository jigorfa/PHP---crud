<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="database";

    try {
        $pdo = new PDO("mysql:host=$servername;dbname=$dbname", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Erro na conexão com o banco de dados: " . $e->getMessage();
        die();
    }