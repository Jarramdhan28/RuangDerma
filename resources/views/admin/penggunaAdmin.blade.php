@extends('layouts.adminSidebar')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Pengguna</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="admin.dashboard">Pengguna</a></li>
                <li class="breadcrumb-item active">Admin</li>
            </ol>
            </div>
        </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Tabel Pengguna Admin</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No Telepon</th>
                            <th>Alamat</th>
                            <th>Keterangan</th>
                            <th>Poto</th>
                          </tr>
                    </thead>
                    <tbody>
                        @foreach($user as $admin)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$admin->name}}</td>
                            <td>{{$admin->email}}</td>
                            <td>{{$admin->phonenumber}}</td>
                            <td>{{$admin->address}}</td>
                            <td>{{$admin->information}}</td>
                            <td>
                                <img src="{{ $admin->profile_photo_url }}" alt="{{ $admin->name }}" class="h-20 w-20 object-cover">
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>


    </section>
  <!-- /.content -->
@endsection

