<html>
    @foreach($movie as $row)
    Tên phim: {{$row->movie_name}}; <br>
    Ngày phát hành: {{$row->release_date}}; <br>
    Thời lượng phim: {{$row->runtime}}; <br>
    @endforeach
</html>