@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')


<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu evento</h1>
    <form action="/events" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Evento</label>
            <input type="file" id="imagem" name="image" class="form-control-file">
        </div>
        <div class="form-group">
            <label for="title">Evento</label>
            <input type="tex" class="form-control" id="title" name="title" placeholder="Nome do evento">
        </div>
    <div class="form-group">
        <label for="title">Cidade</label>
        <input type="tex" class="form-control" id="city" name="city" placeholder="Local do evento">
    </div>
    <div class="form-group">
        <label for="title">O evento é privado?</label>
        <select name="private" id="private" class="form-control">
        <option value="0">Não</option>
        <option value="1">Sim</option>
    </select>
    </div>
    <div class="form-group">
        <label for="title">Descrição:</label>
        <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
    </div>
    <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
    @if(session()->has('Sucesso'))


  <div class="alert alert-success" role="alert">
  {{session("Sucesso")}}
    </div>
    @endif
    </form>
</div>


@endsection
