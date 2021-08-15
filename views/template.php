<?php
session_start();
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
    <link rel="stylesheet" type="text/css" href="jquery-easyui-1.9.15/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="jquery-easyui-1.9.15/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="jquery-easyui-1.9.15/themes/color.css">
    <script type="text/javascript" src="jquery-easyui-1.9.15/jquery.min.js"></script>
    <script type="text/javascript" src="jquery-easyui-1.9.15/jquery.easyui.min.js"></script>
    <script> type="text/javascript" src="jquery-easyui-1.9.15/locale/easyui-lang-es.js" </script>
     
</head>

<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark border border-danger border-2 fixed-top" >
        <div class="container-fluid">
            <a class="navbar-brand" href="ingreso.php">
                <img src="images/logo.png" alt="" width="70" class="d-inline-block align-text-top ">
            </a>
            <div class="d-inline-block align-middle title-nav">SISTEMA CONTABLE T-REX</div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " href=""> <?php echo $_SESSION['NOM_USU'] ?> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="models/sessionClose.php">Cerrar Sesion</a>
                </li>
            </ul>
        </div>
    </nav>
    <main style="margin-top: 110px;">

        <div class="row" style)="margin-top:">
            <!-- Navbar Vertical-->
            <div class="col-3">
                <?php include "views/modules/verticalNav.php";?>
            </div>
            <!-- MODULOS-->
            <div class="col" style="margin-top: 10px">
                <?php 
                $mvc = new mvcController();
                $mvc->change();
                ?>
            </div>
        </div>
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