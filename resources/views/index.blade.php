@extends('layouts.app')
@section('title','Inicio')
@section('pagina','Inicio | GASG | Gestão de Assistência Social Governo')
@section('body')
    <div class="jumbotron bg-light border border-secundary">
        <div class="row">
                <div class="col-md-3">
                <div class="card deck">
                    <div class="card border border-primary">
                        <div class="card-body">
                            <div class="card-title">
                                <h5>Famílias</h5>
                                <p class="card-text">Manutenção de Famílias</p>
                                <a href="/familia" class="btn btn-primary">Acessar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
