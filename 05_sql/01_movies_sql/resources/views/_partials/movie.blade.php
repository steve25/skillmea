<tr>
    <td><a href="{{ url('director/' . $movie->director_id) }}">
            {{ $movie->director }}
        </a>
    </td>

    <td>
        <a href="{{ url('movie/' . $movie->id) }}">
            <strong>{{ $movie->title }}</strong>
        </a>
    </td>

    <td>{{ $movie->year }}</td>

    <td>{{ number_format($movie->gross, 2) }}</td>

    <td>
        <a href="{{ url('genre/' . $movie->genre) }}">
            {{ $movie->genre }}
        </a>
    </td>
    <td>

        <form action="{{ url('movie/' . $movie->id . '/delete') }}" method="post">
            <a href="{{ url('movie/' . $movie->id . '/edit') }}">
                Edit
            </a>
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" value="x">

        </form>

    </td>

</tr>
