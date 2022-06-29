@include('components.dashcomp.dashCss')
{{-- @include('components.dashcomp.loader') --}}
@include('components.admin.header')
@include('components.admin.sidebar')
<div class="hk-pg-wrapper mt-xl-70 mt-sm-10 mt-10">
    <!-- Container -->
    <div class="container-fluid">
        <section class="hk-sec-wrapper">
            <h5 class="hk-sec-title mb-5">Cars List</h5>
            @if (session('status'))
            <div class="alert alert-info alert-dismissable" role="alert">
                <span class="icon"><i class="far fa-check-circle"></i></span>
                {{ session('status') }}
            </div>
        @endif
            <div class="row">
                <div class="col-sm mt-50">
                    <div class="table-wrap">
                        <table id="datable_1" class="table">
                            <thead class="thead-dark">
                                <th>#</th>
                                <th>Photo</th>
                                <th>Code</th>
                                <th>car name</th>
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
            </div>

        </section>
    </div>
</div>

@include('components.dashcomp.dashJs')
