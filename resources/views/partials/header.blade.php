<header id="header" >
        <section class="bg-header">
                <div class="container">
                    <div class="header-up mb-3 ">
                            <ul class="d-flex justify-content-end mb-3 ">
                                <li><a href="#">DC POWER VISA</a></li>
                                <li><a href="#">ADDITIONAL DC SITES</a></li>
                            </ul>
                </div>
        </div>
        </section>

        <section class="bg-white p-3 container ">
            <div class="row d-flex  align-items-center">
            <div class="col-2 me-auto">
                <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="logo-dc">
            </div>
            <div class="col-8">
                <ul class="d-flex margin-check text-center ">

                    <li><a href="#">Characters</a></li>
                    <li><a href="{{ route('comics.index') }}">Comics</a></li>
                    <li><a href="#">Movies</a></li>
                    <li><a href="#">TV</a></li>
                    <li><a href="#">Collectibles</a></li>
                    <li><a href="#">Videos</a></li>
                    <li><a href="#">Fans</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Shop</a></li>
                </ul>
            </div>
            <div class="col-2 ms-auto">
                    <form class="search-form mb-3">
                        <input type="text" placeholder="Search...">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </form>
            </div>
            </div>
        </section>
        <div >
            <img class="jumbotron" src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="logo">
        </div>
  </header>