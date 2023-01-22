<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//////////////////////////////////////////////
use App\Http\Controllers\Controller;
use App\Models\Ingrediente;


/**
 * Class IngredienteController
 * @package App\Http\Controllers
 */
class IngredienteController extends Controller
{
    public function show($id){
        $data = Ingrediente::find($id);

        return response()->json($data, 200);
    }

    public function index(){
        $data = Ingrediente::get();     

        return response()->json($data, 200);
    }

    public function store(Request $request){
        $Ingredientes = Ingrediente::create($request->all());
        
        return response()->json([
            'message' => "Successfully created",
            'success' => true,
          ], 200);
    }

    public function update(Request $request, $id){

        Ingrediente::find($id)->update($request->all());
        
        return response()->json([
            'message' => "Successfully updated",
            'success' => true
        ], 200);
      }

    public function destroy($id){
        Ingrediente::find($id)->delete();

        return response()->json([
            'message' => "Successfully deleted",
            'success' => true
        ], 200);
    }
}
