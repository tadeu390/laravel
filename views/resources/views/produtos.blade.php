<html>
	<head>
		<title>Meu título @yield('titulo')</title>
		<!--<link rel="stylesheet" href="{{asset('css/app.css')}}">-->
		<link rel="stylesheet" href="{{URL::to('css/app.css')}}">
	</head>
	<body>
		
		@if(isset($produtos))
			@if(count($produtos) == 0)
				<h1>Nenhum produto</h1>
			@elseif(count($produtos) === 1)
				<h1>Um produto</h1>
			@else
				<h1>Temos vários produtos</h1>
			@endif
			
			@foreach($produtos as $item)
				<p>Nome: {{$item}}</p>
			@endforeach
		@else
			<h2>Variável produtos não foi passado como parâmetro</h2>
		@endif
		
		@empty($produtos)
			<h2>Nada em produtos</h2>
		@endempty
	
	<!--<script type="text/javascript" src="{{asset('js/app.js')}}"></script>-->
	<script type="text/javascript" src="{{URL::to('js/app.js')}}"></script>
	</body>
</html>