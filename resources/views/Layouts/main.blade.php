<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <div id="wp-header" class="mb-4">
            <div class="container">
                <div class="header ">
                    <ul class="header-menu d-flex justify-content-start mb-0">
                        <li><a href="{{ route('users.index') }}" class="header-menu-item">Danh Sách Người Dùng</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="wp-content">
            @yield('content')
        </div>
        <div id="wp-footer">
            <div class="container">
                <span class="footer">Footer</span>
            </div>
        </div>
    </div>
</body>

</html>
