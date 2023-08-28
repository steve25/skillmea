<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'My movies')</title>
    <link rel="stylesheet" href="{{ url('css/main.css') }}">
</head>

<body>
    <h1>Movies</h1>

    <form action="{{ url('director/choose') }}" method="post" class="navigation">
        <a class="home" href="{{ url('') }}">home</a>

        @include('_partials.select', ['submit' => true])

        <a href="{{ url('director/create') }}">new director</a>
        <a href="{{ url('movie/create') }}">new movie</a>
    </form>

    @if (app('request')->input('alert'))
        <div class="alert" role="alert">
            <h4 class="alert-heading">Well done!</h4>
            @if (app('request')->input('alert') == 'delete')
                <p>delete successfully</p>
            @elseif (app('request')->input('alert') == 'edit')
                <p>update successfully</p>
            @else
                <p>added successfully</p>
            @endif
        </div>
    @endif

    @yield('content')

</body>

</html>
