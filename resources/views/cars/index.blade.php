@extends('layouts/master')

@section('content')

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
            <td><a href="/cars/{{ $car->id }}">{{ $car->title }}</a></td>
            <td>{{ $car->producer }}</td>
            <td>{{ $car->number_of_doors }}</td>
        </tr>
        @endforeach

    </table>

@endsection