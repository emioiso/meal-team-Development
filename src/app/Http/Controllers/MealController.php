<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meal;
use DB;
use Illuminate\Support\Facades\Log;

class MealController extends Controller
{
    public function mealpost (Request $request,Meal $meal) {
        $input = $request;
       //Log::debug($request);
         $meal -> create([
            'name' => $request->名前,
            //'img' =>123,
            'Ingredients_Memo' => $request ->メモ,
            'way' => $request ->作り方,
            'cost' => $request ->コスト,
            //'categoly_id' => 1,
            'diffyculty' =>$request -> 難易度,
            'satiety' => $request -> 満足度
        ]);

        $item = DB::table('meals')->where('name', $request->name)->get();
        
        
        $array = [
            'tokyo' => 3
        ];
       //echo json_encode($array);
       //return response()->json($array);
    }

    
    public function show (Meal $meal){
        return view('meals/show',compact('meal'));
    }
}
