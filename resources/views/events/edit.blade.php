@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card shadow-sm">
            <div class="card-header"><h5>Actualizar dados</h5></div>
            <div class="card-body">
                <form action="{{ route('events.update', $event->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="name">Nome do evento</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Nome do evento" value="{{ $event->name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-7">
                            <label for="address">Local do evento</label>
                            <input type="text" name="address" id="address" class="form-control" placeholder="Local do evento" value="{{ $event->address }}">
                        </div>
                        <div class="col-md-auto">
                            <label for="date">Data do evento</label>
                            <input type="date" name="date" id="date" class="form-control" value="{{ $event->date }}">
                        </div>
                        <div class="col-md-auto">
                            <label for="time">Hora do evento</label>
                            <input type="time" name="time" id="time" class="form-control" value="{{ $event->time }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
