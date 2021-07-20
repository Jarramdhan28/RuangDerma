@extends('layouts.adminSidebar')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Dashboard</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{url('admin-dashboard')}}">Admin</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            </div>
        </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content mt-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                      <div class="inner">
                        <h3>150</h3>

                        <p>Pengguna Pribadi</p>
                      </div>
                      <div class="icon">
                        <i class="fas fa-user-alt"></i>
                      </div>
                      <a href="{{url('/admin-pengguna-pribadi')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                      <div class="inner">
                        <h3>10</h3>

                        <p>Yayasan</p>
                      </div>
                      <div class="icon">
                        <i class="fas fa-house-user"></i>
                      </div>
                      <a href="{{url('/admin-pengguna-yayasan')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                      <div class="inner">
                        <h3>150</h3>

                        <p>Donasi</p>
                      </div>
                      <div class="icon">
                        <i class="fas fa-box"></i>
                      </div>
                      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-primary">
                      <div class="inner">
                        <h3>150</h3>

                        <p>Saran</p>
                      </div>
                      <div class="icon">
                        <i class="fas fa-mail-bulk"></i>
                      </div>
                      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

            </div>
        </div>


    </section>
  <!-- /.content -->
@endsection

