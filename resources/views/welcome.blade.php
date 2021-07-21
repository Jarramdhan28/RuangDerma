 @extends('layouts.navbar')
    @section('content')
    <div class="container mt-login">
        <div class="row bg-white p-5 lengkung">

            <div class="col-md-4">
                <img src="/img/giftbox.svg" alt="gif" class=w-100>
            </div>
            <div class="col-md-8">
                <h2><b>"Mari Donasikan Barang Yang Sudah Tidak Terpakai
                        Menjadi Barang Yang Berguna"</b></h2>
                <hr>
                <div class="d-grid col-4 mx-auto">
                        <a href="{{ route('register') }}" class="btn btn-md btn-primary lengkung">
                            <span class="spinner-grow spinner-grow-sm text-star" role="status" aria-hidden="true"></span> Gabung
                        </a>
                </div>

            </div>
        </div>

        {{-- Tentang derma --}}
        <div class="row p-4 bg-white mt-5 lengkung">
            <div class="col-md-12 mt-4">
                <h3>Tentang <b>GoaDerma</b></h3>
                <hr>
                <p><b>Goa Derma</b> Merupakan Sebuah Aplikasi Sosial Yang Menjadi Wadah Untuk Setiap Orang Yang
                    Ingin Menyalurkan Barang Yang Sudah Tidak Terpakai Menjadi Barang Yang Bisa Berguna Bagi Orang
                    Yang Membutuhkan Untuk Bisa Dimanfaatkan Kembali.</p>
            </div>
        </div>

        {{-- barang --}}
        <div class="row p-4 bg-white my-5 lengkung">
            <div class="col-md-12 mt-4">
                <h3>Barang yang bisa di bagikan.</h3>

                <div class="row mt-4 text-white fs-1">
                    <div class="col-md-3 my-2">
                        <div class="card text-center lengkung">
                            <div class="card-header p-4 shadow-sm welcomecollor">
                                <i class="fas fa-tshirt"></i> | <i class="fas fa-table"></i>
                            </div>
                            <div class="card-body text-dark">
                                <small>Barang</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 my-2">
                        <div class="card text-center lengkung">
                            <div class="card-header p-4 shadow-sm welcomecollor">
                                <i class="fas fa-utensils"></i>
                            </div>
                            <div class="card-body text-dark">
                                <small>Makanan</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 my-2">
                        <div class="card text-center lengkung">
                            <div class="card-header p-4 shadow-sm welcomecollor">
                                <i class="fas fa-book-open"></i>
                            </div>
                            <div class="card-body text-dark">
                                <small>Buku</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 my-2">
                        <div class="card text-center lengkung">
                            <div class="card-header p-4 shadow-sm welcomecollor">
                                <i class="fas fa-at"></i>
                            </div>
                            <div class="card-body text-dark">
                                <small>Lainnya</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    @endsection

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

