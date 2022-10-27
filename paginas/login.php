<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="descripcion" content="En esta tienda encontrarás libros a precio accesible. Encuentra cientos de categorias disponibles en nuestra tienda.">
	<meta name="keywords" content="libros, ventas, horror, ofertas, ficcion, drama, novedades, infantiles">
	<title>THE READERS</title>
	<link rel="stylesheet" type="text/css"  href="../css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="../css/fontawesome/css/all.css" type="text/css">
	<script type="text/javascript" src="js/jquery.js"></script>
  	<script type="text/javascript" src="../css/bootstrap/js/bootstrap.js"></script>
</head>
<body>
	<div class="container" style="background-color: #fafafa; padding-top:10px;"> 
		<header style="text-align: center;">
			<img src="../img/inicio/logoR.png" width="100px" height="100px" style="border: 1px solid #00bb2d; border-radius: 5px">
			<h1 style="font-style: italic;">THE READERS</h1>
		<hr>

		</header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
     <a class="navbar-brand" href="../index.html"><i class="fa-solid fa-house-user"></i> INICIO</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        
        <li class="nav-item">
          <a class="nav-link" href="novedades.html"><i class="fa-solid fa-book"></i> NOVEDADES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="horror.html"><i class="fa-solid fa-skull"></i> HORROR</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="drama.html"><i class="fa-solid fa-heart"></i> DRAMA/JUVENIL</a>
        </li>
        <li class="nav-item">
         <a class="nav-link" href="infantil.html"><i class="fa-solid fa-robot"></i> INFANTIL</a>
        </li>
        <li class="nav-item">
           <a class="nav-link" href="ficcion.html"><i class="fa-solid fa-jedi"></i> FICCION</a>
        </li>
        <li class="nav-item">
           <a class="nav-link" href="login.php"><i class="fa-solid fa-user"></i> USUARIO</a>
        </li>
    </ul>
    </div>
		</nav> <br>
		<section>
		<div class="container" style="width: 50%; border: 1px solid #d3d3d3; border-radius: 10px; padding: 10px;">
			<center><h3>Inicio de Sesión</h3></center>
		<form name="frmacceso" id="frmacceso" method="post" action="proceso.php">
		  <div class="mb-3">
		    <label for="txtuser" class="form-label">Usuario</label>
		    <input type="text" class="form-control" name="txtuser" id="txtuser">
		  </div>
		    <div class="mb-3">
		    	<label for="txtpsw" class="form-label">Contraseña</label>
		    	<input type="password" class="form-control" name="txtpsw" id="txtpsw">
		  	</div>
		  <button type="submit" name="btnlogin" id="btnlogin" class="btn btn-primary">Enviar</button>
		</form>
		</div>

	</section>
	<br>
	<footer>
			<div class="container" style="background-color: #082959; height: 60px; padding-top:20px; color: white;">
				<div class="row">
					<div class="col-sm-4" style="text-align: center; font-weight: bold;">THE READERS</div>
					<div class="col-sm-4" style="text-align: center; font-style
					: italic;"><i class="fa-solid fa-copyright"></i> Copyright - @Derechos Reservados 2022</div>
				</div>
			</div>

		</footer>
	</div>
	
</body>
</html>
			
