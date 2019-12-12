@extends('layouts.app')
@section('title','Editar Família')
@section('body')
@section('pagina',"Editar Família $f->id")
<div class="row container">
    <a type="cancel" href="/familia" class="btn btn-warning btn-sm">Voltar a  lista de famílias</a>
</div>
<br>
<div class="card border">
    <div class="card-body">
        <strong>Alterar pessoas da família</strong><br><br>
        <form action="/familia/{{$f->id}}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="type" value="pessoas">
            <input type="hidden" name="id" value="{{$f->id}}">
            <div class="row">
                <div class="col-md-3">
                    <select name="id_pessoa" class="form-control" id="id_pessoa" required>
                        <option value="">Selecione uma pessoa</option>
                        @foreach ($pOut as $p)
                            <option value="{{$p->id}}">{{$p->nome}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">+ incluir pessoa</button>
                </div>
            </div>
        </form>
        <br>
        <table class="table table-striped table-hover table-responsive-sm table-sm">
                <thead class="thead-dark ">
                    <th>Nome Pessoa</th>
                    <th>Opção</th>
                </thead>
                <tbody>
                    @foreach ($pIn as $p)
                        <tr>
                            <td><b>{{ $p->nome }}</b></td>
                            <td><b>
                                <button type="submit" class="btn btn-sm btn-danger" data-toggle="modal" form="frmCancelar{{$p->id}}">Remover da família</button>
                                <form id="frmCancelar{{$p->id}}" action="/pessoa/{{$p->id}}" method="POST"  onSubmit="return confirm('Deseja realmente remover {{$p->nome}} da familia ?')">
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
<br>
<br>
<div class="card border">
    <div class="card-body">
        <strong>Alterar dados da familia</strong><br><br>
        <form action="/familia/{{$f->id}}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="type" value="familia">
            <div class="form-group">
                <select name="id_programa" class="form-control" id="id_programa" required>
                    @foreach ($ps as $pss)
                        @if($pss->id == $f->id_programa)
                            <option value="{{$pss->id}}" selected> {{$pss->id}} - {{$pss->nome_programa}}</option>
                        @else
                            <option value="{{$pss->id}}">{{$pss->id}} - {{$pss->nome_programa}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="estado" required id="estado" placeholder="Insira o estado (UF)" value="{{$f->estado}}">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="cidade" required id="cidade" placeholder="Insira a cidade" value="{{$f->cidade}}">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="bairro" required id="bairro" placeholder="Insira o bairro" value="{{$f->bairro}}">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="cep" required id="cep" placeholder="Insira o cep (apenas os numeros ex: 27154000)" value="{{$f->cep}}">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="logradouro" required id="logradouro" placeholder="Insira o logradouro" value="{{$f->logradouro}}">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="num_logradouro" required id="num_logradouro" placeholder="Insira o número do logradouro" value="{{$f->num_logradouro}}">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Atualizar dados da família</button>
        </form>
    </div>
</div>
@endsection
