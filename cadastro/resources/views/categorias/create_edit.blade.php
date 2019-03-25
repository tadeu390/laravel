@extends('layouts.app', ['current' => 'categoria'])

@section('body')
    <div class="card-border">
        <div class="card-body">
            @if(!isset($cat))
                {!! Form::open(['route' => 'categoria.store']) !!}
            @else
                {!! Form::model($cat, ['method' => 'PATCH', 'route' => ['categoria.update', $cat->id]]) !!}
            @endif
            @csrf
                <div class="form-group">
                    <label for="nomeCategoria" class="">Nome da categoria</label>
                    <input type="text" value="@if(isset($cat)){{$cat->nome}}@endif" class="form-control" name="nome" id="nome" placeholder="Categoria">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>
@endsection