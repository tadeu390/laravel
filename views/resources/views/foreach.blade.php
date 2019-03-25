@extends('layouts.meulayout')

@section('minhasessaoprodutos')
	<h1>Arrays associativos</h1>

	@foreach($produtos as $item)
		<p>{{$item['id']}} - {{$item['nome']}}</p>
	@endforeach
	
	<hr>
	
	@foreach($produtos as $item)
		<p>{{$item['id']}} - {{$item['nome']}}
			@if($loop->first)
				(primeiro)
			@endif
			@if($loop->last)
				(ultimo)
			@endif
			<span class='badge-secondary'>{{$loop->index}} / {{$loop->count-1}} // {{$loop->remaining}}</span>
			<span class='badge-primary'>{{$loop->iteration}} / {{$loop->count-1}} // {{$loop->remaining}}</span>
		</p>
	@endforeach
	
@endsection