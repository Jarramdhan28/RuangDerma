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
                <li class="breadcrumb-item"><a href="{{url('/admin-pengguna-pribadi')}}">Pengguna</a></li>
                <li class="breadcrumb-item active">Pribadi</li>
            </ol>
            </div>
        </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Tabel Pengguna Pribadi</h3>
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
                            <th>Aksi</th>
                          </tr>
                    </thead>
                    <tbody>
                        @foreach($user as $pribadi)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$pribadi->name}}</td>
                            <td>{{$pribadi->email}}</td>
                            <td>{{$pribadi->phonenumber}}</td>
                            <td>{{$pribadi->address}}</td>
                            <td>{{$pribadi->information}}</td>
                            <td>
                                <img src="{{ $pribadi->profile_photo_url }}" alt="{{ $pribadi->name }}" class="img-maxx">
                            </td>
                            <form action="{{url ('admin-pengguna-pribadi', $pribadi->id)}}" method="post">
                                @method('delete')
                                @csrf
                                <td>
                                    <button onclick="return confirm('yakin?')" type="submit" class="btn btn-xs btn-danger">
                                        Banned Member
                                    </button>
                                </td>
                            </form>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>


    </section>
  <!-- /.content -->
@endsection

