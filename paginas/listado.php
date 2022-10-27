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
	<br>
	<nav></nav>
	<section>
		<h1>Listado de Libros</h1><hr>
		 <?php  
		 	 include("conexion.php");
		 	 $cn=new Conexion();
		 	 $cn->ProducttrList();

		 ?>
		
	</section>
	<br>
	<div class="container" style= "text-align: center;">
		<a href="login.php">Regresar al login</a>
	</div>
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
			