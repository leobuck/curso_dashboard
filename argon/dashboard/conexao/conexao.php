<?php 
    $host = 'localhost';
    $base = 'bd-imobiliaria';
    $usuario = 'root';
    $senha = '';

    $conexao = mysqli_connect($host, $usuario, $senha, $base);

    // try {
    //     $conexao = new PDO('mysql:host=localhost;dbname=bd-imobiliaria', $usuario, $senha);
    //     $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // } catch (PDOException $e) {
    //     echo 'ERROR: ' . $e->getMessage();
    // }
?>