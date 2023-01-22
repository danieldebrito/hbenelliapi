<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//////////////////////////////////////////////
use App\Http\Controllers\Controller;
use App\Models\Categoria;


/**
 * Class CategoriaController
 * @package App\Http\Controllers
 */
class CategoriaController extends Controller
{
    public function show($id){
        $data = Categoria::find($id);

        return response()->json($data, 200);
    }

    public function index(){
        $data = Categoria::get();     

        return response()->json($data, 200);
    }

    public function store(Request $request){
        $Categorias = Categoria::create($request->all());
        
        return response()->json([
            'message' => "Successfully created",
            'success' => true,
          ], 200);
    }

    public function update(Request $request, $id){

        Categoria::find($id)->update($request->all());
        
        return response()->json([
            'message' => "Successfully updated",
            'success' => true
        ], 200);
      }

    public function destroy($id){
        Categoria::find($id)->delete();

        return response()->json([
            'message' => "Successfully deleted",
            'success' => true
        ], 200);
    }
}
