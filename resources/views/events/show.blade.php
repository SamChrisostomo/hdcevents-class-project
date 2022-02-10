@extends("layouts.main")

@section("title", $event->title)

@section("content")

    <div class="row" id="event-container">
        <div class="col s12 l4 offset-l2" id="event-img-container">
            <img src="/img/events/{{$event->image}}" alt="{{$event->title}}" class="responsive-img" />
        </div>
        <div class="col s12 l4" id="event-content-container">
            <ul>
                <li>
                    <h3 style="margin-top: 0;">{{$event->title}}</h3>
                </li>
                <li>
                    <h6>
                        <i class="material-icons">person</i>
                        X Participantes
                    </h6>
                </li>
                <li>
                    <h6>
                        <i class="material-icons">location_on</i>
                        {{$event->city}}
                    </h6>
                </li>
                <li>
                    <h6>
                        <i class="material-icons">star</i>
                        Dono do evento
                    </h6>
                </li>
                <li>
                    <a href="#" class="btn waves-effect grey darken-3" style="margin-top: 15px;">Participar</a>
                </li>
            </ul>
            <ul id="itens-container">
                @foreach ($event->item as $item)
                <li>
                    <div class="chip">{{$item}}</div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col s12 l8 offset-l2" id="event-about-container">
            <h2>Sobre o evento</h2>
            <p>{{$event->description}}</p>
        </div>
    </div>

@endsection