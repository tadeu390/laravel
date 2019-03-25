<html>
	<head>
		<title>Meu título @yield('titulo')</title>
	</head>
	<body>
	@section('Barra lateral')
		Esta parte da sessao é do template pai
	@show
		<div>
			@yield('conteudo')
		</div>
	</body>
</html>