@include('components.homecss')

<body class="boxed_wrapper ltr bodygray">
    <!-- page-direction end -->
    @include('components.header')
    <div class="container mt-5 mb-5 d-flex justify-content-center col-12">

        <div class="card px-1 py-4 rounded-lg col-md-8">

            <div class="card-body">
                <a href="/" class="btn btn-sm btn-warning offset-lg-10">
                    < Back home</a>
                        <h3 class="information mt-2">Personal Information</h3>

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

                        <form method="POST" enctype="multipart/form-data" action="{{ route('garagecreate') }}" >
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Name" name="names"
                                            value="{{ old('names') }}">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="input-group"> <input class="form-control" type="text"
                                                placeholder="Telephone number" name="mobilee"
                                                value="{{ old('mobilee') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input class="form-control" type="email" placeholder="Email ID"
                                                name="email" value="{{ old('email') }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input class="form-control" type="password" name="password"
                                                id="password-input" placeholder="Password">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3 class="mt-5">Garage Information</h3>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label>Garage street address
                                    </label>
                                    <div class="form-group">
                                        <div class="input-group"> <input class="form-control" id="searchTextField" type="text"
                                                placeholder="Enter Garage location" name="rgalocale"
                                                value="{{ old('rgalocale') }}">
                                        </div>
                                    </div>
                                </div> 

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Garage name"
                                            name="ganame" value="{{ old('ganame') }}">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="input-group"> <input class="form-control" type="text"
                                                placeholder="Company TIN number" name="gatin"
                                                value="{{ old('gatin') }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <select name="gaservice" class="form-control">
                                                <option selected disabled>Select garage service</option>
                                                @foreach ($services as $servi)
                                                    <option value="{{ $servi['serv_id'] }}">{{ $servi['serv_name'] }}
                                                    </option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    
                                    <div class="form-group">
                                        <div class="input-group">

                                            <input type="file" name="garagefile" accept=".pdf,.jpg,.jpeg,.png,.docx" class="form-control">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <label for="">Sector Approval document</label>
                                    <div class="form-group">
                                        <div class="input-group">

                                            <input type="file" name="secfile" accept=".pdf,.jpg,.jpeg,.png,.docx" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <label for="">RDB document</label>
                                    <div class="form-group">
                                        <div class="input-group">

                                            <input type="file" name="rdbfile" accept=".pdf,.jpg,.jpeg,.png,.docx" class="form-control">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <button class="btn btn-dark text-warning btn-block confirm-button shadow-lg mt-2"
                                type="submit">Confirm registration</button>
            </div>
            </form>
        </div>
    </div>

    <!-- Brator featured makes list end -->
    @include('components.footer')
    @include('components.homejs')
