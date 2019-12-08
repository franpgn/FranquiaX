<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Jogo;

class JogosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            return view('jogos.index');
        }else{
            return redirect ('/login')->with('failure', 'Faça o Login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::check()) {
            return view('jogos.cadastro');
        }else{
            return redirect ('/login')->with('failure', 'Faça o Login'); 
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::check()) {
            $Jogo = new Jogo([
                'nome' => $request->get('nome'),
                'data' => $request->get('data'),
                'empresa' => $request->get('empresa'),
                'console' => $request->get('console'),
                'resumo' => $request ->get('resumo'),
            ]);
            $Jogo->save();
            return redirect('/Jogo/show')->with('success', 'Jogo Cadastrado!');
        }else{
            return redirect ('/login')->with('failure', 'Faça o Login');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Auth::check()) {
         $jogos = Jogo::get();
         return view('jogos.lista', compact ('jogos'));
     }else{
        return redirect ('/login')->with('failure', 'Faça o Login');
    }

}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::check()) {
         $jogos = Jogo::find($id);
         return view('jogos.edit', compact('jogos'));
     }else{
        return redirect ('/login')->with('failure', 'Faça o Login');
    }

}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       if (Auth::check()) {
         $request->validate([
            'nome'=>'required',
            'empresa'=>'required',
            'data'=>'required',
            'console'=>'required',
            'resumo'=>'required'
        ]);

         $jogos = Jogo::find($id);
         $jogos->nome =  $request->get('nome');
         $jogos->empresa = $request->get('empresa');
         $jogos->data = $request->get('data');
         $jogos->console = $request->get('console');
         $jogos->resumo = $request->get('resumo');
         $jogos->save();

         return redirect('/Jogo/show')->with('success', 'Cadastro atualizado!');

     }else{
        return redirect ('/login')->with('failure', 'Faça o Login');
    }
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Auth::check()) {
          $Jogo = Jogo::find($id);
          $Jogo->delete();

          return redirect('/Jogo/show')->with('success', 'Jogo deletado!');
      }else{
        return redirect ('/login')->with('failure', 'Faça o Login');
    }
    
}
}
