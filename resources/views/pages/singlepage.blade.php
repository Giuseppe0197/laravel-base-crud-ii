@extends('layouts.layout-home')

@section('content')
    <h2>Lista nuova dei film:</h2>

    <div>
        <p>Titolo completo del film: {{$movie -> title}}</p>

        <p>Titolo completo del film: {{$movie -> subtitle}}</p>

        <p>Autore: {{$movie -> author}}</p>

        <p>Titolo completo del film: {{$movie -> date_release}}</p>
    </div>
    
@endsection