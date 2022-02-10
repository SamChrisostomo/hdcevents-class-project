@extends("layouts.main")

@section("title", "HDC Events")

@section("content")

    <div class="row" id="search-container">        
        <div class="col s8 offset-s2 l6 offset-l3">
            <h1>Busque seu evento</h1>
            <form action="/" method="GET">
                <input type="text" class="search" name="search" placeholder="Buscar evento...." />
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col s8 offset-s2 l8 offset-l1">
            @if ($search)
            <h3>Buscando por: {{$search}}</h3>
            @else
            <h3>Próximos eventos</h3>
            <h5>Confira os eventos disponíveis</h5>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col s12 l8 offset-l1">
        @foreach($events as $event)
            <div class="col s12 l4" id="card-container">
                <div class="card">
                    <div class="card-image">
                        <img src="/img/events/{{$event->image}}" alt="{{$event->title}}">
                    </div>
                    <div class="card-content">
                        <span class="card-title">{{$event->title}}</span>
                        <p>Acontecerá no dia - {{date('d/m/y', strtotime($event->date))}}</p>
                    </div>
                    <div class="card-action">
                        <a href="/events/{{$event->id}}" class="btn light-blue waves-effect">Saiba mais</a>
                    </div>
                </div>
            </div>
        @endforeach

        @if (count($events) == 0 && $search)
            <h5>Não foi possivel achar eventos com {{$search}}. <a href="/">Veja todos.</a></h5>
        @elseif(count($events) == 0)
            <h4>Não há eventos disponíveis</h4>
        @endif
        </div>
    </div>

@endsection