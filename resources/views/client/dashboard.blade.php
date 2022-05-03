@include('components.homecss')

<body class="boxed_wrapper ltr bodygray">
    <!-- page-direction end -->
    @include('components.header')
    <div class="container mt-5 mb-5 d-flex justify-content-center">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

            <div class="row">
                <h2 class="pb-3">Welcome onboard , {{Auth::user()->cli_fullnames}}</h2>
                <div class="col-md-4 col-xl-3">
                    <div class="carte bg-c-dark order-card">
                        <div class="carte-block">
                            <h6 class="m-b-20">Total cars</h6>
                            <h2 class="text-right"><i class="fa fa-car f-left"></i><span class="m-5">N/A</span></h2>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xl-3">
                    <div class="carte bg-c-yellow order-card">
                        <div class="carte-block">
                            <h6 class="m-b-20">Lent Cars</h6>
                            <h2 class="text-right"><i class="fa fa-car f-left"></i><span class="m-5">N/A</span></h2>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xl-3">
                    <div class="carte bg-c-dark order-card">
                        <div class="carte-block">
                            <h6 class="m-b-20">Borrowed cars</h6>
                            <h2 class="text-right"><i class="fa fa-car f-left"></i><span class="m-5">N/A</span></h2>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xl-3">
                    <div class="carte bg-c-yellow order-card">
                        <div class="carte-block">
                            <h6 class="m-b-20">Total Service requests</h6>
                            <h2 class="text-right"><i class="fa fa-credit-carte f-left"></i><span class="m-5">N/A</span></h2>
                            
                        </div>
                    </div>
                </div>
            </div>
      
    </div>

    <!-- Brator featured makes list end -->
    @include('components.footer')
    @include('components.homejs')
