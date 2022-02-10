@extends("layouts.main")

@section("title", "Criar evento")

@section("content")

<div class="row" id="create-events-container">
    <div class="container">
        <div class="col s12 l6 offset-l3">
            <form action="/events" method="post" enctype="multipart/form-data">
                @csrf
                <div class="file-field input-field">
                    <div class="btn grey darken-3">
                        <span>File</span>
                        <input type="file" name="image" id="image" />
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>
                <div class="input-field">
                    <i class="material-icons prefix">mode_edit</i>
                    <input type="text" name="title" id="title" />
                    <label for="title">Titulo do evento</label>
                </div>
                <div class="input-field">
                    <i class="material-icons prefix">date_range</i>
                    <input type="date" name="date" id="date" />
                    <label for="date">Data do evento</label>
                </div>
                <div class="input-field">
                    <i class="material-icons prefix">map</i>
                    <input type="text" name="city" id="city" />
                    <label for="city">Cidade do evento</label>
                </div>
                <div class="input-field">
                    <i class="material-icons prefix">short_text</i>
                    <textarea name="description" id="description" class="materialize-textarea"></textarea>
                    <label for="description">Descreva o que vai acontecer no seu evento</label>
                </div>
                <div class="input-field">
                    <i class="material-icons prefix">lock</i>
                    <select name="private" id="private" title="private">
                        <option value="0" selected>Não</option>
                        <option value="1">Sim</option>
                    </select>
                    <label for="private">Evento privado?</label>
                </div>
                <div class="form-group">
                    <label>
                        <input type="checkbox" name="item[]" id="item" value="Cadeiras">
                        <span>Cadeiras</span>
                    </label>
                </div>
                <div class="form-group">
                    <label>
                        <input type="checkbox" name="item[]" id="item" value="Palco">
                        <span>Palco</span>
                    </label>
                </div>
                <div class="form-group">
                    <label>
                        <input type="checkbox" name="item[]" id="item" value="Open Food">
                        <span>Open Food</span>
                    </label>
                </div>
                <div class="form-group">
                    <label>
                        <input type="checkbox" name="item[]" id="item" value="Brindes">
                        <span>Brindes</span>
                    </label>
                </div>
                <button type="submit" class="btn waves-effect grey darken-3">Criar evento</button>
            </form>
        </div>
    </div>
</div>

@endsection