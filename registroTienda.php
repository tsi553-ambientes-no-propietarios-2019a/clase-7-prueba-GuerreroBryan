<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Signin Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form action="validar.php" method="POST" class="form-signin">
      <img class="mb-4" src="https://www.nutro.es/media/2014/08/icon-establecimientos-especializados.png" alt="" width="200" height="120">
      <h1 class="h3 mb-3 font-weight-normal">Registro de Tienda</h1>
      <input type="text" name="tienda" class="form-control" placeholder="Ingrese el nombre de la tienda" required="required"><br>
      <input type="text" name="usuario" class="form-control" placeholder="Ingrese un nombre de usuario" required="required"><br>
      <input type="password" name="clave1" class="form-control" placeholder="Ingrese la clave" required="required"><br>
      <input type="password" name="clave2" class="form-control" placeholder="Repita la clave" required="required"><br>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Registrar  </button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
    </form>
</body>
</html>