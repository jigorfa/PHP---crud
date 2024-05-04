<?php
    require("../database/db.php");
    if (empty($_POST['user']) || empty($_POST['password'])){
        header('location:login_form.php');
        exit();
    }

    $user = $_POST['user'];
    $password = $_POST['password'];

    $query = "SELECT usuario, senha FROM usuarios WHERE usuario = :usuario AND senha = :senha";

    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":usuario", $user);
    $stmt->bindParam(":senha", $password);
    
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($stmt->rowcount()==1) {
        session_start();
        $_SESSION["user"] = $user['usuario'];
        header("location:../index.php");
        exit();
    } else{
        header('location:login_form.php?e=1');
        exit();
    }