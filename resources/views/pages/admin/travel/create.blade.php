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
                                                  <h1 class="h3 mb-0 text-gray-800">Tambah Paket Travel</h1>
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
                                                <form action="{{ route('travel.store') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label for="name">Nama Wisata</label>
                                                            <input type="text" class="form-control" name="name" placeholder="name" value="{{ old('name') }}">
                                                        </div> 
                                                        <div class="form-group">
                                                            <label for="price">Harga</label>
                                                            <input type="number" class="form-control" name="price" placeholder="price" value="{{ old('price') }}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="description">Deskripsi</label>
                                                            <textarea name="description" rows="10" class="d-block w-100 form-control">{{ old('description') }}</textarea>
                                                        </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Kota</label>
                                                            <select name="city" class="form-control" required value="{{ old('city') }}">
                                                                <option value="Medan">Medan</option>
                                                                <option value="Bogor">Bogor</option>
                                                                <option value="Jakarta Utara">Jakarta Utara</option>
                                                            </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Provinsi</label>
                                                                <select name="region" class="form-control" required value="{{ old('region') }}">
                                                                    <option value="Sumatera Utara">Sumatera Utara</option>
                                                                    <option value="Jawa Barat">Jawa Barat</option>
                                                                    <option value="Jakarta">Jakarta</option>
                                                                </select>
                                                            </div>    
                                                            <div class="form-group">
                                                                <label for="latitude">titik latitude</label>
                                                                <input type="text" class="form-control" name="latitude" placeholder="latitude" value="{{ old('latitude') }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="longitude">Titik longitude</label>
                                                                <input type="text" class="form-control" name="longitude" placeholder="longitude" value="{{ old('longitude') }}">
                                                            </div>                                                           
                                                            <div class="form-group">
                                                                <label for="image">Image</label>
                                                                <input type="file" class="form-control img-thumbnail" name="image" placeholder="Image" class="form-control" required value="{{ old('image') }}">
                                                                {{-- <img src="{{ Storage::url($item->image) }}" alt="" style="width: 150px" class="img-thumbnail" /> --}}
                                                            </div>
                                                        </div>
                                                    </div>  
                                                    <button type="submit" class="btn btn-primary btn-block">
                                                    Tambah Wisata  
                                                    </button> 
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

