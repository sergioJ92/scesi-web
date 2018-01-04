<!DOCTYPE html>
<html>
<head>
	<title>Usuarios - cargo</title>
</head>
<body>
	<h1>Vista auxiliar de cargos</h1>


	@if($edad)
		<h4>{{'Mi nombre es: '}}{{$nombre}}{{"  \n Mi apellido es: "}}{{$apellido}}{{" \n Mi cargo es: "}}{{$cargo}}{{" \n Mi edad es: "}}{{$edad}}</h4>	
	@else
		<h4>{{'Mi nombre es: '}}{{$nombre}}{{"  \n Mi apellido es: "}}{{$apellido}}{{" \n Mi cargo es: "}}{{$cargo}}{{" \n Mi edad es: No quiero decirla XD"}}</h4>
	@endif

</body>
</html>