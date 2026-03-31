<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phim có thời lượng > 120 phút</title>
</head>
<body>

    <h1>Danh sách phim có thời lượng lớn hơn 120 phút</h1>

    <table border="1" cellpadding="10" style="border-collapse: collapse;">
        <tr>
            <th>Tên phim</th>
            <th>Ngày phát hành</th>
            <th>Thời lượng (phút)</th>
        </tr>

        @foreach ($movie as $row)
        <tr>
            <td>{{ $row->movie_name }}</td>
            <td>{{ $row->release_date }}</td>
            <td>{{ $row->runtime }}</td>
        </tr>
        @endforeach

    </table>

</body>
</html>