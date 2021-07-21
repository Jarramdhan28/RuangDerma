@extends('layouts.adminSidebar')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Donasi</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{url('/admin-pengguna-pribadi')}}">Donasi</a></li>
                <li class="breadcrumb-item active">Barang</li>
            </ol>
            </div>
        </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="alert alert-warning" role="alert">
            Klik tombol izinkan untuk menampilkan barang donasi di halaman Publik 
          </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Tabel Donasi Barang</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Jumlah</th>
                            <th>Donatur</th>
                            <th>Jenis Donasi</th>
                            <th>Cara Pengambilan</th>
                            <th>Keterangan</th>
                            <th>Status</th>
                            <th>Poto</th>
                            <th>Aksi</th>
                          </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Baju Koko</td>
                            <td>1</td>
                            <td>Fajar RG</td>
                            <td>Pakaian</td>
                            <td>Ambil Sendiri</td>
                            <td>ini keterangan</td>
                            <td>
                                <div class="btn btn-xs btn-danger">Izinkan</div>
                            </td>
                            <td>poto</td>
                            <td>
                                <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');" href="#" class="btn btn-xs btn-danger" role="button" title="Hapus Data"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Skincare</td>
                            <td>1</td>
                            <td>Via RP</td>
                            <td>Lainnya</td>
                            <td>Ambil Sendiri</td>
                            <td>ini keterangan</td>
                            <td>
                                <div class="btn btn-xs btn-danger">Izinkan</div>
                            </td>
                            <td>poto</td>
                            <td>
                                <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');" href="#" class="btn btn-xs btn-danger" role="button" title="Hapus Data"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>


    </section>
  <!-- /.content -->
@endsection

