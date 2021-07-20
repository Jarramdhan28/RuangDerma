<x-guest-layout>

    @extends('layouts.navbar')
    @section('content')
    <x-jet-validation-errors class="mt-4" />

    <div class="container mt-login">
        <div class="row justify-content-center pt-8 mx-auto">
            <div class="col-md-5">
                <div class="card rounded-3 p-4">
                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row mb-4">
                            <div class="col">
                                <h2><b>Masuk</b></h2>
                            </div>
                            <div class="col d-grid gap-2 d-md-flex justify-content-md-end">
                                <img src="{{asset("img/logo.png")}}" alt="" width="75">
                            </div>
                        </div>

                        <div class="mb-4">
                            <input type="email" class="form-control rounded-pill" placeholder="Masukan Email" id="email" aria-describedby="emailHelp" name="email" :value="old('email')" required autofocus >
                        </div>

                        <div class="mb-4">
                            <input type="password" class="form-control rounded-pill" placeholder="Masukan Kata Sandi"id="password" type="password" name="password" required autocomplete="current-password">
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="submit" class="btn btn-secondary mr-auto rounded-pill">
                                {{ __('Masuk') }}
                            </button>
                        </div>

                        <div class="linkmasuk">
                            <p>Belum Punya Akun?
                                <a class="" href="{{ route('register') }}">
                                    {{ __('Daftar') }}
                                </a>
                            </p>
                            {{-- @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection
</x-guest-layout>
