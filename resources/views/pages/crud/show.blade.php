@extends('layout.app')

@section('title')
    DC-Comics | Show
@endsection

@section('content')
<div class="container-fluid" id="jumbotron"></div>

<div class="container-fluid" id="card-section">
    <div class="container card-section p-5">
        <div class="my-card p-3 col-12 d-flex justify-content-center flex-column align-items-center text-white">
            <h3 class="mt-1">{{$comic['title']}}</h3>
            <img src="{{$comic['thumb']}}" alt="" style="width:150px">
            <p class="mt-2">{{$comic['description']}}</p>
        </div>

        <a href="{{ route('comics.edit', $comic) }}">
            <button class="btn btn-primary">modifica</button>
        </a>
    </div>
</div>

@endsection