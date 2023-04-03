<div class="container-fluid bg-faded fh5co_padd_mediya padding_786">
        <div class="container padding_786">
            <nav class="navbar navbar-toggleable-md navbar-light ">
                <button class="navbar-toggler navbar-toggler-right mt-3" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                <a class="navbar-brand" href="#"><img src="{{ asset('images/logo.png') }}" alt="img" class="mobile_logo_width" /></a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('frontsite.index') }}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('frontsite.blog') }}">Blog <span class="sr-only">(current)</span></a>
                        </li>
                        

                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('frontsite.contact') }}">Contact <span class="sr-only">(current)</span></a>
                        </li>
                        @auth()
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('dashboard') }}">Dashboard <span class="sr-only">(current)</span></a>
                        </li>
                        @endauth
                        @guest
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('login') }}">Login <span class="sr-only">(current)</span></a>
                        </li>
                        @endguest
                        @auth
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('logout') }}">Logout <span class="sr-only">(current)</span></a>
                        </li>
                        @endauth
                    </ul>
                </div>
            </nav>
        </div>
    </div>