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
	        	
				<li>Binvenido</li>
	        
	            <li id = "usuario" class="user-name"></li>
	            
	            <!-- PONER EN HREF LA PAGINA DE INICIO LOGOUT/-->
	            <li><a href="salir_login.php">Salir</a></li>
           
			</ol>
        </div>
     </div> <!--cierra path-->
    </section>
	<section class="page-header">
        <div class="container">
	        <h1 class="title-ucol">DEPENDENCIAS</h1>
	    </div><!--/ Cierra .container /-->
    </section>
    
    <div class="container c-principal">
		<div class="row p-contenido">
			
			<div class="DEPENDENCIA">
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
			<link rel="stylesheet" type="text/css" href="headerfooterapp2.css">
    <title>Tabla</title>
 
    <h1 class="text-center"></h1>

   
    <a href="login.php?id=2" style="text-decoration: underline;">INICIAR SESION</a>
   
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
        <?php require_once 'obtener_datos.php' ?>
      </tbody>
    </table>

    </div>
    <!-- JS Bootstrap  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
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
    <!-- HTML5 shim y Respond.js para soporte IE8 de elementos HTML5 y media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--script>
        // Carousel Auto-Cycle
		$(document).ready(function() {
			//$('#navcontainer > #navlist').attr('data-spy','affix').attr('data-offset-top',100).attr('data-offset-bottom', 531);
			$('#sliderNaN>.rslides').responsiveSlides({auto:true,pager:true,nav:true,timeout:6000,speed:800});
			$(function () {
			  $('[data-toggle="tooltip"]').tooltip()
			})
		    $( '.form-search-ucol' ).click( function() {
				$( this ).addClass( 'active' );
			}).focusout( function() {
				$( this ).removeClass( 'active' );
			});
			$('#navcontainer > #navlist').affix({
			  offset: {
			    top: 100,
			    bottom: function () {
			      return (this.bottom = $('footer').outerHeight(true)+100)
			    }
			  }
			});
			var modWidth = $( '#navcontainer' ).width() - 30;
		    $( '#navlist' ).width( modWidth );
			jQuery( window ).resize( function () {
		        if ( jQuery( window ).width() ) {
			        var modWidth = $( '#navcontainer' ).width() - 30;
		           $( '#navlist' ).width( modWidth );
		        }
			});

			
		});
    </script-->
			
  </body>
</html>