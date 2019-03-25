@extends('layouts.app', ['current' => 'home'])

@section('body')
<div class="jumbotron bg-light border-secondary">
    <div class="row">
        <div class="card-deck">
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Teste</h5>
                    <p class="card-text">
                        Cadastra todos os produtos.
                    </p>
                    <a href="/produto" class="btn btn-primary">Cadastre seus produtos</a>
                </div>
            </div>
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Teste</h5>
                    <p class="card-text">
                        Cadastra todos os produtos.
                    </p>
                    <a href="/categoria" class="btn btn-primary">Cadastre suas categorias</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection