@include('components.homecss')

<body class="boxed_wrapper ltr bodygray">
    <!-- page-direction end -->
    @include('components.header')

    
    @if ($errors->any())
    <div class="alert alert-danger" role="alert">
        @foreach ($errors->all() as $err)
            <span class="icon"><i class="far fa-times-circle"></i></span>
            {{ $err }} <br>
        @endforeach
    </div>
@endif
@if (session('status'))
    <div class="alert alert-status alert-dismissable" role="alert">
        {{toastr()->success(session('status'))}}
        
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger alert-dismissable" role="alert">
        <span class="icon"><i class="far fa-check-circle"></i></span>
        {{ session('error') }}
    </div>
@endif
    <div class="container mt-5 mb-5 d-flex justify-content-center">
        <div class="card px-1 py-4 rounded-lg col-md-5">
            <div class="card-body">
                <h5 class="information mt-2">
                    <img src="homepage/images/icons/momo.jpg" style="width: 80px;border-radius:8px" alt="">
                    
                    Step -2 : Service fee payment</h5>

                    <h6 class="offset-lg-2 mt-lg-3 text-danger">Application payment fee is 200 Rwf</h6>
                <div class="row">
                    <form action="{{ route('pay') }}" method="POST" autocomplete="off" class="mt-lg-3">
                        @csrf

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Mobile Money payment phone number</label>
                                <input class="form-control" style="font-size:28px" type="text" placeholder="Enter your mtn momo account"
                                    name="phone" value="{{Auth::user()->cli_phone}}">
                                    <input type="hidden" class="form-control" value="{{session('serviceCode')}}" name="servicerefid">
                            </div>
                        </div>

                        <div class="col-sm-12 mt-lg-3">
                            <div class="form-group">
                            <input type="checkbox" name="agree">
                            <span>I aggree to RGA policy</span> 
                            </div>
                        </div>
                </div>


                <button class="btn btn-warning text-dark btn-block confirm-button shadow-lg mt-2" type="submit">Aggree & Pay <i class="fa fa-arrow-right"></i> </button>
            </div>
            </form>
        </div>
    </div>

    <!-- Brator featured makes list end -->
    @include('components.footer')
    @include('components.homejs')
