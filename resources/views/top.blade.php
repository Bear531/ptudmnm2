<h2>Top 10 phim có điểm cao nhất</h2>

    <table border="1" cellpadding="10" style="border-collapse: collapse;">
    <tr>
        <th>Tên phim</th>
        <th>Ngày phát hành</th>
        <th>Điểm</th>
    </tr>

    @foreach($movies as $m)
    <tr>
        <td>{{$m->movie_name}}</td>
        <td>{{$m->release_date}}</td>
        <td>{{$m->vote_average}}</td>
    </tr>
    @endforeach
</table>