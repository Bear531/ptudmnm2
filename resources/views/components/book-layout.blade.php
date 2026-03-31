<!DOCTYPE html>
<html>

<head>
    <title>{{$title}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        .navbar {
            background-color: #ff5850;
            font-weight: bold;
            padding: 0;
        }

        .nav-item a {
            color: #fff !important;
            padding-left: 15%;
        }

        .active {
            background-color: #c74740ff;
        }

        .navbar-nav {
            width: 100%;
        }

        .list_book {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
            margin: 0 5px 0 0;
            /* border: 1px solid black;  */
        }

        .book {
            text-align: center;

            /* border: 1px solid black; */
            & a {
                text-decoration: none;
                color: black;
            }
        }

        .col-9 {
            margin-top: 2vh;
            margin-bottom: 5vh;
        }
    </style>
</head>

<body>
    <header style='text-align:center'>
        <img src='{{asset('image/banner_sach.jpg')}}' width=1000px height=auto>
    </header>
    <main style="width:1000px; margin:2px auto;">
        <div class='row'>
            <div class='col-3 pr-0'>
                <nav class='navbar navbar-light'>
                    <ul class='navbar-nav'>
                        <li class='nav-item <?= parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) == '/sach' ? 'active' : '' ?>'> <a class='nav-link' href="{{url('sach/')}}">Trang chủ</a> </li>
                        <li class='nav-item <?= parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) == '/sach/1' ? 'active' : '' ?>'> <a class='nav-link' href='{{url("sach/1")}}'>Tiểu thuyết</a></li>
                        <li class='nav-item <?= parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) == '/sach/2' ? 'active' : '' ?>'> <a class='nav-link' href='{{url("sach/2")}}'>Truyện ngắn - tản văn</a></li>
                        <li class='nav-item <?= parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) == '/sach/3' ? 'active' : '' ?>'> <a class='nav-link' href='{{url("sach/3")}}'>Tác phẩm kinh điển</a></li>
                    </ul>
                </nav>
                <img src={{asset('image/sidebar_1.jpg')}} width=100% class='mt-1'>
                <img src={{asset('image/sidebar_2.jpg')}} width=100% class='mt-1'>
            </div>
            <div class='col-9'>
                {{$content}}
            </div>
        </div>
    </main>
</body>

</html>