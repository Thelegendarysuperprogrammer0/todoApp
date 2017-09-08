

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel Quickstart - Basic</title>
    <link href="{{ asset("css/app.css") }}" rel="stylesheet">
    <!-- CSS And JavaScript -->
</head>

<body style="background-image: url('images/flat.jpg'); background-repeat: repeat; background-size: 100% 100%;">
<div class="container">
    <div class="panel panel-default">
        <div class="panel-header text-center">Todolist</div>
    </div>
</div>
@yield('content')
</body>
</html>