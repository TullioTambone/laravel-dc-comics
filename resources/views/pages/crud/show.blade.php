@extends('layout.app')

@section('title')
    DC-Comics | Show
@endsection

@section('content')
<div class="container-fluid" id="jumbotron"></div>

<div class="container-fluid" id="card-section">
    <div class="container card-section p-5">
        <div class="row">
            <div class="my-card p-3 col-6 d-flex justify-content-center flex-column align-items-center text-white">
                <img src="{{$comic['thumb']}}" alt="" style="">
            </div>
            
            <div class="col-6 text-start text-white">            
                <h3 class="mt-1">{{$comic['title']}}</h3>
                <span class="mt-2 d-block">{{$comic['description']}}</span>
                <span class="mt-1 d-block">{{ $comic['price'] }}</span>
                <span class="mt-1 d-block">{{ $comic['sale_date'] }}</span>
                <span class="mt-1 d-block">{{ $comic['type'] }}</span>
                <span class="mt-1 d-block">{{ $comic['artists'] }}</span>
                <span class="mt-1 d-block">{{ $comic['writers'] }}</span>

                <div class="d-flex align-items-center mt-4">
                    <a href="{{ route('comics.edit', $comic) }}">
                        <button class="btn btn-primary">modifica</button>
                    </a>
            
                    <form action="{{ route('comics.destroy', $comic) }}" method="POST" class="ms-3">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">elimina</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection