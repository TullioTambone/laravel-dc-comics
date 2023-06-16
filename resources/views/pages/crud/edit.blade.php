@extends('layout.app')


@section('content')
    <h1 class="text-center">Crea il tuo fumetto</h1>
    <div class="container p-5">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{route('comics.update', $comic)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label class="form-label" for="">Title</label>
                <input class="form-control" type="text" name="title" value="{{old('title') ?? $comic->title }}">
            </div>
            <div class="form-group">
                <label class="form-label" for="">description</label>
                <input class="form-control" type="text" name="description" value="{{old('description') ?? $comic->description }}">
            </div>
            <div class="form-group">
                <label class="form-label" for="">thumb</label>
                <input class="form-control" type="text" name="thumb" value="{{old('thumb') ?? $comic->thumb }}">
            </div>
            <div class="form-group">
                <label class="form-label" for="">price</label>
                <input class="form-control" type="number" name="price" value="{{old('price') ?? $comic->price }}">
            </div>
            <div class="form-group">
                <label class="form-label" for="">series</label>
                <input class="form-control" type="text" name="series" value="{{old('series') ?? $comic->series }}">
            </div>
            <div class="form-group">
                <label class="form-label" for="">sale_date</label>
                <input class="form-control" type="date" name="sale_date" value="{{old('sale_date') ?? $comic->sale_date }}">
            </div>
            <div class="form-group">
                <label class="form-label" for="">type</label>
                <input class="form-control" type="text" name="type" value="{{old('type') ?? $comic->type }}">
            </div>
            <div class="form-group">
                <label class="form-label" for="">artists</label>
                <input class="form-control" type="text" name="artists" value="{{old('artists') ?? $comic->artists }}">
            </div>
            <div class="form-group">
                <label class="form-label" for="">writers</label>
                <input class="form-control" type="text" name="writers" value="{{old('writers') ?? $comic->writers }}">
            </div>
            <button type="submit" class="btn btn-primary mt-2">Invia</button>
        </form>
    </div>
@endsection