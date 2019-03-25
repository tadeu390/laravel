@extends('layouts.app')

@section('titulo', 'minha página filho')

@section('Barra lateral')
	@parent
	Esta parte da sessao é do filho
@endsection

@section('conteudo')
	<p>Este é o conteúdo do filho</p>
@endsection
