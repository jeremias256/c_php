<?php
session_start();

if (isset($_SESSION['usuario'])) {
    header('Location: index.php');
}

$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
    $password = hash('sha512', $_POST['password']);


    try {
        $conexion = new PDO('mysql:host=localhost;dbname=login_practica;port=3307', 'root', '');
        $statement = $conexion->prepare('SELECT * FROM usuario WHERE usuario = :usuario AND pass = :pass');
        $statement->execute(array(':usuario' => $usuario, ':pass' => $password));
        $resultado = $statement->fetch();

        if ($resultado !== false) {
            $_SESSION['usuario'] = $usuario;
            header('Location: index.php');
        } else {
            $errores = '<li>Datos incorrectos</li>';
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

include 'views/login.view.php';
