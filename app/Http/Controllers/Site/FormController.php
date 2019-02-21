<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\formulario;
use App\Http\Requests\Painel\FormularioRequest;

class FormController extends Controller
{

    private $form;

    public function __construct(formulario $formulario){
            $this->form = $formulario;
    }
    public function index()
    {
        $title ='Listando Formularios';
        $formu = $this->form->all();

        return view('painel.formularios.show', compact('formu','title'));
    }

    public function create()
    {
        $title="Criando Formulario: ";
        $idade=['menor de 18','entre 18 e 60','maior de 60'];
        return view('painel.formularios.cadastro-edit',compact('title','idade'));

       /* $this->form->create([
            'name' => 'Juninho sa',
            'email'=> 'juninho@gmail.com',
            'idade' => 'entre 18 e 60',
            'sexo' => 'masculino',
            'descricao' => 'Oi eu sou juninho'
        ]);*/
    }

    public function store(FormularioRequest $request)
    {
        //dd($request->except('_token'));
        $formsugest=$request->except('_token');
        //Validação de dados
        $this->validate($request, $this->form->rules, $this->form->messages);//,$messages custom messages erros
        /*alternative validate
        $validate = validator($formsugest,$this->form->rules);
            if($validate->fails() ){
                return refirect()
                    ->route('formulario.create')
                    ->withErrors($validate)
                    ->withInput();
            }

        */
        //dd($formsugest);
        //$formsugest['active']= (!isset($formsugest['active']))?0:1;
        $this->form->create($formsugest);

        return redirect()->route('formulario.index');
        
    }

    public function show($id)
    {
        $formu=$this->form->find($id);
       
        $formu->delete();
        //$this->form->destroy($id);
        return redirect()->route('formulario.index');
    }

    public function edit($id)
    {
        $formu=$this->form->find($id);
        //dd($formu);
        $title="Editar formulario: {$formu->name}";
        $idade=['menor de 18','entre 18 e 60','maior de 60'];
        
        return view('painel.formularios.cadastro-edit',compact('formu','title','idade'));
    }

 
    public function update(FormularioRequest $request, $id)
    {
        $data=$request->except('_token');
        $forms=$this->form->find($id);
       // dd($forms);

        $forms->update($data);

        return redirect()->route('formulario.index');
    }

    public function destroy($id)
    {

    }
}
