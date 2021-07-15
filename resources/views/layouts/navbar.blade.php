<x-guest-layout>
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top ">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="img/Logo-Ruangderma.png" alt="" width="30" class="d-inline-block align-text-top">
                RuangDerma<span class="text-danger">.</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse d-grid gap-2 d-md-flex justify-content-md-end" id="navbarNavAltMarkup">
                <div class="">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        @if (Route::has('login'))
                            @auth
                            <li class="nav-item">
                                <a href="{{ url('/dashboard') }}" class="nav-link" >Nama User</a>
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
</x-guest-layout>
