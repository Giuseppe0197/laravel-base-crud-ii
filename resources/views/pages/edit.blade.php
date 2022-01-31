@extends('layouts.layout-home')
@section('content')
    
    <h1>Modifica i film</h1>

    	
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('update', $movie -> id) }}" method="post">

        @method("post")
        @csrf

        <label for="title">Title:</label>
        <input type="text" name="title" placeholder="title" value="{{$movie -> title}}"><br>

        <label for="subtitle">Subtitle:</label>
        <input type="text" name="subtitle" placeholder="subtitle" value="{{$movie -> subtitle}}"><br>

        <label for="author">Author:</label>
        <input type="text" name="author" value="{{$movie -> author}}"><br>
        
        <label for="date_release">Release date:</label>
        <input type="date" name="date_release" value="{{$movie -> date_release}}"><br>
        
        <input type="submit" value="UPDATE">
    </form>
@endsection