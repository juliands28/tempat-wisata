@extends('layouts.admin')

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
                                    <div class="card mb-2">
                                        <div class="card-body">
                                          <div class="row">
                                            <div class="col-md-12">
                                              <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                                  <h1 class="h3 mb-0 text-gray-800">Gallery</h1>
                                                  <a href="{{ route('gallery.create') }}" class="btn btn-sm btn-primary shadow-sm">
                                                      <i class="fas fa-plus fa-sm text while-50"></i> Tambah Gallery
                                                  </a>
                                              </div>
                                            </div>
                                            <div class="col-md-12">
                                              <div class="table-responsive">
                                                  <table class="table">
                                                    <thead>
                                                      <tr>
                                                        <th>ID</th>
                                                        <th>Nama Wisata</th>
                                                        <th>galeri</th>
                                                        <th>Aksi</th>
                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                      @forelse ($item as $item)
                                                          <tr>
                                                            <th scope="row">{{ $item->id }}</th>
                                                            <td>{{ $item->travel_package->name }}</td>                                                            
                                                            <td>
                                                                <img src="{{ Storage::url($item->image) }}" alt="" style="width: 150px"
                                                                class="img-thumbnail" />
                                                            </td>
                                                            <td> 
                                                                <form action="{{ route('gallery.destroy', $item->id)}}" method="POST"
                                                                class="d-inline">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <button class="btn btn-danger">
                                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                          <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                                          <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                                        </svg>
                                                                    </button>                                  
                                                                </form>                                                                
                                                            </td>
                                                          </tr>
                                                      @empty
                                                        <tr>
                                                            <td colspan="7" class="text-center">
                                                                Data Kosong
                                                            </td>
                                                        </tr>                                                          
                                                      @endforelse
                                                      
                                                    </tbody>
                                                </table>
                                              </div>
                                              
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

