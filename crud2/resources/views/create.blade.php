@extends('layouts.main')

@section('title', 'Cadastrar Documento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <form action="/create" method="POST">
    @csrf
    <div class="form-group">
      <label for="title">titulo</label>
      <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Nome do Documento">
    </div>
    <div class="form-group">
      <label for="title">Descrição</label>
      <textarea type="text" class="form-control" id="nome_arquivo" name="nome_arquivo" placeholder="Descrição do Documento"></textarea>
    </div>
    <div class="form-group">
      <label for="title">tipo</label>
      <select class="form-control" id="tipo_id" name="tipo_id" >

      @foreach ($tipo_documentos as $tipo_documento)
           <option value="{{$tipo_documento->id}}" {{old('tipo_documentos_nome_tipo') == $tipo_documento}}>{{$tipo_documento->nome_tipo}}</option>
      @endforeach
    </div>
    <input type="button" class="btn btn-secondary" onclick="location.href='/crud';" value="Voltar"/>
    <input type="submit" class="btn btn-success" value="Salvar">
  </form>
</div>

@endsection