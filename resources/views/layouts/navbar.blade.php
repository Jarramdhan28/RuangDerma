<x-guest-layout>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar" href="{{url('/')}}">
                <img src="{{asset("img/logo.png")}}" alt="" width="40">
                <a href="{{url('/')}}" class="navbar-brand ml-2 ">RuangDerma<span class="text-danger">.</span></a>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse d-grid gap-2 d-md-flex justify-content-md-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        @if (Route::has('login'))
                            @auth
                            <li class="nav-item">
                                <a href="{{ url('/user/profile') }}" class="nav-link" >{{Auth::user()->name}}</a>
                            </li>
                                @else
                                <li class="nav-item">
                                    <a href="{{ route('login') }}" class="nav-link" >Masuk</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a href="{{ route('register') }}" class="nav-link" >Daftar</a>
                                    </li>
                                @endif
                            @endauth

                         @endif
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <section>
        @yield('content')
    </section>

    <div class="row bg-dark text-white p-5 mt-5">
        <div class="col-md-12">
            <footer>
                <div class="row">
                    <div class="col-md-6">
                        <h4><i class="fas fa-hashtag"></i> Berbagi tidak akan membuat kamu miskin</h4>
                        <small>© Copyright 2021 CBC Team STMIK Tasikmalaya. All right reserved.</small>
                    </div>
                    <div class="col-md-6">
                        <p>Call Support</p>
                        <hr class="bg-white">
                        <p><i class="fas fa-envelope"></i> ruangderma
                            @gmail.com</p>
                            <p><i class="fab fa-instagram"></i> ruangderma.official</p>
                            <p><i class="fab fa-whatsapp"></i> +62 85695958647</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>

</x-guest-layout>
