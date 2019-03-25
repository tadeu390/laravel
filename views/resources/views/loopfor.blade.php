@extends('layouts.meulayout')

@section('minhasessaoprodutos')
	<h1>Loop for</h1>
	@for($i = 0; $i < $n; $i++)
		<p>Numero {{$i}}</p>
	@endfor
@endsection