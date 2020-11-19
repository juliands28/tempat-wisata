@extends('layouts.app')

@section('title')
    Travel - Your Best Vacation
@endsection

@section('content')

  <!-- page content awal -->
    <!-- carousel -->
    <div class="page-content page-home">
        {{-- carousel --}}
        <section class="travel-carousel">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12" data-aos="zoom-in">
                        <div id="travelCarousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#travelCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#travelCarousel" data-slide-to="1"></li>
                                <li data-target="#travelCarousel" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/banner2.jpg" class="d-block w-100" alt="Diskon 50%" />
                                </div>
                                <div class="carousel-item">
                                    <img src="images/banner3.jpg" class="d-block w-100" alt="Diskon 50%" />
                                </div>
                                <div class="carousel-item">
                                    <img src="images/banner2.jpg" class="d-block w-100" alt="Diskon 50%" />
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#travelCarousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#travelCarousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center" data-aos="zoom-in">
                    <a href="" type="btn" class="btn btn-light text-black-50 px-4 mt-4 mx-1">More else</a
            >
            <a href="" type="btn" class="btn btn-gets px-4 mt-4 mx-1"
              >Get Started</a
            >
          </div>
        </div>
      </section>

      {{-- travel --}}
      <section class="travel-new-products">
        <div class="container">
          <div class="row mt-5">
            <div class="col-12 text-center" data-aos="fade-up">
              <h1 class="text-center">Let's Go to journey</h1>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-12" data-aos="fade-up">
              <h5>New Pakage Travel</h5>
            </div>
          </div>
          <div class="row">
              @php $itemTravel = 0 @endphp
                @forelse ($item as $item)
                    <div class="col-6 col-md-4" data-aos="fade-up" data-aos-delay="{{ $itemTravel+=100 }}">
                        <a href="{{ route('detail', $item->slug) }}" class="component-products d-block">
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
    </section>
    </div>
    <!-- page content akhir -->
    
@endsection