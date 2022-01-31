@extends('layouts.layout-home')
@section('content')
    
    <h1>Crea il tuo film</h1>

    	
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('store') }}" method="post">

        @method("post")
        @csrf

        <label for="title">Title:</label>
        <input type="text" name="title" placeholder="title"><br>

        <label for="subtitle">Subtitle:</label>
        <input type="text" name="subtitle" placeholder="subtitle"><br>

        <label for="author">Author:</label>
        <input type="text" name="author" placeholder="author"><br>

        <label for="date_release">Release date:</label>
        <input type="date" name="date_release"><br>

        <input type="submit" value="CREATE">
    </form>
@endsection