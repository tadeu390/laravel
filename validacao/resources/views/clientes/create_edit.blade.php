@extends('layouts.app', ['current' => 'cliente'])

@section('body')
    <div class="card-border">
        <div class="card-body">
            @if(!isset($cliente))
                {!! Form::open(['route' => 'cliente.store']) !!}
            @else
                {!! Form::model($cliente, ['method' => 'PATCH', 'route' => ['cliente.update', $cliente->id]]) !!}
            @endif
            @csrf
                <div class="form-group">
                    <label for="nome" class="">Nome</label>
                    <input type="text" value="@if(isset($cliente)){{$cliente->nome}}@endif" class="form-control {{$errors->has('nome') ? 'is-invalid' : ''}}" name="nome" id="nome" placeholder="Nome">
                    @if($errors->has('nome'))
                        <div class="invalid-feedback">
                            {{$errors->first('nome')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="idade" class="">Idade</label>
                    <input type="text" value="@if(isset($cliente)){{$cliente->idade}}@endif" class="form-control {{$errors->has('idade') ? 'is-invalid' : ''}}" name="idade" id="idade" placeholder="Idade">
                    @if($errors->has('idade'))
                        <div class="invalid-feedback">
                            {{$errors->first('idade')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="endereco" class="">Endereço</label>
                    <input type="text" value="@if(isset($cliente)){{$cliente->endereco}}@endif" class="form-control {{$errors->has('endereco') ? 'is-invalid' : ''}}" name="endereco" id="endereco" placeholder="endereco">
                    @if($errors->has('endereco'))
                        <div class="invalid-feedback">
                            {{$errors->first('endereco')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="email" class="">E-mail</label>
                    <input type="text" value="@if(isset($cliente)){{$cliente->email}}@endif" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" name="email" id="email" placeholder="E-mail">
                    @if($errors->has('email'))
                        <div class="invalid-feedback">
                            {{$errors->first('email')}}
                        </div>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
        @if($errors->any())
            <div class="card-footer">
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection