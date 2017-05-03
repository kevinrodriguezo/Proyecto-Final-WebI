<?php
if (!isset($_SESSION['user'])){
redirect('login');
}
$userdata= $this->session->userdata('user');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Bienvenido a crautos.com</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link type="text/css" href="<?= base_url('css/estilo.css'); ?>" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          
        </div>


        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">crautos.com</a></li>
            <li><a href="registro">Registrarse</a></li>
            <li><a href="<?=base_url()?>Usuario/login">Login</a></li>
            <li><a href="cerrarSesion">Logout</a></li>
            <li><a href="#">Poner en Venta</a></li>
            
          </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
    </head>
    <body>
      <br>
      <br>
      <br>
     
      <div class="container theme-showcase" role="main">
        <br>
        
        <div class="page-header">
          <h2><?php echo $userdata['nombre'] ." "; echo $userdata['primer_apellido']; ?></h2>
          <h1>Marcas</h1>
        </div>
        <form method="post" action="buscarHyu" >
          <button class="btn btn-default">
          <img src="http://localhost/ProyectoFinalWebI/imagenes/hyundailogo.jpg", width="350" class="img-thumbnail" alt="A generic square placeholder image with a white border around it, making it resemble a photograph taken with an old instant camera"> &nbsp;&nbsp;&nbsp;
          
          </button>
          
        </form>

        <form action="buscarHo" method="post">
        <button class="btn btn-default">
        <img src="http://localhost/ProyectoFinalWebI/imagenes/honda.jpg"; width="350"; height="2000" class="img-thumbnail" alt="A generic square placeholder image with a white border around it, making it resemble a photograph taken with an old instant camera">
        &nbsp;&nbsp;&nbsp;
        </button>
        
          </form>

          <form action="buscarNi" method="post">
          <button class="btn btn-default">
        <img src="http://localhost/ProyectoFinalWebI/imagenes/nissanlogo.jpg"; width="350"; height="200" class="img-thumbnail" alt="A generic square placeholder image with a white border around it, making it resemble a photograph taken with an old instant camera">
        </button>
        </form>
        </div> <!-- /container -->
        <!-- Bootstrap core JavaScript
        ================================================== -->

        <!-- 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="../../dist/js/bootstrap.min.js"></script>
        <script src="../../assets/js/docs.min.js"></script>
         IE10 viewport hack for Surface/desktop Windows 8 bug 
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
        -->
      </body>
      <br>
      <br>
      <br>
      <br>
      <!--footer start from here-->
      <footer id="foot">
        <div id="foot" class="container">
          <div class="row">
            <div class="col-md-4 col-sm-6 footerleft ">
              
              <p><i class="fa fa-phone"></i> Contacto (Costa Rica) : 2252 6768</p>
              <p><i class="fa fa-envelope"></i> E-mail : info@crautos.com</p>
              
            </div>
            <div class="col-md-2 col-sm-6 paddingtop-bottom">
              <p><i class="fa fa-envelope"></i> Todos Los Derechos Reservados:</p>
              <p><i class="fa fa-envelope"></i>Kevin Rodriguez 2017</p>
            </div>
            <div class="col-md-3 col-sm-6 paddingtop-bottom">
              <p><i class="fa fa-envelope"></i> Contactenos en Facebook</p>
              
              <div class="col-md-3 col-sm-6 paddingtop-bottom">
                <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-height="300" data-small-header="false" style="margin-bottom:15px;" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                  <div class="fb-xfbml-parse-ignore">
                    <blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/crautos/">Facebook</a></blockquote>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </footer>
        <!--footer start from here-->
      </html>