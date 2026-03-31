<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViDuController extends Controller{
function vidu1(){
return view('vidu1');
}


function vidu2(){
return view('vidu2');
}


function Age(Request $request)
{
$nam_sinh = $request->input("nam_sinh");

$ket_qua = date('Y') - $nam_sinh;
return "Kết quả là: ".$ket_qua;
}
}