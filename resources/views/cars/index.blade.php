<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cars | First Laravel Project</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
       
    </head>
    <body>
        <h2>Show All Cars</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Producer</th>
                <th>No. of doors</th>
            </tr>
            @foreach($cars as $car)
            <tr>
                <td>{{ $car->id }}</td>
                <td>{{ $car->title }}</td>
                <td>{{ $car->producer }}</td>
                <td>{{ $car->number_of_doors }}</td>
            </tr>
            @endforeach

        </table>
    </body>
</html>