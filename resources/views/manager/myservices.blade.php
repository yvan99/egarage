@include('components.dashcomp.dashCss')
{{-- @include('components.dashcomp.loader') --}}
@include('components.manager.header')
@include('components.manager.sidebar')
<div class="hk-pg-wrapper mt-xl-70 mt-sm-10 mt-10">
    <!-- Container -->
    <div class="container-fluid">
        <section class="hk-sec-wrapper">
            <h5 class="hk-sec-title mb-5">Garage service request history</h5>
            <div class="row">
                <div class="col-sm mt-50">
                    <div class="table-wrap">
                        <table id="datable_1" class="table">
                            <thead class="thead-dark">
                                <th>Client</th>
                                <th>Service Id</th>
                                <th>Car</th>
                                <th>Garage</th>
                                <th>Request date</th>
                                <th>Action</th>

                            </thead>
                            <tbody>
                                @foreach ($requests as $requested)
                                    <tr>
                                        <td>{{ $requested->cli_fullnames }}</td>
                                        <td>{{ $requested->appserv_code }}</td>
                                        <td>{{ $requested->cr_name }}</td>
                                        <td>{{ $requested->garg_name }}</td>
                                        <td>{{ $requested->appserv_date }}</td>
                                        <td> <button data-target="#exampleModalCenter" data-toggle="modal"
                                                data-id={{ $requested->appserv_id }}
                                                class="btn btn-sm btn-warning text-dark feed-id">Assign
                                                mechanics</button> </td>

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
                                    <form method="get">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-6 pt-3">
                                                    <label for="">Enter first name</label>
                                                    <input id="feed_id" name="cid" type="text" value="" />

                                                </div>

                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button class="btn btn-warning text-dark" type="submit">Save
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
