<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    @include('web.inc.navbar')
    <div class="container">
        @include('web.inc.messages')
    </div>
    <div class="container">         
        @yield('content')
    </div>
</body>
</html>