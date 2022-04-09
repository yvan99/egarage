@include('components.homecss')

<body class="boxed_wrapper ltr bodygray">
    <!-- page-direction end -->

    <!-- Header one start-->
    <div class="brator-header-top-bar-area design-one dark-bg">
        <div class="container-xxxl container-xxl container">

        </div>
    </div>

    <div class="container mt-5 mb-5 d-flex justify-content-center">

        <div class="card px-1 py-4 rounded-lg">

            <div class="card-body">
                <a href="/" class="btn btn-sm btn-warning offset-lg-7">
                    < Back home</a>
                        <h3 class="information mt-2">Sign up for an account</h3>

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
                            <form action="{{ route('clientsignup') }}" method="POST">
                                @csrf
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Name" name="names"
                                            value="{{ old('names') }}">
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="input-group"> <input class="form-control" type="text"
                                            placeholder="Mobile" name="mobilee" value="{{ old('mobilee') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input class="form-control" type="email" placeholder="Email ID" name="email"
                                            value="{{ old('email') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input class="form-control" type="password" name="password"
                                            id="password-input" placeholder="Password">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-dark text-warning btn-block confirm-button shadow-lg mt-2"
                            type="submit">Create
                            Account</button>
            </div>
            </form>
        </div>
    </div>

    <!-- Brator featured makes list end -->
    @include('components.footer')
    @include('components.homejs')
