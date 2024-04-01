@extends('layouts.contents.app')

@section('title')
    Home
@endsection

@section('slider')
    <!-- Slider Section -->
    @include('layouts.content.slider')
    <!-- end Slider Section -->
@endsection

@section('content')
    <!-- Item List Section -->
    @include('layouts.content.newmodel')
    <!-- end Item List Section -->

    <!-- about section -->
    @include('layouts.content.about')
    <!-- end about section -->

    <!-- item list section -->
    @include('layouts.content.categories')
    <!-- end item list section -->
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".price_container").owlCarousel({
                loop: true,
                nav: false,
                dots: false,
                margin: 10,
                // autoplay: true,
                // autoplayTimeout: 8000,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 4
                    }
                }
            });
        });
    </script>
@endsection
