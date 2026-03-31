<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Categories;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    function bookList()
    {
        $data = Book::all();
        return view('vidusach.book_list', compact('data'));
    }
    function bookCreate()
    {
        $action = "create";
        $dm_the_loai = Categories::all();
        return view('vidusach.book_form', compact('action', 'dm_the_loai'));
    }
    function bookEdit($id)
    {
        $action = "edit";
        $book = Book::findOrFail($id);
        $dm_the_loai = Categories::all();
        return view('vidusach.book_form', compact('book', 'dm_the_loai', 'action'));
    }
    function bookDelete(Request $request)
    {
        Book::where("id", $request->input('id'))->delete();
        return redirect()->route('booklist')->with('status', "Xoá thành công");
    }

    function bookSave(Request $request, $action)
    {
        $request->validate([
            'tieu_de' => ['required', 'string', 'max:255'],
            'nha_xuat_ban' => ['required', 'string', 'max:255'],
            'nha_cung_cap' => ['required', 'string', 'max:255'],
            'tac_gia' => ['required', 'string', 'max:255'],
            'hinh_thuc_bia' => ['required', 'string', 'max:255'],
            'gia_ban' => ['required', 'numeric', 'min:0'],
            'the_loai' => ['required', 'exists:dm_the_loai,id'],
            'file_anh_bia' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'], // Validate file ảnh
            'link_anh_bia' => ['nullable', 'string']
        ]);

        $data = $request->only([
            'tieu_de',
            'nha_xuat_ban',
            'nha_cung_cap',
            'tac_gia',
            'hinh_thuc_bia',
            'gia_ban',
            'the_loai'
        ]);

        if ($request->hasFile('file_anh_bia')) {
            $file = $request->file('file_anh_bia');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/books'), $fileName); // Lưu vào public/uploads/books
            $data['file_anh_bia'] = 'uploads/books/' . $fileName;
        } elseif ($request->input('link_anh_bia')) {
            $data['link_anh_bia'] = $request->input('link_anh_bia');
        }

        if ($action == 'edit') {
            $id = $request->input('id');
            Book::where("id", $id)->update($data);
            $message = "Cập nhật thành công";
        } else {
            Book::create($data);
            $message = "Thêm mới thành công";
        }

        return redirect()->route('booklist')->with('status', $message);
    }
}
