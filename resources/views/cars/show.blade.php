@extends('layouts/master')

@section('content')

    <h2>Show Single Car</h2>
    
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Producer</th>
            <th>No. of doors</th>
        </tr>
        <tr>
            <td>{{ $car->id }}</td>
            <td>{{ $car->title }}</td>
            <td>{{ $car->producer }}</td>
            <td>{{ $car->number_of_doors }}</td>
        </tr>
    </table>

@endsection