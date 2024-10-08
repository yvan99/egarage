@include('components.dashcomp.dashCss')
{{-- @include('components.dashcomp.loader') --}}
@include('components.admin.header')
@include('components.admin.sidebar')
<div class="hk-pg-wrapper mt-xl-70 mt-sm-10 mt-10">
    <!-- Container -->
    <div class="container-fluid">
        <section class="hk-sec-wrapper">
            <h5 class="hk-sec-title mb-5">Garage Applications requests</h5>

            @if (session('status'))
            <div class="alert alert-info alert-dismissable" role="alert">
                <span class="icon"><i class="far fa-check-circle"></i></span>
                {{ session('status') }}
            </div>
        @endif
            <div class="row">
                <div class="col-sm mt-50">
                    <div class="table-wrap">
                        <table id="example" class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Garage Name</th>
                                    <th>Garage owner</th>
                                    <th>Owner Phone</th>
                                    {{-- <th>TIN number</th> --}}
                                    <th>Garage Address</th>
                                    <th>Service</th>
                                    <th>Sector Doc</th>
                                    <th>RDB doc</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pendings as $item)
                                    <tr>
                                        <td>{{ $item->garg_name }}</td>
                                        <td>{{ $item->mana_fullnames }}</td>
                                        <td>{{ $item->mana_phone }}</td>
                                        {{-- <td>{{ $item->garg_tinNumber }}</td> --}}
                                        <td>{{ $item->garg_address }}</td>
                                        <td>{{ $item->serv_name }}</td>
                                        <td> <a href="downloadsector/{{$item->garg_sectorReg}}" data-toggle="tooltip-success" data-placement="top" title="Download sector document"><img src="../../homepage/images/icons/cloud-computing.png" alt=""></a> </td>
                                        <td><a href="downloadrdb/{{$item->garg_rdbReg}}" data-toggle="tooltip-info" data-placement="top" title="Download Rdb document"><img src="../../homepage/images/icons/cloud-computing.png" alt=""></a></td>
                                        <td colspan="2" width="300">
                                            <a href="confirmgarage/{{$item->garg_id}}" class="btn btn-sm btn-warning">Confirm</a>
                                            <a href="rejectgarage/{{$item->garg_id}}" class="btn btn-sm btn-danger">Reject</a>
                                        
                                        </td>
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
