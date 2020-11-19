@extends('layouts.app')

@section('title')
    Travel - Your Best Vacation
@endsection

@push('addon-style')    
	<link href='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet' />
@endpush

@section('content')

  <!-- page content awal -->

    <div class="page-content page-details">
        <section class="travel-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Product Details
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <section class="travel-gallery" id="gallery">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8" data-aos="zoom-in">
                        <transition name="slide-fade" mode="out-in">
                            <img :key="photos[activePhoto].id" :src="photos[activePhoto].url" class="w-100 main-image" alt="" />
                        </transition>
                    </div>
                    <div class="col-lg-4 ml-auto" data-aos="zoom-in">
                        <transition name="slide-fade" mode="out-in">                            
                            <div id='map' class="rounded" style='width: 400px; height: 490px;'>
                            <h5>Lokasi</h5>
                            </div>
                        </transition>
                        {{-- <div class="text-center mt-3">
                            <h5>Peta Danau Toba</h5>
                        </div> --}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mt-3">
                        <div class="row">
                            <div class="col-3 mt-2 mt-lg-0" v-for="(photo, index) in photos" :key="photo.id">
                                <a href="#" @click="changeActive(index)">
                                    <img :src="photo.url" class="w-100 thumbnail-image" :class="{ active: index == activePhoto }" alt="" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="travel-details-container" data-aos="fade-up">
            <section class="travel-heading">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <h1>{{ $item->name }}</h1>
                            <div class="owner">{{ $item->city }}, {{ $item->region }}</div>
                            <div class="price">Harga Rp. {{ number_format($item->price) }}/pax</div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="travel-description">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            {{ $item->description }}
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- page content akhir -->
    
@endsection

@push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
    <script>
        var gallery = new Vue({
            el: "#gallery",
            mounted() {
                AOS.init();
            },
            data: {
                activePhoto: 0,
                photos: [
                    @foreach ($item->galleries as $gallery)
                        {
                        id: {{ $gallery->id }},
                        url: "{{ Storage::url($gallery->image) }}",
                        },
                    @endforeach
                ],
            },
            methods: {
                changeActive(id) {
                    this.activePhoto = id;
                },
            },
        });
    </script>
    <script src="/script/navbar-scroll.js"></script>
@endpush

@push('addon-script')  
<script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoianVsaWFuMjgiLCJhIjoiY2tob3lnanVlMDA1ZTJ5bmFqZWx6eWxwaiJ9.sr-xEYuBWcgCSNRuhTflJQ';
    var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11', // stylesheet location
    center: [{{ $item->longitude }}, {{ $item->latitude }}], // starting position [lng, lat]
    zoom: 9 // starting zoom
    });
</script>
@endpush
