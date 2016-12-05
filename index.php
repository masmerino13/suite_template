<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Suite</title>

  <!-- Bootstrap -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom -->
  <link href="assets/css/main.css" rel="stylesheet">
  <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>

<header>
  <div class="container-custom">
    <div class="dm-logo">
      <img src="assets/images/logo-gris.png">
    </div>
    <div class="dm-use-box">

      <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
          Ricardo Merino
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
          <li><a href="#"><i class="fa fa-edit"></i> Editar perfil</a></li>
          <li><a href="#"><i class="fa fa-key"></i> Cambiar contraseña</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="#"><i class="fa fa-sign-out"></i> Cerrar sesión</a></li>
        </ul>
      </div>

    </div>
  </div>
</header>
<section>
  <div class="container-custom">
    <div class="contenido">

      <div class="col-md-12 dm-panel">
        <div class="page-header">
          <h3><i class="fa fa-cubes"></i> Aplicaciones</h3>
        </div>
        <div class="row">
          <?php
          for($i=0;$i<=5;$i++){
            ?>
            <div class="col-md-3">
              <div class="panel-box animated fadeInDown" style="-webkit-animation-delay: <?= $i?>s;-moz-animation-delay: 0.<?= $i?>s;">
                <div class="box-icon">
                  <img src="assets/images/apps/compras.png" class="img-thumbnail">
                </div>
                <div class="box-name">
                  <h4>Modulo Evaluaciones</h4>
                  <small><strong>Rol:</strong> Evaluador</small>
                  <br>
                  <small><strong>Estado:</strong> Activo</small>
                </div>
              </div>
            </div>
            <?php
          }
          ?>
        </div>

      </div>
      <div class="col-md-5 animated fadeInDown">

        <div class="page-header">
          <h3><i class="fa fa-group"></i> Cumpleañeros del día</h3>
        </div>
        <ul class="list-group">
          <?php
          for($i=0;$i<=5;$i++) {
            ?>
            <li class="list-group-item">
              <span class="badge">Unidad de Informatica</span>
              Ricardo Merino
            </li>
            <?php
          }
          ?>
        </ul>

      </div>

      <div class="col-md-7 animated fadeInDown">

        <div class="page-header">
          <h3><i class="fa fa-cogs"></i> Utilidades</h3>
        </div>

        <div class="row">
          <a class="btn btn-primary btn-dm-big"><i class="fa fa-phone"></i> Directorio teléfonico</a>
          <a class="btn btn-primary btn-dm-big"><i class="fa fa-birthday-cake"></i> Cumpleañeros</a>
          <a class="btn btn-primary btn-dm-big"><i class="fa fa-graduation-cap"></i> Capacitaciones</a>
        </div>

      </div>

    </div>
  </div>
</section>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>