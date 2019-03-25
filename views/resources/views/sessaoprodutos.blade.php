@extends('layouts.meulayout')

@section('minhasessaoprodutos')
	@if(isset($palavra))
		<p>Palavra: {{$palavra}}</p>
	@endif
@endsection