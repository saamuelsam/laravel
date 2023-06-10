@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>
<div id="events-container" class="container">
    <h2>Próximos Eventos</h2>
    <p class="subtitle">Veja os eventos dos próximos dias</p>
    <div id="cards-container" class="row">
        @foreach($events as $event)

        <div class="col-md-3">
            <div class="card">
                <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
                <div class="card-body ">
                    <p class="card-date">10/09/2020</p>
                    <h5 class="card-title">{{ $event->title }}</h5>
                    <p class="card-participants">X Participantes</p>
                    <a href="#" class="btn btn-primary">Saber mais</a>
                </div>
        </div>

        </div>
        @endforeach
    </div>
</div>

{{-- Este é o comentário da Blade --}}

@endsection