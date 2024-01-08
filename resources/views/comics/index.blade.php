@extends('layouts.app')

@section('title', 'Products')

@section('content')
<main>
       <section class="container mb-3 ">
        <h1>Comics</h1>
        <div class="row gy-4">
          @foreach ($comics as $key => $product)
            <div class="col-12 col-md-4 col-lg-3">
             <div class="card h-100">
                    <a href="{{route('comic.show', $key)}}" class="btn">
                            <img src="{{$product['thumb']}}" alt="{{$product['title']}}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">{{$product['title']}}</h5>
                         </a>
                    </div>
                </div>
            </div>

          @endforeach
        </div>

    </section>
<section id="icon" class="bg-header">
    <div class=" container py-5">
               <ul class="d-flex justify-content-around align-item-center">
                    <li>
                        <img src="{{Vite::asset('/resources/img/buy-comics-digital-comics.png')}}" alt="logo-Digital-comics">
                        <span class="px-1">Digital comics</span>
                    </li>
                    <li>
                        <img src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="logo-merchandise">
                        <span class="px-1">Dc Merchandise</span>
                    </li>
                    <li >
                        <img src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="logo-shop-locator">
                        <span class="px-1">Subscription</span>
                    </li>
                    <li >
                        <img src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="logo-buy">
                        <span class="px-1">Comic shop locator</span>
                    </li>
                    <li >
                        <img src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="logo-power-visa">
                        <span class="px-1">Dc power visa</span>
                    </li>

               </ul>
    </div>
</section>
</main>

@endsection