<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//////////////////////////////////////////////
use App\Http\Controllers\Controller;
use App\Models\Subrubro;


/**
 * Class CategoriaController
 * @package App\Http\Controllers
 */
class SubrubroController extends Controller{
    public function show($id){
        $data = Subrubro::find($id);

        return response()->json($data, 200);
    }

    public function index(){
        $data = Subrubro::get();     

        return response()->json($data, 200);
    }

    public function store(Request $request){
        $Categorias = Subrubro::create($request->all());
        
        return response()->json([
            'message' => "Successfully created",
            'success' => true,
          ], 200);
    }

    public function update(Request $request, $id){

        Subrubro::find($id)->update($request->all());
        
        return response()->json([
            'message' => "Successfully updated",
            'success' => true
        ], 200);
      }

    public function destroy($id){
        Subrubro::find($id)->delete();

        return response()->json([
            'message' => "Successfully deleted",
            'success' => true
        ], 200);
    }
}
