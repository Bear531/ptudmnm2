<body>
    <h1>Danh sách thể loại phim</h1>

    <table border="1" cellpadding="10" style="border-collapse: collapse;">
        <tr>
            <th>Tên thể loại (EN)</th>
            <th>Tên thể loại (VN)</th>
        </tr>

        @foreach ($dsTheLoaiPhim as $row)
        <tr>
            <td>{{ $row->genre_name }}</td>
            <td>{{ $row->genre_name_vn }}</td>
        </tr>
        @endforeach

    </table>
</body>