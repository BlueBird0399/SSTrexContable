<nav class="border border-dark border-2 rounded vb">
    <div class="container col text-center">
        <p class="fs-4">FACTURACION</p>
        <ul class="nav flex-column " style="margin-bottom: 5px;">
            <li class="nav-item ">
                <a class="btn btn-outline-danger w-100 fs-5" href="ingreso.php?action=ventas">Ventas</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-outline-danger w-100 fs-5" href="ingreso.php?action=gestionclientes">Registrar Cliente</a>
            </li>
        </ul>
        <p class="fs-4">PRODUCTOS</p>
        <ul class="nav flex-column ">
        <?php if($_SESSION['ROL_USU']=='A') { ?>
            <li class="nav-item ">
                <a class="btn btn-outline-success w-100 fs-5" href="ingreso.php?action=controlproductos">Control de Productos</a>
            </li>
        <?php } ?>
            <li class="nav-item">
                <a class="btn btn-outline-success w-100 fs-5" href="ingreso.php?action=inventario">Inventarios</a>
            </li>
        </ul>
        <p class="fs-4">REPORTES</p>
        <ul class="nav flex-column ">
            <li class="nav-item ">
                <a class="btn btn-outline-primary w-100 fs-5" href="ingreso.php?action=masvendido">Más vendido</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-outline-primary w-100 fs-5" href="ingreso.php?action=vendidosemana">Más vendido entre semana</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-outline-primary w-100 fs-5" href="ingreso.php?action=agotado">Agotados</a>
            </li>
        </ul>
    </div> 
</nav>

