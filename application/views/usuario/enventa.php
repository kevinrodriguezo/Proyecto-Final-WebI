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
    <title>Autos en venta</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link type="text/css" href="<?= base_url('css/estilo_login.css'); ?>" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Fixed navbar -->
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
            <li><a href="base">crautos.com</a></li>
            <li class="active"><a href="#">Autos en Venta</a></li>
            <li class="active">
              <form class="navbar-form navbar-left" role="search" action="buscar" method="get">
                <div class="form-group">
                  <input type="text" autofocus required class="form-control" name="search" placeholder="Busqueda">
                </div>
                <button type="submit" class="btn btn-default">Buscar</button>
              </form>
            </li>
            <li><a href="cerrarSesion">Logout</a></li>
            
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
        <div class="page-header">
        <h2><?php echo $userdata['nombre'] ." "; echo $userdata['primer_apellido']; ?></h2>
          <h1>ESTOS SON AUTOS EN VENTA</h1>
        </div>
        
        <div class="container">
          
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Marca</th>
                <th>Transmision</th>
                <th>Modelo</th>
                <th>Precio</th>
                <th>Descripcion</th>
                <th></th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($data as $value): ?>
              <tr>
                <td><?php echo $value['marca']; ?></td>
                <td><?php echo $value['transmision']; ?></td>
                <td><?php echo $value['modelo']; ?></td>
                <td><?php echo $value['precio']; ?></td>
                <td><?php echo $value['descripcion']; ?></td>
                <td><button class="btn btn-info" id="<?php echo $value['id']; ?>">Comprar</button></td>

<!--
Para que solo elimine las publicaciones de el.
                <?php if ($userdata['id']==$value['id']) : ?>
                <?php endif ?>
-->
                <td>
                  <form action="eliminarAuto" method="post">
                    <button class="btn btn-info">Eliminar</button>
                    <input hidden type="text" name="id" value="<?php echo $value['id']; ?>">
                  </form>
                </td>
                <td><button class="btn btn-info" id="<?php echo $value['id']; ?>">Editar</button></td>
              </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
        
        </div> <!-- /container -->
        <!-- Bootstrap core JavaScript
        ================================================== -->
        
      </body>
      <br>
      <br>
      <br>
      <br>
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