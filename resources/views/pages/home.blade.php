@extends( 'layout.app' )

@section('titlePage')
    Laravel App | COMICS
@endsection

@section( 'content' )

<div class="container-fluid" id="jumbotron">
</div>
<div class="container-fluid" id="card-section">
    <div class="container card-section p-5">


        <div class="d-flex justify-content-center align-items-center text-white flex-column">
            <h1 class="my-4">Welcome</h1>


            <a href="{{ route('comics.create') }}">
                <span id="load-more">
                    crea il tuo fumetto
                </span>
            </a>
            
        </div>
        
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
