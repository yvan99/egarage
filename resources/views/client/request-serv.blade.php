@include('components.homecss')

<body class="boxed_wrapper ltr bodygray">
    <!-- page-direction end -->
    @include('components.header')
    <div class="container mt-5 mb-5 d-flex justify-content-center">
        <div class="card px-1 py-4 rounded-lg col-md-5">
            <div class="card-body">
                <h3 class="information mt-2">Request Garage service</h3>
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        @foreach ($errors->all() as $err)
                            <span class="icon"><i class="far fa-times-circle"></i></span>
                            {{ $err }} <br>
                        @endforeach
                    </div>
                @endif
                @if (session('status'))
                    <div class="alert alert-info alert-dismissable" role="alert">
                        <span class="icon"><i class="far fa-check-circle"></i></span>
                        {{ session('status') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger alert-dismissable" role="alert">
                        <span class="icon"><i class="far fa-check-circle"></i></span>
                        {{ session('error') }}
                    </div>
                @endif
                <div class="row">
                    <form action="{{url()->current()}}" method="POST" autocomplete="off">
                        @csrf
                        <div class="col-sm-12">
                            <div class="form-group">
                                <select name="carselect">
                                    <option selected disabled>Select your car</option>
                                    @foreach ($cars as $car)
                                        <option value="{{ $car->cr_id }}">{{ $car->cr_name }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Enter precise street number"
                                    name="street" value="{{ old('street') }}">
                            </div>
                        </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="input-group">
                                <textarea name="servicedescription" id="" cols="30" class="form-control" rows="10"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="btn btn-dark text-warning btn-block confirm-button shadow-lg mt-2" type="submit">Save and
                    continue</button>
            </div>
            </form>
        </div>
    </div>

    <!-- Brator featured makes list end -->
    @include('components.footer')
    @include('components.homejs')
