<?php

$db_host = "localhost";
$db_user = "host";
$db_password = "host";
$db_name = "practica";

$db_connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (!$db_connection) {
    die("Error de conexión");
}

# Validación básica de entrada
$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';

if (empty($email) || empty($password)) {
    die("Email y contraseña son obligatorios");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Email no válido");
}

# Hash seguro de la contraseña 
$password_hash = password_hash($password, PASSWORD_DEFAULT);

# Sentencia preparada: evita inyección SQL
$sql = "INSERT INTO usuarios (email, password) VALUES (?, ?)";
$stmt = mysqli_prepare($db_connection, $sql);
mysqli_stmt_bind_param($stmt, "ss", $email, $password_hash);
mysqli_stmt_execute($stmt);

mysqli_stmt_close($stmt);
mysqli_close($db_connection);

header("Location: https://getbootstrap.com/docs/4.0/examples/sign-in/");
exit();

?>