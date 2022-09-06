@include('components.homecss')

<body class="boxed_wrapper ltr">
    <!-- page-direction end -->

@include('components.header')

    <!-- Banner style two start -->
    <div class="brator-main-banner-area banner-style-two lazyload"
        style="background-image:linear-gradient(to bottom, rgba(56, 57, 60, 0.82), rgba(112, 107, 71, 0.63)),url('homepage/images/banner/rrr.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brator-main-banner-content mt-5">
                        <h2 class=""> 
                            E-Garage Smart Ranking</h2>
                        @if (!Auth::user())
                        <a href='/garage-apply' class="btn btn-warning btn-lg rounded-lg mt-5 shadow-lg">Apply
                            Garage</a>
                        <a href='/signup' class="btn btn-dark btn-lg rounded-lg mt-5">Create Account</a>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Banner style two end -->

    <!-- Brator categories list three area start -->
    <div class="brator-categories-list-area design-two categories-with-load-more gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 m-3">
                    <div class="">
                        <div class="">
                            <h3>Browse Featured Garages by services</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="brator-categories-list">

                        @foreach ($services as $service)
                            <div class="brator-categories-single">
                                <div class="brator-categories-single-img"><a href="service/{{$service['serv_id']}}"><img class="lazyload"
                                            data-src="{{ $service['serv_img'] }}" alt="logo" /></a></div>
                                <div class="brator-categories-single-title">
                                    <p><a href="service/{{$service['serv_id']}}">{{ $service['serv_name'] }}</a></p>
                                </div>

                            </div>
                        @endforeach


                    </div>
                    {{-- <div class="brator-categories-list-load-more">
                        <button class="brator-categories-more-button">Load More</button>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Brator categories list three area end -->
    @include('components.footer')
    @include('components.homejs')
