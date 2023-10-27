<?php
    require 'database.php';

    $email=$_POST["correo"];
    $clave=$_POST["contraseña"];

    $query = mysqli_query($conn," SELECT * FROM usuarios WHERE correo = '$email' and contraseña = '$clave' ");
    $nr = mysqli_num_rows($query);

    if($nr == 1){
        header("Location: tienda.php");
        echo "Bienvenido usuario, ya puedes disfrutar de la página sin límites";
    } else if ($nr == 0){
        echo "Usuario o contraseña incorrectos";
    }
?>