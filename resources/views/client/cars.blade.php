@include('components.homecss')

<body class="boxed_wrapper ltr bodygray">
    <!-- page-direction end -->
    @include('components.header')

    <div class="container mt-5 mb-5 d-flex justify-content-center bg-light p-5">
        <div class="col-12">

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
            <h2 class="mt-3">My cars List <a data-toggle="modal" data-target="#exampleModal"
                    class="btn btn-sm btn-warning"> Add new car</a>
            </h2>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Register New Car</h5>
                            <button type="button" class="close btn btn-danger btn-sm" data-dismiss="modal"
                                aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form action="{{ route('createcar') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                              
                                    <div class="col-6">
                                        <input type="text" name="plate" placeholder="Plate number"
                                            class="form-control" value="{{ old('plate') }}">
                                    </div>
                                    <div class="col-6">
                                        <select name="model" class="form-control" value="{{ old('model') }}">
                                            <option selected disabled>select car Brand</option>
                                            <option>Hyundai</option>
                                            <option>Toyota</option>
                                            <option>Mercedes benz</option>
                                            <option>Hyundai</option>
                                            <option>kia</option>
                                            <option>volkswagen</option>
                                            <option>BMW</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <input type="hidden" name="client" value="{{Auth::user()->cli_id}}">

                                        <input type="text" name="carname" placeholder="Car model" class="form-control"
                                            value="{{ old('carname') }}">
                                    </div>
                                    <div class="col-6">
                                        <select name="enginetype" class="form-control"
                                            value="{{ old('enginetype') }}">
                                            <option selected disabled>Gear type</option>
                                            <option>Manual</option>
                                            <option>Automatic</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="engmodel" placeholder="Engine model"
                                            class="form-control" value="{{ old('engmodel') }}">
                                    </div>
                                    <div class="col-6">
                                        <select name="cartype" class="form-control">
                                            <option selected disabled>Fuel type</option>
                                            <option>Electric</option>
                                            <option>Diesel</option>
                                            <option>Petrol</option>
                                            <option>Hybrid</option>
                                        </select>
                                    </div>
                                    <div class="col-6">

                                        <input type="text" name="color" class="form-control" placeholder="Car Color"
                                            value="{{ old('color') }}">
                                    </div>

                                    <div class="col-6">

                                        <input type="text" name="year" class="form-control" placeholder="year of manufacturing"
                                            value="{{ old('year') }}">
                                    </div>
                                    <div class="col-8">
                                        <input type="file" name="carphoto" class="form-control">
                                    </div>
                                    <div class="col-12">
                                        <textarea name="details" class="form-control" value="{{ old('details') }}" cols="30" rows="20"></textarea>
                                    </div>
                                </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-dark text-warning">Register car</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <table class="table table-responsive mt-5" id="myTable">
                <thead>
                    <th></th>
                    <th>Photo</th>
                    <th>Code</th>
                    <th>Name</th>
                    <th>plate No</th>
                    <th>brand</th>
                    <th>Engine</th>
                    <th>Engine model</th>
                    <th>Car type</th>
                    <th>color</th>
                    <th>year</th>

                </thead>
                <tbody>
                    @foreach ($cars as $car)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td> <img src="carphotos/{{$car->cr_picture}}" style="width: 40px" alt=""></td>
                        <td>{{$car->cr_code}}</td>
                        <td>{{$car->cr_name}}</td>
                        <td>{{$car->cr_plateNo}}</td>
                        <td>{{$car->cr_brand}}</td>
                        <td>{{$car->cr_enginetype}}</td>
                        <td>{{$car->cr_enginemodel}}</td>
                        <td>{{$car->cr_type}}</td>
                        <td>{{$car->cr_color}}</td>
                        <td>{{$car->cr_year_manufact}}</td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

    <!-- Brator featured makes list end -->
    @include('components.footer')
    @include('components.homejs')
