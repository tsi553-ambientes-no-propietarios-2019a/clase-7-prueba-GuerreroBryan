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
    <form action="validar3.php" method="POST" class="form-signin">
      <img class="mb-4" src="http://www.consultoriavitae.es/wp-content/uploads/2017/03/tag-1703954_1280-300x222.png" alt="" width="200" height="120">
      <h1 class="h3 mb-3 font-weight-normal">Registro de Productos</h1>
      <input type="text" name="codigo" class="form-control" placeholder="Ingrese el codigo del producto" required="required"><br>
      <input type="text" name="producto" class="form-control" placeholder="Ingrese un nombre del producto" required="required"><br>
      <select name="seleccion" class="custom-select">
          <option selected>Open this select menu</option>
          <option value="Alimento">Alimento</option>
          <option value="Vestimenta">Vestimenta</option>
          <option value="Salud">Salud</option>
        </select>
        <br><br>
      <input type="text" name="cantidad" class="form-control" placeholder="Ingrese stock del producto" required="required"><br>
      <input type="text" name="precio" class="form-control" placeholder="Ingrese precio por cada unidad" required="required"><br>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Registrar  </button><br>
      <a class='btn btn-primary' href='inicio.php'role='button'>Atras</a>
    </form>
      
</body>
</html>