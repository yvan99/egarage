@include('components.dashcomp.dashCss')
{{-- @include('components.dashcomp.loader') --}}
@include('components.admin.header')
@include('components.admin.sidebar')
<div class="hk-pg-wrapper mt-xl-70 mt-sm-10 mt-10">
    <!-- Container -->
    <div class="container-fluid">
        <section class="hk-sec-wrapper">
            <h5 class="hk-sec-title mb-5">Services Requests history</h5>
            <div class="row">
                <div class="col-sm mt-50">
                    <div class="table-wrap">
                        <table id="datable_1" class="table">
                            <thead class="thead-dark">
                                <th>Client</th>
                                <th>Service Id</th>
                                <th>Car</th>
                                <th>Garage</th>
                                <th>Address</th>
                         
                            </thead>
                            <tbody>
                                @foreach ($requests as $requested)
                                <tr>
                                    <td>{{$requested->cli_fullnames}}</td>
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
            </div>

        </section>
    </div>
</div>

@include('components.dashcomp.dashJs')
