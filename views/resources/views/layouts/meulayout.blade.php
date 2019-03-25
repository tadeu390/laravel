<html>
	<head>
		<title>Meu título @yield('titulo')</title>
		<!--<link rel="stylesheet" href="{{asset('css/app.css')}}">-->
		<link rel="stylesheet" href="{{URL::to('css/app.css')}}">
	</head>
	<body>
		@hasSection('minhasessaoprodutos')
		<div class='card'>
			<div class='card-body'>
				<div class='card-title' style='width: 500px; margin: 10px;'>
					<p class='card-text'>
						@yield('minhasessaoprodutos')
					</p>
					<a href="#" class='card-link'>Informações</a>
					<a href="#" class='card-link'>Ajuda</a>
				</div>
			</div>
		</div>
		@endif
		<!--<script type="text/javascript" src="{{asset('js/app.js')}}"></script>-->
		<script type="text/javascript" src="{{URL::to('js/app.js')}}"></script>
	</body>
</html>