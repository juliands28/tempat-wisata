@extends('layouts.admin')

@section('title')
    Dashboard - Your Best Travel Agent
@endsection

@section('content')

  <!-- page content awal -->
          <!-- page content -->
                <div class="section-content section-dashboard-home" data-aos="fade-up">
                    <div class="container-fluid">
                        <div class="dashboard-heading">
                            <h2 class="dashboard-title">Dashboard</h2>
                            <p class="dashboard-subtitle">Selamat Datang di Dashboard</p>
                        </div>
                        <div class="dashboard-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card shadow mb-2 p-4">
                                        <div class="card-body">
                                          <div class="row">
                                            <div class="col-md-12">
                                              <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                                  <h1 class="h3 mb-0 text-gray-800">Tambah Galeri Wisata</h1>
                                              </div>
                                            </div>
                                            <div class="col-md-12">
                                             @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>                        
                                                        @endforeach
                                                    </ul>
                                                </div>            
                                            @endif
                                                <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-7">
                                                        <div class="form-group">
                                                            <label for="travel_packages_id">Paket Travel</label>
                                                            <select name="travel_packages_id" required class="form-control">
                                                                <option value="">Pilih Paket Travel</option>
                                                                @foreach ($travel_packages as $travel_package)
                                                                    <option value="{{ $travel_package->id}}">
                                                                        {{ $travel_package->name }}
                                                                    </option>                                
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="image">Image</label>
                                                            <input type="file" class="form-control" name="image" placeholder="Image" class="form-control">
                                                        </div>
                                                    </div> 
                                                    <div class="col-md-7">
                                                        <button type="submit" class="btn btn-primary btn-block">
                                                            Tambah galeri Wisata  
                                                        </button> 
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
            </div>
    <!-- /#page-content-wrapper -->
        </div>
    
<!-- page content akhir -->
    
@endsection

