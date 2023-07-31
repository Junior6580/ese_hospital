<?php
require_once '../controlador/css.php';
require_once '../controlador/js.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <body id="body-pd">
        <header class="header" id="header">
            <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
            <div class="header_img"> <img src="../img/logo.png" alt=""> </div>
        </header>
        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div> <a href="inicio.php" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span
                            class="nav_logo-name">Hospital Central</span> </a>
                    <div class="nav_list"> <a href="inicio.php" class="nav_link">
                            <i class="fa-solid fa-house-chimney"></i>
                            <span class="nav_name">Inicio</span> </a> <a href="agendar_cita.php" class="nav_link">
                            <i class="fa-solid fa-calendar-days"></i> <span class="nav_name">Agendar
                                Cita</span>
                        </a> <a href="#" class="nav_link"> <i class="fa-solid fa-magnifying-glass"></i> <span
                                class="nav_name">Consultar</span> </a> <a href="#" class="nav_link"> <i
                                class='bx bx-folder nav_icon'></i> <span class="nav_name">Files</span> </a> <a href="#"
                            class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span
                                class="nav_name">Stats</span> </a>
                        <a href="#" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span
                                class="nav_name">Users</span> </a>
                    </div>
                </div> <a href="login/logout.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span
                        class="nav_name">Cerrar Sesión</span> </a>
            </nav>
        </div><br>
    </body>

</html>