<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="img/klothescf.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Klothes - Indumentaria</title>
</head>
<body>
    <header>
        <section class="navegacion">
            <div>
                <a href="../index.php"><img src="../img/klothessf.png" alt=""></a>
            </div>
            <div>
                <a href="../view/login.html"><i class='bx bxs-user'></i></a>
                <a href="../view/ver_carrito.php"><?php
                                            include_once "../controller/funciones.php";
                                            $conteo = count(obtenerIdsDeProductosEnCarrito());
                                            if ($conteo > 0) {
                                                printf("(%d)", $conteo);
                                            }
                                            ?>&nbsp;<i class='bx bx-cart-alt'></i>
                </a>
            </div>
        </section>
    </header>
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", () => {
            const boton = document.querySelector(".navbar-burger");
            const menu = document.querySelector(".navbar-menu");
            boton.onclick = () => {
                menu.classList.toggle("is-active");
                boton.classList.toggle("is-active");
            };
        });
    </script>
</body>
</html>