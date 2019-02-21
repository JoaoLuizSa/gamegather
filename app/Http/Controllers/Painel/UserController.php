<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cadastro\Usuario;
use Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
     private $user;

    public function __construct(Usuario $usuario){
            $this->user = $usuario;
            
    }
    public function index()
    {
       

        //view('site.principal.home',compact('title','titulo','caminho','notice','login'));
    }

    public function create()
    {
        $title='Cadastre-se';
        $titulo='Cadastre uma conta pessoal';
        $caminho='GG! - Game Gather  >  Cadastro';
        $nivel=['Gamer Iniciante','Gamer Casual','Gamer Hardcore'];
        
        

        return view('painel.cadastro.cadastro',compact('title','titulo','caminho','nivel'));
    }

    public function store(Request $request)
    {
        $title='Inicio';
        $titulo='Seja bem vindo a GG! - Game Gather';
        $caminho='GG! - Game Gather  >  Inicio';
        $notice='Conheça nosso projeto sobre o combate a toxicidade dos jogadores';

        
        $usertro=$request->except('_token');
        

        //$usertro['image']=$request['image'];
        if ($request->hasfile('image') && $request->file('image')->isvalid())  {    $name = $request->email.'-'.kebab_case($request->name);}        $extension=$request->image->extension();
                    $namefile= "{$name}.{$extension}";
                    //dd($namefile);
                    $usertro['image']=$namefile;
              $upload=  $request->image->storeAs('usuarios',$namefile);
                //dd($upload);

        //$usertro['image']=Storage::put('$request->image', $request->image);
        
        //dd($request->image);

        $usertro['password']= bcrypt($usertro['password']);
        //dd($cript);
        //dd($usertro);
        //$formsugest['active']= (!isset($formsugest['active']))?0:1;
       $this->user->create($usertro);

        return view('site.principal.home',compact('title','titulo','caminho','notice'));
    }

    public function show(Request $request, $id)
    {   
        $title='Logue-se a sua conta';
        $titulo='Logue em sua conta';
        $caminho='GG! - Game Gather  >  Log-in';
        
       // $users=$users->except('_token');
        
        return view('painel.login.login')->with(compact('title','titulo','caminho'));
    }

    public function edit($id)
    {
        $title='Altere suas informações gerais';
        $titulo='Alteração';
        $caminho='GG! - Game Gather  >  Alteração';
        //dd($id);
        
        $dados=$this->user->find($id);

        
       // dd($usuario);
        return view('painel.editar.edit',compact('title','titulo','caminho','dados'));
    
   }
    public function update(Request $request, $id)
    {   
        $title='Altere suas informações gerais';
        $titulo='Alteração';
        $caminho='GG! - Game Gather  >  Alteração';
        $usertro=$request->except('_token');
        //dd($usertro);
        /*if ($request->hasfile('image') && $request->file('image')->isvalid())  {    $name = $request->email.'-'.kebab_case($request->name);
                dd($usertro);}

                    $extension=$request->image->extension();
                    $namefile= "{$name}.{$extension}";
                    dd($namefile);
                    $usertro['image']=$namefile;
              $upload=  $request->image->storeAs('usuarios',$namefile);
                //dd($upload);*/

        $usertro['password']= bcrypt($usertro['password']);
        $dados=$this->user->find($id);
        //dd($dados);

            if (hash::check($request->password,$dados->password)) {
               $dados->update($usertro);
               return view('painel.editar.edit',compact('title','titulo','caminho','dados'));
            }else{
                return view('painel.editar.edit',compact('title','titulo','caminho','dados'));
            }

                
    }
    public function fazerlogin(Request $request)
    {   
        $title='Inicio';
        $titulo='Seja bem vindo a GG! - Game Gather';
        $caminho='GG! - Game Gather  >  Inicio';
        $notice='Conheça nosso projeto sobre o combate a toxicidade dos jogadores';



        $dados=Usuario::where('email',$request->email)->first();
       // dd($dados);

        if(!isset($dados)){
            $return= 'Este email não esta cadastrado';
        }
        
        else
                {if (hash::check($request->password,$dados->password)) {
                $return= 'Voce logou com sucesso';
            }else{
                $return= 'a senha digitada não confere';
            }
        }
        

        return view('site.templates.template')->with(compact('title','titulo','caminho','notice','return','dados'));
    }

    public function destroy($id)
    {
        ////$login['password']= bcrypt($login['password']);  dd($login);
    }
}
