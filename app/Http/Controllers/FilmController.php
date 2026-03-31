<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class FilmController extends Controller
{
    function layDanhSachTheLoaiPhim()
    {
        $dsTheLoaiPhim = Genre::all();
        return view("theLoaiPhim", compact("dsTheLoaiPhim"));
    }
}
