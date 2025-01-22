<?php

namespace App\Http\Controllers;

use App\Especialidade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class EspecialidadeController extends Controller
{
    public function index()
    {
        $especialidades = Especialidade::all();
        return view('especialidades.index', compact('especialidades'));
    }

    public function create()
    {
        return view('especialidades.create');
    }

    public function destroy($id)
    {
        try {
            // Procura a especialidade pelo ID
            $especialidade = Especialidade::findOrFail($id);
            
            // Exclui a especialidade
            $especialidade->delete();
            
            // Retorna com mensagem de sucesso
            return redirect()->route('especialidades.index')->with('success', 'Especialidade excluída com sucesso!');
        } catch (\Exception $e) {
            // Em caso de erro, retorna com mensagem de erro
            return redirect()->route('especialidades.index')->with('error', 'Erro ao excluir a especialidade!');
        }
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|unique:especialidades',
            'responsavel_especialidade' => 'required',
        ]);
    
        Especialidade::create([
            'nome' => $request->nome,
            'responsavel_especialidade' => $request->responsavel_especialidade
        ]);
    
        return redirect()->route('especialidades.index')->with('success', 'Especialidade criada com sucesso!');
    }

    public function edit(Especialidade $especialidade)
    {
        return view('especialidades.edit', compact('especialidade'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        // Adicione este log para debugar
        Log::info('Termo de busca: ' . $query);
    
        $especialidades = Especialidade::where('nome', 'like', '%' . $query . '%')->get();
    
        // Log para verificar os resultados
        Log::info('Resultados encontrados: ' . $especialidades->count());
    
        return response()->json($especialidades);
    }


    public function update(Request $request, $especialidadeId)
    {
        $request->validate([
            'nome' => 'required|unique:especialidades,nome,' . $especialidadeId,
            'responsavel_especialidade' => 'required',
        ]);
    
        $especialidade = Especialidade::findOrFail($especialidadeId);
        $especialidade->update($request->all());
    
        return redirect()->route('especialidades.index')->with('success', 'Especialidade atualizada com sucesso!');
    }
}
