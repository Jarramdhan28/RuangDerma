<x-guest-layout>
    @extends('layouts.navbar')

        <x-jet-validation-errors class="mb-4" />

        <div class="container mt-login">
            <div class="row justify-content-center pt-8 mx-auto">
                <div class="col-md-5">
                    <div class="card rounded-3 p-4">

                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <h2><b>Daftar</b></h2>
                                </div>
                                <div class="col-md-6 d-grid gap-2 d-md-flex justify-content-md-end">
                                    <img src="{{asset("img/logo.png")}}" alt="" width="75">
                                </div>
                            </div>

                            <div class="mb-4">
                                <input id="name" class="form-control rounded-pill" placeholder="Masukan Nama" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            </div>

                            <div class="mb-4">
                                <input type="email" class="form-control rounded-pill" placeholder="Masukan Email" id="email" aria-describedby="emailHelp" name="email" :value="old('email')" required autofocus >
                            </div>

                            <div class="mb-4 form-floating">
                                <textarea class="form-control rounded-3" id="address" style="height: 80px" name="address"></textarea>
                                <label for="address">Masukan Alamat</label>
                            </div>

                            <div class="mb-4 form-floating">
                                <textarea class="form-control rounded-3" id="information" style="height: 80px" name="information"></textarea>
                                <label for="information">Masukan Keterangan</label>
                            </div>

                            <div class="mb-4">
                                <label for="role" class="mb-2">Masuk Sebagai :</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="role" id="role" value="0">
                                    <label class="form-check-label" for="role">
                                      Pribadi
                                    </label>
                                  </div>

                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="role" id="role" value="1" >
                                    <label class="form-check-label" for="role">
                                      Yayasan
                                    </label>
                                  </div>
                            </div>

                            <div class="mb-4">
                                <input class="form-control rounded-pill" placeholder="Masukan Kata Sandi"id="password" type="password" name="password" required autocomplete="current-password">
                            </div>

                            <div class="mb-4">
                                <input class="form-control rounded-pill" placeholder="Masukan Kata Sandi Kembali" id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
                            </div>

                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <div class="mt-4">
                                    <x-jet-label for="terms">
                                        <div class="flex items-center">
                                            <x-jet-checkbox name="terms" id="terms"/>

                                            <div class="ml-2">
                                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                                ]) !!}
                                            </div>
                                        </div>
                                    </x-jet-label>
                                </div>
                            @endif

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button type="submit" class="btn btn-secondary mr-auto rounded-pill">
                                    {{ __('Daftar') }}
                                </button>
                            </div>

                            <div class="linkmasuk">
                                <p>Sudah Punya Akun?
                                    <a class="" href="{{ route('login') }}">
                                        {{ __('Masuk') }}
                                    </a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</x-guest-layout>
