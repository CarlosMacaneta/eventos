@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Detalhes do evento</h5>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li><strong>Nome: </strong>{{ $event->name }}</li>
                            <li><strong>Endereço: </strong>{{ $event->address }}</li>
                            <li><strong>Data: </strong>{{ $event->date }}</li>
                            <li><strong>Hora: </strong>{{ $event->time }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                @include('guests.index')
            </div>
        </div>
        @include('guests.create')
        @include('guests.edit')
    </div>
@endsection
