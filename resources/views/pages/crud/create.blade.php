@extends('layout.app')


@section('content')
    <h1 class="text-center">Crea il tuo fumetto</h1>
    <div class="container p-5">
        <form action="{{route('comics.store')}}" method="POST">
            @csrf

            <div class="form-group">
                <label class="form-label" for="">Title</label>
                <input class="form-control" type="text" name="title">
            </div>
            <div class="form-group">
                <label class="form-label" for="">description</label>
                <input class="form-control" type="text" name="description">
            </div>
            <div class="form-group">
                <label class="form-label" for="">thumb</label>
                <input class="form-control" type="text" name="thumb">
            </div>
            <div class="form-group">
                <label class="form-label" for="">price</label>
                <input class="form-control" type="number" name="price">
            </div>
            <div class="form-group">
                <label class="form-label" for="">series</label>
                <input class="form-control" type="text" name="series">
            </div>
            <div class="form-group">
                <label class="form-label" for="">sale_date</label>
                <input class="form-control" type="date" name="sale_date">
            </div>
            <div class="form-group">
                <label class="form-label" for="">type</label>
                <input class="form-control" type="text" name="type">
            </div>
            <div class="form-group">
                <label class="form-label" for="">artists</label>
                <input class="form-control" type="text" name="artists">
            </div>
            <div class="form-group">
                <label class="form-label" for="">writers</label>
                <input class="form-control" type="text" name="writers">
            </div>
            <button type="submit" class="btn btn-primary mt-2">Invia</button>
        </form>
    </div>
@endsection