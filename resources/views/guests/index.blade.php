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
                                <button class="btn btn-primary btn-sm edit" role="button" data-toggle="modal" data-target="#guest-modal-ed-form" id="{{ $guest->id }}">
                                    Editar
                                </button>
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