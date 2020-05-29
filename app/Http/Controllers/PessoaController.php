<?php

namespace App\Http\Controllers;

use App\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    public function __construct()
    {
       /*  $this->middleware('auth'); */
    }
    public function visualizar($id)
    {
        $pessoa=Pessoa::find($id);
        return view('Pessoas.detalhamento',['pessoa' => $pessoa]);
    }

    public function index()
    {
        $pessoas=Pessoa::all();
        return view('Pessoas.tabela',['pessoas' => $pessoas]);
    }

    public function create()
    {
        return view('Pessoas.cadastro');
    }

    public function store(request $request)
    {
        $pessoa= new Pessoa();
        $pessoa->nome = $request->input('nome');
        $pessoa->sexo =$request->input('sexo');
        $pessoa->data_nascimento =$request->input('data_nascimento');
        $pessoa->telefone = $request->input('telefone');
        $pessoa->cpf = $request->input('cpf');
        $pessoa->email =$request->input('email');
        $pessoa->escolaridade = $request->input('escolaridade');
        $pessoa->senha = bcrypt($request->input('senha'));
        $pessoa->confirmarSenha =bcrypt($request->input('confirmarSenha'));
        $pessoa->envioFormulario = $request->input('envioFormulario');
        if ($request->hasFile('fotoPerfil'))
        $pessoa->fotoPerfil =base64_encode(file_get_contents($request->file('fotoPerfil')));

        $pessoa->save();
        
        return redirect()->route('lista');

    }

    public function edit($id)
    {
        $pessoa = Pessoa::find($id);

        return view('Pessoas.edit',['pessoa' => $pessoa]);
	}

    public function update( request $request, $id)
    {
        $pessoa= Pessoa::find($id);
        $pessoa->nome = $request->input('nome');
        $pessoa->sexo =$request->input('sexo');
        $pessoa->data_nascimento =$request->input('data_nascimento');
        $pessoa->telefone = $request->input('telefone');
        $pessoa->cpf = $request->input('cpf');
        $pessoa->email =$request->input('email');
        $pessoa->escolaridade = $request->input('escolaridade');
        $pessoa->envioFormulario = $request->input('envioFormulario');
        if ($request->hasFile('fotoPerfil'))
        $pessoa->fotoPerfil =base64_encode(file_get_contents($request->file('fotoPerfil')));
        $pessoa->save();

        return redirect()->route('lista')->with('sucesso', 'Cadastro atualizado!');
    }

    public function destroy($id)
    {
        $pessoa = Pessoa::find($id)->delete();

        return redirect()->route('lista');
    }

    public function pdf(){
            $pessoas=Pessoa::all();
            $pdf = \PDF::loadView('Pessoas.pdf', compact('pessoas'));
            return $pdf->stream('exemplo.pdf');
    }
}
