

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel Quickstart - Basic</title>
    <link href="{{ asset("css/app.css") }}" rel="stylesheet">
    <!-- CSS And JavaScript -->
</head>

<body style="background-image: url('images/flat.jpg'); background-repeat: repeat; background-size: 100% 100%;">
<div class="container">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
        <!-- Navbar Contents -->
        <ul class="nav nav-pills">
            <li role="presentation" class="active"><a href="#">Home</a></li>
            <li role="presentation"><a href="#">ching chong</a></li>
            <li role="presentation"><a href="#">pang pang</a></li>
        </ul>
        </div>
    </nav>
</div>

@yield('content')
</body>
</html>