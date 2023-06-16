@extends('layout.app')

@section('title')
    DC-Comics | Index
@endsection


@section( 'content' )

<div class="container-fluid" id="jumbotron">
</div>
<div class="container-fluid" id="card-section">
    <div class="container card-section p-5">
        <span id="current-series">
            CURRENT SERIES
        </span>
        @if(Session::has('success'))
        <div class="alert alert-success">
            {!! session::get('success') !!}
        </div>
        @endif
        <div class="row d-flex justify-content-center align-items-center">

            @foreach( $arrayComic as $element )
            <div class="my-card col-12 col-md-4 col-lg-2">
                <a href="{{ route('comics.show', [ $element->id ] ) }}">
                    
                    <img src="{{$element['thumb']}}" alt="">
                    <h6 class="mt-1">{{$element['series']}}</h6>
                
                </a>
            </div>
            @endforeach

        </div>
        
        <span id="load-more">LOAD MORE</span>
    </div>
    <div class="container-fluid" id="buy">
        <div class="container p-4" id="buy-section">
            <div class="row text-white justify-content-center">
                <div class="col-12 col-md-12 col-lg-2 buy-element">
                    <img src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png') }}" alt="">
                    <span>DIGITAL COMICS</span>
                </div>
                <div class="col-12 col-md-12 col-lg-2 buy-element">
                    <img src="{{ Vite::asset('resources/images/buy-comics-merchandise.png') }}" alt="">
                    <span>DC MERCHANDISE</span>
                </div>
                <div class="col-12 col-md-12 col-lg-2 buy-element">
                    <img src="{{ Vite::asset('resources/images/buy-comics-subscriptions.png') }}" alt="">
                     <span>SUBSCRIPION</span>
                </div>
                <div class="col-12 col-md-12 col-lg-2 buy-element">
                    <img src="{{ Vite::asset('resources/images/buy-comics-shop-locator.png') }}" alt="">
                     <span>COMIC SHOP LOCATOR</span>
                </div>
                <div class="col-12 col-md-12 col-lg-2 buy-element">
                    <img src="{{ Vite::asset('resources/images/buy-dc-power-visa.svg') }}" alt="">
                     <span>DC POWER VISA</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
