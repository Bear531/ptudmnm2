<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/yen', function () {
    return "Hello Yen"; #dòng này để cố ý tạo xung đột
});

Route::get('/quynhanh', 'App\Http\Controllers\ten@ten');

Route::get('/laythongtinsach', 'App\Http\Controllers\BookController@laythongtinsach2');

#Route::get('/sach', 'App\Http\Controllers\BookController@laythongtinsach');
Route::get('/theloai', 'App\Http\Controllers\BookController@laythongtintheloai');
Route::get('/QB_themdulieu', 'App\Http\Controllers\BookController@QB_themdulieu');

Route::get('/quynhanh', 'App\Http\Controllers\ten@ten');

Route::get('/camha', 'App\Http\Controllers\btn@ten');

Route::get('/danhsachtheloaiphim', 'App\Http\Controllers\FilmController@layDanhSachTheLoaiPhim'); #7.1
use App\Http\Controllers\MovieController;
route::get('/runtime', 'App\Http\Controllers\btn@runtime');

#btn 2
Route::get('/sach/{id?}', 'App\Http\Controllers\ViDuLayoutController@sach'); // ? là chỉ định id có thể có hoặc không (tuỳ chọn)
Route::get('sach/chitiet/{id}','App\Http\Controllers\ViduLayoutController@chitiet');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route:: get('/accountpanel' , 'App\Http\Controllers\AccountController@accountpanel' )
->middleware('auth' ) ->name("account");

Route:: get('/booklist' , 'App\Http\Controllers\BookController@bookList' )
->middleware('auth' ) ->name("booklist");

Route:: get('/bookcreate' , 'App\Http\Controllers\BookController@bookCreate' )
->middleware('auth' ) ->name("bookcreate");
Route:: get('/bookedit/{id}' , 'App\Http\Controllers\BookController@bookEdit' )
->middleware('auth' ) ->name("bookedit");
Route:: post('/bookdelete' , 'App\Http\Controllers\BookController@bookDelete' )
->middleware('auth' ) ->name("bookdelete");
Route:: get('/booksave/{action}' , 'App\Http\Controllers\BookController@bookSave' )
->middleware('auth' ) ->name("booksave");
Route:: post('/booksave/{action}' , 'App\Http\Controllers\BookController@bookSave' )
->middleware('auth' ) ->name("booksave");





