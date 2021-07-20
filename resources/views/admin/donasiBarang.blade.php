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
                            <th>Keterangan</th>
                            <th>Poto</th>
                          </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Alfreds Futterkiste</td>
                            <td>Maria Anders</td>
                            <td>Germany</td>
                            <td>asasas</td>
                            <td>asas</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Centro comercial Moctezuma</td>
                            <td>Francisco Chang</td>
                            <td>Mexico</td>
                            <td>asasas</td>
                            <td>asas</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>


    </section>
  <!-- /.content -->
@endsection

