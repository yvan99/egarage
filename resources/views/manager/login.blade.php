@include('components.homecss')

<body class="boxed_wrapper ltr bodygray">
    <!-- page-direction end -->

    <div class="container mt-5 mb-5 d-flex justify-content-center">

        <div class="card px-1 py-4 rounded-lg">

            <div class="card-body">

                <h3 class="information mt-2"> <b>Garage Portal</b> </h3>
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        @foreach ($errors->all() as $err)
                            <span class="icon"><i class="far fa-times-circle"></i></span>
                            {{ $err }} <br>
                        @endforeach
                    </div>
                @endif
                <div class="row">
                    <form action="{{ route('managerLogin') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input class="form-control" type="email" placeholder="Email ID" name="email"
                                            value="{{ old('email') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 mt-2">
                                <div class="form-group">

                                    <input class="form-control" type="password" name="password" id="password-field"
                                        placeholder="Password">
                                    <span toggle="#password-field"
                                        class="ml-3 fa fa-fw fa-eye field-icon toggle-password"></span>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-warning btn-block confirm-button shadow-lg mt-2" type="submit">Sign
                            In</button>
                </div>
                </form>
            </div>
        </div>

        <!-- Brator featured makes list end -->

        @include('components.homejs')
