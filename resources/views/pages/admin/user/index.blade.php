@extends('layouts.admin', ['activePage' => 'profile', 'titlePage' => __('User Profile')])

@section('title')
    Dashboard - Your Best Travel Agent
@endsection

@section('content')

  <!-- page content awal -->

        <!-- Page Content -->
                <div class="section-content section-dashboard-home" data-aos="fade-up">
                    <div class="container-fluid">
                        <div class="dashboard-heading">
                            <h2 class="dashboard-title">Dashboard</h2>
                            <p class="dashboard-subtitle">Selamat Datang di Dashboard</p>
                        </div>
                        <div class="dashboard-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card mb-2 p-3">
                                        <div class="card-body">
                                          <div class="row">
                                            <div class="col-md-12">
                                              <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                                  <h1 class="h3 mb-0 text-gray-800">Ubah Password</h1>
                                              </div>
                                            </div>
                                            <div class="col-md-8">
                                                @if (session('status_password'))
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                    <div class="alert alert-success">
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                                        </svg>
                                                        </button>
                                                        <span>{{ session('status_password') }}</span>
                                                    </div>
                                                    </div>
                                                </div>
                                                @endif
                                                <form method="POST" action="{{ route('change.password') }}">
                                                    @csrf 
                                                    @foreach ($errors->all() as $error)
                                                        <p class="text-danger">{{ $error }}</p>
                                                    @endforeach 
                                                    <div class="form-group row">
                                                        <label for="password" class="col-md-4 col-form-label text-md-right">Current Password</label>
                                                        <div class="col-md-6">
                                                            <input id="password" type="password" class="form-control" name="current_password" autocomplete="current-password">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="password" class="col-md-4 col-form-label text-md-right">New Password</label>
                                                        <div class="col-md-6">
                                                            <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="password" class="col-md-4 col-form-label text-md-right">New Confirm Password</label>
                                                        <div class="col-md-6">
                                                            <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password">
                                                        </div>
                                                    </div>
                                                        <div class="form-group row mb-0">
                                                            <div class="col-md-8 offset-md-4">
                                                                <button type="submit" class="btn btn-primary">
                                                                    Ubah Password
                                                                </button>
                                                            </div>
                                                        </div>
                                                </form>
                                          </div>                                          
                                        </div>
                                    </div>
                                </div>                                
                        </div>
                    </div>
                </div>
            </div>
    <!-- /#page-content-wrapper -->
        </div>    
<!-- page content akhir -->
    
@endsection

