<?php
    require 'database.php';
    $message = '';
    if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['nombre']) && !empty($_POST['apellido'])) {
    $sql = "INSERT INTO usuarios (correo, contraseña, nombre, apellido) VALUES (:email, :password, :nombre, :apellido)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':nombre', $_POST['nombre']);
    $stmt->bindParam(':apellido', $_POST['apellido']);

    if ($stmt->execute()) {
        $message = 'Su cuenta ha sido creada con éxito';
    } else {
        $message = 'Ha ocurrido un error en la creación de la cuenta, intente nuevamente';
    }
    }
?>