@extends('layouts.meulayout')

@section('minhasessaoprodutos')
	Você escolheu a opção 
	@if(isset($opcao))
		@switch($opcao)
			@case(1):
				<span class='badge-primary'>Azul</span>
			@break;
			@case(2):
				<span class='badge-danger'>Vermelho</span>
			@break;
			@case(3):
				<span class='badge-success'>Verde</span>
			@break;
			@case(4):
				<span class='badge-warning'>Amarelo</span>
			@break;
			@default:
				<span class='badge-dark'>Outra cor</span>
		@endswitch
	@endif
@endsection