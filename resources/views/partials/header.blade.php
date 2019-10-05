<header class="site-navbar py-4 bg-white js-sticky-header site-navbar-target" role="banner">

    <div class="container">
        <div class="row align-items-center">

        <div class="col-6 col-xl-2">
        <h1 class="mb-0 site-logo"><a href="{{route('productos.index')}}" class="text-black mb-0">Selling<span class="text-primary">.</span> </a></h1>
        </div>
        <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="{{route('productos.index')}}" class="nav-link">Home</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Categories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach ($categorias as $categoria)
                            <a class="dropdown-item" href="#">{{$categoria->categoria}}</a>
                        @endforeach


                    </div>
                  </li>
                <li><a href="#" class="nav-link">About Us</a></li>

                <li><a href="#contact-section" class="nav-link">Contact</a></li>
                <li>
                <a href="{{route('showcart')}}">
                        <span class="icon-shopping-cart mr-2" style="position: relative; top: 2px;"></span>
                            <span class="d-none d-lg-inline-block text-black">Cart:{{Session::has('cart') ? Session::get('cart')->cantidad : 0}}</span>
                    </a></span>

                    </a>
                </li>
            </ul>
            </nav>
        </div>


        <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;">
            <a href="#" class="site-menu-toggle js-menu-toggle text-black float-right">
                <span class="icon-menu h3"></span></a></div>

        </div>
    </div>

    </header>
