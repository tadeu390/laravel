<html>
	<head>
		<title>Meu título @yield('titulo')</title>
		<!--<link rel="stylesheet" href="{{asset('css/app.css')}}">-->
		<link rel="stylesheet" href="{{URL::to('css/app.css')}}">
	</head>
	<body>
	
	@alerta(['tipo' => 'primary']) <!--Pode ser interessante para se trabalhar com modais-->
		<strong>Erro:</strong> mensagem de erro
		@slot('titulo')
			Erro fatal
		@endslot
	@endalerta
	
	@component('components.meucomponente', ['tipo' => 'danger']) <!--Pode ser interessante para se trabalhar com modais-->
		<strong>Erro:</strong> mensagem de erro
		@slot('titulo')
			Erro fatal
		@endslot
	@endcomponent
	
	<!--<script type="text/javascript" src="{{asset('js/app.js')}}"></script>-->
	<script type="text/javascript" src="{{URL::to('js/app.js')}}"></script>
	</body>
</html>