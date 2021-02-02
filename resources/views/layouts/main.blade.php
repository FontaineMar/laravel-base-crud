<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Hotel</title>
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <header class="sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <h1>My Hotel</h1>
                <a class="navbar-brand" href="{{route('bookings.index')}}">Lista clienti</a>
                <a class="navbar-brand" href="{{route('bookings.create')}}">aggiungi cliente</a>
                <form class="d-flex" method="GET" action="{{route('bookings.index')}}">
                    @csrf
                    <input class="form-control me-2" type="search" placeholder="Cerca.." aria-label="Search" name="q">
                    <button class="btn btn-outline-success" type="submit">Cerca</button>
                </form>
            </div>
        </nav>
    </header>
    
    @yield('content','no content')
</body>
</html>