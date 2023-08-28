@extends('master')

@section('title', $movie->title)

@section('content')

    <h1>{{ $movie->title }}</h1>

    <table>
        <thead>
            <tr>
                <th>Director</th>
                <th>Title</th>
                <th>Year</th>
                <th>Gross</th>
                <th>Genre</th>
                <th>edit</th>
            </tr>
        </thead>
        <tbody>
            @include('_partials.movie')

        </tbody>
        <tfoot>
            <tr class="summary">
                <td colspan="5">{{ $movie->summary }}</td>
            </tr>
        </tfoot>
    </table>

@endsection
