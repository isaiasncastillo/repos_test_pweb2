<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Reservaciones</title>
	<link rel="stylesheet" type="text/css" href="estilologin.css">
	
	<style>
		body{
	margin: 0;
	padding: 0;
	background-image: url(imgtres.jpg); 
	background-repeat: no-repeat;

}
form{
	width: 500px;
	margin: auto;
	padding: 10px 80px;
	margin-top: 20px;

}
input[type="text"]{
	width: 90%;
	margin-bottom: 15px;
	padding: 10px;
	margin-left: 10px;
	text-align: center;
	background-color: lightblue;
}
input[type="submit"]{
	width: 90%;
	margin-bottom: 20px;
	margin-left: 10px;
	padding: 10px;
	text-align: center;
	background-color: lightblue; 
}
input[type="password"]{
	width: 90%;
	margin-bottom: 15px;
	margin-left: 10px;
	padding: 10px;
	text-align: center;
	background-color: lightblue; 
}
label {
	color: lightblue;
}
h1{
	color: lightblue;
	text-align: center;
}
h2{
	text-align: center;
}
img{
	margin-right: 15px;
}
a{
	margin: 50%;
	background-color: lightblue;
	color: white;
	padding: 10px;
	text-decoration: none;
}
a:hover{
	background-color: blue;
}
	</style>
	
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-5 col-md-offset-3">
		<div class="page-header text-center">
		  <h1>RESEVACIONES</h1>
		</div>
			<form class="form-signin" method="POST" action="manejador.php">
	        <h2 class="form-signin-heading">Inicia Seccion</h2>
	        <label for="user" class="sr-only">Usuario</label>
	        <input type="text" name="user" class="form-control" placeholder="Nombre De Usuario" required autofocus>
	        <label for="password" class="sr-only">Contraceña</label>
	        <input type="password" name="password" class="form-control" placeholder="Contraseña" required> 
	        <a href='<?php echo site_url('Iniciar/entrar')?>'>Entrar</a>
	        <!-- <input type="submit" name="submit" class="btn btn-lg btn-primary btn-block" value="Entrar"> -->
	      </form>
		</div>
	</div>	
</div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
</head>
<body>
	<div>
		
		
	</div>
	<div style='height:20px;'></div>  
    <div style="padding: 10px">
		<?php echo $output; ?>
    </div>
    <?php foreach($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
</body>
</html>