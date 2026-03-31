<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //use HasFactory;
    protected $table = "sach";
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $fillable = [
        'tieu_de',
        'nha_xuat_ban',
        'nha_cung_cap',
        'tac_gia',
        'hinh_thuc_bia',
        'gia_ban',
        'the_loai',
        'link_anh_bia',
        'file_anh_bia'
    ];
}
