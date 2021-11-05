@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="card shadow sm">
                    <div class="card-header"><h4 class="text-center">Registo de Eventos</h4></div>

                    <div class="card-body">
                        <form action="{{ route('events.store') }}" method="post">
                            @csrf

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="name">Nome do evento</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Nome do evento">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-7">
                                    <label for="address">Local do evento</label>
                                    <input type="text" name="address" id="address" class="form-control" placeholder="Local do evento">
                                </div>
                                <div class="col-md-auto">
                                    <label for="date">Data do evento</label>
                                    <input type="date" name="date" id="date" class="form-control">
                                </div>
                                <div class="col-md-auto">
                                    <label for="time">Hora do evento</label>
                                    <input type="time" name="time" id="time" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Registar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
