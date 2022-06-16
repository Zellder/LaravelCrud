<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Documento;
use App\Models\TipoDocumento;

class CrudController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function question1(){

        $array = [1,2,3,4,5,6,7,8,9,10];
        $max = max($array);
        $min = min($array);

        return view('teste1',['array'=>$array,'max'=>$max,'min'=>$min]);
    }

    public function question2(){

        $array=[];
        $result=0;
        for($i=0;$i<6;$i++){
        $array[$i] = rand(10,20);
        $result += $array[$i];
        }
        return view('teste2',['array'=>$array,'result'=>$result]);
    }

    public function question3(){
        return view('teste3');
    }

    public function question4(){
        $name = "FabricaInfo";
        $value=0;
        $count=strlen($name);
        $array = str_split($name);
        for($i=0; $i<$count; $i++){
            if(ctype_upper($array[$i])){
               $value ++;
            }
        }
        return view('teste4',['name'=>$name,'value'=>$value]);
    }

    public function crud(){
        
        return view('crud');
    }

    public function login(){
        return view('login');
    }
    public function create(){

        $tipo_documentos= tipoDocumento:: all();

        return view('create',['tipo_documentos'=>$tipo_documentos]);
    }

    public function consulta(){

        $documentos=documento :: all();
        $tipo_documentos= tipoDocumento:: all();

        return view('consulta',['documentos'=>$documentos, 'tipo_documentos'=>$tipo_documentos]);
    }

    public function store(Request $request){
        $documentos = new documento;
        $documentos->titulo = $request->titulo;
        $documentos->nome_arquivo = $request->nome_arquivo;
        $documentos->tipo_id = $request->tipo_id;

        $documentos->save();
   
        return redirect('/create');
    }

    public function destroy($id){
        
        Documento::findOrFail($id)->delete();

        return redirect('/consulta');
    }

    public function edit($id){
        $documentos = Documento::findOrFail($id);
        $tipo_documentos= tipoDocumento:: all();

        return view('/edit',['documentos' => $documentos,'tipo_documentos'=>$tipo_documentos]);
    }

    public function update(Request $request){
       Documento::findOrFail($request->id)->update($request->all());
       
       return redirect('/consulta');
    }
}
?>
