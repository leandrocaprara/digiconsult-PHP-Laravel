@extends('layouts.base')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title" style="float: left;">Médicos</h4>
                        <span class="material-icons" style="float: right;"><a href="{{ route('medicos.create') }}" style="color: white;">add</a></span>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Nome
                                    </th>
                                    <th>
                                        CPF
                                    </th>
                                    <th>
                                        Especialidade
                                    </th>
                                    <th>
                                        Ações
                                    </th>
                                </thead>
                                @foreach ($medicos as $medico)
                                <tbody>
                                    <tr>
                                        <td>
                                            {{ $medico->id }}
                                        </td>
                                        <td>
                                            <a href="{{ route('medicos.show', $medico->id) }}">{{ $medico->name }}</a>
                                        </td>
                                        <td>
                                            {{ $medico->cpf }}
                                        </td>
                                        <td>
                                            {{ $medico->especialidade_name }}
                                        </td>
                                        <td class="text-primary">
                                        <form action="{{ route('medicos.destroy', $medico->id) }}" method="POST" class="form-button-actions form-button-delete">
                                            @csrf
                                            <button type="submit" class="material-icons" onclick="return confirm('Tem certeza que deseja excluir?')">delete</button>
                                        </form>
                                        <form action="{{ route('medicos.edit', $medico->id) }}" method="POST" class="form-button-actions">
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
