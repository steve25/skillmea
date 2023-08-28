@extends('master')

@section('title', isset($title) ? $title : 'All movies')

@section('content')

    <h1 class="flex">
        {{ $title ?? 'All movies' }}

        @if (isset($director))
            <form action="{{ url('director/' . $director->id . '/delete') }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                <a href="{{ url('director/' . $director->id . '/edit') }}">Edit</a>
                <button>x</button>
            </form>
        @endif
    </h1>

    @if (count($movies))
        <table>
            <thead>
                <tr>
                    <th>director</th>
                    <th>title</th>
                    <th>year</th>
                    <th>gross</th>
                    <th>genre</th>
                    <th>edit</th>
                </tr>
            </thead>
            <tbody>
                @each('_partials.movie', $movies, 'movie')
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4">{{ number_format($sum, 2) }}</td>
                </tr>
            </tfoot>
        </table>
        @if (app('request')->is('/'))
            @include('_partials.pagination')
        @endif
    @else
        <p>No movies :(</p>
    @endif

@endsection
