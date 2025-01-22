@extends('layouts.app', ['current' => 'Especialidades'])

@push('scripts')
    <link href="{{ asset('assets/css/style.inputs.css') }}" rel="stylesheet" type="text/css"/>

    <style>
        .dataTables_wrapper .dataTables_processing {
            background-color: #a2a2a2;
            color: #FFF;
        }

        table.table tbody tr:nth-child(even):hover td {
            border-top: 1px solid #5867dd;
            border-bottom: 1px solid #5867dd;
        }

        table.table tbody tr:nth-child(even):hover td:first-child {
            border-left: 1px solid #5867dd;
            border-top-left-radius: 25px;
            border-bottom-left-radius: 25px;
        }

        table.table tbody tr:nth-child(even):hover td:last-child {
            border-right: 1px solid #5867dd;
            border-top-right-radius: 25px;
            border-bottom-right-radius: 25px;
        }

        table.table tbody tr:nth-child(odd):hover td {
            border-top: 1px solid #5867dd;
            border-bottom: 1px solid #5867dd;
        }

        table.table tbody tr:nth-child(odd):hover td:first-child {
            border-left: 1px solid #5867dd;
            border-top-left-radius: 25px;
            border-bottom-left-radius: 25px;
        }

        table.table tbody tr:nth-child(odd):hover td:last-child {
            border-right: 1px solid #5867dd;
            border-top-right-radius: 25px;
            border-bottom-right-radius: 25px;
        }
    </style>
@endpush

@section('content')
    <div id="cabecalho">
        <h3>Criar Especialidade</h3>
        <div>
            <a href="{{ route('especialidades.index') }}" class="btn btn-secondary">Voltar para a lista</a>
        </div>
    </div>

    <form action="{{ route('especialidades.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome') }}" required>
        </div>

        <div class="form-group">
            <label for="responsavel_especialidade">Responsável pela Especialidade</label>
            <select class="form-control" id="responsavel_especialidade" name="responsavel_especialidade" required>
                <option value="Médico" {{ old('responsavel_especialidade') == 'Médico' ? 'selected' : '' }}>Médico</option>
                <option value="Dentista" {{ old('responsavel_especialidade') == 'Dentista' ? 'selected' : '' }}>Dentista</option>
                <option value="Laboratório" {{ old('responsavel_especialidade') == 'Laboratório' ? 'selected' : '' }}>Laboratório</option>
                <option value="Clínica" {{ old('responsavel_especialidade') == 'Clínica' ? 'selected' : '' }}>Clínica</option>
                <option value="Consultório Médico" {{ old('responsavel_especialidade') == 'Consultório Médico' ? 'selected' : '' }}>Consultório Médico</option>
                <option value="Consultório Odontológico" {{ old('responsavel_especialidade') == 'Consultório Odontológico' ? 'selected' : '' }}>Consultório Odontológico</option>
                <option value="Hospital" {{ old('responsavel_especialidade') == 'Hospital' ? 'selected' : '' }}>Hospital</option>
                <option value="Diagnóstico por Imagem" {{ old('responsavel_especialidade') == 'Diagnóstico por Imagem' ? 'selected' : '' }}>Diagnóstico por Imagem</option>
                <option value="Farmácia" {{ old('responsavel_especialidade') == 'Farmácia' ? 'selected' : '' }}>Farmácia</option>
                <option value="Academia" {{ old('responsavel_especialidade') == 'Academia' ? 'selected' : '' }}>Academia</option>
                <option value="Petshop" {{ old('responsavel_especialidade') == 'Petshop' ? 'selected' : '' }}>Petshop</option>
                <option value="Drogaria" {{ old('responsavel_especialidade') == 'Drogaria' ? 'selected' : '' }}>Drogaria</option>
                <option value="Ótica" {{ old('responsavel_especialidade') == 'Ótica' ? 'selected' : '' }}>Ótica</option>
            </select>
        </div>

        <div class="form-group text-center">
            <button type="submit" class="btn btn-primary">Criar Especialidade</button>
        </div>
    </form>
@endsection
