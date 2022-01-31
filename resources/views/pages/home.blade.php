@extends('layouts.layout-home')

@section('content')

    <a href="{{route('create')}}">Crea il tuo film</a>
    <h2>Lista dei film:</h2>

    <ul>
        @foreach ($movies as $movie)
            <li>
                <p>Titolo del film: <a href="{{route('show', $movie -> id)}}">{{$movie -> title}}</a></p>

                <p>Data di uscita: {{$movie -> date_release}}</p>

                <span><a href="{{route('edit', $movie -> id)}}">Modifica</a></span><br>

                <span><a href="{{route('delete', $movie -> id)}}">Cancella</a></span>
            </li>
        @endforeach
    </ul>
    
@endsection