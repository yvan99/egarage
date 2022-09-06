@include('components.dashcomp.dashCss')
{{-- @include('components.dashcomp.loader') --}}
@include('components.admin.header')
@include('components.admin.sidebar')
<div class="hk-pg-wrapper mt-xl-70 mt-sm-10 mt-10">
    <!-- Container -->
    <div class="container-fluid">
        <section class="hk-sec-wrapper">
            <h5 class="hk-sec-title mb-5">Services Payment history</h5>
            <div class="row">
                <div class="col-sm mt-50">
                    <div class="table-wrap">
                        <table id="example" class="table">
                            <thead class="thead-dark">
                                <th>#</th>
                                <th>Flutterwave Refid</th>
                                <th>Pay amount</th>
                                <th>pay gateway</th>
                                <th>client names</th>
                                <th>telephone</th>
                                <th>email</th>
                                <th>Date</th>
                            </thead>
                            <tbody>
                                @foreach ($payments as $item)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{ $item->pay_flutterid }}</td>
                                        <td>{{ $item->pay_amount }}</td>
                                        <td>{{ $item->pay_gateway }}</td>
                                        <td>{{ $item->cli_fullnames }}</td>
                                        <td>{{ $item->cli_phone }}</td>
                                        <td>{{ $item->cli_email }}</td>
                                        <td>{{ $item->pay_date }}</td>
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
