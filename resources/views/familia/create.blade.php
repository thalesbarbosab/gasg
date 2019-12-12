@extends('layouts.app')
@section('title','Inserir Família')
@section('body')
@section('pagina','Inserir Família')
<div class="card border">
    <div class="card-body">
        <form action="/familia" method="POST">
            @csrf
            <div class="form-group">
                <select name="id_programa" class="form-control" id="id_programa" required>
                    <option value="">Selecione o programa social</option>
                    @foreach ($ps as $p)
                        <option value="{{$p->id}}">{{$p->id}} - {{$p->nome_programa}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="estado" required id="estado" placeholder="Insira o estado (UF)">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="cidade" required id="cidade" placeholder="Insira a cidade">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="bairro" required id="bairro" placeholder="Insira o bairro">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="cep" required id="cep" placeholder="Insira o cep (apenas os numeros ex: 27154000)">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="logradouro" required id="logradouro" placeholder="Insira o logradouro">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="num_logradouro" required id="num_logradouro" placeholder="Insira o número do logradouro">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar família e continuar</button>
            <a type="cancel" href="/familia" class="btn btn-warning btn-sm">Cancelar</a>
        </form>
    </div>
</div>
@endsection
