@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Lista de eventos</h5>
                    </div>

                    <div class="card-body">
                        <div class="container">
                            <table class="table table-bordered table-striped table-hover">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Local</th>
                                        <th scope="col">Data</th>
                                        <th scope="col">Hora</th>
                                        <th scope="col" colspan="2" class="text-center">Acções</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($events) > 0)
                                        @foreach ($events as $event)
                                            <tr>
                                                <td>
                                                    <a href="{{ route('events.show', $event->id) }}" class="text-decoration-none text-center">
                                                        {{ $event->name }}
                                                    </a>
                                                </td>
                                                <td>{{ $event->address }}</td>
                                                <td>{{ $event->date }}</td>
                                                <td>{{ $event->time }}</td>
                                                <td>
                                                    <a href="{{ route('events.edit', $event->id) }}" class="btn btn-primary btn-sm" role="button">
                                                        Editar
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('events.destroy', $event->id) }}" class="btn btn-danger btn-sm" role="button">
                                                        Remover
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="7" class="text-center">Não temos eventos disponíveis do momento.</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col-sm-7">
                                <strong>Total de eventos:</strong> {{ count($events) }}
                            </div>
                            <div class="col-sm-5">{{ $events->links() }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
