@extends('layouts.app')

@section('title', 'comics')

@section('content')
<main id="show" class="p-5">
    <section class="container">
        <div class="row gy-4">
            <div class="col-md-6">
                <h1 >{{$comic->title}}</h1>
                    <div class="mt-4 bg-green d-flex justify-content-between">
                      <span>U.S. Price:{{$comic->price}}</span>
                     <span><span class="txt-green">AVAILABLE</span> | <span class="txt-white"> Check Availability</span> </span>
                    </div>
                <p class="mt-4">{!! $comic['description'] !!}</p>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{$comic->thumb}}" alt="{{$comic->title}}" class="img-fluid">
            </div>
        </div>
    </section>
</main>
<section class="bg-grey">
<div class="container p-3 ">
  <div class="row">
    <div class="col-lg-6">
     <h2>Talent</h2>
    <hr>
    <div class="d-flex">
       <h6>Art by:</h6>
        <p class="ms-3">Inserire qui informazioni sull'artista o sull'opera artistica.</p>
    </div>
        <hr>
   <div class="d-flex">
      <h6>Written By:</h6>
      <p class="ms-3">Inserire qui informazioni sull'autore o il contenuto scritto.</p>
    </div>
        <hr>
    </div>
    <div class="col-lg-6">
      <h2>Specs</h2>
        <hr>
        <div class="d-flex">
            <h6>Series:</h6>
            <p class="ms-5">{{$comic['type']}}</p>
        </div>
        <hr>
        <div class="d-flex">
            <h6>U.S. Price:</h6>
            <p class="ms-5">{{$comic['price']}}</p>
        </div>
        <hr>
        <div class="d-flex">
            <h6>On Sale Date:</h6>
            <p class="ms-5">{{$comic['sale_date']}}</p>
        </div>
        <hr>
    </div>
  </div>
</div>
</section>
<section id="main-down" class="bg-grey position">
    <div class=" container py-5 mt-2">
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
@endsection