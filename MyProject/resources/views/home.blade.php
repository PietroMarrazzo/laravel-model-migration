@extends('layouts.main')


@section('content')
    <h1>The car of your dreams</h1>

    <h2>Our cars</h2>

    <ul>
        @foreach ($cars as $car)
            <li>
                <h3>Modello: {{ $car->modello() }}</h3>
            </li>
            <li>
                <h3>Marca: {{ $car->marca() }}</h3>
            </li>
            <li>
                <h3>Targa: {{ $car->targa() }}</h3>
            </li>
        @endforeach
    </ul>

@endsection