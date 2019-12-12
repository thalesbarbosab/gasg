@extends('layouts.app')
@section('title','GASG-Familias')
@section('pagina','Familias | GASG | Gestão de Assistência Social Governo')
@section('body')
    <div class="row">
        <div class="col-md-4">
                <a class="btn btn-warning" href="/">voltar</a>
                <a class="btn btn-primary" href="/familia/create">inserir familia</a>
        </div>
        <div class="col-md-2">.</div>
        <div class="col-md-4">
                <a class="btn btn-success" href="/peopleinfamily">Quantidade de pessoas em cada familia</a>
        </div>
    </div>
    <br>
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Familias</h5>
            <br>
            <table class="table table-striped table-hover table-responsive-sm table-sm">
                <thead class="thead-dark ">
                    <th>ID</th>
                    <th>Estado</th>
                    <th>Cidade</th>
                    <th>Programa Social</th>
                    <th>Opção</th>
                </thead>
                <tbody>
                    @foreach ($f as $fs)
                        <tr>
                            <td><b>{{ $fs->id }}</b></td>
                            <td><b>{{ $fs->estado }}</b></td>
                            <td><b>{{ $fs->cidade }}</b></td>
                            <td><b>{{ $fs->programa_social->nome_programa}}</b></td>
                            <td><b>
                                    <a href="/familia/{{$fs->id}}/edit" class="btn btn-sm btn-primary">Editar</a>
                                    <button href="/familia/destroy/{{$fs->id}}" type="submit" class="btn btn-sm btn-danger" data-toggle="modal" form="frmCancelar{{$fs->id}}">Remover</button>
						      	    <form id="frmCancelar{{$fs->id}}" action="/familia/{{$fs->id}}" method="post"  onSubmit="return confirm('Deseja realmente remover esta família? Certifique de ter desassociado todas as pessoas desta família')">
                                          @csrf
                                          @method('delete')
						      	    </form>
                                </b>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
