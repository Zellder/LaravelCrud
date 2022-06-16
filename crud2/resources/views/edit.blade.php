@extends('layouts.main')

@section('title', 'Editar Documento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <form action="/update/{{$documentos->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="title">Editando titulo</label>
      <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo do documento" value="{{$documentos->titulo}}">
    </div>
    <div class="form-group">
      <label for="title">Editando Descrição</label>
      <textarea type="text" class="form-control" id="nome_arquivo" name="nome_arquivo" placeholder="Descrição do Documento">{{$documentos->nome_arquivo}}</textarea>
    </div>
    <div class="form-group">
      <label for="title">Editando tipo</label>
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