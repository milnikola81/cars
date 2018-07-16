<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cars | First Laravel Project</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

        <!-- App CSS -->
        <link rel="stylesheet" href="/css/cars.css" >

        
       
    </head>
    <body>
        <div class="blog-masthead">
            <div class="container">
                <nav class="nav">
                <a class="nav-link" href="/">Home</a>
                <a class="nav-link" href="/cars">Cars</a>
                <a class="nav-link" href="/about">About</a>
                </nav>
            </div>
        </div>

        @yield('content')
    </body>
</html>
