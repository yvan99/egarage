@include('components.homecss')

<body class="boxed_wrapper ltr">
    <!-- page-direction end -->

@include('components.header')

    <!-- Banner style two start -->
    <div class="brator-main-banner-area banner-style-two lazyload"
        style="background-image:linear-gradient(to bottom, rgba(56, 57, 60, 0.52), rgba(225, 204, 71, 0.73)),url('homepage/images/banner/rp.jpg');">
        <div class="container-xxxl container-xxl container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brator-main-banner-content">
                        <h2 class="">E-Garage Smart Ranking</h2>
                        <a href='/garage-apply' class="btn btn-warning btn-lg rounded-lg mt-5 shadow-lg">Apply
                            Garage</a>
                        <a href='/signup' class="btn btn-dark btn-lg rounded-lg mt-5">Create Account</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Banner style two end -->

    <!-- Brator categories list three area start -->
    <div class="brator-categories-list-area design-two categories-with-load-more gray-bg">
        <div class="container-xxxl container-xxl container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brator-section-header">
                        <div class="brator-section-header-title">
                            <h2>Browse Garages by services</h2>
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


    <div class="brator-plan-pixel-area">
        <div class="row">
            <div class="container-xxxl container-xxl container">
                <div class="col-12">
                    <div class="plan-pixel-area"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brator featured makes list start -->
    <div class="brator-makes-list-area design-two">
        <div class="container-xxxl container-xxl container">
            <div class="brator-brator-makes-list-tab-list js-tabs" id="tabs-product-content">
                <div class="brator-makes-list-tab-header js-tabs__header">
                    <ul>
                        <li><a class="js-tabs__title" href="#">Find Your nearest</a></li>
                        <li><a class="js-tabs__title" href="#"> Garage Location</a></li>
                    </ul>
                </div>
                <div class="row js-tabs__content">
                    <div class="col-md-12">




                        <div class="brator-makes-list">
                            @foreach ($districts as $distri)
                                <div class="brator-makes-list-single">
                                    <a href="district/{{ $distri['districtcode']}}">
                                        <span>{{ $distri['namedistrict'] }}</span>
                                        <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                            @endforeach

                        </div>

                    </div>
                    {{-- <div class="col-md-12">
                        <div class="brator-makes-list-view-more">
                            <button> <span><b>view more</b>
                                    <svg class="bi bi-chevron-down" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg></span>
                            </button>
                        </div>
                    </div> --}}
                </div>
               
            </div>
        </div>
    </div>
    <!-- Brator featured makes list end -->
    @include('components.footer')
    @include('components.homejs')
