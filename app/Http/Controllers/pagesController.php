<?php

namespace App\Http\Controllers;


namespace App\Http\Controllers;

use DB;
use App\Quotation;
use Illuminate\Support\Facades\Input; 
use Iluminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class pagesController extends BaseController{
    
    public function start(){
        echo('here');
    }

    public function home(){
        return view('welcome');
    }

    public function show(){

        $itens = \DB::select('SELECT * FROM inventario');
        
        return view('show',['itens' => $itens]);
    }

    public function delete(){
        return view('delete');
    }

    public function remove(){
        $id = request('id');
        DB::table('inventario')->where('id','=',$id)->delete();
        
        echo "<h1> Successfully Removed!! <h1>"; 
        $itens = \DB::select('SELECT * FROM inventario');
        
        return view('show',['itens' => $itens]);
    }

    public function add(){        
        return view('add');
    }
    
    public function insert(){
        $id = request('id');
        $nome = request('nome');
        $quantidade = request('quantidade');
        $data = request('data');
        $preço = request('preço');
        $local = request('local');

        $stock = DB::table('inventario')->where('id', "=", $id)->value('em_stock');
        $stock = $stock + $quantidade;
        $info=array('id'=>$id,"nome"=>$nome,"quantidade"=>$quantidade,"data"=>$data,"preço"=>$preço, "local"=>$local, "em_stock"=>$stock);
        DB::table('inventario')->insert($info);
        echo "<h1> Successfully Added!! <h1>"; 
        $itens = \DB::select('SELECT * FROM inventario');
        
        return view('show',['itens' => $itens]);
    }

    public function update(){
        return view('update');
    }
    public function updateby(){
        $id = request('idop');
        $op = request('option');
        $tochange = request('changeto');
        if($op == 1){
            $op = 'nome';
        }else if($op==2){
            $op='quantidade';
        }else if($op==3){
            $op='preço';
        }else if($op==4){
            $op='local';
        }else if($op==5){
            $op='data';
        }else if($op=6){
            $op='em_stock';
        }
		
         DB::table('inventario')->where('id', "=", $id)->update([$op =>$tochange]);
         echo "<h1> Successfully Modified!! <h1>"; 
         $itens = \DB::select('SELECT * FROM inventario');
        
        return view('show',['itens' => $itens]);

    }


    public function github(){
        return view('github');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

   
    public function index()
    {
        return view('home');
    }
    
}