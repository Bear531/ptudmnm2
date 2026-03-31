<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class btn extends BaseController
{
    function ten(){
        return view("ten");
    }

    function runtime(){
        $movie = DB::table('movie')
            ->select('movie_name','release_date','runtime')
            ->where('runtime','>',120)
            ->limit(10)
            ->get();

        return view('btn', compact('movie'));
    }
}