<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Game;

class GamesController extends Controller
{
    public function index(Request $request){
        $games= Game::all();
        $mensagemSucesso = session('mensagem.sucesso');

       

        return view('games.index')->with('games',$games)->with('mensagemSucesso', $mensagemSucesso );
    }

    public function create(){
        return view('games.create');
    }

    public function store(Request $request){
        $game = Game::create($request->all());


        return redirect()->route("Games.index")->with('mensagem.sucesso', "Game '{$game->nome}' adicionado com sucesso!");
    }

    public function destroy(Game $game){
        #Game::destroy($request->game);
        $game->delete();
        

        return redirect()->route("Games.index")->with('mensagem.sucesso', "Game '{$game->nome}' removido com sucesso!");

    }
}
