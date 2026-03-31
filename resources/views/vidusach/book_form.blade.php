<x-account-panel>
    <form action="{{route('booksave',['action'=>$action])}}" method="post" enctype="multipart/form-data">
        @if($action == 'edit' && isset($book))
        <input type="hidden" name="id" value="{{ $book->id }}">
        @endif
        @csrf <label>Tiêu đề</label>
        <input type='text' class='form-control form-control-sm' name='tieu_de' value="{{$book->tieu_de ?? ''}}">

        <label>Nhà xuất bản</label>
        <input type='text' class='form-control form-control-sm' name='nha_xuat_ban' value="{{$book->nha_xuat_ban ?? ''}}">

        <label>Nhà cung cấp</label>
        <input type='text' class='form-control form-control-sm' name='nha_cung_cap' value="{{$book->nha_cung_cap ?? ''}}">

        <label>Tác giả</label>
        <input type='text' class='form-control form-control-sm' name='tac_gia' value="{{$book->tac_gia ?? ''}}">

        <label>Hình thức bìa</label>
        <input type='text' class='form-control form-control-sm' name='hinh_thuc_bia' value="{{$book->hinh_thuc_bia ?? ''}}">

        <label>Giá bán</label>
        <input type='text' class='form-control form-control-sm' name='gia_ban' value="{{$book->gia_ban ?? ''}}">

        <label class='mt-2'>Thể loại</label>
        <select name='the_loai' class='form-control'>
            @foreach($dm_the_loai as $row)
            <option value='{{$row->id}}'
                @if($action=='edit' && isset($book))
                {{ $book->the_loai == $row->id ? 'selected' : '' }}
                @endif>
                {{$row->ten_the_loai}}
            </option>
            @endforeach
        </select>
        <br>

        <label>File ảnh bìa</label>
        <input type='file' name='file_anh_bia' accept="image/*" class='form-control-file'>

        <label>Link ảnh bìa</label>
        <input type='text' name='link_anh_bia' class='form-control'>

        <button type="submit" class='btn btn-success mt-2'>Lưu</button>
    </form>
</x-account-panel>