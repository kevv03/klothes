<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" href="img/klothescf.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Klothes - Indumentaria</title>
        <style type="text/css">
            .navegacion div a{
                color: black;
                text-decoration: none;
                font-size: 20px;
            }
        </style>
    </head>
<body>
    <header>
        <section class="navegacion">
            <div>
                <a href="index.php"><img src="img/klothessf.png" alt=""></a>
            </div>
            <div>
                <a href="tienda.php">Productos</a>
            </div>
            <div>
                <a href="ver_carrito.php"><i class='bx bx-cart-alt'></i></a>
                <a href="signup.php"><i class='bx bxs-user'></i></a>
            </div>
        </section>
    </header>
    <main>
        <section class="loginform">
            <div>
                <div>
                    <h4>Iniciar sesión</h4>
                </div>
                <form action="login.php" method="post">
                <div class="email">
                    <h5>Ingrese su correo electrónico</h5>
                    <input type="email" placeholder="ejemplo@gmail.com" name="correo">
                </div>
                <div class="passconf">
                    <div>
                        <h5>Ingresá tu contraseña</h5>
                        <input type="password" placeholder="Ingresá tu contraseña" name="contraseña">
                    </div>
                </div>
                <div class="botonregist">
                    <input name="btningresar" type="submit" value="Iniciar sesión">
                </div>
                </form>
                <div class="quieroreg">
                    <a href="signup.php">Quiero registrarme</a>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <section class="pieuno">
            <div>
                <h5>Seguinos</h5>
                <a href="https://www.instagram.com">Instagram</a>
                <a href="https://www.facebook.com">Facebook</a>
                <a href="https://www.twitter.com">Twitter</a>
            </div>
            <div class="contact">
                <h5>Contactanos</h5>
                <p>Ante cualquier duda o consulta recordá que podés escribirnos al whatsapp al +541124457388 o al correo contactoklothes@gmail.com <br> Nuestro horario de atención es de lunes a viernes de 10 a 18hs. y sábados de 8 a 13hs.</p>
            </div>
        </section>
        <section class="piedos">
            <div>
                <h5>Envíos a toda la Argentina. Tu compra está cifrada y protegida siempre por los medios de pagos más seguros.</h5>
                <img src="../img/mediosdepago.png" alt="">
            </div>
        </section>
        <section class="pietres">
            <div>
                <ul>
                    <li><a href="">Preguntas frecuentes</a></li>
                    <li><a href="">Manual de usuario</a></li>
                </ul>
            </div>
        </section>
        <div>
            <p>Copyright 2022 © Klothes. Todos los derechos reservados.</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>