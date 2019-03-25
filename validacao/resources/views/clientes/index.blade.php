@extends('layouts.app', ['current' => 'categoria'])

@section('body')
    <div class="card-border">
        <div class="carder-body">
            <h5 class="card-title text-center mt-3">
                Cadastro de clientes
            </h5>
            @if(count($clientes) > 0)
            <table class="table table-borderded table-hover">
            <thead>
                <tr>
                    <td>Código</td>
                    <td>Nome</td>
                    <td>Ações</td>
                </tr>
            </thead>
            <tbody>
                @foreach($clientes as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->nome}}</td>
                        <td>
                            <a href="cliente/{{$item->id}}/edit" class="btn btn-primary btn-sm">Editar</a>
                            <a href="cliente/destroy/{{$item->id}}" class="btn btn-danger btn-sm">Apagar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
            @else
                Nenhum registro cadastrado
            @endif
        </div>
        <div class="card-footer">
            <a href="/cliente/create" class="btn btn-sm btn-primary" role="button">Novo</a>
        </div>
    </div>
@endsection