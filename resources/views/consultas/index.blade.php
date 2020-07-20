@extends('layouts.base')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title" style="float: left;">Consultas</h4>
                        <span class="material-icons" style="float: right;"><a href="{{ route('consultas.create') }}" style="color: white;">add</a></span>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Paciente
                                    </th>
                                    <th>
                                        Médico
                                    </th>
                                    <th>
                                        Data
                                    </th>
                                    <th>
                                        Ações
                                    </th>
                                </thead>
                                @foreach ($consultas as $consulta)
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="{{ route('consultas.show', $consulta->id) }}">{{ $consulta->id }}</a>
                                        </td>
                                        <td>
                                            {{ $consulta->paciente_nome }}
                                        </td>
                                        <td>
                                            {{ $consulta->medico_nome }}
                                        </td>
                                        <td>
                                            {{ $consulta->data }}
                                        </td>
                                        <td class="text-primary">
                                        <form action="{{ route('consultas.destroy', $consulta->id) }}" method="POST" class="form-button-actions form-button-delete">
                                            @csrf
                                            <button type="submit" class="material-icons" onclick="return confirm('Tem certeza que deseja excluir?')">delete</button>
                                        </form>
                                        <form action="{{ route('consultas.edit', $consulta->id) }}" method="POST" class="form-button-actions">
                                            @csrf
                                            <button type="submit" class="material-icons">create</button>
                                        </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
