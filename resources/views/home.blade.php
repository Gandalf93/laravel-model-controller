@extends ('layouts.app')

@section('title','Comics')

@section('content')

<main>
    <div class="card-container">   
        @foreach($comics as $comic)
        <div class="card">
            <img src="{{$comic['thumb']}}" :alt="{{$comic['series']}}">
            <div> {{$comic['series']}} </div>
          </div>
        @endforeach
    </div>

    
</main>

@endsection