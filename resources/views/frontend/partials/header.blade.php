<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

<div class="header-top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <a href="index.html" class="site-logo">
                    <img src="{{ asset('wines/images/logo.png') }}" alt="Image" class="img-fluid">
                </a>
            </div>
            <a href="#" class="mx-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                    class="icon-menu h3"></span></a>
        </div>
    </div>

    <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">
        <div class="container">
            <div class="d-flex align-items-center">
                <div class="mx-auto">
                    <nav class="site-navigation position-relative text-left" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav mx-auto d-none pl-0 d-lg-block border-none">
                            <li class="active"><a href="index.html" class="nav-link text-left">Home</a></li>
                            <li><a href="{{ route('beer.index')}}" class="nav-link text-left">Beer</a></li>
                            <li><a href="{{ route('wine.index')}}" class="nav-link text-left">Wines</a></li>
                            <li>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
                                        Non Alochol
                                    </button>
                                    <div class="dropdown-menu">
                                      <a class="dropdown-item" href="{{ route('soft-drink.index')}}">Soft Drink</a>
                                      <a class="dropdown-item" href="{{ route('mocktail.index')}}">Mocktail</a>
                                    </div>
                                  </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>