@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header"><h5>Lista de eventos</h5></div>

                    <div class="card-body">
                        <div class="container">
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Local</th>
                                    <th scope="col">Data</th>
                                    <th scope="col">Hora</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @for ($i = 1; $i <= 3; $i++)
                                        <tr>
                                            <th scope="row">{{ $i }}</th>
                                            <td>
                                                <a href="{{ route('details') }}" class="text-decoration-none text-center">
                                                    Mark {{ $i }}
                                                </a>
                                            </td>
                                            <td>Maputo {{ $i }}</td>
                                            <td>17/05/2021</td>
                                            <td>14:00</td>
                                            <td>
                                                <a href="#" class="text-decoration-none text-center">
                                                    <i class="fas fa-trash fa-lg text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endfor
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card-footer"><strong>Total de eventos:</strong> 10</div>
                </div>
            </div>
        </div>
    </div>
@endsection