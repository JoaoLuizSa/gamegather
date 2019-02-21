<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\Produto;

class ProdutoController extends Controller
{   
    private $produ;

    public function __construct(Produto $product){
            $this->produ = $product;
    }

    public function index()
    {
        $prod=$this->produ->all();
        return view('painel.produtos.produto', compact('prod'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function tests(){

        /*$this->produ->create([
            'name'       =>'placa',
            'number'     =>'2',
            'active'     =>false,
            'categoria'  =>'informatica',
            'descricao'  =>'Uma placa de video'     
        ]);*/

       /* $prod=$this->produ->where('name',"placa mae");//find(); para ID e where('name',"placa mae"); para demais itens
        $prod->update([
            'name'       =>'placa mamae',
            'number'     =>'5',
            'active'     =>true,
            'categoria'  =>'informatica',
            'descricao'  =>'Uma placa maamae']);
        //dd($prod->name);Mostrar o array
    */
            /*$prod=$this->produ->find(3);//destroy(3) ja apaga direto;pelo id
            $prod->delete();*/
    }

}
