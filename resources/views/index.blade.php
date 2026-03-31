<x-book-layout>
    <?php if (isset($id)) {
        if ($id == '1') $title = 'Sách | Tiểu thuyết';
        elseif ($id == '2') $title = 'Sách | Truyện ngắn - tản văn';
        elseif ($id == '3') $title = 'Sách | Tác phẩm kinh điển';
    } else $title = 'Sách | Trang chủ';
    ?>
    <x-slot name="title">
        {{$title}}
    </x-slot>
    <x-slot name="content">
        <div class='list_book'>
            @foreach($data_sach as $row)
            <div class='book'>
                <a href='{{url("sach/chitiet/$row->id")}}'>
                    <img src='{{$row->link_anh_bia}}' width=100% height=200px>
                    <br>
                    <b>{{$row->tieu_de}}</b></a><br>
                <i>{{number_format($row->gia_ban,0,',','.')}}đ</i>
            </div>
            @endforeach
        </div>
    </x-slot>
</x-book-layout>