@extends('layouts.admin')

@section('title')
    Dashboard - Your Best Travel Agent
@endsection

@section('content')

  <!-- page content awal -->
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
                                                @php $itemTravel = 0 @endphp
                                                    @forelse ($item as $item)
                                                        <div class="col-6 col-md-4" data-aos="fade-up" data-aos-delay="{{ $itemTravel+=100 }}">
                                                            <a href="{{ route('travel.edit', $item->id) }}" class="component-products d-block">
                                                                <div class="products-thumbnail">
                                                                <div
                                                                    class="products-image"
                                                                    style="background-image: url('{{ Storage::url($item->image) }}')"
                                                                ></div>
                                                                </div>
                                                                <div class="products-text">{{ $item->name }}</div>
                                                                <div class="products-place">{{ $item->city }}, {{ $item->region }}</div>
                                                                <div class="products-price">Harga RP.{{ number_format($item->price) }}/pax</div>
                                                            </a>
                                                        </div> 
                                                    @empty
                                                        <div class="col-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">No Packages Travel</div>
                                                    @endforelse               
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

