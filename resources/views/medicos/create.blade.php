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
                        <form method="POST" action="{{ route('medicos.store') }}">
                          @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nome</label>
                                        <input type="text" class="form-control" name="name" id="name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Email</label>
                                        <input type="email" class="form-control" name="email" id="email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">CPF</label>
                                        <input type="text" class="form-control" name="cpf" id="cpf" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">CRM</label>
                                        <input type="text" class="form-control" name="crm" id="crm" required>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Especialidade</label>
                                        <select name="especialidades_id" id="especialidades_id">
                                        @foreach ($especialidades as $especialidade)
                                            <option value="{{ $especialidade->id }}">{{ $especialidade->name }}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">CEP</label>
                                        <input type="text" class="form-control" name="cep" id="cep" value="" maxlength="8" onblur="pesquisacep(this.value);">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Endereço</label>
                                        <input type="text" class="form-control" name="endereco" id="endereco" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Número</label>
                                        <input type="text" class="form-control" name="numero" id="numero" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Bairro</label>
                                        <input type="text" class="form-control" name="bairro" id="bairro">
                                    </div>
                                </div>  
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Cidade</label>
                                        <input type="text" class="form-control" name="cidade" id="cidade">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Estado</label>
                                        <input type="text" class="form-control" name="estado" id="estado">
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