<!DOCTYPE html>
<html>
<head>
	<title>Get Casas</title>
</head>
<body>
	<h2 align="center">Casas</h2>
	<ul>
		@foreach ($casas as $casa)
			<div style="border-style: solid;">
				<h2>ID: {{$casa->id}}</h2>
				<h1>Descripción: {{$casa->descripcion}} </h1>
				<img src="{{$casa->link}}" width="200px" height="200px" alt="">
			</div>
		@endforeach
	</ul>
</body>
</html>