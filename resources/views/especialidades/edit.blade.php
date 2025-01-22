@extends('layouts.app', ['current' => 'Especialidades'])

@push('scripts')
    <link href="{{ asset('assets/css/style.inputs.css') }}" rel="stylesheet" type="text/css"/>

    <style>
        .form-group label {
            font-weight: bold;
        }
        .form-control {
            border-radius: 5px;
        }
    </style>
@endpush

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3>Editar Especialidade</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('especialidades.update', $especialidade->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" 
                               value="{{ old('nome', $especialidade->nome) }}" required>
                    </div>

                    <div class="form-group">
                        <label for="responsavel_especialidade">Responsável pela Especialidade</label>
                        <select class="form-control" id="responsavel_especialidade" name="responsavel_especialidade" required>
                            <option value="Médico" {{ old('responsavel_especialidade', $especialidade->responsavel_especialidade) == 'Médico' ? 'selected' : '' }}>Médico</option>
                            <option value="Dentista" {{ old('responsavel_especialidade', $especialidade->responsavel_especialidade) == 'Dentista' ? 'selected' : '' }}>Dentista</option>
                            <option value="Laboratório" {{ old('responsavel_especialidade', $especialidade->responsavel_especialidade) == 'Laboratório' ? 'selected' : '' }}>Laboratório</option>
                            <option value="Clínica" {{ old('responsavel_especialidade', $especialidade->responsavel_especialidade) == 'Clínica' ? 'selected' : '' }}>Clínica</option>
                            <option value="Consultório Médico" {{ old('responsavel_especialidade', $especialidade->responsavel_especialidade) == 'Consultório Médico' ? 'selected' : '' }}>Consultório Médico</option>
                            <option value="Consultório Odontológico" {{ old('responsavel_especialidade', $especialidade->responsavel_especialidade) == 'Consultório Odontológico' ? 'selected' : '' }}>Consultório Odontológico</option>
                            <option value="Hospital" {{ old('responsavel_especialidade', $especialidade->responsavel_especialidade) == 'Hospital' ? 'selected' : '' }}>Hospital</option>
                            <option value="Diagnóstico por Imagem" {{ old('responsavel_especialidade', $especialidade->responsavel_especialidade) == 'Diagnóstico por Imagem' ? 'selected' : '' }}>Diagnóstico por Imagem</option>
                            <option value="Farmácia" {{ old('responsavel_especialidade', $especialidade->responsavel_especialidade) == 'Farmácia' ? 'selected' : '' }}>Farmácia</option>
                            <option value="Academia" {{ old('responsavel_especialidade', $especialidade->responsavel_especialidade) == 'Academia' ? 'selected' : '' }}>Academia</option>
                            <option value="Petshop" {{ old('responsavel_especialidade', $especialidade->responsavel_especialidade) == 'Petshop' ? 'selected' : '' }}>Petshop</option>
                            <option value="Drogaria" {{ old('responsavel_especialidade', $especialidade->responsavel_especialidade) == 'Drogaria' ? 'selected' : '' }}>Drogaria</option>
                            <option value="Ótica" {{ old('responsavel_especialidade', $especialidade->responsavel_especialidade) == 'Ótica' ? 'selected' : '' }}>Ótica</option>
                        </select>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-success">Salvar Alterações</button>
                        <a href="{{ route('especialidades.index') }}" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

