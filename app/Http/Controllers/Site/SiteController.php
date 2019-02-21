<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller

{

    public function __construct(){
        /*$this->middleware('auth') //only para apenas e except para exceções
            ->only(['contato','categoria']);*/
    }
    public function index(){

        $title='Inicio';
        $titulo='Seja bem vindo a GG! - Game Gather';
        $caminho='GG! - Game Gather  >  Inicio';
        $notice='Conheça nosso projeto sobre o combate a toxicidade dos jogadores';

        return view('site.principal.home',compact('title','titulo','caminho','notice'));	
    }

    public function jogadorestoxicos(){

        
        $title='Jogadores-Toxicos';
        $titulo='Jogadores-Toxicos';
        $subtitulo='GG! - Game Gather';
        $caminho='GG! - Game Gather  >  Jogadores-Toxicos';
        $notice='Analisando a toxicidade dos jogadores e medidas a serem tomadas';

        return view('site.principal.jogadorestoxicos',compact('title','titulo','subtitulo','caminho','notice'));
    }
    
    //GameGather
    
    public function historia(){

        $title='GameGatherGG-Historia';
        $titulo='História';
        $subtitulo='GG! - Game Gather';
        $caminho='GG! - Game Gather  >  História';
        $notice='Veja como foi nossa tragetoria até aqui';

        return view('site.gamegather.historia',compact('title','titulo','subtitulo','caminho','notice'));
    }

    public function equipe(){

        $title='GameGatherGG-Equipe';
        $titulo='Equipe';
        $subtitulo='GG! - Game Gather';
        $caminho='GG! - Game Gather  >  Equipe';
        $notice='Conheça a nossa equipe';

        return view('site.gamegather.equipe',compact('title','titulo','subtitulo','caminho','notice'));
    }

    public function objetivos(){

        $title='GameGatherGG-Objetivos';
        $titulo='Objetivos';
        $subtitulo='GG! - Game Gather';
        $caminho='GG! - Game Gather  >  Objetivos';
        $notice='Veja nossos objetivos';

        return view('site.gamegather.objetivos',compact('title','titulo','subtitulo','caminho','notice'));
    }

    public function mercadogames(){

        $title='GameGatherGG-MercadoGames';
        $titulo='Mercado de Games';
        $subtitulo='GG! - Game Gather';
        $caminho='GG! - Game Gather  >  Mercado de Games';
        $notice='Como esta o mercado de games atualmente e como nós colocariamos nele';

       return view('site.gamegather.mercadogames',compact('title','titulo','subtitulo','caminho','notice'));
    }

    public function parceiros(){

        $title='GameGatherGG-Parceiros';
        $titulo='Parceiros';
        $subtitulo='GG! - Game Gather';
        $caminho='GG! - Game Gather  >  Parceiros';
        $notice='Conheça nossos parceiros e caso queira ser tambem entre em contato conosco';

        return view('site.gamegather.parceiros',compact('title','titulo','subtitulo','caminho','notice'));
    }

    public function doc(){

        $title='GameGatherGG-Documentos';
        $titulo='Documentos Projeto';
        $subtitulo='GG! - Game Gather';
        $caminho='GG! - Game Gather  >  ';
        $notice='Conheça os documentos e informações legais do projeto';

        return view('site.gamegather.doc',compact('title','titulo','subtitulo','caminho','notice'));
    }

    public function faleconosco(){

        $title='GameGatherGG-faleconosco';
        $titulo='Fale Conosco';
        $subtitulo='GG! - Game Gather';
        $caminho='GG! - Game Gather  >  Fale Conosco';
        $notice='Suporte on-line';

        return view('site.gamegather.faleconosco',compact('title','titulo','subtitulo','caminho','notice'));
    }


    //Jogos e api's
     public function lol(){

        $title='Jogos-Lol';
        $titulo='League of Legends';
        $subtitulo='GG! - Game Gather';
        $caminho='GG! - Game Gather  >  League of Legends';
        $notice='Conheça o jogo League of Legends';

     	return view('site.jogosapi.lol',compact('title','titulo','subtitulo','caminho','notice'));
    }
    public function dota(){

        $title='Jogos-Dota2';
        $titulo='Dota2';
        $subtitulo='GG! - Game Gather';
        $caminho='GG! - Game Gather  >  Dota2';
        $notice='Conheça o jogo Dota2';
       return view('site.jogosapi.dota',compact('title','titulo','subtitulo','caminho','notice'));
    }
    public function wow(){

        $title='Jogos-Wow';
        $titulo='World of Warcraft';
        $subtitulo='GG! - Game Gather';
        $caminho='GG! - Game Gather  >  World of Warcraft';
        $notice='Conheça o jogo World of Warcraft';

        return view('site.jogosapi.wow',compact('title','titulo','subtitulo','caminho','notice'));
    }
    public function fifa(){

        $title='Jogos-Fifa19';
        $titulo='Fifa-19';
        $subtitulo='GG! - Game Gather';
        $caminho='GG! - Game Gather  >  Fifa-19';
        $notice='Conheça o jogo Fifa-19';

        return view('site.jogosapi.fifa',compact('title','titulo','subtitulo','caminho','notice'));
    }
    public function csgo(){

        $title='Jogos-CSgo';
        $titulo='Counter Strike';
        $subtitulo='GG! - Game Gather';
        $caminho='GG! - Game Gather  >  Counter Strike';
        $notice='Conheça o jogo Counter Strike Global Ofensive';

        return view('site.jogosapi.csgo',compact('title','titulo','subtitulo','caminho','notice'));
    }
    public function discord(){

        $title='Ferramenta-Discord';
        $titulo='Discord';
        $subtitulo='GG! - Game Gather';
        $caminho='GG! - Game Gather  >  Discord';
        $notice='Conheça a ferramenta discord';

        return view('site.jogosapi.discord',compact('title','titulo','subtitulo','caminho','notice'));
    }
}
