@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-5 ">
                <div class="card">
                    <div class="card-header"><h5>Detalhes do evento</h5></div>

                    <div class="card-body">
                        <div class="container">
                            <p>Nome do evento: <span>bssdb</span></p>
                            <p>Local do evento: <span>badf</span></p>
                            <p>Data do evento: <span>svd</span></p>
                            <p>Hora do evento: <span>svd</span></p>
                        </div>
                    </div>

                    <div class="card-footer"><strong>Total de convidados:</strong> 50</div>
                </div>
            </div>

            <div class="col-md-7">
                <div class="card">
                    <div class="card-header"><h5>Registo de Convidados</h5></div>
        
                    <div class="card-body">
                        <form action="" method="post">
                            @csrf
        
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="eventName">Nome do Convidado</label>
                                    <input type="text" name="eventName" id="eventName" class="form-control" placeholder="Nome Completo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="">Mesa</label>
                                    <input type="text" name="place" id="place" class="form-control" placeholder="Mesa">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-plus-circle" aria-hidden="true"></i> Adicionar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h5>Lista dos Convidados</h5></div>
        
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
                </div>
            </div>
        </div>
    </div>
@endsection
