@extends('layouts.app', ['current' => 'especialidades'])

@push('scripts')
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

        #cabecalho {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            height: auto;
        }

        #selectOptions, #buttonFilter, #inputSearch {
            position: relative;
            flex: 1;
            height: 65px;
        }

        .searchContainer {
            position: relative;
            display: flex;
            align-items: flex-end;
            justify-content: flex-end;
        }

        .search {
            padding: 0.65rem 1rem;
            border: 1px solid #e2e5ec;
            border-radius: 4px;
            height: 38.4px;
            width: 300px;
        }

        .searchTitle {
            margin-bottom: 10px;
            margin-right: 10px;
        }

        #select-search {
            height: 38.4px;
            width: 240px;
            margin-right: 10px;
        }
    </style>
@endpush

@section('content')
    <div id="cabecalho">
        <div id="buttonFilter" align="right">
            <a href="{{ route('especialidades.create') }}" class="btn btn-primary">Adicionar Nova Especialidade</a>
        </div>
    </div>

    <table class="table" id="especialidadesTable">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Responsável pela Especialidade</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($especialidades as $especialidade)
            <tr>
                <td>{{ $especialidade->nome }}</td>
                <td>{{ $especialidade->responsavel_especialidade }}</td>
                <td>
                    <div class="dropdown dropdown-inline ml-2">
                            <a href="{{ route('especialidades.edit', $especialidade->id) }}" class="ml-2 btn btn-info btn-sm btn-icon btn-circle kt-margin-l-5" title="Editar">
                                <i class="la la-edit"></i>
                            </a>
                            <form action="{{ route('especialidades.destroy', $especialidade->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="ml-2 btn btn-danger btn-sm btn-icon btn-circle kt-margin-l-5 deleteItem" title="Excluir">
                                    <i class="la la-trash"></i>
                                </button>
                            </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#especialidadesTable').DataTable({
                processing: true,
                paging: true,
                searching: true,
                ordering: true,
                responsive: true,
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.13.4/i18n/Portuguese-Brasil.json"
                }
            });
        });
    </script>
@endpush
