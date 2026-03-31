<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VidulayoutController extends Controller {
function sach($id = null)
    {
        if (isset($id)) {
            $data_sach = DB::select("select * from sach where the_loai = ? order by gia_ban asc limit 0,8", [$id]);
        } else {
            $data_sach = DB::select("select * from sach order by gia_ban asc limit 0,8");
        }
        return view('index', compact('data_sach', 'id'));
    }
    function chitiet($id)
    {
        $data = DB::select("select * from sach where id = ?", [$id])[0]; //DB::table("sach")->where("id",$id)->first();
        return view("chitiet", compact("data"));
    }
}
