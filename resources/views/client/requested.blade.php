@include('components.homecss')

<body class="boxed_wrapper ltr bodygray">
    <!-- page-direction end -->
    @include('components.header')

    <div class="container mt-5 mb-5 d-flex justify-content-center bg-light p-5">
        <div class="col-12">
            <h2 class="mt-3">Services request list
            </h2>

            <table class="table table-responsive mt-5" id="myTable">
                <thead>
                    <th>Service Id</th>
                    <th>Car</th>
                    <th>Garage</th>
                    <th>Address</th>
             
                </thead>
                <tbody>
                    @foreach ($requests as $requested)
                    <tr>
                        <td>{{$requested->appserv_code}}</td>
                        <td>{{$requested->cr_name}}</td>
                        <td>{{$requested->garg_name}}</td>
                        <td>{{$requested->appserv_address}}</td>
                    
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

    <!-- Brator featured makes list end -->
    @include('components.footer')
    @include('components.homejs')
