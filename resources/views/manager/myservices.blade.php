@include('components.dashcomp.dashCss')
{{-- @include('components.dashcomp.loader') --}}
@include('components.manager.header')
@include('components.manager.sidebar')
<div class="hk-pg-wrapper mt-xl-70 mt-sm-10 mt-10">
    <!-- Container -->
    <div class="container-fluid">
        <section class="hk-sec-wrapper">
            <h5 class="hk-sec-title mb-5">Garage service request history</h5>
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
            <div class="row">
                <div class="col-sm mt-50">
                    <div class="table-wrap">
                        <table id="datable_1" class="table">
                            <thead class="thead-dark">
                                <th>$</th>
                                <th>Client</th>
                                <th>Service Id</th>
                                <th>Car</th>
                                <th>Plate N <sup>0</sup> </th>
                                <th>Gear type</th>
                                <th>Fuel type</th>
                                <th>Year Manufa-</th>
                                <th>Request date</th>
                                <th>Action</th>

                            </thead>
                            <tbody>
                                @foreach ($requests as $requested)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{ $requested->cli_fullnames }}</td>
                                        <td>{{ $requested->appserv_code }}</td>
                                        <td>{{ $requested->cr_name }}</td>
                                        <td>{{ $requested->cr_plateNo }}</td>
                                        <td>{{ $requested->cr_enginetype }}</td>
                                        <td>{{ $requested->cr_type }}</td>
                                        <td>{{ $requested->cr_year_manufact }}</td>
                                        <td>{{ $requested->appserv_date }}</td>
                                        <td>
                                            @if ($requested->appserv_status == 2)
                                                <button class="btn btn-sm btn-success">Successful</button>
                                            @elseif($requested->appserv_status == 1)
                                                <button class="btn btn-sm btn-primary">Assigned</button>
                                            @else
                                                <button class="btn btn-sm btn-secondary feed-id"
                                                    data-target="#exampleModalCenter" data-toggle="modal"
                                                    data-id={{ $requested->appserv_id }}>Assign Mechanician</button>
                                            @endif
                                        </td>


                                    </tr>
                                @endforeach
                            </tbody>

                        </table>

                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenter" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Assign This request to mechanician</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form method="post" action="{{ route('assign-mechanic') }}">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-12 pt-3">
                                                    <input id="feed_id" name="cid" type="hidden" value="" />
                                                    <label for="">Choose your garage mechanician</label>
                                                    <select class="form-control" name="mechs">
                                                        <option selected disabled>Select mechanician</option>
                                                        @foreach ($mechanics as $item)
                                                            <option style="text-transform: capitalize"
                                                                value="{{ $item->mech_id }}">
                                                                {{ $item->mech_firstName . ' ' . $item->mech_lastName }}
                                                            </option>
                                                        @endforeach
                                                    </select>

                                                </div>

                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger"
                                                data-dismiss="modal">Close</button>
                                            <button class="btn btn-dark text-warning" type="submit">Assign
                                                mechanic</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
</div>

@include('components.dashcomp.dashJs')
<script type='text/javascript'>
    $(document).ready(function() {
        $('body').on('click', '.feed-id', function() {
            document.getElementById("feed_id").value = $(this).attr('data-id');
            //console.log($(this).attr('data-id'));
        });
    });
</script>
