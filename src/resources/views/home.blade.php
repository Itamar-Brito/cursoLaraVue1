@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">

        <painel-page titulo="Dashboard">
            teste
            <div class="row">
              <div class="col-md-4">
                <painel-page titulo="Conteudo 1" cor="panel-success">
                    teste
                </painel-page>
              </div>
              <div class="col-md-4">
                <painel-page titulo="Conteudo 2" cor="orange">
                    teste
                </painel-page>
              </div>
              <div class="col-md-4">
                <painel-page titulo="Conteudo 3" cor="blue">
                    teste
                </painel-page>
              </div>
            </div>
        </painel-page>

      </div>
    </div>
  </div>
@endsection
