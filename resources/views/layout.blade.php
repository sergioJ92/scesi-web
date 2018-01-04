<!DOCTYPE html>
<html>
<head>
	<!--Import Google Icon Font-->
	<!--<link rel="stylesheet" type="text/css" href="{ asset('css/iconos.css') }">--><!-- lo que remplace de la pagina de materialize de iconos-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/materialize.min.css') }}" media="screen,projection">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/materialize.css') }}" media="screen,projection">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/estilos_scesi.css') }}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title></title>
</head>
<body>

    <div class="col s12 m8 blue-grey lighten-5">
		<nav class="nav-extended blue-grey lighten-1">
			<div class="row">
				<div class="nav-wrapper">
		    		<div class="col m10 offset-m1">
			    		<a href="#" class="brand-logo">
			      			<img src="{{ asset('imagenes/logo-scesi.png')}}" alt="" class="responsive-img" id="icono">
			      		</a>
			      		<!--menu para pantalla normal-->
				      	<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				      	<ul id="nav-mobile" class="right hide-on-med-and-down">
				        	<li><a href="#">Iniciar secion</a></li>
				      	</ul>
				      	<!--menu para [ara movil-->
				      	<ul class="side-nav" id="mobile-demo">
					       	<li><a href="#">Iniciar secion</a></li>
					    </ul>
				    </div>	
		    	</div>
		    </div>
		    <div class="row">
		    	<div class="col m11 offset-m1">	
			        <div class="nav-content">
				      	<ul class="tabs tabs-transparent">
				      		<li><a href="#">Home</a></li>
				        	<li><a href="#">Usuarios</a></li>
				      	</ul>
				    </div>
			    </div>
		    </div>
		</nav>	
    	<div class="row">
			<div class="container">
				<div class="col s12 m12">
					<main role="main">
						@yield('content')	
					</main>
				</div>
			</div>
		</div>
		<footer class="page-footer blue-grey lighten-1">
	        <div class="container">
	        	<div class="row">
	          		<div class="col l6 s12">
	            		<h5 class="white-text"></h5>
	            		<p class="grey-text text-lighten-4">Comprometidos al desarrollo e investigacion de ciencias de la computacion</p>
	          		</div>
	        	</div>
	        </div>
	        <div class="footer-copyright">
		        <div class="container">
		        	2017 Scesi Umss 
		        	<a class="grey-text text-lighten-4 right" href="#!">Sociedad cientifica</a>
		        </div>
	        </div>
	    </footer>
	</div>
	
		
	<!--<script type="text/javascript" src="{ asset('js/jquery-3.2.1.min.js') }"></script>--> <!-- lo que remplace de la pagina de materialize del jquery-->
    <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/materialize.js') }}"></script>

</body>
</html>