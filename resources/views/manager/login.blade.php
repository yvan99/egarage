@include('components.dashcomp.dashCss')
{{-- @include('components.dashcomp.loader') --}}
<!-- HK Wrapper -->
<div class="hk-wrapper">

    <!-- Main Content -->
    <div class="hk-pg-wrapper hk-auth-wrapper">

        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 pa-0">
                    <div class="auth-form-wrap pt-xl-0 pt-70">
                        <div class="auth-form w-xl-30 w-lg-55 w-sm-75 w-100">
                            {{-- <a class="auth-brand text-center d-block mb-20" href="#">
                                <img class="brand-img" src="dist/img/logo-light.png" alt="brand"/>
                            </a> --}}
                            <form method="post" action="{{ route('managerLogin') }}">
                                @csrf
                                <h3 class="display-5 text-center mb-10">Garage Manager Portal</h3>
                                <p class="text-center mb-30">Sign in to your account</p>
                                @if ($errors->any())
                                    <div class="alert alert-danger" role="alert">
                                        @foreach ($errors->all() as $err)
                                            
                                            {{ $err }} <br>
                                        @endforeach
                                    </div>
                                @endif
                                <div class="form-group">
                                    <input class="form-control" placeholder="Email" type="email" name="email" value="{{ old('email') }}">
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input class="form-control" type="password" name="password" placeholder="Password">

                                    </div>
                                </div>
                                <div class="custom-control custom-checkbox mb-25">
                                    <input class="custom-control-input" id="same-address" type="checkbox" checked>
                                    <label class="custom-control-label font-14" for="same-address">Keep me logged
                                        in</label>
                                </div>
                                <button class="btn btn-dark btn-block" type="submit">Login</button>
                                <p class="text-center mt-3">Do have an account yet? <a href="garage-apply">Sign Up</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Content -->

</div>
<!-- /HK Wrapper -->
@include('components.dashcomp.dashJs')
