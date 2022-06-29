@include('components.dashcomp.dashCss')
{{-- @include('components.dashcomp.loader') --}}
@include('components.admin.header')
@include('components.admin.sidebar')
<div class="hk-pg-wrapper mt-xl-70 mt-sm-10 mt-10">
    <!-- Container -->
    <div class="container-fluid">
        <section class="hk-sec-wrapper">
            <h5 class="hk-sec-title mb-5">Approved Garages List</h5>
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
                                <tr>
                                    <th></th>
                                    <th>Garage Name</th>
                                    <th>Garage owner</th>
                                    <th>Telephone</th>
                                    <th>TIN n <sup>0</sup> </th>
                                    <th>Address</th>
                                    <th>Service</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($approved as $item)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{ $item->garg_name }}</td>
                                        <td>{{ $item->mana_fullnames }}</td>
                                        <td>{{ $item->mana_phone }}</td>
                                        <td>{{ $item->garg_tinNumber }}</td>
                                        <td>{{ $item->garg_address }}</td>
                                        <td>{{ $item->serv_name }}</td>

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
