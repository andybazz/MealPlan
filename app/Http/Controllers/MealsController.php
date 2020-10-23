<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MealsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function GetAdultMeals()
    {
        $adultmeal = DB::table('meals')
        ->inRandomOrder()
        ->limit(7)
        ->where('user_category','=','adults')
        ->orWhere('user_category','=','all')
        ->get(); 

        $kidsmeal = DB::table('meals')
                        ->inRandomOrder()
                        ->limit(7)
                        ->where('user_category','=','kids')
                        ->get();   

	    return view('home', ['adultmeal' => $adultmeal, 'kidsmeal' => $kidsmeal]);
    }

}
