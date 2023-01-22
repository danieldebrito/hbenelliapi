<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//////////////////////////////////////////////
use App\Http\Controllers\Controller;
use App\Models\IntegralDetalle;


/**
 * Class IntegralDetalleController
 * @package App\Http\Controllers
 */
class IntegralDetalleController extends Controller
{
    public function show($id){
        $data = IntegralDetalle::find($id);

        return response()->json($data, 200);
    }

    public function index(){
        $data = IntegralDetalle::get();     

        return response()->json($data, 200);
    }

    public function store(Request $request){
        $IntegralDetalles = IntegralDetalle::create($request->all());
        
        return response()->json([
            'message' => "Successfully created",
            'success' => true,
          ], 200);
    }

    public function update(Request $request, $id){

        IntegralDetalle::find($id)->update($request->all());
        
        return response()->json([
            'message' => "Successfully updated",
            'success' => true
        ], 200);
      }

    public function destroy($id){
        IntegralDetalle::find($id)->delete();

        return response()->json([
            'message' => "Successfully deleted",
            'success' => true
        ], 200);
    }
}
