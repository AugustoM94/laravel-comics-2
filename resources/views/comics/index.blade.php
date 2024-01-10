@extends('layouts.app')

@section('title', 'Products')

@section('content')
<main>
       <section class="container mb-3 ">
        @if (session()->has('message'))
          <div class="alert alert-success mt-1 ">{{ session()->get('message')}}</div>
          @endif
             <div class="mt-2">
                 <form action="{{route('comics.index')}}" method="GET">
                    <select name="search" id="search">
                        <option value="">All</option>
                        <option value="comic book">comic book</option>
                        <option value="graphic novel">graphic novel</option>
                    </select>
                     <button type="submit" class="btn btn-danger ms-3">Cerca</button>
                </form>
            </div>
        <h1>Comics</h1>
        <div class="row gy-4">
          @foreach ($comics as $key => $comic)
            <div class="col-12 col-md-4 col-lg-3">
             <div class="card h-100">
                    <a href="{{route('comics.show', $comic->id)}}" class="btn">
                            <img src="{{$comic->image}}" alt="{{$comic->title}}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">{{$comic->title}}</h5>
                         </a>
                    </div>
                </div>
            </div>
          @endforeach
        </div>
        
        <div class="text-center my-5 d-flex justify-content-center">
            <div class="create_button btn btn-primary">
                <a class="text-white" href="{{route('comics.create')}}">Create a 
                    comic
                </a>
            </div> 
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