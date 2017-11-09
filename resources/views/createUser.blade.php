<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crear usuario</title>
</head>
<body>
	<form action="/casas/login" method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		Nombre:<input type="text" name="nombre">
		Apellido:<input type="text" name="apellido"><br>
		<input type="submit" name="login" value="Login"><br>
	</form>

	<form action="/casas/register" method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		Nombre:<input type="text" name="nombreRegistrar">
		Apellido:<input type="text" name="apellidoRegistrar"><br>
		<input type="submit" name="registrar" value="Registar"><br>
	</form>
</body>
</html>