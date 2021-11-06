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
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-8"><h5>Lista de convidados</h5></div>
                            <div class="col-sm-4">
                                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#guest-modal-form">Adicionar</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover">
                            <thead class="thead-dark">
                                <th scope="col">Código</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Mesa</th>
                                <th scope="col">Nº. de pessoas</th>
                                <th scope="col" colspan="2" class="text-center">Acções</th>
                            </thead>
                            <tbody>
                                @if (count($event->getGuests()['guests']) > 0)
                                    @foreach ($event->getGuests()['guests'] as $guest)
                                        <tr>
                                            <td>{{ $guest->id }}</td>
                                            <td>{{ $guest->name }}</td>
                                            <td>{{ $guest->place }}</td>
                                            <td>{{ $guest->per_num }}</td>
                                            <td>
                                                <a href="{{ route('guests.edit', $guest->id) }}" class="btn btn-primary btn-sm" role="button">
                                                    Editar
                                                </a>
                                            </td>
                                            <td>
                                                <form action="{{ route('guests.destroy', $guest->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-sm" type="submit">Remover</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="6" class="text-center">Não temos convidados para este evento.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer align-items-end">
                        <div class="row">
                            <div class="col-sm-12 align-items-end">
                                {{ $event->getGuests()['guests']->links() }}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--MODAL-->
        <div class="modal fade" id="guest-modal-form" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Registo do convidado</h5>
                        <button class="close" type="button" data-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <!--Grid layout para modal-->
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">
                                    <form action="{{ route('guests.store') }}" method="post" id="guest-form">
                                        @csrf

                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label for="name">Nome do convidado</label>
                                                <input type="text" name="name" id="name" class="form-control" placeholder="Nome do convidado">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-7">
                                                <label for="place">Mesa</label>
                                                <input type="text" name="place" id="place" class="form-control" placeholder="Mesa">
                                            </div>
                                            <div class="col-md-auto">
                                                <label for="per_num">Número de pessoas</label>
                                                <input type="number" name="per_num" id="per_num" class="form-control" min="0" max="6">
                                            </div>
                                            <div class="col-md-auto">
                                                <input type="hidden" name="event_id" id="event_id" value="{{ $event->id }}">
                                            </div>
                                        </div>

                                        <div class="form-group row modal-footer">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <button type="submit" class="btn btn-primary" name="btn_reg" id="btn_reg">Registar</button>
                                                </div>
                                                <div class="col-sm-6">
                                                    <button class="btn btn-danger" type="button" data-dismiss="modal">Fechar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--FIM-->
    </div>
@endsection
