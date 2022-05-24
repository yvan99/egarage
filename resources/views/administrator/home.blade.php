@include('components.dashcomp.dashCss')
{{-- @include('components.dashcomp.loader') --}}
@include('components.admin.header')
@include('components.admin.sidebar')
<!-- Main Content -->
<div class="hk-pg-wrapper">
    <!-- Container -->
    <div class="container-fluid mt-xl-60 mt-sm-30 mt-15">
        <!-- Row -->
        <div class="row" style="margin-top:90px">
            <div class="col-xl-12">
                <h3 class="mt-2 mb-3">Welcome onboard , Admin</h3>
                <div class="hk-row d-flex justify-content-center">

                    <div class="col-md-4 col-xl-3">
                        <div class="carte bg-c-yellow order-card">
                            <div class="carte-block">
                                <h6 class="m-b-20">Total Cars</h6>
                                <h2 class="text-left"><span
                                        class="m-2"></span>{{$cars}}</h2>
        
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xl-3">
                        <div class="carte bg-c-yellow order-card">
                            <div class="carte-block">
                                <h6 class="m-b-20">Total Mechanician</h6>
                                <h2 class="text-left"><span
                                        class="m-2"></span>{{$mechs}}</h2>
        
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xl-3">
                        <div class="carte bg-c-yellow order-card">
                            <div class="carte-block">
                                <h6 class="m-b-20">Total Garages</h6>
                                <h2 class="text-left"><span
                                        class="m-2"></span>{{$garages}}</h2>
        
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xl-3">
                        <div class="carte bg-c-yellow order-card">
                            <div class="carte-block">
                                <h6 class="m-b-20">Total Clients</h6>
                                <h2 class="text-left"><span
                                        class="m-2"></span>{{$clients}}</h2>
        
                            </div>
                        </div>
                    </div>



                    <div class="col-md-4 col-xl-3">
                        <div class="carte bg-c-yellow order-card">
                            <div class="carte-block">
                                <h6 class="m-b-20">Total Payments</h6>
                                <h2 class="text-left"><span
                                        class="m-2"></span>{{$payments}}</h2>
        
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xl-3">
                        <div class="carte bg-c-yellow order-card">
                            <div class="carte-block">
                                <h6 class="m-b-20">Total Fee</h6>
                                <h2 class="text-left"><span
                                        class="m-2"></span>{{$fees . 'RWF'}}</h2>
        
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xl-3">
                        <div class="carte bg-c-yellow order-card">
                            <div class="carte-block">
                                <h6 class="m-b-20">Total Requests</h6>
                                <h2 class="text-left"><span
                                        class="m-2"></span>{{$requests}}</h2>
        
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xl-3">
                        <div class="carte bg-c-yellow order-card">
                            <div class="carte-block">
                                <h6 class="m-b-20">Pending Requests</h6>
                                <h2 class="text-left"><span
                                        class="m-2"></span>{{$pending}}</h2>
        
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xl-3">
                        <div class="carte bg-c-yellow order-card">
                            <div class="carte-block">
                                <h6 class="m-b-20">Assigned requests</h6>
                                <h2 class="text-left"><span
                                        class="m-2"></span>{{$assigned}}</h2>
        
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xl-3">
                        <div class="carte bg-c-yellow order-card">
                            <div class="carte-block">
                                <h6 class="m-b-20">Successfully requests</h6>
                                <h2 class="text-left"><span
                                        class="m-2"></span>{{$success}}</h2>
        
                            </div>
                        </div>
                    </div>
                    

                </div>

            </div>
        </div>
        <!-- /Row -->
    </div>
    <!-- /Container -->


</div>
@include('components.dashcomp.dashJs')
