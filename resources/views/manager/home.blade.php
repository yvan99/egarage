@include('components.dashcomp.dashCss')
{{-- @include('components.dashcomp.loader') --}}
@include('components.manager.header')
@include('components.manager.sidebar')
<!-- Main Content -->
<div class="hk-pg-wrapper">
    <!-- Container -->
    <div class="container-fluid mt-100">
        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <h3 class="mt-2 mb-3">Welcome onboard , {{ Auth::user()->mana_fullnames }}</h3>
                <div class="hk-row d-flex justify-content-center mt-5">

                    <div class="col-md-4 col-xl-3">
                        <div class="carte bg-c-yellow order-card">
                            <div class="carte-block">
                                <h6 class="m-b-20">Total Mechanician</h6>
                                <h2 class="text-left"><span
                                        class="m-2"></span>{{$mechanician}}</h2>
        
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
                                <h6 class="m-b-20">Pending requests</h6>
                                <h2 class="text-left"><span
                                        class="m-2"></span>{{$pending}}</h2>
        
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-3">
                        <div class="carte bg-c-yellow order-card">
                            <div class="carte-block">
                                <h6 class="m-b-20">Assigned Requests</h6>
                                <h2 class="text-left"><span
                                        class="m-2"></span>{{$assigned}}</h2>
        
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-3">
                        <div class="carte bg-c-yellow order-card">
                            <div class="carte-block">
                                <h6 class="m-b-20">Successful services</h6>
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
