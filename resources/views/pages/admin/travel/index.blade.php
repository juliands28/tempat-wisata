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
                                                  <h1 class="h3 mb-0 text-gray-800">Paket Travel</h1>
                                                  <a href="{{ route('travel.create') }}" class="btn btn-sm btn-primary shadow-sm">
                                                      <i class="fas fa-plus fa-sm text while-50"></i> Tambah Paket Travel
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
                                                        <th>Harga</th>
                                                        <th>Lokasi</th>
                                                        <th>gambar</th>
                                                        <th>Aksi</th>
                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                      @forelse ($item as $item)
                                                          <tr>
                                                            <th scope="row">{{ $item->id }}</th>
                                                            <td>{{ $item->name }}</td>
                                                            <td>{{ $item->price }}</td>
                                                            <td>{{ $item->city }}, {{ $item->region }}</td>
                                                            <td><img src="{{ Storage::url($item->image) }}" alt="" style="width: 150px" class="img-thumbnail" /></td>
                                                            <td>
                                                                <a href="{{ route('travel.edit', $item->id) }}" class="btn btn-info">
                                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                      <path fill-rule="evenodd" d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                                                    </svg>
                                                                </a>

                                                                <form action="{{ route('travel.destroy', $item->id)}}" method="POST"
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

