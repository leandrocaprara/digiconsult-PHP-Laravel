@extends('layouts.base')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Médico</h4>
                        <p class="card-category">Preencha as informações do médico</p>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('consultas.update', $consultas->id) }}">
                        @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Médico</label>
                                        <input type="text" class="form-control" name="medico" id="medico" value="{{ $consultas->medicos_id }}" required>
                                        <input type="hidden" id="medico_id" name="medico_id">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Paciente</label>
                                        <input type="text" class="form-control" name="paciente" id="paciente" value="{{ $consultas->pacientes_id }}" required>
                                        <input type="hidden" id="paciente_id" name="paciente_id">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label style="left: 0; font-size: 0.6875rem;">Data</label>
                                        <input placeholder="Data" type="datetime-local" class="form-control" name="data" id="data" value="{{ $consultas->data }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Consulta</label>
                                        <textarea class="form-control" name="consulta" id="consulta" rows="5" cols="10" required>{{ $consultas->consulta }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Diagnóstico</label>
                                        <textarea class="form-control" name="diagnostico" rows="5" cols="10" id="diagnostico" required>{{ $consultas->diagnostico }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Receita</label>
                                        <textarea class="form-control" name="receita" rows="5" cols="10" id="receita" required>{{ $consultas->receita }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Salvar</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-profile">
                    <div class="card-avatar">
                        <a href="javascript:;">
                            <img class="img" src="../assets/img/faces/marc.jpg" />
                        </a>
                    </div>
                    <div class="card-body">
                        <h6 class="card-category text-gray">CEO / Co-Founder</h6>
                        <h4 class="card-title">Alec Thompson</h4>
                        <p class="card-description">
                            Don't be scared of the truth because we need to restart the human foundation in truth And I
                            love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                        </p>
                        <a href="javascript:;" class="btn btn-primary btn-round">Follow</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection