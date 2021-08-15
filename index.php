<?php
 include("models/login.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T-REX</title>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark border border-danger border-2 fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="images/logo.png" alt="" width="70" class="d-inline-block align-text-top ">
            </a>
            <div class="d-inline-block align-middle title-nav">SISTEMA CONTABLE T-REX</div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#inicio">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#acercade">Acerca de</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#nosotros">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#contactanos">Contáctanos</a>
                </li>
            </ul>
        </div>
    </nav>
    <main style="margin-top: 120px;" id="inicio">
        <!-- LOGIN-->
        <section  class="container col-4 border border-danger border-2"
            style="margin-top: 30px; margin-bottom: 30px; padding-bottom: 10px; padding-top: 10px;">
            <p class="text-center text-danger fs-4 fw-bold">LOGIN</p>
            <form action="index.php" method="POST">
                <div class="mb-3">
                    <label for="usuario" class="form-label">Usuario: </label>
                    <input type="text" required class="form-control" id="usuario" name="usuario">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" required class="form-control" id="password" name="password">
                </div>
                <div class="text-center">
                    <button type="submit" class=" bg-secondary btn text-white">Ingresar</button>
                </div>
            </form>
        </section>
        <div class="container-sm line line-separate bg-secondary"></div>
        <!-- ACERCA DE-->
        <section style="margin-bottom: 20px;" id="acercade">

            <div id="carouselExampleControls" class="carousel slide container col-10 " data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active ">
                        <img src="images/img-carousel-1.jpg"
                            class="d-block w-100 img-size rounded-pill border border-dark" alt="...">
                        <div class="text-center fs-4 fst-italic fw-bold">
                            <p>Aumenta tus ingresos controlando el stock de tu negocio.</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="images/img-carousel-2.jpg"
                            class="d-block w-100 img-size rounded-pill border border-dark" alt="...">
                        <div class="text-center fs-4 fst-italic fw-bold">
                            <p>Tus trabajadores podrán realizar ventas con mucha facilidad.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/img-carousel-3.jpg"
                            class="d-block w-100 img-size rounded-pill border border-dark" alt="...">
                        <div class="text-center fs-4 fst-italic fw-bold">
                            <p>Genera reportes de tus ventas e inventarios en las fechas que desees.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon text"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>

        </section >
        <div class="container-sm line line-separate bg-secondary"></div>
        <!-- NOSOTROS-->
        <section id="nosotros">
            <div class="text-center fw-normal fs-4">
                <p>Somos SaurioSoftware una empresa centradad en el desarrollo de aplicaciones de escritorio y
                    aplicaciones web.</p>
                <p>Contamos con la asesoria de un experto desarrollador y docente de la Universidad Técnica de Ambato,
                    el Ing. Carlos Nuñez.</p>
            </div>
        </section>

    </main>
    <!-- CONTACTANOS-->
    <footer id="contactanos" class="container-fluid bg-secondary" style="padding-bottom: 10px; padding-top: 10px;">
        <div class="text-center" style="padding-bottom: 5px;">
            <img src="images/logoEmp.png" alt="">
        </div>
        <div class="container d-flex justify-content-center">
        <table>
                <tbody>
                    <tr>
                        <td>Alex Tigselema Pacheco</td>
                        <td>Tlf: 0967205537</td>
                        <td>e-mail: atigselema4371@uta.edu.ec</td>
                    </tr>
                    <tr>
                        <td>José Pazmiño Fiallos</td>
                        <td>Tlf: 0995668401</td>
                        <td>e-mail: jpazmino3452@uta.edu.ec</td>
                    </tr>
                    <tr>
                        <td>Jhoel Puetate Mier</td>
                        <td>Tlf: 0961803004</td>
                        <td>e-mail: ppuetate7650@uta.edu.ec</td>
                    </tr>
                    <tr>
                        <td>Kevin Suarez Gonzalez</td>
                        <td>Tlf: 0990599319</td>
                        <td>e-mail: ksuarez4724@uta.edu.ec</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </footer>
</body>

</html>

