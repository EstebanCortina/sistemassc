<!DOCTYPE html>
<html lang="es">



<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="google-signin-client_id" content="922593851552-3nhamuvrl8lo1tncib76t1isaq5v1da5.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <!-- meta tags requeridos -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="author" content="Universidad de Colima" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Universidad de Colima" />
    <meta property="og:image" content="../../wayf.ucol.mx/ucol_mini.html" />
    <meta property="og:locale:alternate" content="es_ES" />
    <meta property="og:site_name" content="Universidad de Colima" />

    <!-- Titulo principal -->
    <title>Universidad de Colima</title>
    <!-- link requeridos -->
    <link href="../../wayf.ucol.mx/ucol_mini.html" rel="image_src" />
    <link href="img/favicon.ico" type="image/x-icon" rel="icon" />
    <!-- jQuery -->
    <script src="beta/js/jquery.min.js"></script>
    <!-- Bootstrap y header & footer agregados -->
    <link href="headerfooterapp2.css" rel="stylesheet">
    <link href="beta/css/carrusel.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="estilonew.css">

</head>

<body>
    <div id="estructura">
        <!-- Fixed navbar -->
        <nav class="navbar navbar-light bg-faded theme-primary pos-f-t">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-xs-12">
                        <button class="navbar-toggler hidden-md-up pull-right collapsed" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header" aria-expanded="false">&#x2630;</button>
                        <div class="collapse navbar-toggleable-sm" id="navbar-header">

                            <a class="navbar-brand" id="logo" href="http://www.ucol.mx/">Universidad de Colima</a>
                            <span class="home-href"><a href="index.html"></a></span>
                            <!--<ul id="navlist" class="nav navbar-primary navbar-nav pull-md-right">
						   <li class="nav-item">
						      <a class="nav-link" data-hover="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
						         Opcion 1
						      </a>
						           <ul id="subnavlist" class="dropdown-menu">
						              <li><a href="#">Sub opcion 1</a></li>
						              <li><a href="#">Sub opcion 2</a></li>
						           </ul>
						   </li>
						   <li class="nav-item">
						      <a class="nav-link" href="#">
						         Opcion 2
						      </a>
						   </li>
						   <li class="nav-item">
						      <a class="nav-link" href="#">
						         Opcion 3
						      </a>
						   </li>
						</ul>-->
                        </div>
                    </div>
                </div>
            </div>
        </nav> <!-- /navbar -->
        <section class="page-breadcrumb">
            <div class="container ">
                <div id="path">
                    <ol class="breadcrumb">
                        <li>Usted está en:</li>
                        <li><a href="http://www.ucol.mx/">Inicio</a></li>
                    </ol>
                </div>
                <div id="sesion">
                    <ol class="breadcrumb">
                        <?php
                        include("adentro.php")
                        ?>

                        <li id="usuario" class="user-name"></li>

                        <!-- PONER EN HREF LA PAGINA DE INICIO LOGOUT/-->
                        <li><a href="salir_login.php">Salir</a></li>

                    </ol>
                </div>
            </div>
            <!--cierra path-->
        </section>
        <section class="page-header">
            <div class="container">
                <h1 class="title-ucol">LISTADO DE DEPENDENCIAS </h1>
            </div>
            <!--/ Cierra .container /-->
        </section>
        <nav class="nav-sistema">
            <button class="navbar-toggler hidden-md-up pull-right collapsed" type="button" data-toggle="collapse" data-target="#navbar-header2" aria-controls="navbar-header2" aria-expanded="false">☰</button>
            <div class="collapse navbar-toggleable-sm" id="navbar-header2">
                <ul id="navlist" class="nav navbar-primary navbar-nav pull-md-right">
                    <li class="nav-item">
                        <a class="a1 nav-link" data-hover="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                            <div class="oIcono opcion1"></div>
                            Opción 1
                        </a>
                        <!--[if gte IE 7]><!-->
                        <!--<![endif]-->
                        <!--[if lte IE 6]>
	                <table>
	                    <tr>
	                        <td>
	                            <![endif]-->
                        <ul id="subnavlist" class="dropdown-menu">
                            <li><a href="#">Sub-opción 1</a></li>
                            <li><a href="#">Sub-opción 2</a></li>
                            <li><a href="#">Sub-opción 3</a></li>
                            <li><a href="#">Sub-opción 4</a></li>
                        </ul>
                        <!--[if lte IE 6]>
	                        </td>
	                    </tr>
	                </table>
	                </a><![endif]-->
                    </li>
                    <li class="nav-item">
                        <a class="a1 nav-link" data-hover="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                            <div class="oIcono opcion1"></div>
                            Opción 2
                        </a>
                        <ul id="subnavlist" class="dropdown-menu">
                            <li><a href="#">Sub-opción 1</a></li>
                            <li><a href="#">Sub-opción 2</a></li>
                        </ul>
                        <!--[if gte IE 7]><!-->
                        <!--<![endif]-->
                    </li>
                    <li class="nav-item">
                        <a class="a3 nav-link" href="plantillas.html">
                            <div class="oIcono opcion3"></div>
                            Opción 3
                        </a>
                        <!--[if gte IE 7]><!-->
                        <!--<![endif]-->
                    </li>
                </ul>
            </div>
        </nav>


        <div class="container c-principal">
            <div class="row p-contenido">
                <div class="col-xl-3 col-lg-4 col-md-4 col-xs-12 sidebar">

                </div>

                <div class="col-xl-12 col-lg-12 col-md-12 col-xs-12 main">
                    <div class="container" style="width: 900px">
                        <!-- cabecera de la tabla -->

                        <table class="table table-hover table-dark table-fixed">
                            <thread>

                                <tr style="width: 800px">
                                    <th style="width: 25px" scope="col">#</th>
                                    <th style="width: 150px" scope="col">DEPENDENCIA</th>
                                    <th style="width: 50px" scope="col">UBICACION</th>
                                    <th style="width: 175px" scope="col">DESCRIPCION</th>
                                    <th style="width: 50px" scope="col">CAPACIDAD</th>
                                    <th style="width: 125px" scope="col">RESERVAR</th>
                                </tr>
                            </thread>
                            <tbody>

                                <?php
                                /**
                                 * Creé ésta pagina para listar todas las dependencias que tenga un usuario y asi darle la libertad de poder modificar
                                 * la que considere necesario editar
                                 */
                                $conexion = mysqli_connect('localhost', 'root', '', 'sistemarepau');
    
                                if ($conexion) {
                                    include("adentro5.php");
                                    $consulta = "SELECT * FROM dependencia WHERE NoCuenta ='$usuario'";
                                    $datos = $conexion->query($consulta);
                                    if ($datos->num_rows > 0) {
                                        $contador = 0;

                                        while ($fila = $datos->fetch_assoc()) {
                                            //variables para asignar los datos del base de datos
                                            $id = $fila['ID'];
                                            $dependencia = $fila['Nombre'];
                                            $ubicacion = $fila['Dir'];
                                            $descripcion = $fila['Des'];
                                            $Capacidad = $fila['Ca'];
                                ?>
                                            <!-- imprimir los datos del base de datos a la tabla  -->
                                            <tr style="width: 800px">
                                                <td style="width: 25px"><?= $id ?></td>

                                                <td style="width: 150px"><?= $dependencia ?><br><img width="200" src="data:image/png;base64, <?php echo  base64_encode($fila['Imagen']); ?>"> </td>

                                                <td style="width: 50px"><?= $ubicacion ?></td>

                                                <td style="width: 175px"><?= $descripcion ?></td>

                                                <td style="width: 175px"><?= $Capacidad ?></td>

                                                <!-- CODIGO DEL BOTON -->

                                                <td>
                                                    <a href="ModificarDep.php?id=<?php echo $fila['ID']; ?>">MODIFICAR</a>
                                                </td>


                                            </tr>
                                <?php
                                        }
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-xs-12 sidebar">

                </div>
            </div>
            <div class="row p-inferior">
                <div class="col-md-12 p-content"></div>
            </div>
        </div>

    </div>
    <footer class="bd-footer text-muted" role="contentinfo">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-xs-12 center-links">
                    <img src="beta/img/icon/ubicacion.svg" width="20"> Direcci&oacute;n: Av. Universidad No. 333, Las V&iacute;boras; CP 28040 Colima, Colima, M&eacute;xico
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-xs-12 center-links">
                    &copy; Derechos Reservados 2018-2021 Universidad de Colima
                </div>
            </div>
        </div>
    </footer>

    <!-- JS Bootstrap -->
    <script src="beta/dist/js/tether.min.js" type="text/javascript"></script>
    <script src="beta/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="beta/dist/js/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
    <!-- JS adds -->
    <script src="beta/js/jquery.slides.js" type="text/javascript"></script>
    <script src="beta/js/carruselV3.2.js" type="text/javascript"></script>
    <script src="beta/js/jquery.flexisel0815.js" type="text/javascript"></script>
    <script src="beta/js/purl.js"></script>
    <script src="beta/js/custom.min.js" type="text/javascript"></script>
    <script src="js/custom.js" type="text/javascript"></script>


</body>

</html>