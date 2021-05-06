<!DOCTYPE html>
<html lang="es">
  
<head>
	 <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="google-signin-client_id" content="922593851552-3nhamuvrl8lo1tncib76t1isaq5v1da5.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
	<!-- meta tags requeridos -->
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
	<meta name="author" content="Universidad de Colima"/>
	<meta http-equiv="x-ua-compatible" content="ie=edge"/>
	<meta property="og:type" content="website"/>
	<meta property="og:description" content="Universidad de Colima"/>
	<meta property="og:image" content="../../wayf.ucol.mx/ucol_mini.html"/>
	<meta property="og:locale:alternate" content="es_ES" />
	<meta property="og:site_name" content="Universidad de Colima" />
	<link rel="stylesheet" type="text/css" href="estilonew.css">
	<link rel="stylesheet" href="maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
		
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
	<link href="estilonew.css" rel="stylesheet">
    
  </head>
  <body>
	<div id="estructura">
	<!-- Fixed navbar -->
	<nav class="navbar navbar-light bg-faded theme-primary pos-f-t">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-xs-12">
					<button class="navbar-toggler hidden-md-up pull-right collapsed" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header" aria-expanded="false">&#x2630;</button>			        <div class="collapse navbar-toggleable-sm" id="navbar-header">
				        
			            <a class="navbar-brand" id="logo" href="http://www.ucol.mx/">Universidad de Colima</a>
			            <span class="home-href"><a href="index.html"></a></span>

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
        		include("adentro.php");
        		?>
	            	
	            <li id = "usuario" class="user-name"></li>
	            
	            <!-- PONER EN HREF LA PAGINA DE INICIO LOGOUT/-->
	            <li><a href="salir_login.php">Salir</a></li>
           
			</ol>
        </div>
     </div> <!--cierra path-->
    </section>
	<section class="page-header">
        <div class="container">
	        <h1 class="title-ucol">RESERVAR</h1>
	    </div><!--/ Cierra .container /-->
    </section>
    
    <div class="container c-principal">
		<div class="row p-contenido">
			
			<div class="RESERVAR">
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
			<link rel="stylesheet" type="text/css" href="headerfooterapp2.css">
    <title>Reservar</title>
  </head>
  <body>
  	<?php include("MostrarReservacion.php"); ?>
  </body>
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