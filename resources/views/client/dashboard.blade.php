@include('components.homecss')

<body class="boxed_wrapper ltr bodygray">
    <!-- page-direction end -->
    @include('components.header')
    <div class="container mt-5 mb-5 d-flex justify-content-center">


        <div class="row d-flex justify-content-center">
            <h2 class="pb-3">Welcome onboard , {{ Auth::user()->cli_fullnames }}</h2>

            @if (session('status'))
                <div class="alert alert-success alert-dismissable" role="alert">
                    {{ session('status') }}

                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger alert-dismissable" role="alert">
                    <span class="icon"><i class="far fa-check-circle"></i></span>
                    {{ session('error') }}
                </div>
            @endif

            <div class="col-md-4 col-xl-3">
                <div class="carte bg-c-dark order-card">
                    <div class="carte-block">
                        <h6 class="m-b-20">Total cars</h6>
                        <h2 class="text-right"><i class="fa fa-car f-left"></i><span
                                class="m-5">{{ $cars }}</span></h2>

                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xl-3">
                <div class="carte bg-c-yellow order-card">
                    <div class="carte-block">
                        <h6 class="m-b-20">Total Payment fee</h6>
                        <h2 class="text-left"><span
                                class="m-2">{{$fees . 'RWF'}}</span></h2>

                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xl-3">
                <div class="carte bg-c-dark order-card">
                    <div class="carte-block">
                        <h6 class="m-b-20">Total service requests</h6>
                        <h2 class="text-right"><i class="fa fa-car f-left"></i><span
                                class="m-5">{{ $requests }}</span></h2>

                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xl-3">
                <div class="carte bg-c-yellow order-card">
                    <div class="carte-block">
                        <h6 class="m-b-20">Pending requests</h6>
                        <h2 class="text-right"><i class="fa fa-credit-carte f-left"></i><span
                                class="m-5">{{ $pending }}</span></h2>

                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xl-3">
                <div class="carte bg-c-dark order-card">
                    <div class="carte-block">
                        <h6 class="m-b-20">Assigned requests</h6>
                        <h2 class="text-right"><i class="fa fa-credit-carte f-left"></i><span
                                class="m-5">{{ $assigned }}</span></h2>

                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xl-3">
                <div class="carte bg-c-yellow order-card">
                    <div class="carte-block">
                        <h6 class="m-b-20">Completed requests</h6>
                        <h2 class="text-right"><i class="fa fa-credit-carte f-left"></i><span
                                class="m-5">{{ $success }}</span></h2>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Brator featured makes list end -->
    @include('components.footer')
    @include('components.homejs')
