<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//////////////////////////////////////////////
use App\Http\Controllers\Controller;
use App\Models\RecetaItem;


/**
 * Class RecetaItemController
 * @package App\Http\Controllers
 */
class RecetaItemController extends Controller
{
    public function show($id){
        $data = RecetaItem::find($id);

        return response()->json($data, 200);
    }

    public function index(){
        $data = RecetaItem::get();     

        return response()->json($data, 200);
    }

    public function store(Request $request){
        $RecetaItems = RecetaItem::create($request->all());
        
        return response()->json([
            'message' => "Successfully created",
            'success' => true,
          ], 200);
    }

    public function update(Request $request, $id){

        RecetaItem::find($id)->update($request->all());
        
        return response()->json([
            'message' => "Successfully updated",
            'success' => true
        ], 200);
      }

    public function destroy($id){
        RecetaItem::find($id)->delete();

        return response()->json([
            'message' => "Successfully deleted",
            'success' => true
        ], 200);
    }
}
