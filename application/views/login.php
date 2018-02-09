<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SysPessoal - Login</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo $url; ?>user_guide/template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo $url; ?>user_guide/template/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?php echo $url; ?>user_guide/template/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
  </br></br>
    <center><h1 style="font-size: 48pt; color: white;">SysPessoal</h1></center>
    <div class="card card-login mx-auto mt-5">

      <div class="card-header">Login</div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">E-mail</label>
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Seu e-mail">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Sua senha">
          </div>

          <a class="btn btn-primary btn-block" href="#">Login</a>
        </form>
        <div class="text-center">
        </br>
          <a class="d-block small" href="#">Esqueceu sua senha?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo $url; ?>user_guide/template/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo $url; ?>user_guide/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?php echo $url; ?>user_guide/template/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
