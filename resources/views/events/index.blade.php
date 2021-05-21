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
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @for ($i = 1; $i <= 3; $i++)
                                        <tr>
                                            <th scope="row">{{ $i }}</th>
                                            <td>Mark {{ $i }}</td>
                                            <td>Otto {{ $i }}</td>
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