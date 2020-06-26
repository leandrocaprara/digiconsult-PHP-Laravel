@extends('layouts.base')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Paciente</h4>
                        <p class="card-category">Preencha as informações do paciente</p>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('pacientes.update', $paciente->id) }}">
                          @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nome</label>
                                        <input type="text" class="form-control" name="name" value="{{ $paciente->name }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Email </label>
                                        <input type="email" class="form-control" name="email" value="{{ $paciente->email }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">CPF</label>
                                        <input type="text" class="form-control" name="cpf" value="{{ $paciente->cpf }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Plano de saúde</label>
                                        <select id="plano" name="planos_id">
                                            @foreach($planos as $plano)
                                                <option value="{{ $plano->id }}" {{ $paciente->planos_id == $plano->id ? 'selected' : '' }}>{{ $plano->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Endereço</label>
                                        <input type="text" class="form-control" name="endereco" value="{{ $paciente->endereco }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Cidade</label>
                                        <input type="text" class="form-control" name="cidade" value="{{ $paciente->cidade }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">País</label>
                                        <input type="text" class="form-control" name="pais" value="{{ $paciente->pais }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">CEP</label>
                                        <input type="text" class="form-control" name="cep" value="{{ $paciente->cep }}">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Atualizar</button>
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