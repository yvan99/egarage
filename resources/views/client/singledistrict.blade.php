@include('components.homecss')

<body class="boxed_wrapper ltr">
    <!-- page-direction end -->

    @include('components.header')
    <div class="container" style="margin-top:50px;">
        <div class="col-md-12">
            <div class="brator-section-header">
                <div class="brator-section-header-title">
                    <h2>Browse Garages Located In @foreach ($garages as $garage)
                            {{ $garage->namedistrict }}
                        @endforeach district </h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($garages as $garage)
                <div class="col-md-3">
                    <div class="card-sl">
                        <div class="card-image">
                            <img
                                src="https://images.pexels.com/photos/1149831/pexels-photo-1149831.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" />
                        </div>

                        {{-- <a class="card-action" href="#"><i class="fa fa-heart"></i></a> --}}
                        <div class="card-heading">
                            {{ $garage->garg_name }}
                        </div>
                        <div class="card-text">
                            {{ $garage->garg_address }}
                        </div>
                        <div class="card-text">
                            {{ $garage->namedistrict }}
                        </div>
                        <a href="#" class="card-button"> Request service</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Brator categories list three area end -->

    <div class="brator-map-area design-one">
        <div class="container-xxxl container-xxl container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brator-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d61014.67256346926!2d-95.65840653001366!3d37.01353951414934!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87b7847b8767ef73%3A0xc7e938f8e1878945!2sCoffeyville%20Regional%20Med%20Center!5e0!3m2!1sen!2sbd!4v1641536169539!5m2!1sen!2sbd"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header one end-->
    @include('components.footer')
    @include('components.homejs')
