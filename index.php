<?php 
	session_start();
 ?>
<html lang="es">
<head>	
	<meta charset="UTF-8">
	<link type="image/x-icon" href="media/favicon.png" rel="icon"/>
	<title>Encuentra la receta perfecta</title>
	<link href='http://fonts.googleapis.com/css?family=Josefin+Slab:700' rel='stylesheet' type='text/css'>
</head>

<style type="text/css">
	body {
			background-color: #002233;
			font-family: 'Josefin Slab', serif;
			font-size: 20px;
		}
	.log {
			background-color: #3365A3;
			width: 300px;			
			margin: 0 auto;			
			border-radius: 15px;
			text-align: center;

		}
	.log2 {			
			width: 300px; 
			height: 250px; 
			margin: 0 auto;			
			text-align: center;
			vertical-align: middle;
			color: white;			
		}
</style>

<body>
	<div class="log2">	
	<img src="media/escudo.png"/>
	<p>"El recetario" </p>
	</div>	

	<div class="log">			
		<FORM action= 'menu.php' method= 'POST'>		
		<br>Usuario
		<br><INPUT type= text name='Usuario'><br>
		<br>Password<br>
		<INPUT type= password name='Password'><br>			
 		<br><INPUT type= submit value='Ingresar'>
		</FORM>
	</div>		
</body>
</html>